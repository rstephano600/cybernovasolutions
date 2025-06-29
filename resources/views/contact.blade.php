@extends('layouts.app')

@section('content')

<div class="container">


    <form action="#" method="POST" class="border" style="padding:2rem;">

    <h2>Contact Us</h2>
    <p>If you’d like to get in touch, feel free to email me or use the form below:</p>

        @csrf
        <div class="form-floating mb-3">
        <input type="text" class="form-control" id="name" name="name" required>
        <label for="name" >Name:</label>
        </div>

        <div class="form-floating mb-3">
        <input type="email" class="form-control" id="email" name="email" required>
        <label for="email" >Email:</label>
        </div>

        <div class="form-floating mb-3">
        <textarea id="message" class="form-control" name="message" rows="5" required></textarea>
        <label for="message" >Message:</label>
         </div>

        <button type="submit" class="btn-cta">Send Message</button>
    </form>


         </div>


@endsection
