@extends('layouts.app')

@section('content')
    @if(count($data)>0)
        @foreach($data as $article)
        <div class="row"><div class="col-sm-3"></div>
            <div class="col-sm-6 panel" style="border:2px solid black">
            <div class="panel-body">
            <h2>Title:{{$article->title}}</h2>
                <p>Category:{{$article->category}}</p>
                <p>SubCategory:{{$article->subcat}}</p>
                <p>Detail:{!!$article->body!!}</p>
                <p>Written On:{{$article->created_at}}</p>
            </div>
            </div>
        <div class="col-sm-3"></div></div>
        @endforeach
    @endif
@endsection