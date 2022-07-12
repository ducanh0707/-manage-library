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
               <h3 class="box-title">{{$post->title}}</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-10">
                  <?php echo html_entity_decode($post->content) ?>
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