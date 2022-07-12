<form action="{{asset('form/search')}}">
    @csrf
     <div class="input-group mb-3">
         <div class="input-group-prepend">
         <span class="input-group-text button-search" id="basic-addon1">
             <i class="fa fa-search"></i>
         </span>
         </div>
         <input type="text" name="key" class="form-control form-search" placeholder="Tìm sách"  aria-describedby="basic-addon1">
         
     </div>
     <div class="text-center">
        <button class="mt-3 btn btn-organ">Tìm kiếm</button>
     </div>
</form>