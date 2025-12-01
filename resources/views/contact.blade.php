@extends('layouts.app')

@section('content')
<!-- Contact Form -->
<div class="contact-box">
    <h2 class="text-center mb-4"><i class="fa-solid fa-envelope"></i> Contact Us</h2>

    <p class="text-center mb-4">
        Have questions, suggestions, or want to get in touch?  
        Feel free to send us a message!
    </p>

    <form>
        <div class="mb-3">
            <label class="form-label">Your Name</label>
            <input type="text" class="form-control" placeholder="Enter your name">
        </div>

        <div class="mb-3">
            <label class="form-label">Your Email</label>
            <input type="email" class="form-control" placeholder="Enter your email">
        </div>

        <div class="mb-3">
            <label class="form-label">Message</label>
            <textarea class="form-control" rows="5" placeholder="Type your message"></textarea>
        </div>

        <button class="btn btn-primary w-100"><i class="fa-solid fa-paper-plane"></i> Send Message</button>
    </form>

    <hr class="my-4">

    <h5><i class="fa-solid fa-phone"></i> Contact Info</h5>
    <p>Email: yourblog@gmail.com</p>
    <p>Facebook: fb.com/yourblog</p>
    <p>Instagram: @yourblog</p>
</div>
@endsection
