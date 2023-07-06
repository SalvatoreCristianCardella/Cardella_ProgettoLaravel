<div>
    <form wire:submit.prevent="store()">
        <div class="mb-3">
            <label for="title" class="form-label">Title {{ $title }}</label>
            <input type="text" class="form-control" wire:model="title">
            @error('title') <span class="text-danger fst-italic">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body {{ $body }}</label>
            <textarea id="" cols="30" rows="10" class="form-control" wire:model="body"></textarea>
            @error('body') <span class="text-danger fst-italic">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-success" >Crea</button>
    </form>
</div>
