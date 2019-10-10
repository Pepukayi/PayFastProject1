@extends('layouts.guest-book-layout')

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

    <ul>
        @foreach($messages as $message)
        <li style="margin-bottom: 1em">
            <a href="/messages/{{$message->id}}">
                <article class="message is-small" style="width: 50em !important;">
                    <div class="message-header">
                        <p>{{$message->title}} <br>Priority: {{$message->priority}}</p>
                        {{--<button class="delete is-small" aria-label="delete"></button>--}}
                    </div>
                    <div class="message-body">
                        {{$message->description}}
                    </div>
                </article>
            </a>
            {{--<button type="button" href="/messages/{{$message->id}}/edit">Edit Message</button><br>--}}
            <div class="field">
                <div class="control">
                    <a type="submit" class="button" href="/messages/{{$message->id}}/edit">Edit Message</a>
                </div>
            </div>
            <p>
                <a href="/messages/{{$message->id}}/edit">Edit Message</a>
            </p>

            <form method="post" action="/messages/{{$message->id}}">
                {{--{{method_field('DELETE')}}--}}
                {{--{{csrf_field()}}--}}
                {{--Can do the above like the below--}}
                @method('DELETE')
                @csrf
                <div class="field">
                    <div class="control">
                        <button type="submit" class="button">Delete Message</button>
                    </div>
                </div>
            </form>
            <p>
                <a href="/messages/{{$message->id}}/edit">Edit Message</a>
            </p>
        </li>
        @endforeach
    </ul>


@endsection

