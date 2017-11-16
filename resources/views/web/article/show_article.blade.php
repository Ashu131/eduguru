@extends('layouts.app')
@section('content')
    @if(count($article)>0)
        <div class="panel panel-primary">
            <div class="panel-body">
                <h2>Title:{{$article->title}}</h2>
                <p>Category:{{$article->category}}</p>
                <p>SubCategory:{{$article->subcat}}</p>
                <p>Detail:{!!$article->body!!}</p>
                <p>Written On:{{$article->created_at}}</p>
            </div>
        </div>
    @else
        <div class="well">No Data Found</div>
    @endif
@endsection
