@extends('layouts.app')

@section('content')
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>Aggiungi:</h1>
    <form action="{{ route('articles.update', $article) }}" method="POST">
        @csrf
        @method('PUT')
            <div>
                <label for="title">Title:</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>
            <div>
                <label for="abstract">Abstract:</label>
                <input class="form-control" type="text" name="abstract" id="abstract">
            </div>  
            <div>
                <label for="author_id">Author:</label>
                <input class="form-control" type="text" name="author_id" id="author_id">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Invia</button>
            </div>  
    </form>
</div>
@endsection
