@extends('V_backend.index')
@section('content')
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
          {{$title}} cho {{$user->email}}
      </h1>
      <div>
         <a href="{{asset('admin/user/type/0')}}" class="btn btn-primary btn-sm">Quay lại</a>
      </div>
    </section>
      @include('V_backend/alert')
   <!-- Main content -->
   <section class="content">
      <div class="box">
         <div class="box-body p-4">
            <div class="row">
               <div class="col-md-12">  <h3 class="">{{$user->name}}</h3></div>
            </div>
            {{-- web  --}}
            <div class="row mt-4">
             
               <ul class="list-group">
                  @if($tinh_list -> count() != 0)
                  @php $i = 0; @endphp
                     @foreach($tinh_list as $key => $tinh)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                               {{$tinh -> name}} 
                              
                                 <span class="ml-3 cursor">
                                    {{-- <a style="@if(!isset($user->f_user_tinh->where('tinh_id',$tinh->id)->first()->tinh_id))   display:none;  @endif" id="a-{{$tinh->id}}" data-status="on" data-tinh_id="{{$tinh->id}}" class="on user_add_tinh user_add_tinh_on_{{$tinh->id}}">
                                        <i  class="fa fa-toggle-on text-success"></i>
                                    </a>

                                    <a style="@if(isset($user->f_user_tinh->where('tinh_id',$tinh->id)->first()->tinh_id))   display:none; @endif " id="a-{{$tinh->id}}" data-status="off" data-tinh_id="{{$tinh->id}}" class="off user_add_tinh user_add_tinh_off_{{$tinh->id}}">
                                        <i class="fa fa-toggle-off text-dark"></i>
                                    </a> --}}
                                 </span>
                        </li>
                        @php $i++; @endphp
                        @if($i % 10 == 0 && $i != count($tinh_list)) </ul><ul class="list-group"> @endif
                     @endforeach
                  @endif
                  
               </ul>
               <script>
                $('.user_add_tinh').click(function(){
                 
                    var status = $(this).data('status');
                    var tinh_id = $(this).data('tinh_id');
                    if(status == 'on'){
                  
                        $('.user_add_tinh_on_'+ tinh_id).css('display','none');
                        $('.user_add_tinh_off_'+ tinh_id).css('display','');
                       
                    }else{
                    
                        $('.user_add_tinh_off_'+ tinh_id).css('display','none');
                        $('.user_add_tinh_on_'+ tinh_id).css('display','');
                    }
                    $.get("{{asset('')}}"+"admin/user/{{$user_type_id}}/user_tinh/{{$user_id}}/add/"+tinh_id);
                });
                  
             </script>
            </div>
          

            
         </div>
      </div>

   </section>
</div>
@endsection