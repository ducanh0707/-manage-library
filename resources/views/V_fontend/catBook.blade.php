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
                    @if($book_list)
                      
                            @foreach ($book_list as $item)
                                  @include('V_fontend/inc/mod-book')
                            @endforeach
                       
                     @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="pagination-knowledge" class="mt-4 mb-4 d-none">
                    <div class="paginationjs">
                        <div class="paginationjs-pages">
                            {{$book_list->appends(request()->input()) ->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</main>
@endsection('content')
