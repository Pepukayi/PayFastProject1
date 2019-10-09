@extends('layouts.addressbooklayout')

@section('title', 'Edit')

<style>
    .pads{
        padding-left: 10px;
    }
</style>

@section('content')

    <h3 style="padding-left: 10em">Messages from {{$user->first_name}} {{$user->last_name}}</h3>

    {{--<div>{{$user->description}}</div>--}}
    {{--<p>--}}
        {{--<a href="/messages/{{$user->id}}/edit">Edit Message</a>--}}
    {{--</p>--}}
    @if($user->messages->count())
        <div>
            {{--@foreach($user->messages as $Message)--}}
                {{--<div>--}}
                    {{--{{$Message->title}}<br>{{$Message->priority}}<br>{{$Message->description}}--}}
                    {{--<form method="post" action="/tasks/{{$task->id}}" class="box">--}}
                        {{--@method('PATCH')--}}
                        {{--@csrf--}}
                        {{--<label class="checkbox {{$task->completed ? 'is-complete' : ''}}" for="completed">--}}
                            {{--<input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>--}}
                            {{--{{$task->description}}--}}
                        {{--</label>--}}
                    {{--</form>--}}
                {{--</div>--}}


            {{--@endforeach--}}
                <ul style="padding-left: 10em; padding-top: 1em">
                    @foreach($user->messages as $message)
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
        </div>
    @endif

    {{--@can('update', $message)--}}
        {{--<a href="">We have admin access to this content</a>--}}
    {{--@endcan--}}

    {{--<form method="post" action="/projects/{{$message->id}}/tasks" class="box" style="margin-top: 1em">--}}
        {{--@method('PATCH')--}}
        {{--@csrf--}}
        {{--<div class="field">--}}
            {{--<label class="label" for="">New Task</label>--}}
            {{--<div class="control">--}}
                {{--<input type="text" class="input" name="description" placeholder="New Task" value="{{old('title')}}">--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="field">--}}
            {{--<div class="control">--}}
                {{--<button type="submit" class="button is-link">Add Task</button>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--@include('projects/errors')--}}


    {{--</form>--}}




@endsection

