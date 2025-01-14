<div class="row justify-content-around">
    <div class="col-12 w-100">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <form class="p-5 shadow rounded" wire:submit="store">
            <div class="mb-3 ">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" wire:model.live.debounce.2000ms='title'>
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="subtitle" class="form-label">Sottotitolo</label>
                <input type="text" class="form-control" id="subtitle" wire:model.live.debounce.2000ms='subtitle'>
                @error('subtitle')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Corpo</label>
                <textarea class="form-control" id="body" wire:model.live.debounce.2000ms='body'></textarea>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Inserisci articolo</button>
        </form>
    </div>
    <div class="container col-md-12 my-3">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Article Preview</h5>
            </div>
            <div class="card-body">
                @if ($title || $subtitle || $body)
                    <article class="preview-content">
                        @if ($title)
                            <h1 class="display-4 mb-3">{{ $title }}</h1>
                        @endif
                        @if ($subtitle)
                            <h2 class="h4 text-muted mb-4">{{ $subtitle }}</h2>
                        @endif

                        @if ($body)
                            <div class="lead preview-body">
                                {{ $body }}
                            </div>
                        @endif
                        <button type="submit" class="btn btn-primary">Read more!</button>
                    </article>
                @else
                    <div class="text-center text-muted py-5">
                        <i class="fas fa-pen mb-3"></i>
                        <p>Start typing to see the preview</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
