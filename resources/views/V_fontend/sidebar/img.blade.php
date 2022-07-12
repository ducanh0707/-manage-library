@foreach($sidebar as $sidebar_r)
@if($sidebar_r -> type == 'img')
    <div class="bs-widget mb-30 bs-ad-container">
        <div class="bs-ad-inner p-relative">
           
            <a href="#">
                <img src="{{asset('source/theme/'. $sidebar_r->img)}}" alt="">
            </a>
        </div>
    </div>
@endif
@endforeach