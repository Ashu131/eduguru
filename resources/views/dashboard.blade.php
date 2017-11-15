@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('include.user_leftbar')
        </div>
        
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @yield('content')
                    @yield('article')
                    
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
        </div>
    </div>
</div>
@endsection
