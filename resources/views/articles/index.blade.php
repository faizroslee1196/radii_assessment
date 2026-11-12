@extends('layouts.app')

@section('title', 'Article List')

@section('content')
    <h1 class="mb-4">Article List</h1>

    <div class="mb-4">
        <label for="search" class="form-label">
            Search by title
        </label>

        <input type="search" id="search" class="form-control" placeholder="" aria-controls="article-list">
    </div>

    <div id="article-list" class="row g-4">
        @foreach ($articles as $article)
            <div class="col-md-6 col-lg-4 article-item" data-title="{{ $article->title }}">
                <article class="card h-100">
                    <div class="card-body d-flex flex-column">
                        <p class="text-primary small mb-2">
                            {{ $article->category->name }}
                        </p>

                        <h2 class="h5">
                            <a href="{{ route('articles.show', $article->id) }}" class="text-dark text-decoration-none">
                                {{ $article->title }}
                            </a>
                        </h2>

                        <p class="text-secondary">
                            {{ $article->summary }}
                        </p>

                        <p class="small text-secondary">
                            {{ $article->published_at?->format('d M Y') ?? 'Not published' }}
                        </p>

                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-outline-primary mt-auto align-self-start">
                            Read more
                        </a>
                    </div>
                </article>
            </div>
        @endforeach
    </div>

    <p id="no-results" class="alert alert-secondary mt-4" role="status" @if ($articles->isNotEmpty()) hidden @endif>
        No articles found.
    </p>
@endsection

@push('scripts')
    <script>
        const search = document.getElementById('search');
        const articles = document.querySelectorAll('.article-item');
        const noResults = document.getElementById('no-results');

        search.addEventListener('input', () => {
            const keyword = search.value.trim().toLowerCase();
            let visibleCount = 0;

            articles.forEach((article) => {
                const title = article.dataset.title.toLowerCase();
                const matches = title.includes(keyword);

                article.hidden = !matches;

                if (matches) {
                    visibleCount++;
                }
            });

            noResults.hidden = visibleCount > 0;
        });
    </script>
@endpush