@extends('layouts.guest-book-layout')

@section('title', 'Home')

@section('content')

    <table class="table is-medium" style="font-size: large; padding-left: 5em">
        <thead>
        <tr>
            <th class="is-medium"><abbr title="Name">Name</abbr></th>
            <th><abbr title="Surname">Surname</abbr></th>
            <th><abbr title="Email">Email Address</abbr></th>
            <th><abbr title="Phone">Phone</abbr></th>
            @can('update', $guests[0])
                <th><abbr title="Admin">Admin</abbr></th>
                <th><abbr title="Messages">Messages</abbr></th>
            @endcan
        </tr>
        </thead>
        <tbody>
        @foreach($guests as $guest)
            <tr>
                <td>{{$guest->first_name}}</td>
                <td>{{$guest->last_name}}</td>
                <td>{{$guest->email}}</td>
                <td>{{$guest->phone_number}}</td>
                @can('update', $guest)
                <td>
                        <form method="post" action="users/{{$guest->id}}">
                            @method('PATCH')
                            @csrf
                            <label class="checkbox" for="user_level">
                                <input style="margin-left: 30px" type="checkbox" name="admin" onchange="this.form.submit()" {{ $guest->user_level ? 'checked' : ''}}>
                            </label>

                        </form>
                </td>

                <td><a href="/users/{{$guest->id}}">View Messages</a></td>
                @endcan
            </tr>
        @endforeach
            <tr>
            </tr>
        </tbody>
    </table>


@endsection
