<!DOCTYPE html>
<html lang=vi_VN class=no-js>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <title>{{$title}}</title>
   <meta name="description" content="{{$des}}" />
   <meta name="keywords" content="{{$key}}" />

   <meta property="og:title" content="{{$title}}" />
   <meta property="og:description" content="{{$des}}" />

   <meta property="og:image:width" content="630"/>
    <meta property="og:image:height" content="315"/>
   <meta name="robots" content="index,follow">
   <meta name="copyright" content="" />
   <meta name="author" content="" />
   <meta http-equiv="audience" content="General" />
   <meta name="resource-type" content="Document" />
   <meta name="distribution" content="Global" />
   <meta name="revisit-after" content="1 days" />
   <meta name="generator" content="" />
   <meta property="og:site_name" content="{{$title}}" />
   <meta property="og:type" content="website" />
   <meta property="og:locale" content="vi_VN" />
    @if($favicon)
        <link rel="shortcut icon" href="{{asset('source/theme/'.$favicon)}}">
    @endif
    <script src="{{asset('style/fontend/js/jquery-3.3.1.min.js')}}"></script>

    <script src="{{asset('style/fontend/money/simple.money.format.js')}}"></script>
   <link rel="stylesheet" href="{{ asset('style/fontend/css/style.css') }}">
   <link rel="stylesheet" href="{{ asset('style/fontend/slick/slick.css') }}">
   <link rel="stylesheet" href="{{ asset('style/fontend/slick/slick-theme.css') }}">
   <link rel="stylesheet" href="{{ asset('style/fontend/bootstrap-4-3-1/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <!-- time date data -->
  <link rel="stylesheet" href="{{ asset('style/backend/timepicker/timepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('style/backend/datepicker/datepicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('style/backend/colorpicker/bootstrap-colorpicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('style/backend/select_search/bootstrap-select.css') }}">

  
  <script src="{{asset('style/backend/colorpicker/bootstrap-colorpicker.min.js')}}"></script>
  <script src="{{asset('style/backend/datepicker/datepicker.min.js')}}"></script>
  <script src="{{asset('style/backend/timepicker/timepicker.js')}}"></script>

    @if($code_head)
        <?php echo html_entity_decode($code_head) ?>
    @endif
  
</head>
<body class="home">

        @foreach($row_head as $row)
            @include('V_fontend/layout/'.$row->style)
        @endforeach 
        <main class="main">
            <div class="home-wrapper">
                @yield('content')
            </div>
        </main>
        @foreach($row_footer as $row)
                @include('V_fontend/layout/'.$row->style)
        @endforeach
        <script src="{{asset('style/fontend/icon/icon.js')}}"></script>
        <script src="{{asset('style/fontend/bootstrap-4-3-1/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('style/fontend/slick/slick.js')}}"></script>

        @include('V_fontend/inc/modal_rent')

        <!-- Modal -->
        <div class="modal fade" id="ModalAlert" tabindex="-1" role="dialog" aria-labelledby="ModalAlertTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thông báo</h5>
                <button type="button" class="close closeAlert" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- thong bao thanh cong -->
                            @if(session('alert'))
                              <div class="alert alert-success">
                                {{session('alert')}}
                              </div>
                            @endif
                            @if(session('alert_error'))
                              <div class="alert alert-danger">
                                {{session('alert_error')}}
                              </div>
                            @endif
                            <!-- thong bao loi -->
                            @if(count($errors) > 0)
                               <div class="alert alert-danger">
                                  @foreach($errors -> all () as $errors_r)
                                     {{$errors_r}} <br>
                                  @endforeach
                               </div>
                            @endif
                          </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary closeAlert" data-dismiss="modal">Đóng</button>
                </div>
            </div>
            </div>
        </div>
        <script>
            var hash = window.location.hash;
            if(hash == '#ModalAlert'){
                
                $(hash).modal('show')
                $('.closeAlert').click(function(){
                    window.location.hash="";
                })
            }
        </script>
       
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
        {{-- slide  --}}
        <script>
            // slide sach mơi 
            $('.variable-width').slick({
                dots: true,
                infinite: true,
                speed: 300,
                initialSlide: 1,
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: true,
                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                    },
                    {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    }
                
                ]
            });
                // slide danh mục 
            $('.variable-width-cat').slick({
                dots: true,
                infinite: true,
                speed: 300,
                initialSlide: 1,
                slidesToShow: 6,
                slidesToScroll: 1,
                centerMode: true,
                arrows: false,
                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                    },
                    {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                    }
                
                ]
            });
          
        </script>
</body>
</html>