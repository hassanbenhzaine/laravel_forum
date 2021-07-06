@extends('layouts.base')

@section('body')


        <h1>{{$thread->title}}</h1>
        <h2>{{$thread->content}}</h2>
        <h3>{{$thread->created_at}}</h3>
        @php
        $tagsForThread = App\Http\Controllers\TagController::TagsForThread($thread->id)
        @endphp
        @foreach ($tagsForThread as $tag)
            <h3 style="display: inline"><a href="{{url('tag/'.$tag->name)}}">{{$tag->name}}</a></h3>
        @endforeach
        @foreach ($answers as $answer)
            <h5>{{$answer->content}}</h3>    
            <h6>posted by <a href="{{url('user/'.$answer->id)}}">{{$answer->name}}</a></h3>    
            <h6>on {{$answer->created_at}}</h3>
            <form action="{{url('answer/delete?id='.$answer->id)}}" method="post">
                {{ csrf_field() }}
                <button type="submit">Delete</button>
                </form>
        @endforeach

        @auth
        <form action="{{url('answer/new?id=').$thread->id}}" method="post">
            <textarea name="content" cols="30" rows="2" placeholder="Answer"></textarea>
            <button type="submit">Answer</button>
            {{csrf_field()}}
        </form>
        @endauth
@endsection