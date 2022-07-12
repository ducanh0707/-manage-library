
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="bookByCat">
                <div class="bookByCatBook">
                    <section class="row">
                        @if($row->F_cat_product_id)
                            @foreach ($row->F_cat_product_id->f_book as $item)
                               <div class="col-md-2 col-4">
                                    @include('V_fontend/inc/modImage')
                               </div>
                            @endforeach
                        @endif
                    </section>
                </div>
            </div>


        </div>
           
    </div>
</div>

</div>