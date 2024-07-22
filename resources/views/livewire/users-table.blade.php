<div wire:poll>
    <h3>Users List</h3>
    <table class="table shadow-sm">
        <thead>
            <tr class="table-light">
                <th>Name</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr wire:key="{{ $user->id }}">
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <button @click="$dispatch('open-modal', { id : {{ $user->id }} })" class="btn btn-sm btn-success">View</button>
                    </td>
                </tr>
                <x-modal :id="$user->id" :title="$user->name">
                    <p>Name: {{ $user->name }}</p>
                    <p>Email: {{ $user->email }}</p>
                    <p>Created: {{ $user->created_at }}</p>
                    <p>Updated: {{ $user->updated_at }}</p>
                </x-modal>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>

