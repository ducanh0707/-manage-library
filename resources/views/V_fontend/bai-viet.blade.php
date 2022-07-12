@extends('V_fontend.index')
@section('content')
<div class="content-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                        <h1 class="title style-title monkey-fz-30 monkey-f-bold">
                            {{$post->title}}
                        </h1>
                </div>
                <div class="content">
                    <?php echo html_entity_decode($post->content) ?>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection('content')
