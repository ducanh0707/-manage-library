<div class="form-group">
    <label><i class="fa fa-columns"></i> Chọn khóa học </label>
       <select class="form-control" name="post_id">
          <option value="0">Trống</option>
          @foreach($post_course_list as $course_r)
             <option value="{{$course_r -> id}}" @if($course_r->id == $row->post_id ) selected @endif>{{$course_r -> title}}</option>   
          @endforeach
       </select>
</div>