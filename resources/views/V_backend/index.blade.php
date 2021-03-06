<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <title>{{$title}}</title>
   
   <script src="{{asset('style/backend/js/jquery-3.3.1.min.js')}}"></script>
   <script src="{{asset('style/backend/js/jquery-ui.js')}}"></script>
   
   <script src="{{asset('style/backend/js/jquery.nestable.js')}}"></script>
   <script src="{{asset('style/backend/bootstrap-4-3-1/js/popper.min.js') }}"></script>
  <!-- giao dien -->
   <link rel="stylesheet" href="{{ asset('style/backend/css/AdminLTE.css') }}">
   <link rel="stylesheet" href="{{asset('style/backend/css/skin-blue.min.css')}}">

   <link rel="stylesheet" href="{{ asset('style/backend/css/style_admin.css') }}">
   <link rel="stylesheet" href="{{ asset('style/backend/bootstrap-4-3-1/css/bootstrap.min.css') }}">
   <script src="{{ asset('tinymce/js/tinymce/tinymce.min.js')}}"></script>  
   
   <!-- time date data -->
   <link rel="stylesheet" href="{{ asset('style/backend/timepicker/timepicker.css') }}">
   <link rel="stylesheet" href="{{ asset('style/backend/datepicker/datepicker.min.css') }}">
   <link rel="stylesheet" href="{{ asset('style/backend/colorpicker/bootstrap-colorpicker.min.css') }}">
   <link rel="stylesheet" href="{{ asset('style/backend/select_search/bootstrap-select.css') }}">

   {{-- font  --}}
   <link rel="stylesheet" href="{{ asset('style/backend/icon/line-awesome/css/line-awesome.min.css') }}">
   <link rel="stylesheet" href="{{ asset('style/backend/icon/themify/themify-icons.css') }}">


   <script src="{{asset('style/backend/colorpicker/bootstrap-colorpicker.min.js')}}"></script>
   <script src="{{asset('style/backend/datepicker/datepicker.min.js')}}"></script>
   <script src="{{asset('style/backend/timepicker/timepicker.js')}}"></script>

   <script src="{{asset('style/backend/money/simple.money.format.js')}}"></script>

 
</head>
<body class="skin-blue sidebar-mini">

    <div class="wrapper">
        @include('V_backend/top')
        @include('V_backend/menu')
      
        @yield('content')
        @include('V_backend/footer')
        <div class="control-sidebar-bg"></div>
    </div>
    
    <!-- modal them the loai  -->
    <div class="modal fade" id="post_type_new" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <form action="{{asset('admin/post/type/new')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Th??m m???i th??? lo???i b??i ????ng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <div class="form-group">
                    <label>T??n th??? lo???i</label>
                    <input type="text" class="form-control" placeholder="B???n ??i???n t??n ?????nh d???ng" name="name">
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">????ng</button>
                <button type="submit" class="btn btn-primary">G???i</button>
                </div>
                </div>

            </div>
        </form>
    </div>
    <script src="{{asset('style/backend/icon/icon.js')}}"></script>
    <script src="{{asset('style/backend/bootstrap-4-3-1/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('style/backend/js/jquery.maphilight.js')}}"></script>
    <script src="{{asset('style/backend/js/adminlte.min.js')}}"></script>
    <script src="{{asset('style/backend/select_search/bootstrap-select.js')}}"></script>

    <script>
        //Date picker
            $('#datepicker').datepicker({autoclose: true,  format: 'dd/mm/yyyy',})
        //Timepicker
        $('#timepicker').timepicker({showInputs: false,})  
       
    </script>
    <script>
        function changecolor(id){
            var color = $('#'+id).val();
            $('#'+id+'_review').css('background-color',color);
        }

        // sua tinymce on popup 
        $(document).on('focusin', function(e) {
            if ($(e.target).closest(".tox-dialog").length) {
            e.stopImmediatePropagation();
            }
        });
         
    </script>
    
</body>
</html>