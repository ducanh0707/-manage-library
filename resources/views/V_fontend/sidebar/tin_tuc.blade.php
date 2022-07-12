<div class="widget">
    <div class="widget-posts-slider owl-carousel owl-theme">
        @if(isset($sidebar_r->f_cat->f_post))
            @foreach($sidebar_r->f_cat->f_post as $key_p => $post)
                @if($key_p <= 2)
                <div class="post">
                    
                    <h4 class="post-title"><a href="{{asset($post->f_cat->first()->url.'/'.$post->url)}}">{{$post->title}}</a></h4>
                    <?php echo html_entity_decode($post->des) ?>
                </div><!-- End .post -->
                @endif
            @endforeach
        @endif
    </div><!-- End .posts-slider -->
</div><!-- End .widget -->


