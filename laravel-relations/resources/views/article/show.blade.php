@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="titlefirst">ARTICLE:</h1>
    <div class="button2"><a href="{{ route('articles.index') }}">Torna ad Articles</a></div>
    <div class="table table-striped">
        <h2 class="title-show">{{$article->title}}</h2>
        <p class="abstract-show">{{$article->abstract}}</p>
        <h4 class="author-show">{{$article->author}}</h4>
    </div>
</div>
@endsection
