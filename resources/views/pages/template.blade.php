<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} - Templates</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #0E3B1F;
        color: white;
    }

    /* Navbar */
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 2rem;
        background-color: #0E3B1F;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .navbar .logo {
        font-size: 1.5rem;
        font-weight: 700;
        color: #0CFE0C;
    }

    .navbar .nav-links {
        display: flex;
        gap: 2rem;
    }

    .navbar .nav-links a {
        color: white;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .navbar .nav-links a:hover {
        color: #0CFE0C;
    }

    .navbar .auth-links {
        display: flex;
        gap: 1rem;
    }

    .navbar .auth-links form {
        display: inline;
    }

    .navbar .auth-links button {
        background: none;
        border: none;
        color: white;
        font-weight: 500;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .navbar .auth-links button:hover {
        color: #0CFE0C;
    }

    /* Main Content */
    .main-content {
        text-align: center;
        padding: 3rem 2rem;
    }

    .main-content h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        text-transform: uppercase;
    }

    .main-content p {
        font-size: 1.2rem;
        font-weight: 300;
        margin-bottom: 2rem;
        opacity: 0.9;
    }

    /* Templates Section */
    .templates-section {
        display: flex;
        justify-content: center;
        gap: 2rem;
        flex-wrap: wrap;
        padding: 2rem;
    }

    .template-card {
        background: white;
        color: #333;
        width: 300px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
    }

    .template-card:hover {
        transform: translateY(-5px);
    }

    .template-card img {
        width: 100%;
        height: 400px;
        object-fit: cover;
    }

    .template-card .template-info {
        padding: 1rem;
        text-align: center;
    }

    .template-card .template-info h3 {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .template-card .template-info p {
        font-size: 0.9rem;
        color: #666;
    }

    .template-card .template-actions {
        display: flex;
        justify-content: center;
        gap: 1rem;
        padding: 1rem;
    }

    .template-card .template-actions button {
        background: linear-gradient(90deg, #0E3B1F, #26A155);
        color: white;
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .template-card .template-actions button:hover {
        background: linear-gradient(90deg, #26A155, #0E3B1F);
    }

    /* Pagination Dots */
    .pagination-dots {
        display: flex;
        justify-content: center;
        gap: 0.5rem;
        padding: 2rem 0;
    }

    .pagination-dots .dot {
        width: 10px;
        height: 10px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        cursor: pointer;
    }

    .pagination-dots .dot.active {
        background: #0CFE0C;
    }

    /* Footer */
    .footer {
        background: #0E3B1F;
        padding: 2rem;
        text-align: center;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .footer .footer-links {
        display: flex;
        justify-content: center;
        gap: 2rem;
        margin-bottom: 1rem;
    }

    .footer .footer-links a {
        color: white;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .footer .footer-links a:hover {
        color: #0CFE0C;
    }

    .footer .social-icons {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-bottom: 1rem;
    }

    .footer .social-icons a {
        color: white;
        font-size: 1.5rem;
        transition: color 0.3s ease;
    }

    .footer .social-icons a:hover {
        color: #0CFE0C;
    }

    .footer p {
        font-size: 0.9rem;
        opacity: 0.7;
    }

    @media (max-width: 768px) {
        .main-content h1 {
            font-size: 2rem;
        }

        .main-content p {
            font-size: 1rem;
        }

        .templates-section {
            flex-direction: column;
            align-items: center;
        }

        .template-card {
            width: 100%;
            max-width: 300px;
        }
    }

    @media (max-width: 480px) {
        .main-content h1 {
            font-size: 1.5rem;
        }

        .main-content p {
            font-size: 0.9rem;
        }

        .navbar .nav-links {
            gap: 1rem;
        }

        .navbar .logo {
            font-size: 1.2rem;
        }
    }
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">ResumeXpert</div>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">Templates</a>
            <a href="#">Features</a>
            <a href="#">Contact</a>
        </div>
        <div class="auth-links">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Job-winning templates for you</h1>
        <p>Ready to use templates that will help your resume stand out to recruiters</p>
    </div>

    <!-- Templates Section -->
    <div class="templates-section">
        <div class="template-card">
            <img src="{{ asset('images/CV/template1.png') }}" alt="Danielle Brasseur Template">
            <div class="template-info">
                <h3>Danielle Brasseur</h3>
                <p>Recommended</p>
            </div>
            <div class="template-actions">
                <button>Choose</button>
                <button>Preview</button>
                <button>Download Resume</button>
            </div>
        </div>
        <div class="template-card">
            <img src="{{ asset('images/CV/template2.png') }}" alt="Felicity Jones Template">
            <div class="template-info">
                <h3>Felicity Jones</h3>
                <p>Expert Customer Service</p>
            </div>
            <div class="template-actions">
                <button>Choose</button>
                <button>Preview</button>
                <button>Download Resume</button>
            </div>
        </div>
    </div>

    <!-- Pagination Dots -->
    <div class="pagination-dots">
        <div class="dot active"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>

    <!-- Templates Section (Second Set) -->
    <div class="templates-section">
        <div class="template-card">
            <img src="{{ asset('images/CV/template1.png') }}" alt="Danielle Brasseur Template">
            <div class="template-info">
                <h3>Danielle Brasseur</h3>
                <p>All</p>
            </div>
            <div class="template-actions">
                <button>Choose</button>
                <button>Preview</button>
                <button>Download Resume</button>
            </div>
        </div>
        <div class="template-card">
            <img src="{{ asset('images/CV/template2.png') }}" alt="Felicity Jones Template">
            <div class="template-info">
                <h3>Felicity Jones</h3>
                <p>Expert Customer Service</p>
            </div>
            <div class="template-actions">
                <button>Choose</button>
                <button>Preview</button>
                <button>Download Resume</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-links">
            <a href="#">Quick Links</a>
            <a href="#">Resources</a>
            <a href="#">Contact Us</a>
            <a href="#">Help Center</a>
        </div>
        <div class="social-icons">
            <a href="#"><i class="fab fa-whatsapp"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <p>© 2025 ResumeXpert. All rights reserved.</p>
    </footer>
</body>

</html>
