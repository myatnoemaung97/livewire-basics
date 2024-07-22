<div>
    Counter: {{ $count }}
    <button wire:click="decrement">-</button>
    <button wire:click="increment">+</button>
    <button wire:click="increment(5)">+5</button>
    <input wire:model.live="name" type="text" placeholder="name...">
    <p>{{ $name }}</p>
</div>
