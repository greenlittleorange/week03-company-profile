@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Welcome to MyCompany</h1>
    <p style="font-size: 1.2rem; color: #555; margin-bottom: 30px;">Building the future, one solution at a time.</p>
    
    <div class="grid-3">
        <div class="card">
            <div class="icon">🚀</div>
            <h3>Web Development</h3>
            <p>Custom web applications built with modern technologies.</p>
        </div>
        <div class="card">
            <div class="icon">📱</div>
            <h3>Mobile Development</h3>
            <p>Native and cross-platform mobile applications.</p>
        </div>
        <div class="card">
            <div class="icon">🎨</div>
            <h3>UI/UX Design</h3>
            <p>Beautiful, intuitive user interfaces.</p>
        </div>
    </div>
    
    <div style="text-align: center; margin-top: 30px;">
        <a href="{{ route('services') }}" class="btn">View Our Services</a>
    </div>
@endsection