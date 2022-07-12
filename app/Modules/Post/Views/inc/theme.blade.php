<hr>
<div class="col-md-12 py-3">

    <label class="font-weight-bold"><i class="fas fa-tags"></i> Giao diện</label> <br>
    <div class="form-group">
        <select name="theme_id" class="form-control">
            <option value="">Trống</option>
            @foreach($theme_list as $theme_l)
                <option value="{{$theme_l->id}}">{{$theme_l->title}}</option>
            @endforeach
        </select>
    </div>

</div>