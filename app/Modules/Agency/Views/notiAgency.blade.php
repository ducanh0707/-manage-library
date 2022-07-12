@extends('V_backend.index')
@section('content')
    <div class="content-wrapper">

    @include('V_backend/alert')
    <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <div class="row">
       
        <div class="col-md-12 mt-3">
          <div class="box">
            <div class="box-header">
               <h3 class="box-title">Danh sách thông báo</h3>
            </div>
            <div class="box-body table-responsive no-padding">
      
                <table class="table table-hover">
                 <tr>
                        <th>Tiêu đề</th>
                        <th class="text-center">Ngày</th>
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                    </tr>
                    @if(count($post_list) != 0)
                        @foreach($post_list as $key => $val)
                            <tr>
                         
                                <!-- cot tieu de -->
                                <td class="">
                                    <a href="{{ asset('agency/noti/'.$val->id)}}">
                                        {{$val->title}}
                                    </a>
                                </td>
                                <!-- cot ngay dang  -->
                                <td class="text-center">
                                    <?php 
                                    $date = date_create($val -> created_at);
                                    echo date_format($date,'d/m/Y').'<br />';
                                    echo date_format($date,'H:i:s');
                                ?>
                                </td>
                                <td class="text-center">
                                        <a href="{{ asset('agency/noti/'.$val->id)}}">
                                            Xem
                                        </a>
                                </td>
                                <td class="text-center">
                                    @if($val->view == 1)
                                        Đã xem
                                    @endif
                                </td>
                                
                            </tr>
                        @endforeach
                      @else
                      <tr>
                          <td colspan="9" class="text-center">
                              <h6>Không có bài viết đủ điều kiện lọc</h6>
                          </td>
                      </tr>
                      @endif
                  </table>
  
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix">
              {{$post_list->appends(request()->input()) ->links()}}
          </div>
           
          </div>
  
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection