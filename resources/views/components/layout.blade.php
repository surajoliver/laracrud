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
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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

    a {
        color: var(--primary-color);
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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/users">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/products">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/users">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/categories">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/tutorials">Tutorials</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Main Content Section -->
<div class="container mt-4">
    <div class="row">
        {{ $slot }}
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-light text-center py-3">
<p>&copy; 2024 <a class="text-light" href="https://www.simplifiedstrat.com">SimplifiedStrat</a></p>
</footer>

<!-- Include Bootstrap JS (optional, for certain components) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>
</body>
</html>