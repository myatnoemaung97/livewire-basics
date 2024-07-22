<div>
    @if(session('success'))
        <div id="flash-message" class="flash-message success-flash-message">{{ session('success') }}</div>
    @endif
    <h1>Posts</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Content</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <livewire:post-row :key="$post->id" :$post/>
        @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-between">
        <a href="/posts/create">Create Post</a>
        {{ $posts->links() }}
    </div>


</div>
<script>
    const flashMessage = document.getElementById('flash-message');
    console.log(flashMessage);

    if (flashMessage) {
        setTimeout(() => {
            flashMessage.remove();
        }, 2000)
    }
</script>

