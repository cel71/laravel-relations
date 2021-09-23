@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('articles.create') }}"><i class="bi bi-brush">Crea nuovo Articolo</i></a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Actions</th> 
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <th scope="row">{{ $article->id }}</th>
                <td>{{ $article->title }}</td>
                <td>{{ $article->author }}</td>
                <td><a href="{{ route('articles.show', $article) }}"><i class="bi bi-book-half"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
