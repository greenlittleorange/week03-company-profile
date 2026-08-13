<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Company Profile')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        /* Navigation */
        nav {
            background: #1a1a2e;
            color: white;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #e94560;
            text-decoration: none;
        }
        .nav-links a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            padding: 8px 12px;
            border-radius: 4px;
            transition: background 0.3s;
        }
        .nav-links a:hover {
            background: #e94560;
        }
        .nav-links a.active {
            background: #e94560;
        }
        /* Main Content */
        .main-content {
            flex: 1;
            padding: 40px 0;
        }
        .content-box {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            min-height: 400px;
        }
        /* Footer */
        footer {
            background: #1a1a2e;
            color: #aaa;
            padding: 30px 0;
            margin-top: 40px;
            text-align: center;
        }
        footer .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        .social-links a {
            color: #aaa;
            text-decoration: none;
            margin-left: 15px;
            transition: color 0.3s;
        }
        .social-links a:hover {
            color: #e94560;
        }
        .btn {
            display: inline-block;
            background: #e94560;
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #c73e54;
        }
        h1 {
            color: #1a1a2e;
            margin-bottom: 20px;
        }
        h3 {
            color: #1a1a2e;
            margin-bottom: 10px;
        }
        .grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin: 20px 0;
        }
        .grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin: 20px 0;
        }
        .card {
            background: #f9f9f9;
            padding: 25px;
            border-radius: 8px;
            text-align: center;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card .icon {
            font-size: 3rem;
            margin-bottom: 10px;
        }
        .service-icon {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        .form-group textarea {
            min-height: 120px;
        }
        .team-member {
            background: #f9f9f9;
            padding: 15px;
            text-align: center;
            border-radius: 8px;
        }
        @media (max-width: 768px) {
            .grid-3, .grid-2 {
                grid-template-columns: 1fr;
            }
            .nav-links a {
                margin-left: 10px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="container">
            <a href="{{ route('home') }}" class="logo">MyCompany</a>
            <div class="nav-links">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <div class="content-box">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div>
                <p>&copy; 2026 MyCompany. All rights reserved.</p>
            </div>
            <div class="social-links">
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
                <a href="#">LinkedIn</a>
                <a href="#">Instagram</a>
            </div>
        </div>
    </footer>
</body>
</html>