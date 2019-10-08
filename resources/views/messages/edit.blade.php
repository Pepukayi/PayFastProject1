@extends('layouts.addressbooklayout')

@section('title', 'Edit')

@section('content')
    {{--<ul>--}}
        {{--@foreach($projects as $project)--}}
            {{--<li>{{$project->title}}</li>--}}
        {{--@endforeach--}}
    {{--</ul>--}}
    <h3 class="title">Edit Messages</h3>

    <form method="post" action="/messages/{{$message->id}}">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="field">
            <label class="label" for="title">Title</label>
            <input type="text" name="title" placeholder="Project Title" value="{{$message->title}}">
        </div>
        <div class="field">
            <label class="label" for="title">Description</label>
            <textarea type="text" name="description" placeholder="Message Description">{{$message->description}}</textarea>
        </div>
        <div class="field">
            <button type="submit">Update Message</button>
        </div>
    </form>
    @include('messages/errors')
    <form method="post" action="/messages/{{$message->id}}">
        {{--{{method_field('DELETE')}}--}}
        {{--{{csrf_field()}}--}}
        {{--Can do the above like the below--}}
        @method('DELETE')
        @csrf
        <div>
            <button type="submit">Delete Message</button>
        </div>
    </form>



@endsection

