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

    <ul style="padding-left: 10em !important; padding-top: 1em">
        @foreach($messages as $message)
        <li style="margin-bottom: 1em; width: 81em !important;" class="box">
            <a href="/messages/{{$message->id}}">
                <article class="message is-primary" style="width: 63em !important;">
                    <div class="message-header">
                        <p>{{$message->title}} <br>Priority: {{$message->priority}}<br>{{$message->created_at}}</p>
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
                    {{--@can('reply', $message)<a href="/replies/create">Reply</a>@endcan--}}
                    <a class="pads" href="/messages/{{$message->id}}/edit">Edit Message</a>
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
            @can('reply', $message)
                <form method="post" action="/messages/{{$message->id}}/replies" style="margin-top: 1em">
                    {{--@method('PATCH')--}}
                    @csrf
                    <div class="field">
                        <div class="control">
                            <textarea style="height: 4em" type="text" class="input" name="description" placeholder="Reply To Message" value="{{old('description')}}"></textarea>
                            <button type="submit" class="button is-link">Reply</button>
                        </div>
                    </div>

                    {{--<div class="field">--}}
                        {{--<div class="control">--}}
                            {{--<button type="submit" class="button is-link">Reply</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    @include('messages/errors')


                </form>
            @endcan
            @if($message->replies->count())
                    @foreach($message->replies as $reply)
                        <div style="padding-left: 1em; padding-bottom: .5em">
                            <article class="message is-small is-grey-lighter" style="width: 80em !important;">
                                <div class="message-header">
                                    <p>{{$reply->created_at}}</p>
                                    {{--<button class="delete is-small" aria-label="delete"></button>--}}
                                </div>
                                <div class="message-body">
                                    {{$reply->description}}
                                </div>
                            </article>
                        </div>

                    @endforeach
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

