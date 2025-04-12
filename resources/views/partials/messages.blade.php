@if (Session::has('success'))
<div class="alert alert-success alert-dismissible"> {{ Session::get('success') }} </div>
@elseif(Session::has('failed'))
<div class="alert alert-danger alert-dismissible"> {{ Session::get('failed') }} </div>
@endif