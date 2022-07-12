<?php namespace App\Modules\Report\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\M_orders;
use App\Http\Model\User;
use Auth;

use Carbon\Carbon;
 

class ReportController extends Controller {
    public function index(Request $request){
        $this->authorize('report_view');
       
        $day = Carbon::now()->day ;
        $month = Carbon::now()->month ;
        $year = Carbon::now()->year ;
    
        $tinh_id = Auth::user()->tinh_id;
        $huyen_id = Auth::user()->huyen_id;
        $tinh_id = Auth::user()->tinh_id;
        $truong_id = Auth::user()->truong_id;
        
        
        $report = M_orders::orderby('id','desc');
        // $price_total= $report->price_total;
        
        if($request->status){
            $report = $report->where('status',$request->status);
        }else{
            // $report = $report->whereIn('status',['received','done']);
        }
        if($request->type){
            $report = $report->where('type',$request->type);
        }else{
            $report = $report->whereIn('type',['thue','mua'])->whereIn('status',['done','returned']);
        }

        if($request->search){
            $report = $report->where($request-> search_feild,'like',"%$request->search%");
        }

        
        if($request -> starTime){
            $from =  Carbon::createFromFormat('d-m-Y',$request -> starTime)->format('Y-m-d');
            if($request -> endTime){
                $to =  Carbon::createFromFormat('d-m-Y',$request -> endTime)->addDays(1)->format('Y-m-d');
            }else{
                $to = Carbon::now()->addDays(1);
            }
            $report = $report->whereBetween('created_at', [$from, $to]);
        }

        
        // so dang nhap
        if(Auth::user()->user_type_id == 2){
            $report = $report->where('tinh_id', $tinh_id);
        }
         //  neu phong dang nhap
        if(Auth::user()->user_type_id == 4){
            $report = $report->where('tinh_id', $tinh_id)->where('huyen_id', $huyen_id);
        }
        //  neu truong dang nhap
        if(Auth::user()->user_type_id == 5){
            $report = $report->where('tinh_id', $tinh_id)->where('huyen_id', $huyen_id)->where('truong_id',$truong_id);
        }

        // $report = fill(array(''=>))
        $report = $report->paginate(20);

   
		return view('Report::index',['title'=>'Báo cáo', 'report'=>$report]);
    }
    // sở giáo dục 
    public function get_report_user_sgd(Request $request){
        $this->authorize('report_view');
        $user_list = User::where('user_type_id',2)->where('user_type_id','!=',1)->paginate(50);
        return view('Report::report_user_sgd',['title'=>'Báo cáo bộ giáo dục', 'user_list'=>$user_list,]);
    }
     // giám đốc
     public function get_report_user_gd(Request $request){
        $this->authorize('report_view');
        $user_list = User::where('user_type_id',2)->where('user_type_id','!=',1)->paginate(50);
        return view('Report::report_user_sgd',['title'=>'Báo cáo bộ giáo dục', 'user_list'=>$user_list,]);
    }
    // phòng giáo dục 
    public function get_report_user_pgd(Request $request){
        $this->authorize('report_view');
        $user_list = User::where('user_type_id',4)->where('user_type_id','!=',1)->paginate(50);

        return view('Report::report_user_pgd',['title'=>'Báo cáo bộ giáo dục', 'user_list'=>$user_list,]);
    }
       // phòng pgd
       public function get_report_user_phgd(Request $request){
        $this->authorize('report_view');
        $user_list = User::where('user_type_id',4)->where('user_type_id','!=',1)->paginate(50);

        return view('Report::report_user_pgd',['title'=>'Báo cáo bộ giáo dục', 'user_list'=>$user_list,]);
    }
     // trường 
     public function get_report_user_truongphong(Request $request){
        $this->authorize('report_view');
        $user_list = User::where('user_type_id',5)->where('user_type_id','!=',1)->paginate(50);

        return view('Report::report_user_truong',['title'=>'Báo cáo bộ giáo dục', 'user_list'=>$user_list,]);
    }
    // trường 
    public function get_report_user_truong(Request $request){
        $this->authorize('report_view');
        $user_list = User::where('user_type_id',5)->where('user_type_id','!=',1)->paginate(50);

        return view('Report::report_user_truong',['title'=>'Báo cáo bộ giáo dục', 'user_list'=>$user_list,]);
    }
    // giáo viên
    public function get_report_user_gv(Request $request){
        $this->authorize('report_view');
        $user_list = User::where('user_type_id',6)->where('user_type_id','!=',1)->paginate(50);

        return view('Report::report_user_gv',['title'=>'Báo cáo bộ giáo dục', 'user_list'=>$user_list,]);
    }
    // nguoi dung 

    public function get_report_user(Request $request){
        $this->authorize('report_view');
        $user_list = User::where('user_type_id','35')->paginate();

        return view('Report::report_user',['title'=>'Báo cáo thành viên', 'user_list'=>$user_list,]);
    }

 
}
