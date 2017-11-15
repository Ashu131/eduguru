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
                    @yield('article')

                    @if(count($article)>0)
                        @foreach($article as $articles)
                        <div class="row"><div class="col-sm-3"></div>
                            <div class="col-sm-6 panel" style="border:2px solid black">
                            <div class="panel-body">
                            <h2>Title:{{$articles->title}}</h2>
                                <p>Category:{{$articles->category}}</p>
                                <p>SubCategory:{{$articles->subcat}}</p>
                                <p>Detail:{!!$articles->body!!}</p>
                                <p>Written On:{{$articles->created_at}}</p>
                                <a href="/articles/{{$articles->id}}" class="btn btn-info">Full Article</a>
                            </div>
                            </div>
                        <div class="col-sm-3"></div></div>
                        @endforeach
                        
                    @else
                        <div class="well">No Data Found</div>
                    @endif
                    
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
        </div>
    </div>
</div>
@endsection
