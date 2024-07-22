<div>

    <h1>New Post:</h1>
    <form wire:submit="save">
        <p>Current Name: <span x-text="$wire.name"></span></p>

        <label for="name">Name</label>
        <input class="form-control" id="name" name="name" type="text" wire:model.blur="name">
        @error('name')
        <small>{{ $message }}</small>
        @enderror

        <br>

        <label for="content">Content</label>
        <textarea class="form-control" name="content" id="content" wire:model.blur="content"></textarea>
        <small>Characters: <span x-text="$wire.content.length"></span></small>
        @error('content')
        <small>{{ $message }}</small>
        @enderror

        <br>
        <button type="submit">Create</button>
    </form>
</div>
