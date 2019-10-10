@extends('layouts.guest-book-layout')

@section('title', 'Edit')

@section('content')

    <h3>{{$message->title}}</h3>

    <div>{{$message->description}}</div>
    <p>
        <a href="/messages/{{$message->id}}/edit">Edit Message</a>
    </p>

@endsection

