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

    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <h1>How will you make your resume?</h1>
        <a href="{{ route('contact') }}" class="option-card">
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
