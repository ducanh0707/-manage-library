@extends('V_fontend.index')
@section('content')
    @foreach($row_body as $row)
            @include('V_fontend/home/'.$row->style)
    @endforeach
@endsection('content')
