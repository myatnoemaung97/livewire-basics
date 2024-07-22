<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>{{ $title ?? 'Page Title' }}</title>
    <script src="https://kit.fontawesome.com/807f2d6ec6.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="side-nav">
    <a wire:navigate href="/" @class(['current' => request()->is('/')])>Time</a>
    <a wire:navigate href="/counter" @class(['current' => request()->is('counter')])>Counter</a>
    <a wire:navigate href="/posts" @class(['current' => request()->is('posts')])>Posts</a>
    <a wire:navigate href="/todos" @class(['current' => request()->is('todos')])>Todos</a>
    <a wire:navigate href="/register" @class(['current' => request()->is('register')])>Register</a>
    <a wire:navigate href="/modals" @class(['current' => request()->is('modals')])>Modals</a>
</nav>
    <div class="d-flex justify-content-evenly align-items-center" style="margin-left: 100px;">
        <livewire:users-table />
        <livewire:register-form />
    </div>

<script src="/script.js"></script>
</body>
</html>
