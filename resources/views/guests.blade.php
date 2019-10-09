@extends('layouts.addressbooklayout')

@section('title', 'Home')

@section('content')

    {{--<ul>--}}
        {{--@foreach($guests as $guest)--}}
            {{--<li>{{$guest}}</li>--}}
        {{--@endforeach--}}
    {{--</ul>--}}

    <table class="table">
        <thead>
        <tr>
            <th><abbr title="Name">Name</abbr></th>
            <th><abbr title="Surname">Surname</abbr></th>
            <th><abbr title="Email">Email Address</abbr></th>
            <th><abbr title="Phone">Phone</abbr></th>
            <th><abbr title="Admin">Admin</abbr></th>
            <th><abbr title="Messages">Messages</abbr></th>
        </tr>
        </thead>
        {{--<tfoot>--}}
        {{--<tr>--}}
            {{--<th><abbr title="Name">Name</abbr></th>--}}
            {{--<th><abbr title="Surname">Surname</abbr></th>--}}
            {{--<th><abbr title="Email">Email Address</abbr></th>--}}
            {{--<th><abbr title="Phone">Phone</abbr></th>--}}
            {{--<th><abbr title="Admin">Admin</abbr></th>--}}
        {{--</tr>--}}
        {{--</tfoot>--}}
        <tbody>
        @foreach($guests as $guest)
            {{--<li>{{$guest}}</li>--}}
            <tr>
                <td>{{$guest->first_name}}</td>
                <td>{{$guest->last_name}}</td>
                <td>{{$guest->email}}</td>
                <td>{{$guest->phone_number}}</td>
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
            </tr>
        @endforeach
            <tr>
            </tr>
        </tbody>
    </table>


@endsection
