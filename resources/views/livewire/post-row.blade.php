<tr @class(['table-secondary' => $post->is_archived])>
    <td>{{ $post->id }}</td>
    <td>{{ $post->name }}</td>
    <td>{{ str($post->content)->words(5) }}</td>
    <td>
        @unless($post->is_archived)
            <button wire:click="archive" wire:confirm="Sure?" type="button">archive</button>
        @endunless

        <button type="button" wire:click="$parent.delete({{$post}})"
                wire:confirm="Are you sure you want to delete this post?">
            delete
        </button>
    </td>
</tr>
