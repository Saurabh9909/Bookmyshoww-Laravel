@extends('client.layouts.client_main')
@section('header-link')
    <style>
        .contact-form {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            margin-top: 60px;
            margin-bottom: 30px;
        }

        .contact-form h2 {
            margin-bottom: 20px;
            font-weight: bold;
            color: #df0e62;
            font-size: 28px;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 10px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: rgba(223, 14, 98, 0.784);
            box-shadow: 0 0 5px rgba(223, 14, 98, 0.784);
        }

        .form-label {
            font-weight: 600;
            color: #000;
        }

        input::placeholder {
            font-family: 'Arial Narrow', Arial, sans-serif;
            font-size: 14px
        }

        textarea::placeholder {
            font-family: 'Arial Narrow', Arial, sans-serif;
            font-size: 14px
        }

        .btn-primary {
            background-color: #df0e62b9;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #df0e62;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .contact-form .form-group input {
            border-color: #df0e62;
            border: 2px solid #df0e62;
            color: #000;
            font-size: 16px;
        }

        .contact-form .form-group textarea {
            border-color: #df0e62;
            border: 2px solid #df0e62;
            color: #000;
            font-size: 16px;
        }
    </style>
@endsection
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="contact-form">
                    <h2 class="text-center">Contact Us</h2>
                    <form>
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" placeholder="Enter subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Enter your message" required></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
