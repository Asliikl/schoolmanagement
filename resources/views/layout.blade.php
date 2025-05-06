<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

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
        <a class="navbar-brand" href="#">Course Management Project</a>
        <div class="d-flex ms-auto">
            @auth
                <span class="navbar-text me-3">
                    <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
                </span>
            @endauth
        </div>
    </div>
</nav>

<div class="d-flex">
    <div id="sidebar">
        <ul class="nav flex-column px-3">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/students') }}">Student</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/teachers') }}">Teacher</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/courses') }}">Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/batches') }}">Batches</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/enrollments') }}">Enrollment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/payments') }}">Payment</a>
            </li>

            @auth
                <li class="nav-item" style="margin-top: 20px;">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm w-100">Logout</button>
                    </form>
                </li>
            @endauth

            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            @endguest
        </ul>
    </div>

    <div class="main-content col-md-8">
        @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
