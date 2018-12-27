@if(Session::has('edit'))
<p class="alert alert-success">{{Session::get('edit')}}</p>
@endif