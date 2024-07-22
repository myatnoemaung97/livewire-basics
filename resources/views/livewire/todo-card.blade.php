<article class="todo-card shadow-sm p-3 mb-3 d-flex justify-content-between {{ $todo->completed ? 'completed' : '' }}">
    <div>
        <div class="d-flex align-items-center gap-2 mb-2">
            @if($edit)
                <div class="d-flex flex-column">
                    <input class="form-control" wire:model.live="editName">
                    @error('editName')
                    <p class="error-message mt-1">{{ $message }}</p>
                    @enderror
                </div>
            @else
                <input wire:click="toggleCompleted"
                       type="checkbox" {{ $todo->completed ? 'checked' : '' }}>
                <p class="m-0">{{ $todo->name }}</p>
            @endif
        </div>
        <p class="text-secondary" style="font-size: 12px;">{{ $todo->created_at }}</p>
        @if($edit)
            <button type="button" wire:click="update" class="btn btn-sm btn-success">Update</button>
            <button type="button" wire:click="cancelEdit" class="btn btn-sm btn-danger">Cancel</button>
        @endif
    </div>
    <div>
        <button wire:click="editTodo" type="button" class="icon-btn">
            <i class="fa-solid fa-pen-to-square"></i>
        </button>
        <button wire:click="$parent.delete({{ $todo->id }})" type="button" class="icon-btn">
            <i class="fa-solid fa-trash ms-2 text-danger"></i>
        </button>
    </div>
</article>
