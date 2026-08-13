@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <h1>About MyCompany</h1>
    
    <div style="margin-bottom: 30px;">
        <h3>Our History</h3>
        <p>Founded in 2020, MyCompany started as a small team of passionate developers with a vision to transform businesses through technology. Over the years, we have grown into a trusted partner for companies across various industries.</p>
    </div>
    
    <div style="margin-bottom: 30px;">
        <h3>Our Mission</h3>
        <p>To deliver innovative technology solutions that empower businesses to grow, adapt, and thrive in the digital age.</p>
    </div>
    
    <div style="margin-bottom: 30px;">
        <h3>Our Vision</h3>
        <p>To be the leading technology partner for businesses worldwide, setting the standard for excellence in software development.</p>
    </div>
    
    <div style="margin-bottom: 30px;">
        <h3>Core Values</h3>
        <ul style="list-style: none; padding: 0; display: flex; gap: 20px; flex-wrap: wrap;">
            <li style="background: #f9f9f9; padding: 10px 20px; border-radius: 5px;">💡 Innovation</li>
            <li style="background: #f9f9f9; padding: 10px 20px; border-radius: 5px;">🤝 Integrity</li>
            <li style="background: #f9f9f9; padding: 10px 20px; border-radius: 5px;">⭐ Excellence</li>
            <li style="background: #f9f9f9; padding: 10px 20px; border-radius: 5px;">🤲 Collaboration</li>
        </ul>
    </div>

    <div>
        <h3>Meet Our Team</h3>
        <div class="grid-3">
            <div class="team-member">
                <p><strong>John Doe</strong></p>
                <p style="color: #666; font-size: 0.9rem;">CEO & Founder</p>
            </div>
            <div class="team-member">
                <p><strong>Jane Smith</strong></p>
                <p style="color: #666; font-size: 0.9rem;">Lead Developer</p>
            </div>
            <div class="team-member">
                <p><strong>Mike Johnson</strong></p>
                <p style="color: #666; font-size: 0.9rem;">UI/UX Designer</p>
            </div>
        </div>
    </div>
@endsection