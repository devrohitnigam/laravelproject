<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            display: flex;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background: #212529;
            color: #fff;
            position: fixed;
        }

        .sidebar h4 {
            padding: 15px;
            border-bottom: 1px solid #444;
        }

        .sidebar a {
            display: block;
            padding: 12px 15px;
            color: #adb5bd;
            text-decoration: none;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #343a40;
            color: #fff;
        }

        .content {
            margin-left: 220px;
            width: 100%;
        }

        .topbar {
            background: #f8f9fa;
            padding: 12px 20px;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>

    @include('admin.partials.sidebar')

    <div class="content">
        @include('admin.partials.header')

        <div class="p-4">

            {{-- Messages --}}
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @yield('content')

        </div>
    </div>

</body>
</html>