@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="titlefirst">ARTICLE:</h1>
    <div class="button2"><a href="{{ route('articles.index') }}">Torna ad Articles</a></div>
    <div class="table table-striped">
        <h2 class="title-show">{{$article->title}}</h2>
        <p class="abstract-show">{{$article->abstract}}</p>
        <h4 class="author-show">{{$article->author->name}}</h4>
        @if(Auth::check())
            <a href="{{ route('articles.edit', $article) }}">ADD</a>
        @endif
    </div>
</div>
@endsection
