<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bootstrap Page Layout</title>
<!-- Include Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
<style>
    body{
        font-family: "Josefin Sans", sans-serif;
    }
    :root {
        --primary-color: #6610f2; /* Custom primary color */
        --secondary-color: #ffc107; /* Custom secondary color */
        --primary-hover-color: #8a2be2;
        --secondary-hover-color: #ffd700;
    }
    .navbar {
            background-color: var(--primary-color) !important;
            }
    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }
    .btn-primary:hover {
        background-color: var(--primary-hover-color);
    }
    .btn-secondary {
        background-color: var(--secondary-color);
        border-color: var(--secondary-color);
    }
    .btn-secondary:hover {
        background-color: var(--secondary-hover-color);
    }
</style>
</head>
<body>
<!-- Header -->
<header class="bg-dark text-light py-2">
    <div class="container">
    <h1>{{ $header ?? 'Header'}}</h1>
    </div>

</header>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<a class="navbar-brand" href="#">Navbar</a>
</nav>

<!-- Main Content Section -->
<div class="container mt-4">
<div class="row">
<div class="col-md-8">
{{ $slot }}
<button class="btn btn-primary">Primary</button>
<button class="btn btn-secondary">Secondary</button>
</div>
<div class="col-md-4">
<h3>Sidebar</h3>
<p>This is the sidebar content.</p>
</div>
</div>
</div>

<!-- Footer -->
<footer class="bg-dark text-light text-center py-3">
<p>&copy; 2022 Your Company</p>
</footer>

<!-- Include Bootstrap JS (optional, for certain components) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>