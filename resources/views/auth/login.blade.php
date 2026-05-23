@extends('layouts.auth')

@section('content')

<div class="d-flex justify-content-center align-items-center vh-100 bg-light">

    <div class="card shadow-lg border-0" style="width: 420px; border-radius: 12px;">

        <div class="card-body p-4">

            <h3 class="text-center mb-4 fw-bold">Welcome {{ config('app.name') }}</h3>
            <p class="text-center text-muted mb-4">Login to your account</p>

            {{-- Messages --}}
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter email" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Enter password" required>
                </div>

                <div class="d-flex justify-content-between mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>

                    <a href="#" class="text-decoration-none small">Forgot Password?</a>
                </div>

                <button type="submit" class="btn btn-primary w-100 btn-lg">
                    Login
                </button>

                <div class="text-center mt-3">
                    <small>Don't have an account? <a href="{{ route('register') }}">Register</a></small>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection