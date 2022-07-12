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
               <h3 class="box-title">Hoa hồng đại lý</h3>
            </div>
            <div class="box-body">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="">
                            {{$noti_coupon->value}}
                        </div>
                        <div class="">
                            <table class="table table-hover">
                                <tr>
                                    <th class="text-center">Số lượng/tháng</th>
                                    <th class="text-center">Hoa hồng</th>
                                
                                </tr>
                                @if(count($discount) != 0)
                                    @foreach($discount as $key => $val)
                                        <tr>
                                            <td class="text-center">
                                                Từ <b>{{$val->from_sp}}</b> đến <b>{{$val->to_sp}}</b>
                                            </td>
                                            <td class="text-center">
                                                {{$val->value}} %
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </table>
                        </div>
                        <div class="mt-3">
                            <label for="">Hướng dẫn</label>
                            <?php echo html_entity_decode($content_coupon -> value) ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              
            </div>
           
          </div>
  
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection