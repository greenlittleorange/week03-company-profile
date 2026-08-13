# Week 03 - Company Profile Website

A multi-page company profile website built using Laravel's MVC architecture.

---

## Introduction

A Company Profile Website is a professional online presence that showcases a company's services, history, mission, and contact information. Businesses need these websites to establish credibility, attract customers, and provide essential information to stakeholders.

This project demonstrates Laravel's MVC architecture by implementing routes, controllers, and Blade templates to create a clean, maintainable web application.

---

## Objectives

1. Implement Laravel's MVC architecture in a real-world project
2. Create multiple application routes for different pages
3. Build reusable Blade layouts and components
4. Connect routes to controllers using proper naming conventions
5. Understand separation of concerns in web development
6. Apply professional Git version control practices

---

## MVC Architecture

MVC (Model-View-Controller) is a software design pattern that separates an application into three interconnected components:

- **Model**: Handles data and business logic
- **View**: Manages the user interface and presentation
- **Controller**: Processes user input and coordinates between Model and View

### Why Laravel uses MVC:
- **Separation of Concerns**: Each component has a specific responsibility
- **Maintainability**: Code is organized and easy to update
- **Reusability**: Components can be reused across the application
- **Scalability**: Applications can grow without becoming chaotic

### MVC Flow Diagram: [Client Request] → [Router] → [Controller] → [View] → [Response]


---

## Laravel Routing

Routing maps URLs to specific controllers and methods.

### Routes Implemented:

