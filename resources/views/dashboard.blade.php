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
                    @yield('article') {{-- coming from web/article/create_article  --}}

                    @if(!empty($user_article) && count($user_article)>0)
                        @foreach($user_article as $articles)
                        <div class="row">
                            <div class="col-sm-12" style="border:2px solid black">
                            <div class="panel-body">
                            <h2>Title:{{$articles->title}}</h2>
                                <p>Category:{{$articles->category}}</p>
                                <p>SubCategory:{{$articles->subcat}}</p>
                                <p>Detail:{!!$articles->body!!}</p>
                                <p>Written On:{{$articles->created_at}}</p>
                                <a href="/articles/{{$articles->id}}" class="btn btn-info">Full Article</a>
                            </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                    
                
            </div>
        </div>
        
        <div class="col-md-3">
        </div>
    </div>
</div>
@endsection
