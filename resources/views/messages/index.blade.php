@extends('layouts.addressbooklayout')

@section('title', 'Your Messages')

<style>
    .pads{
        padding-left: 10px;
    }
</style>

@section('content')
    @if (session('message'))
        <p>{{session('message')}}</p>
    @endif
    {{--<ul>--}}
        {{--@foreach($messages as $message)--}}
            {{--<li>--}}
                {{--<a href="/messages/{{$message->id}}">--}}
                    {{--{{$message->title}}--}}
                {{--</a>--}}
            {{--</li>--}}
        {{--@endforeach--}}
    {{--</ul>--}}

    <h3 style="padding-left: 10em">Messages from all users</h3>

    <ul style="padding-left: 10em; padding-top: 1em">
        @foreach($messages as $message)
        <li style="margin-bottom: 1em">
            <a href="/messages/{{$message->id}}">
                <article class="message is-small is-primary" style="width: 80em !important;">
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
                    @can('reply', $message)<a href="/replies/create">Reply</a>@endcan
                    <a class="pads" href="/messages/{{$message->id}}/edit">Edit</a>
                    {{--<form method="post" action="/messages/{{$message->id}}">--}}
                        {{--{{method_field('DELETE')}}--}}
                        {{--{{csrf_field()}}--}}
                        {{--Can do the above like the below--}}
                        {{--@method('DELETE')--}}
                        {{--@csrf--}}

                            {{--<div class="control">--}}
                                {{--<a type="submit">Delete</a>--}}
                                {{--<button class="button">Delete Message</button>--}}
                            {{--</div>--}}

                    {{--</form>--}}
                </div>
            </div>
            <form method="post" action="/messages/{{$message->id}}/replies" class="box" style="margin-top: 1em">
                {{--@method('PATCH')--}}
                @csrf
                <div class="field">
                    <label class="label" for="">Reply</label>
                    <div class="control">
                        <input type="text" class="input" name="description" placeholder="New Reply" value="{{old('description')}}">
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-link">Reply</button>
                    </div>
                </div>

                @include('messages/errors')


            </form>
            @if($message->replies->count())
                <div class="box" style="padding-left: 15em;">
                    @foreach($message->replies as $reply)
                        <div>
                             <p>{{$reply->description}}</p>
                        </div>

                    @endforeach
                </div>
            @endif
            {{--<div class="field">--}}
                {{--<div class="control">--}}
                    {{--<a href="/replies/create">Reply</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<form method="post" action="/messages/{{$message->id}}">--}}
                {{--{{method_field('DELETE')}}--}}
                {{--{{csrf_field()}}--}}
                {{--Can do the above like the below--}}
                {{--@method('DELETE')--}}
                {{--@csrf--}}
                {{--<div class="field">--}}
                    {{--<div class="control">--}}
                        {{--<button type="submit" class="button">Delete Message</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</form>--}}
            <a></a>
        </li>
        @endforeach
    </ul>


@endsection

