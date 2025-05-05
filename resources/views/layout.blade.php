<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        #sidebar {
            width: 250px;
            min-height: 100vh;
            background-color: #343a40;
            padding-top: 20px;
        }
        #sidebar .nav-link {
            color: white;
        }
        #sidebar .nav-link:hover {
            background-color: #495057;
        }

    </style>
    @stack('css')

</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><h3>Student Management Project</h3></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<div class="d-flex">
    <div id="sidebar">
        <ul class="nav flex-column px-3">
            <li class="nav-item">
                <a class="nav-link active" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/students')}}">Student</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/teachers')}}">Teacher</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/enrollments')}}">Enrollment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/payments')}}">Payment</a>
            </li>
        </ul>
    </div>

    <div class="main-content col-md-8">
       @yield('content')
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
