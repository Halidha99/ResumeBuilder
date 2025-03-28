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

/* Header */
header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 30px;
            background-color: #042C16;
            position: sticky;
            top: 0;
            z-index: 100;
            animation: slideInDown 0.8s ease-out;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            color: #2ecc71;
            display: flex;
            align-items: center;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .logo img {
            width: 70px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
            border: 2px solid #2ecc71;
            box-shadow: 0 4px 8px rgba(46, 204, 113, 0.3);
            transition: transform 0.3s ease;
        }

        .logo img:hover {
            transform: scale(1.1) rotate(360deg);
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            align-items: center;
        }

        nav ul li {
            position: relative;
            padding: 5px 10px;
            transition: background-color 0.3s ease;
        }

        nav ul li:hover {
            background-color: rgba(46, 204, 113, 0.1);
            border-radius: 25px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            position: relative;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        nav ul li a:not(.logout-btn):hover {
            color: #2ecc71;
            transform: scale(1.05);
        }

        nav ul li a:not(.logout-btn)::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #2ecc71;
            transition: width 0.3s ease;
        }

        nav ul li a:not(.logout-btn):hover::after {
            width: 100%;
        }

        nav ul li a.logout-btn {
            background: linear-gradient(#0E3B1F, #26A155);
            padding: 8px 16px;
            border-radius: 25px;
            cursor: pointer;
            color: #fff;
            font-weight: bold;
            box-shadow: 0 3px 8px rgba(46, 204, 113, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        nav ul li a.logout-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 12px rgba(46, 204, 113, 0.5);
            animation: pulse 0.5s infinite;
        }
        .user-name {
            color: #2ecc71;
            font-size: 16px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .user-name img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            border: 2px solid greenyellow;
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

    .template-card .template-actions a.button {
        background: linear-gradient(90deg, #0E3B1F, #26A155);
        color: white;
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .template-card .template-actions a.button:hover {
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
    <!-- Header -->
    <header>
        <div class="logo"><img src="{{ asset('images/CV/logo.png') }}" alt="">ResumeExpert</div>
        <nav>
            <ul>
               
            @auth
                    <li><span class="user-name"><img src="{{asset('images/CV/user.png')}}" alt=""> Welcome  {{ Auth::user()->name }}</span></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                            @csrf
                            <a href="#" class="logout-btn" onclick="this.closest('form').submit(); return false;">Logout</a>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}" class="login-btn">Login</a></li>
                    @endauth
            </ul>
        </nav>
    </header>


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
                <a href="{{ route('createstep') }}" class="button">choose</a>
                
            </div>
        </div>
        <div class="template-card">
            <img src="{{ asset('images/CV/template2.png') }}" alt="Felicity Jones Template">
            <div class="template-info">
                <h3>Felicity Jones</h3>
                <p>Expert Customer Service</p>
            </div>
            <div class="template-actions">
                <a href="{{ route('createstep') }}" class="button">choose</a>
               
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
                <a href="{{ route('createstep') }}" class="button">choose</a>
              
            </div>
        </div>
        <div class="template-card">
            <img src="{{ asset('images/CV/template2.png') }}" alt="Felicity Jones Template">
            <div class="template-info">
                <h3>Felicity Jones</h3>
                <p>Expert Customer Service</p>
            </div>
            <div class="template-actions">
                <a href="{{ route('createstep') }}" class="button">choose</a>
              
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>© 2025 ResumeXpert. All rights reserved.</p>
    </footer>
</body>

</html>
