<div class="bs-widget mb-30 sidebar-search">
    <form class="search-form" action="{{asset('form/search')}}" method="GET">
         @csrf      
        
         <div class="search-input-field bss">
             <input type="text" placeholder="Tìm từ khóa">
             <button type="submit"><i class="far fa-search"></i>Tìm kiếm</button>
         </div>
    </form>
</div>