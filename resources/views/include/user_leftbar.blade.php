<div class="panel panel-default">
    <div class="panel-heading">Leftbar</div>
    <div class="panel-body">
        <p >Name:{{ucfirst(Auth::user()->name)}}</p>
        <p >Email:{{Auth::user()->email}}</p>
        <p >Phone:{{Auth::user()->phone}}</p>
        <p >Role:{{ucfirst(Auth::user()->role)}}</p>
        <p >Joined Since:{{substr(Auth::user()->created_at,0,10)}}</p>
        <a class="btn btn-block btn-primary" href="{{ url('articles/create') }}">Write Article</a>
    </div>
</div>