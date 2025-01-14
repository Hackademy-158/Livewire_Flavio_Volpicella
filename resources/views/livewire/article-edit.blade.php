<div>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <form class="p-5 shadow rounded" wire:submit="update">
        <div class="mb-3 ">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" wire:model.live='title'>
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Sottotitolo</label>
            <input type="text" class="form-control" id="subtitle" wire:model.live='subtitle'>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Corpo</label>
            <textarea class="form-control" id="body" wire:model.live='body'></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Modifica articolo</button>
        <a wire:click="destroy" class="btn btn-primary">Elimina</a>
    </form>
</div>
