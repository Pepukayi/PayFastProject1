@extends('layouts.addressbooklayout')

@section('title', 'Edit')

@section('content')

    <h3>Messages from {{$user->first_name}} {{$user->last_name}}</h3>

    {{--<div>{{$user->description}}</div>--}}
    {{--<p>--}}
        {{--<a href="/messages/{{$user->id}}/edit">Edit Message</a>--}}
    {{--</p>--}}
    @if($user->messages->count())
        <div>
            @foreach($user->messages as $Message)
                <div>
                    {{$Message->title}}<br>{{$Message->priority}}<br>{{$Message->description}}
                    {{--<form method="post" action="/tasks/{{$task->id}}" class="box">--}}
                        {{--@method('PATCH')--}}
                        {{--@csrf--}}
                        {{--<label class="checkbox {{$task->completed ? 'is-complete' : ''}}" for="completed">--}}
                            {{--<input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>--}}
                            {{--{{$task->description}}--}}
                        {{--</label>--}}
                    {{--</form>--}}
                </div>

            @endforeach
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

