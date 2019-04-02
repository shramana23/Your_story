@extends('layouts.app')

@section('content')

@if(count($stories)>0)
    @foreach($stories as $story)
    @if($story->category=='Detective')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <h3>{{$story->storyTitle}}</h3>
            <p>{{$story->category}} | {{$story->created_at}}</p>
            <p>{{$story->storybody}}</p>
        </div>
        </div>
        <hr>
        @endif
    @endforeach
@endif


@endsection