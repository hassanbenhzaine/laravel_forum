@extends('layouts.base')

@section('body')

    @if (count($threads) > 0)
    @foreach ($threads as $thread)
        <h1><a href="{{url('thread').'/'.$thread->threadId}}">{{$thread->title}}</a></h1>
        <h2>{{$thread->content}}</h2>
        @php
        $tagsForThread = App\Http\Controllers\TagController::TagsForThread($thread->threadId)
        @endphp
        @foreach ($tagsForThread as $tag)
            <h3 style="display: inline">{{$tag->name}}</h3>
        @endforeach
        <h4>{{$thread->created_at}}</h4>
        <h4>by <a href="{{url('user/'.$thread->userId)}}">{{$thread->name}}</a></h4>
    @endforeach

    {{$threads->links('pagination')}}
    @else
        <h1>No results found</h1>
    @endif



@endsection