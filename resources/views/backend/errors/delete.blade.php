@if(Session::has('delete'))
<p class="alert alert-success">{{Session::get('delete')}}</p>
@endif