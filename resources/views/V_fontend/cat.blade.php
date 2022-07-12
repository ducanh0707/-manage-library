@extends('V_fontend.index')
@section('content')
    <main id="catbook" class="my-3">
    <div class=" bg-organ">
        <div class="container mt-4">
            <div class="row">
                <div class="col-12">
                    <div class="text-center font40 grenza-bold title-mod">{{$cat->name}}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
       
        <div class="row">
            <div class="col-md-12">
                <div class="catbookList">
                    
                    @if($post_list)
                        <div class="row">
                            @foreach ($post_list as $item)
                                <div class="col-md-3">
                                    <div class="mod-post">
                                        <div class="mod-post-img">
                                            <a href=" {{asset('bai-viet/'.$item->url.'.html')}}"><img class="w-100" src="{{asset('source/post/'.$item->img)}}"></a>
                                        </div>  
                                        <div class="mod-post-title">
                                           <a href=" {{asset('bai-viet/'.$item->url.'.html')}}" class="text-dark"> {{$item->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="pagination-knowledge" class="mt-4 mb-4 d-none">
                    <div class="paginationjs">
                        <div class="paginationjs-pages">
                            {{$post_list->appends(request()->input()) ->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</main>
@endsection('content')
