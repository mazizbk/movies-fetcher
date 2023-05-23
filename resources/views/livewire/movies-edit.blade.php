<div class="container">
    <h1>Modification</h1>



    <form wire:submit.prevent="update">
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" class="form-control" id="title" wire:model="title">
            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="overview">Resumé</label>
            <textarea class="form-control" id="overview" rows="4" wire:model="overview"></textarea>
        </div>


        <button type="submit" class="btn">Valider</button>
    </form>
</div>
