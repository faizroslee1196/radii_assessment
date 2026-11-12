@extends('layouts.app')

@section('title', $article->title)

@section('content')
    <a href="{{ route('articles.index') }}"class="btn btn-outline-secondary mb-4">
        Back to articles
    </a>

    <article class="card">
        <div class="card-body p-4">
            <p class="text-primary mb-2">
                {{ $article->category->name }}
            </p>

            <h1 class="mb-3">
                {{ $article->title }}
            </h1>

            <p class="text-secondary">
                Published:
                {{ $article->published_at?->format('d F Y, g:i a') ?? 'Not published' }}
            </p>

            <hr>

            <div class="article-body">{{ $article->body }}</div>
        </div>
    </article>
@endsection