```php
Route::get('/', [CompanyController::class, 'home'])->name('home');
Route::get('/about', [CompanyController::class, 'about'])->name('about');
Route::get('/services', [CompanyController::class, 'services'])->name('services');
Route::get('/contact', [CompanyController::class, 'contact'])->name('contact');

Controllers
Controllers handle user requests and return appropriate responses.

CompanyController Methods:
Method	Purpose
home()	Returns the Home page view
about()	Returns the About page view
services()	Returns the Services page view
contact()	Returns the Contact page view
Code:
php
public function home()
{
    return view('pages.home');
}

Blade Templating Engine
Blade is Laravel's powerful templating engine.

Key Features Used:
Feature	Purpose
@extends('layouts.app')	Inherits from the main layout
@section('title')	Defines a section for the page title
@yield('content')	Renders page-specific content
@section('content')	Defines the main content area
{{ route('home') }}	Generates URLs using route names
Layout Structure:
text
layouts/app.blade.php (Master Layout)
    ├── @yield('title')
    ├── Navigation Bar (reusable)
    ├── @yield('content')
    └── Footer (reusable)
Laravel Folder Structure
Folder	Purpose
app/	Contains Models, Controllers, and core application code
routes/	Defines application routes (web.php, api.php)
resources/	Contains views (Blade templates), CSS, and JavaScript
public/	Public-facing files (index.php, assets)
bootstrap/	Framework bootstrapping files
config/	Application configuration files
Screenshots
Home Page
https://screenshots/homepage.png

About Page
https://screenshots/about-page.png

Services Page
https://screenshots/services-page.png

Contact Page
https://screenshots/contact-page.png

Navigation Bar
https://screenshots/navigation.png

Footer
https://screenshots/footer.png

Problems Encountered
Problem 1: Route Not Found Error
Description: Trying to access /about resulted in a 404 error.

Problem 2: View Not Found Error
Description: Controller couldn't find pages.about view.

Problem 3: Controller Namespace Issues
Description: Controller wasn't being found by the route.

Problem 4: Blade Syntax Error
Description: Missing @endsection or @stop in Blade templates.

Solutions
Solution 1: Route Not Found
Verified that routes were defined in routes/web.php

Ensured correct controller method names

Used php artisan route:list to check registered routes

Solution 2: View Not Found
Created the missing Blade template files

Ensured correct folder structure (resources/views/pages/)

Verified view names matched controller returns

Solution 3: Controller Namespace
Added use App\Http\Controllers\CompanyController; in routes file

Used proper syntax: [CompanyController::class, 'method']

Solution 4: Blade Syntax
Ensured all sections were properly closed with @endsection

Verified correct matching of @section and @yield names

Reflection

What I Learned About MVC
Throughout the development of this Company Profile Website, I gained a deep understanding of Laravel's Model-View-Controller (MVC) architecture. Before this project, MVC was just a theoretical concept I read about in textbooks. Now, I have actually implemented it in a real-world application, and the difference is night and day.

The most important thing I learned is that MVC is not just about separating code into different folders—it's about separating responsibilities. Each component has a specific job:

Routes (routes/web.php) act as the traffic controller, directing incoming HTTP requests to the right destination.

Controllers (like CompanyController) act as the middleman, processing the request, fetching any necessary data, and deciding which view to return.

Views (like home.blade.php and about.blade.php) are solely responsible for presenting the user interface.

I used to write all my PHP code mixed with HTML in a single file. It was messy, hard to debug, and nearly impossible to maintain. Now, I understand why Laravel and other modern frameworks enforce this separation. It makes the development process cleaner, more organized, and much easier to debug when something goes wrong.

Why Separation of Concerns is Important
The concept of "Separation of Concerns" is something I now fully appreciate. In this project, I saw firsthand how keeping business logic (controllers), data handling (models), and presentation (views) separate makes development more efficient.

For example, when I needed to add a new page to the website, I didn't have to dig through hundreds of lines of code. I just:

Added a new route (/contact)

Created a new method in the controller (contact())

Created a new Blade view (contact.blade.php)

That's it! Because everything was separated, the process was clean and straightforward.

Without separation of concerns, making even a small change would be risky. You might accidentally break something unrelated. But with MVC, you know exactly where to look and where to make changes. This is especially important when working in teams—multiple developers can work on different parts of the application without stepping on each other's toes.

How Routes, Controllers, and Views Work Together
The request lifecycle in Laravel is something I now understand clearly. Here's how the three components work together:

1. The Request Arrives
When a user visits http://127.0.0.1:8000/about, the browser sends an HTTP GET request to the Laravel application.

2. The Router Takes Over
Laravel looks at routes/web.php and finds: Route::get('/about', [CompanyController::class, 'about']). The router knows that any request to /about should be handled by the about() method in CompanyController.

3. The Controller Processes the Request
The about() method is executed. In my case, it simply returns a view: return view('pages.about');. In a more complex application, this method might also fetch data from a database (using a Model) before returning the view.

4. The View is Rendered
Laravel finds the Blade template at resources/views/pages/about.blade.php, processes any Blade directives (like @extends and @section), and generates pure HTML.

5. The Response is Sent Back
The HTML is sent back to the user's browser, where it is rendered as a beautiful Company Profile website.

This flow is elegant and logical. Once you understand it, building Laravel applications becomes much easier.

How This Architecture Applies to Larger Enterprise Systems
While this project is relatively small, the MVC architecture scales beautifully to enterprise-level applications. In large systems with hundreds of pages, thousands of users, and complex business logic, organization is everything.

Maintainability
In enterprise systems, code is constantly changing. New features are added, bugs are fixed, and requirements evolve. MVC makes these changes manageable because developers know exactly where to look. If a database query needs to be updated, you look at the Model. If the user interface needs a redesign, you look at the Views. This reduces the risk of introducing new bugs.

Testability
MVC makes testing easier. You can test the business logic in controllers and models independently from the presentation layer. This is crucial for enterprise applications where reliability is critical.

Team Development
In a large company, dozens or even hundreds of developers might work on the same codebase. MVC allows teams to work in parallel. One team can work on the frontend views, another team can work on the backend controllers and models, and they can integrate their work without major conflicts.

Scalability
As the application grows, MVC allows you to add new features without rewriting existing ones. You can add new controllers, new models, and new views without touching the existing code. This is why Laravel is used by companies like 9GAG, BBC, and many others for their large-scale applications.

Conclusion
This project was a turning point in my understanding of web development. I moved from writing spaghetti code to building organized, maintainable applications using Laravel's MVC architecture. I learned that separation of concerns is not just a best practice—it's essential for building software that can grow and evolve over time.

I now feel confident that I can apply this knowledge to larger, more complex projects. Whether it's an e-commerce platform, a content management system, or a custom enterprise application, I know that MVC provides a solid foundation for building maintainable, scalable, and testable software.

This experience has made me a better developer, and I'm excited to continue my journey with Laravel and client-server technologies.

References
Laravel. (n.d.). Laravel Documentation. https://laravel.com/docs

PHP Group. (n.d.). PHP Documentation. https://www.php.net/docs.php

MDN Web Docs. (n.d.). HTML & CSS Documentation. https://developer.mozilla.org

Bootstrap. (n.d.). Bootstrap Documentation. https://getbootstrap.com/docs