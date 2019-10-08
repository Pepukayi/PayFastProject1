@extends('layouts.addressbooklayout')

@section('title', 'Your Messages')

@section('content')
    @if (session('message'))
        <p>{{session('message')}}</p>
    @endif
    <ul>
        @foreach($messages as $message)
            <li>
                <a href="/messages/{{$message->id}}">
                    {{$message->title}}
                </a>
            </li>
        @endforeach
    </ul>


@endsection

