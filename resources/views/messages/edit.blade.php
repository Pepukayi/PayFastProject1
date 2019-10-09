@extends('layouts.addressbooklayout')

@section('title', 'Edit')

@section('content')
    {{--<ul>--}}
        {{--@foreach($projects as $project)--}}
            {{--<li>{{$project->title}}</li>--}}
        {{--@endforeach--}}
    {{--</ul>--}}
    <h3 class="title" style="margin-left: 7em;">Edit Message</h3>

    <form method="post" action="/messages/{{$message->id}}">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div style="margin-left: 7em; margin-top: 2em">
            <div class="field">
                <label class="label" for="title">Title</label>
                <div class="control">
                    <input type="text" class="input is-primary {{$errors->has('title')? 'is-danger':''}}" name="title" placeholder="Message Title" value="{{$message->title}}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="description">Description</label>
                <div class="control">
                    <textarea name="description" placeholder="Project Description" class="sizing textarea is-primary {{$errors->has('description')? 'is-danger':''}}">{{$message->description}}</textarea>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <div class="select is-primary">
                        <select name="priority" value="{{$message->priority}}">
                            <option value="{{$message->priority}}">Select Priority</option>
                            <option value="High">High</option>
                            <option value="Medium">Medium</option>
                            <option value="Low">Low</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-primary">Update Message</button>
                </div>
            </div>
        </div>
        @include('messages/errors')
    </form>

    {{--<form method="post" action="/messages/{{$message->id}}">--}}
        {{--{{csrf_field()}}--}}
        {{--{{method_field('PATCH')}}--}}
        {{--<div class="field">--}}
            {{--<label class="label" for="title">Title</label>--}}
            {{--<input type="text" name="title" placeholder="Project Title" value="{{$message->title}}">--}}
        {{--</div>--}}
        {{--<div class="field">--}}
            {{--<label class="label" for="title">Description</label>--}}
            {{--<textarea type="text" name="description" placeholder="Message Description">{{$message->description}}</textarea>--}}
        {{--</div>--}}
        {{--<div class="field">--}}
            {{--<button type="submit">Update Message</button>--}}
        {{--</div>--}}
    {{--</form>--}}
    {{--@include('messages/errors')--}}
    <div style="margin-left: 7em; margin-top: 1em">
        <form method="post" action="/messages/{{$message->id}}">
    {{--{{method_field('DELETE')}}--}}
    {{--{{csrf_field()}}--}}
    {{--Can do the above like the below--}}
    @method('DELETE')
    @csrf
    <div class="field">
        <div class="control">
            <button type="submit" class="button is-danger">Delete Message</button>
        </div>
    </div>
    </form>
    </div>




@endsection

