@extends('layouts.addressbooklayout')

@section('title', 'Edit')

@section('content')

    <h3>{{$message->title}}</h3>

    <div>{{$message->description}}</div>
    <p>
        <a href="/messages/{{$message->id}}/edit">Edit Message</a>
    </p>
    {{--@if($message->tasks->count())--}}
        {{--<div>--}}
            {{--@foreach($project->tasks as $task)--}}
                {{--<div>--}}
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
        {{--</div>--}}
    {{--@endif--}}

    @can('update', $message)
        <a href="">We have admin access to this content</a>
    @endcan

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

