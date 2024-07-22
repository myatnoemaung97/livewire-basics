<div class="todo">
    @if(session('success'))
        <div id="flash-message" class="flash-message success-flash-message">{{ session('success') }}</div>
    @endif
    <div class="todo-form shadow-sm mb-4 p-3">
        <h1 class="fs-3 mb-3">Create Todo</h1>
        <form wire:submit="save">
            <label for="name">Name</label>
            <input class="form-control" type="text" id="name" name="name" wire:model.live="name">
            @error('name')
            <p class="fs-6 text-danger">{{ $message }} dsdfsdf</p>
            @enderror

            <div wire:offline.remove>
                <button class="btn btn-primary mt-3">Create</button>
            </div>
            <div wire:offline>
                <div class="alert alert-danger mt-3" role="alert">
                    No Internet! Internet Required.
                </div>
            </div>
        </form>
    </div>

    <div class="d-flex align-items-center justify-content-center gap-2 mb-4">
        <label for="search">Search</label>
        <input wire:model.live="search" class="form-control" type="text" id="search" name="search"
               style="width: 300px;">
    </div>

    @foreach($todos as $todo)
        <livewire:todo-card wire:key="{{ $todo->id }}" :todo="$todo"/>
    @endforeach
    {{ $todos->links() }}
</div>
@script
<script>
    const flashMessage = document.getElementById('flash-message');
    console.log(flashMessage);

    if (flashMessage) {
        setTimeout(() => {
            flashMessage.remove();
        }, 2000)
    }
</script>
@endscript
