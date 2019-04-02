@extends('layouts.app')

@section('content')

<div class="col-md-8 col-md-offset-2">

<h3>Post Your Story Here</h3>

{!!Form::open(['action' => 'StoryController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}

{{Form::text('storyTitle','',['placeholder' => 'Story Title'])}}
{{Form::text('category','',['placeholder' => 'Story Type'])}}
{{Form::textarea('storybody','',['placeholder' => 'Put Your Story Here'])}}
{{Form::submit('submit')}}


{!! Form::close()!!}
</div>

@endsection