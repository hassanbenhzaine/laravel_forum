@extends('layouts.base')

@section('body')

        <h1>{{$tag->name}}</h1>
        

        @foreach ($threads as $thread)
        <h1><a href="{{url('thread').'/'.$thread->id}}">{{$thread->title}}</a></h1>
        <h2>{{$thread->content}}</h2>
        @php
        $tagsForThread = App\Http\Controllers\TagController::TagsForThread($thread->id)
        @endphp
        @foreach ($tagsForThread as $tag)
            <h3 style="display: inline">{{$tag->name}}</h3>
        @endforeach
        <h4>{{$thread->created_at}}</h4>
        <h4>by <a href="{{url('user/'.$thread->user_id)}}">{{$thread->userName}}</a></h4>
    @endforeach

@endsection