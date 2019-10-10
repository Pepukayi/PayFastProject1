@extends('layouts.guest-book-layout')

@section('title', 'Edit')

<style>
    .pads{
        padding-left: 10px;
    }
</style>

@section('content')

    <h3 style="padding-left: 10em">Messages from {{$user->first_name}} {{$user->last_name}}</h3>

    @if($user->messages->count())
        <div>
                <ul style="padding-left: 10em; padding-top: 1em">
                    @foreach($user->messages as $message)
                        <li style="margin-bottom: 1em" class="box">
                            <a href="/messages/{{$message->id}}">
                                <article class="message is-grey" style="width: 80em !important;">
                                    <div class="message-header">
                                        <p>{{$message->title}} <br>Priority: {{$message->priority}}</p>
                                    </div>
                                    <div class="message-body">
                                        {{$message->description}}
                                    </div>
                                </article>
                            </a>

                            <div class="field">
                                <div class="control">
                                    <a class="pads" href="/messages/{{$message->id}}/edit">Edit Message</a>
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

                                    @include('messages/errors')


                                </form>
                            @endcan
                            @if($message->replies->count())
                                @foreach($message->replies as $reply)
                                    <div style="padding-left: 1em; padding-bottom: .5em">
                                        <article class="message is-small is-grey-lighter" style="width: 80em !important;">
                                            <div class="message-header">
                                                <p>{{$reply->created_at}}</p>
                                            </div>
                                            <div class="message-body">
                                                {{$reply->description}}
                                            </div>
                                        </article>
                                    </div>

                                @endforeach
                            @endif
                            <a></a>
                        </li>
                    @endforeach
                </ul>
        </div>
    @endif
@endsection

