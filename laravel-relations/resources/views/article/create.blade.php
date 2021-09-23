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
    <h1>Crea nuovo Articolo:</h1>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        
    </form>
</div>
@endsection
