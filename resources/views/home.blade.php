@extends('layouts.base')

@section('body')
    
    @auth
    <form action="{{url('thread/new')}}" method="post">
        <input type="text" name="title" placeholder="Title">
        <textarea name="content" cols="30" rows="10" placeholder="Content"></textarea>
        <button type="submit">Publish</button>
        {{csrf_field()}}
    </form>
    @endauth

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

    
    <h1>Popular tags</h1>
        <ul>
            @foreach ($tags as $tag)
                <li><a href="{{url('/tag/'.$tag->id)}}">{{$tag->name}}</a></li>
            @endforeach
        </ul>


@endsection