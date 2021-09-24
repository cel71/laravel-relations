@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($articles as $article)
            <div class="card col-6" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $article->author->name }}</h6>
                    <p class="card-text">{{ $article->abstract }}</p>
                    <a href="{{ route('articles.index', $article) }}"><i class="bi bi-book-half"></i></a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
