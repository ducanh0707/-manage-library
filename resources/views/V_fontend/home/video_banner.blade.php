<div class="monkey-bg-light-gray">
    <section id="home" class="banner-monkey background-style lazyLoading" data-src="{{asset("ladingpage-home_files/bg_video.png")}}" style='background-image:url("{{asset('ladingpage-home_files/bg_video.png')}}"); margin-top: -1px;'>
        <div class="container-fluid container-xl">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="monkey-f-header title monkey-fz-30 text-center monkey-color-white mb-4 mt-4 d-mobile">
                        <?php echo html_entity_decode($row->title) ?>
                    </div>
                    <div class="banner-video background-style distance-center lazyLoading" data-src="{{asset('source/theme/'.$row->img)}}" style="background-image: url({{asset('source/theme/'.$row->img)}});">
                        
                        <a data-fancybox="" href="{{ $row->des}}">
                            <img data-src="{{asset('ladingpage-home_files/icon-play.svg')}}" class="card-img-top icon-play cursor lazyLoading" alt="#" src="{{asset('ladingpage-home_files/icon-play.svg')}}">

                        </a>
                    </div>
                </div>
                <div class="col-lg-6 align-items-start d-desktop">
                    <div class="banner-content">
                        <div class="monkey-f-header monkey-fz-40 monkey-color-white mb-5"><?php echo html_entity_decode($row->title) ?>
                        </div>
                        <div class="monkey-color-white">
                            <p>{{$row->des}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<style>

</style>