<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Tutti gli articoli</h1>
            </div>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                @foreach ($articles as $article)
                    <div class="col-12 col-md-6 p-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text">{{ $article->subtitle }}</p>
                                <p>{{ $article->body }}</p>
                                <a class="btn btn-primary" href="{{ route('article.edit', $article) }}">Modifica</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
</x-layout>
