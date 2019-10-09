@extends('layouts.addressbooklayout')

@section('title', 'Create')

<style>
    .sizing{
        width: 30em !important;
        min-width: 30em !important;
    }
</style>


@section('content')
   <h1 style="margin-left: 7em; margin-top: 2em">Create Reply To Message</h1>

    <form method="post" action="/messages/{{$message->id}}/reply">
        {{--{{csrf_field()}}--}}
        {{--@method('PATCH')--}}
        @csrf
        <div style="margin-left: 7em; margin-top: 2em">
            <div class="field">
                <label class="label" for="title">Title</label>
                <div class="control">
                    <input type="text" class="input {{$errors->has('title')? 'is-danger':''}}" name="title" placeholder="Message Title" value="{{old('title')}}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="description">Description</label>
                <div class="control">
                    <textarea name="description" placeholder="Project Description" class="sizing textarea {{$errors->has('description')? 'is-danger':''}}">{{old('description')}}</textarea>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <div class="select is-primary">
                        <select name="status">
                            <option>Select Status</option>
                            <option value="High">Resolved</option>
                            <option value="Medium">Pending</option>
                            <option value="Low">Closed</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="field">
                <div class="control">
                    <button type="submit" class="button">Reply To Message</button>
                </div>
            </div>
        </div>
        @include('replies/errors')
    </form>
@endsection
