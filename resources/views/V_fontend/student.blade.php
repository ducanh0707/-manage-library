@extends('V_fontend.index')
@section('content')

<section class="new-detail-page monkey-bg-light-gray" style="margin-top: -1px;">
    <div class="background-style bg-page d-desktop"></div>
    <section id="breadcrumb-monkey" class="breadcrumb-monkey">
        <div class="container-fluid container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb monkey-bg-transparent mb-0 p-0">
                            <li class="breadcrumb-item breadcrumb-mobile">
                                <a class="monkey-f-medium text-uppercase" href="{{asset('')}}">Trang
                                    chủ</a>
                            </li>
                            <li class="breadcrumb-item active breadcrumb-mobile">
                                <a href="{{asset($post->f_cat->first()->url)}}"
                                    class="monkey-f-bold text-uppercase"> {{$post->f_cat->first()->name}}</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid container-xl">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="row">
                    <div class="col-lg-8">
                        <section class="monkey-bg-white new-wrapper">
                            <h1 class="title style-title monkey-fz-30 monkey-f-bold">
                                {{$post->title}}
                            </h1>
                            <div class="new-header mt-3 mt-lg-4 d-flex justify-content-between">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <?php
                                        $date = date_create($post -> created_at);
                                       
                                        echo  'Ngày đăng: '.date_format($date,'d/m/Y');
                                    ?>
                                    </li>
                                    
                                </ul>
                               
                            </div>
                            <div class="new-body">
                                
                                <?php 
                                     $url = $post->video;
                                    parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
                                
                                ?> 
                                    @if(isset($my_array_of_vars['v']))
                                        <iframe width="100%" height="450px" src="https://www.youtube.com/embed/<?php echo  $my_array_of_vars['v'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    @endif 
                    
            
                            </div>
                            <div class="new-body">
                                <?php echo html_entity_decode($post->content) ?>
                            </div>


                        </section>
                    </div>
                    <div class="col-lg-4">
                        @if(count($post_relate)>1)
                            <section class="slider-new slider-bar-concerned-parents monkey-bg-white mb-4 d-desktop">
                            
                           
                                <div
                                    class="title style-title text-uppercase monkey-color-green monkey-fz-22 monkey-f-bold mb-4">
                                    Bài viết liên quan
                                </div>
                                @foreach($post_relate as $key_r => $post_r)
                                    @if($key_r < 9)
                                        <div class="pb-3 pb-lg-4 border-bottom mt-3 mt-lg-4">
                                            <div class="media mt-3 parents-share-media">
                                                <div class="media-image effect-hover-circle slider-bar-new-item}">
                                                    <img data-src="{{asset('source/post/'.$post_r->img)}}"
                                                        class=" lazyLoading" alt="#"
                                                        src="{{asset('source/post/'.$post_r->img)}}">

                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mt-0 monkey-f-bold monkey-fz-15">
                                                        <a class="cursor" href="{{asset($post->url.'.html')}}">
                                                            {{$post_r->title}}</a>

                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                     @endif
                                @endforeach
                            </section>
                        @endif




                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection('content')
