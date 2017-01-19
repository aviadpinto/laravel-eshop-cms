
@if (Session::has('success'))
<div class = "row hero success-box">
    <div class = "alert alert-success" role = "alert"><strong>{{ Session::get('success') }}</strong></div>
</div>
@endif
