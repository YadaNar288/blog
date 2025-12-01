@extends('layouts.app')

@section('content')
<div class="container mt-5" style="max-width: 500px;">
    <div class="card p-4 shadow">
        <h3 class="text-center mb-3">Create Account</h3>

        @if ($errors->any())
            <div class="alert alert-danger">Please fix the errors!</div>
        @endif

        <form method="POST" action="/register">
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <button class="btn btn-success w-100"><i class="fas fa-user-plus"></i>&nbsp;Register</button>

            <p class="text-center mt-3">
                Already have an account? <a href="/login">Login</a>
            </p>
        </form>
    </div>
</div>
@endsection
