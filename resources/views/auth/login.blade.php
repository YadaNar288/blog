
@extends('layouts.app')

@section('content')
<div class="container mt-5" style="max-width: 450px;">
    <div class="card p-4 shadow">
        <h3 class="text-center mb-3">Login</h3>

        @if ($errors->any())
            <div class="alert alert-danger">Invalid login details</div>
        @endif

        <form method="POST" action="/login">
            @csrf

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <button class="btn btn-primary w-100"><i class="fa-solid fa-arrow-right-to-bracket"></i>&nbsp;Login</button>

            <p class="text-center mt-3">
                Don't have an account? <a href="/register">Register</a>
            </p>
        </form>
    </div>
</div>
@endsection
