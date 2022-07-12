
<section class="searching">

    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="bg-white radius20">
                    <div class="search text-center">
                        <div class="title-mod font-weight-bold mb-3">{{($row->title)}}</div>
                        <div>
                                <form class="search-form" action="{{asset('form/search')}}" method="GET"> @csrf
                                <div class="search-input-field bss">
                                    <input type="text" name="key" class="form-control border-radius" placeholder="Tìm tên đầu sách"><br>
                                    <button type="submit" class=" btn btn-pin  text-white border-radius px-4"><i class="fa fa-search"></i>Tìm kiếm </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
      
    </div>
</section>