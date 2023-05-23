<div style="padding: 10%;">
   

    <form wire:submit.prevent="save">
        <div class="form-group">
            <label for="title">Titre:</label>
            <input type="text" wire:model="title" class="form-control">
            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="overview">Resumé:</label>
            <textarea wire:model="overview" class="form-control"></textarea>
        </div>


        <button type="submit" class="btn">Enregistrer</button>
    </form>
</div>
