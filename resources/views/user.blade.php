@extends('layouts.base')

@section('body')

        <h1>{{$user->name}}</a></h1>
        <h2>memeber since {{$user->created_at}}</h2>

     

@endsection