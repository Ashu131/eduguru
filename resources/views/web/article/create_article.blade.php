@extends('dashboard')
@section('article')
    {!! Form::open([ 'action'=>'pages\ArticlesController@store', 'method'=> 'POST' ]) !!}
        <div class="form-group-lg">
            {{Form::label('title', 'Title of the Article')}}
            {{Form::text('title','',[ 'class'=>'form-control', 'placeholder'=>'Title of the Article' ])}}
        </div>

        <div class="form-group">
            {{Form::label('category', 'Category')}}
            {{Form::select('category', ['tax'=>'Taxes', 'goods'=>'Goods', 'kids'=>'Kids'],null, ['class'=>'form-control', 'placeholder'=>'Select Categories'])}}
        </div>

        <div class="form-group">
            {{Form::label('subcat', 'Sub Category')}}
            {{Form::select('subcat', ['1'=>'subcat1','2'=>'subcat1','3'=>'subcat1',],null,['class'=>'form-control', 'placeholder'=>'Select Sub Category'])}}
        </div>

        {{--  <div class="form-group">
            {{Form::label('file','File')}}
            {{Form::file('image',['class'=>'form-control'])}}
        </div>  --}}

        <div class="form-group">
            {{Form::textarea('body','',['id'=>'ckeditor', 'class'=>'form-control'])}}
        </div>
        <div>
            {{Form::submit('Submit',['class'=>'form-control btn-primary'])}}
        </div>

    {!! Form::close() !!}
@endsection