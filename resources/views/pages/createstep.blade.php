<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} - CV Create Step 0</title>
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
        min-height: 100vh;
        display: flex;
        flex-direction: column;
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

    .navbar .auth-links .signup-btn {
        background: #0CFE0C;
        color: #0E3B1F;
        padding: 0.5rem 1rem;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 500;
        transition: background 0.3s ease;
    }

    .navbar .auth-links .signup-btn:hover {
        background: #26A155;
        color: white;
    }

    /* Main Content */
    .main-content {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 3rem 2rem;
    }

    .main-content h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 2rem;
    }

    .option-card {
        background: #26A155;
        padding: 2rem;
        border-radius: 15px;
        display: flex;
        align-items: center;
        gap: 1rem;
        max-width: 400px;
        width: 100%;
        transition: transform 0.3s ease;
    }

    .option-card:hover {
        transform: translateY(-5px);
    }

    .option-card i {
        font-size: 2rem;
        color: white;
    }

    .option-card .option-info {
        text-align: left;
    }

    .option-card .option-info h3 {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .option-card .option-info p {
        font-size: 0.9rem;
        opacity: 0.9;
    }

    /* Footer */
    .footer {
        background: #0E3B1F;
        padding: 1rem;
        text-align: center;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .footer p {
        font-size: 0.9rem;
        opacity: 0.7;
    }

    @media (max-width: 768px) {
        .main-content h1 {
            font-size: 2rem;
        }

        .option-card {
            flex-direction: column;
            text-align: center;
        }

        .option-card .option-info {
            text-align: center;
        }
    }

    @media (max-width: 480px) {
        .main-content h1 {
            font-size: 1.5rem;
        }

        .navbar .nav-links {
            gap: 1rem;
        }

        .navbar .logo {
            font-size: 1.2rem;
        }

        .option-card {
            padding: 1.5rem;
        }
    }
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">ResumeXpert</div>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="{{ route('dashboard') }}">Template</a>
            <a href="#">Features</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
        <div class="auth-links">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
            <a href="{{ route('register') }}" class="signup-btn">Sign Up</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <h1>How will you make your resume?</h1>
        <a href="#" class="option-card">
            <i class="fas fa-file-alt"></i>
            <div class="option-info">
                <h3>Start from scratch</h3>
                <p>We will guide you through creating a resume</p>
            </div>
        </a>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>© 2025 ResumeXpert. All rights reserved.</p>
    </footer>
</body>

</html>
