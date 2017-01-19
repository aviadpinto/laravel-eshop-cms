@if ( $errors->any() )

<div class = "row hero ">
    <div class = "alert alert-danger" role = "alert"><strong>
            <ul class = "hero" style = "list-style-type:none">
                @foreach ( $errors->all() as $error )
                <li> * {{$error}}</li>
                @endforeach
            </ul>
        </strong></div>
</div>

@endif
