@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <h1>Contact Us</h1>
    
    <div class="grid-2">
        <!-- Contact Form -->
        <div>
            <h3>Send Us a Message</h3>
            <form>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" placeholder="your@email.com">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea placeholder="Your message..."></textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
        
        <!-- Contact Information -->
        <div>
            <h3>Get in Touch</h3>
            <div style="background: #f9f9f9; padding: 25px; border-radius: 8px;">
                <p><strong>📍 Address:</strong> 123 Main Street, City, Country</p>
                <p><strong>📞 Phone:</strong> +1 (555) 123-4567</p>
                <p><strong>📧 Email:</strong> info@mycompany.com</p>
                <p><strong>🌐 Website:</strong> www.mycompany.com</p>
            </div>
            
            <div style="margin-top: 30px;">
                <h4>Follow Us</h4>
                <div style="display: flex; gap: 15px; margin-top: 10px;">
                    <a href="#" style="color: #1a1a2e; text-decoration: none; background: #f9f9f9; padding: 10px 15px; border-radius: 5px;">📘 Facebook</a>
                    <a href="#" style="color: #1a1a2e; text-decoration: none; background: #f9f9f9; padding: 10px 15px; border-radius: 5px;">🐦 Twitter</a>
                    <a href="#" style="color: #1a1a2e; text-decoration: none; background: #f9f9f9; padding: 10px 15px; border-radius: 5px;">🔗 LinkedIn</a>
                </div>
            </div>
        </div>
    </div>
@endsection