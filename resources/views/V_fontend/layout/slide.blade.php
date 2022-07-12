<div class="slide-top">
    
    @if($row->F_slide_img->count()>0)
    <div id="carousel_<?php echo $row->id; ?>" class="carousel slide" data-ride="carousel" style="height: <?php echo $row->height ?>px !important;">
        <ol class="carousel-indicators">
            <?php foreach($row->F_slide_img->where('status','on') as $key_d => $dot){ ?>
                <li data-target="#carousel_<?php echo $row->id; ?>" data-slide-to="<?php echo $key_d ?>" class="<?php if($key_d == 0){ echo 'active';} ?>"></li>
            <?php } ?>
        </ol>
        <div class="carousel-inner" style="height: <?php echo $row->height ?>px; display: flex; align-items: center;">
            <?php foreach($row->F_slide_img->where('status','on') as $key_i => $img){ ?> 
                <div class="carousel-item <?php if($key_i == 0){ echo 'active';} ?>">
                    <a href="<?php echo $img->link ?>">
                        <img src="{{asset('source/slide/'.$img->img)}}" class="d-block w-100 img-slide">
                    </a>
                
                </div>
            <?php } ?>    
        </div>
        <a class="carousel-control-prev" href="#carousel_<?php echo $row->id; ?>" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel_<?php echo $row->id; ?>" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    @endif
</div>