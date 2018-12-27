@if(Session::has('error'))
<p class="alert alert-danger">{{Session::get('error')}}</p>
@endif

@if(Session::has('data'))
<p class="alert alert-success">{{Session::get('data')}}</p>
@endif



@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
               <p> {{ $error }} </p>
            @endforeach
        </ul>
    </div>
@endif