@extends('layouts.base')
@section('title')
{{$title}}
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Main page</div>

                <div  class="panel-body">
                    @foreach($news as $one)

                        <h3><a href="{{asset($one->id)}}">{{$one->name}}</a></h3>
                        <div class="picture_catalog">
                        @if ($one->picture == '-')
                            <img src = '{{asset("/media/photos/no_photo.jpg")}}' />
                        @else
                            <img  src = '{{asset("/uploads/medium/$one->picture")}}'  />
                        @endif
                        </div>
                        <h4>{{$one->body}}</h4>
                        <hr>
                    <!--<p>{{$one->url}}<p>-->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection