@include('V_fontend/inc/modal_buy')
@include('V_fontend/inc/modal_rent')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="Cat">
                {{-- title  --}}
                <div class="bookByCatTitle">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="tilteCatModCat">
                                {{$row->title}}
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="CatBook py-3">
                   <div class="row">
                       <div class="col-md-2 col-6">
                           <div class="catMod">
                                <a href="#" class="w-100 btn-organ btn">Tất cả sách</a>
                           </div>
                       </div>
                       <div class="col-md-2 col-6">
                            <div class="catMod">
                                <a href="#" class="w-100 btn-green btn">Sách tại trường</a>
                            </div>
                        </div>
                   </div>
                </div>

                {{-- danh muc  --}}
                <div class="CatBookSub">
                    @if($row->menu_id)
                        <section class="variable-width-cat slider">
                            @foreach ($row->f_menu as $item)
                                    <div class="modCatSub">
                                        <div class="modCatSubCsss">
                                            <div class="catSubMod text-center {{$item->class_a}}-border">
                                                <a href="{{asset($item->url)}}" class="w-100 text-white grenza-italic font20">{{$item->name}}</a>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                          
                        </section>
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>