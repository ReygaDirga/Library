<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
</head>
<body>
<div class="d-flex">
    <div class="sidebar p-3">
        <h4 class="text-primary mb-4">📚 Perpustakaan</h4>
        <a href="#">Category</a>
        <a href="#">My Library</a>
        <a href="#">Favourite</a>
        <hr>
        <a href="#">Settings</a>
        <a href="#">Support</a>
        <a href="#">Logout</a>
    </div>
    <div class="flex-grow-1 p-4">
        @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
