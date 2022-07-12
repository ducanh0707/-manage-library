<div class="modal fade" id="new_book" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <form action="{{asset('admin/book/new')}}" method="post" enctype="multipart/form-data">
       <input type="hidden" name="_token" value="{{csrf_token()}}">
       <div class="modal-dialog modal-dialog-centered modal-xl  " role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Thêm mới danh mục</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
             
             <div class="row">
                 <div class="col-md-6">
                     <!-- Mã sách -->
                     <div class="form-group">
                             <label for="name_book">Mã sách</label>
                             <input type="text" class="form-control" id="code" placeholder="Bạn điền mã sách" name="code" " value="{{old('code')}}">
                         </div>
                          <!-- ten sách -->
                     <div class="form-group">
                        <label for="name_book">Tên sách</label>
                        <input type="text" class="form-control" id="name" placeholder="Bạn điền tên sách" name="name"  value="{{old('name')}}">
                    </div>
                    <!-- diện tích -->
                    <div class="form-group">
                        <label>Khổ </label>
                        <input type="text" class="form-control" id="dientich" placeholder="Nhập diện tích " name="dientich" value="{{old('dientich')}}">
                    </div>
                      <!-- số lượng  -->
                      <div class="form-group">
                        <label>Số lượng </label>
                        <input type="text" class="form-control" id="soluong" placeholder="Nhập số lượng " name="soluong" value="{{old('soluong')}}">
                    </div>
                    <!-- Số trang -->
                    <div class="form-group">
                        <label>Số trang </label>
                        <input type="number" class="form-control" id="num_pages" placeholder="Nhập số trang " name="num_pages" value="{{old('num_pages')}}">
                    </div>
                 </div>
                 <div class="col-md-6">
                     <!-- giá -->
                     <div class="form-group">
                         <label for="price_book">Giá</label>
                         <input type="number" class="form-control" id="price" placeholder="giá tiền" name="price" value="{{old('price')}}">
                     </div>
                     <!-- tác giả  -->
                     <div class="form-group">
                         <label>Tên tác giả</label>
                         <input type="text" class="form-control" id="author" placeholder="Nhập tên tác giả"  name="author" value="{{old('author')}}">
                     </div>
                        <!-- CII  -->
                        <div class="form-group">
                            <label>CII</label>
                            <input type="text" class="form-control" id="CII" placeholder="Nhập CII" name="CII" value="{{old('CII')}}">
                        </div>
                             <!-- Mô tả-->
                             <div class="form-group">
                                <label>Mô tả</label>
                                <input type="text" class="form-control" id="des" placeholder="Mô tả" name="des" value="{{old('des')}}">
                            </div>
                         <!-- Phát Hành  -->
                         <div class="form-group">
                            <label>Phát hành</label>
                            <input type="date" class="form-control" id="release" placeholder="Ngày phát hành" name="release" value="{{old('release')}}">
                        </div>
                     <!-- NXB-->
                     <div class="form-group">
                        <label for="name_book_seo">Nhà xuất bản</label>
                        <select class="form-control"  name="company_id">
                            @foreach ($company as $val)
                                <option value="{{$val->id}}">{{$val->name}}</option>
                            @endforeach
                               
                            
                        </select>
                    </div>
                 </div>
                 
             </div>
 
             
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-primary">Gửi</button>
          </div>
        </div>
    
    </div>
    </form>
 </div>
 