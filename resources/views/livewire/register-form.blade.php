<div class="d-flex justify-content-center align-items-center">
    <form wire:submit="store" class="shadow p-4" style="width: 400px; border-top: 3px solid blue;">
        <h1 class="fs-3">Create An Account</h1>
        @if(session('success'))
            <p class="text-success">{{ session('success') }}</p>
        @endif
        <label class="mt-4" for="name">Name</label>
        <input wire:model.live="form.name" class="form-control" type="text" id="name" name="name">
        @error('form.name')
        <p class="error-message">{{ $message }}</p>
        @enderror

        <label class="mt-4" for="email">Email</label>
        <input wire:model.live="form.email" class="form-control" type="email" id="email" name="email">
        @error('form.email')
        <p class="error-message">{{ $message }}</p>
        @enderror

        <label class="mt-4" for="password">Password</label>
        <input wire:model.live="form.password" class="form-control" type="password" id="password" name="password">
        @error('form.password')
        <p class="error-message">{{ $message }}</p>
        @enderror

        @if($form->image)
                <?php
                try {
                    $tempUrl = $form->image->temporaryUrl();
                } catch (Exception $e) {
                    $tempUrl = '';
                }
                ?>
            <img @class(['d-none' => !$tempUrl]) src="{{ $tempUrl }}"
                 style="width: 100px; height: 100px; margin-top: 15px;">
        @endif

        <p wire:loading wire:target="image" class="text-success">Uploading...</p>
        <div>
            <label class="mt-4" for="image">Profile Picture</label>
            <input wire:model.live="form.image" class="form-control" type="file" accept=".jpg, .jpeg, .png" id="image"
                   name="image">
            @error('form.image')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div class="d-flex align-items-center mt-3 gap-2">
            <button wire:loading.disabled class="btn btn-success" type="submit">Create</button>
            <span wire:loading.delay class="text-primary m-0"><i class="fa-solid fa-spinner fa-spin fa-spin-reverse"></i></span>
        </div>
    </form>
</div>
