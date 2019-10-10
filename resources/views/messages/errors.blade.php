@if( $errors->any())
    <div class="notification is-danger is-small">
        <ul>
            @foreach($errors->all() as $error)
                <li class="is-small">{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
