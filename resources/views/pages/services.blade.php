@extends('layouts.app')

@section('title', 'Our Services')

@section('content')
    <h1>Our Services</h1>
    <p style="color: #555; margin-bottom: 30px;">We offer a wide range of technology solutions to meet your business needs.</p>

    <div class="grid-3">
        <!-- Service 1 -->
        <div class="card">
            <div class="service-icon">💻</div>
            <h3>Web Development</h3>
            <p>Custom web applications using Laravel, React, Vue, and other modern technologies.</p>
        </div>
        
        <!-- Service 2 -->
        <div class="card">
            <div class="service-icon">📱</div>
            <h3>Mobile Development</h3>
            <p>Native iOS and Android apps, as well as cross-platform solutions using Flutter and React Native.</p>
        </div>
        
        <!-- Service 3 -->
        <div class="card">
            <div class="service-icon">🎨</div>
            <h3>UI/UX Design</h3>
            <p>User-centered design solutions that deliver intuitive and engaging experiences.</p>
        </div>
        
        <!-- Service 4 -->
        <div class="card">
            <div class="service-icon">☁️</div>
            <h3>Cloud Solutions</h3>
            <p>Cloud migration, architecture, and management services on AWS, Azure, and Google Cloud.</p>
        </div>
        
        <!-- Service 5 -->
        <div class="card">
            <div class="service-icon">🔒</div>
            <h3>Cybersecurity</h3>
            <p>Security assessments, penetration testing, and security architecture design.</p>
        </div>
        
        <!-- Service 6 -->
        <div class="card">
            <div class="service-icon">📊</div>
            <h3>IT Consulting</h3>
            <p>Expert IT strategy, architecture reviews, and technology roadmap development.</p>
        </div>
    </div>
@endsection