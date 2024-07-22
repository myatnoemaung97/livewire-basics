@props(['title', 'id'])

<div class="modal-container"
     x-data="{ open: false, id: '{{ $id }}' }"
     x-show="open"
     @open-modal.window="event.detail.id == id ? open=true : '' "
     @close-modal.window="open=false"
     @keyup.escape.window="open=false"
     x-transition
>
    <div @click.outside="open=false" class="--modal position-absolute top-50 start-50 translate-middle">
        <div class="border-bottom p-3 text-center">
            <button @click="$dispatch('close-modal')" class="btn btn-sm btn-danger float-end">X</button>
            <h1 class="fs-4">{{ $title ?? 'Title' }}</h1>
        </div>
        {{ $slot }}
    </div>
</div>

{{--position-absolute top-50 start-50 translate-middle--}}

