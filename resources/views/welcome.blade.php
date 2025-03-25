<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Abhaya+Libre:wght@800&display=swap" rel="stylesheet">
    <title>ResumeExpert</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #1a2e35;
            color: #fff;
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 30px;
            background-color: #042C16;
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
            vertical-align: middle;
            margin-right: 15px;
            border: 2px solid #2ecc71;
            box-shadow: 0 4px 8px rgba(46, 204, 113, 0.3);
            transition: transform 0.3s ease;
        }

        .logo img:hover {
            transform: scale(1.1);
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
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

        nav ul li a:not(.login-btn):not(.signup-btn):hover {
            color: #2ecc71;
            transform: scale(1.05);
        }

        nav ul li a:not(.login-btn):not(.signup-btn)::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #2ecc71;
            transition: width 0.3s ease;
        }

        nav ul li a:not(.login-btn):not(.signup-btn):hover::after {
            width: 100%;
        }

        nav ul li a.login-btn,
        nav ul li a.signup-btn {
            background: linear-gradient(#0E3B1F, #26A155);
            padding: 8px 16px;
            border-radius: 25px;
            cursor: pointer;
            color: #fff;
            font-weight: bold;
            box-shadow: 0 3px 8px rgba(46, 204, 113, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        }

        nav ul li a.login-btn:hover,
        nav ul li a.signup-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 12px rgba(46, 204, 113, 0.5);
            background-color: #27ae60;
        }

        /* Hero Section */
        .hero {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px;
            background-color: #1A5C2F;
        }

        .hero-content {
            max-width: 50%;
        }

        .hero-content h1 {
            font-size: 36px;
            margin-bottom: 20px;
            line-height: 1.2;
            color: #fff;
            font-family: 'Abhaya Libre ExtraBold', sans-serif;
        }

        .cta-btn {
            background: linear-gradient(135deg, #0D0D0D, #1D8D46);
            color: #fff;
            padding: 12px 24px;
            border: none;
            border-radius: 25px;
            font-size: 18px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .cta-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 12px rgba(46, 204, 113, 0.5);
        }

        .hero-image {
            position: relative;
            max-width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-image img {
            max-width: 50%;
            height: 50vh;
            border-radius: 15px;
            border: 3px solid #2ecc71;
            box-shadow: 0 8px 16px rgba(46, 204, 113, 0.4);
            transform: rotate(-3deg);
            transition: transform 0.3s ease;
        }

        .hero-image img:hover {
            transform: scale(1.05) rotate(0deg);
        }

        /* Templates Section */
        .templates {
            padding: 60px 50px;
            text-align: center;
            background: linear-gradient(135deg, #134123, #27A653, #29312C);
            position: relative;
            overflow: hidden;
        }

        .templates::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            z-index: 0;
        }

        .templates h2 {
            font-size: 32px;
            margin-bottom: 40px;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 1;
            animation: fadeInDown 1s ease-in-out;
        }

        .carousel {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 30px;
            padding: 20px 0;
            z-index: 1;
        }

        .carousel-arrow {
            font-size: 28px;
            color: #fff;
            cursor: pointer;
            background: rgba(46, 204, 113, 0.2);
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            border: 2px solid #2ecc71;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, background 0.3s ease, box-shadow 0.3s ease;
        }

        .carousel-arrow:hover {
            transform: scale(1.15);
            background: rgba(46, 204, 113, 0.4);
            box-shadow: 0 6px 14px rgba(46, 204, 113, 0.4);
        }

        .template-cards {
            display: flex;
            justify-content: center;
            gap: 30px;
            overflow: hidden;
        }

        .template-card {
            background: rgba(42, 62, 69, 0.3);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            padding: 25px;
            border-radius: 20px;
            width: 220px;
            text-align: center;
            border: 2px solid rgba(46, 204, 113, 0.3);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            transition: transform 0.4s ease, box-shadow 0.4s ease, background 0.4s ease;
            animation: fadeInUp 0.8s ease-in-out;
        }

        @supports not (backdrop-filter: blur(12px)) {
            .template-card {
                background: rgba(42, 62, 69, 0.6);
            }
        }

        .template-card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 15px 30px rgba(46, 204, 113, 0.4);
            background: rgba(42, 62, 69, 0.5);
        }

        .template-card img {
            max-width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .template-card img:hover {
            transform: scale(1.1);
        }

        .template-card p {
            color: #fff;
            margin-bottom: 15px;
            font-weight: 600;
            font-size: 16px;
        }

        .template-card button {
            background: linear-gradient(135deg, #2ecc71, #27ae60);
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase;
            box-shadow: 0 3px 8px rgba(46, 204, 113, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
        }

        .template-card button:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 12px rgba(46, 204, 113, 0.5);
            background: linear-gradient(135deg, #27ae60, #2ecc71);
        }

        .carousel-controls {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-top: 25px;
            padding: 10px 20px;
            background: rgba(26, 46, 53, 0.3);
            border-radius: 25px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .dot {
            width: 12px;
            height: 12px;
            background-color: #ccc;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
        }

        .dot.active {
            background-color: #2ecc71;
            transform: scale(1.4);
            box-shadow: 0 0 10px rgba(46, 204, 113, 0.6);
        }

        .dot:hover {
            transform: scale(1.4);
            background-color: #27ae60;
            box-shadow: 0 0 10px rgba(46, 204, 113, 0.6);
        }

        /* Features Section */
        .features {
            padding: 80px 50px;
            text-align: center;
            background-color: #1A5C2F;
            position: relative;
            overflow: hidden;
        }

        .features h2 {
            font-size: 36px;
            margin-bottom: 50px;
            color: #fff;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
            position: relative;
            z-index: 1;
            animation: fadeInDown 1s ease-in-out;
        }

        .features h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: #2ecc71;
            border-radius: 2px;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 20px;
            background: rgba(42, 62, 69, 0.2);
            padding: 20px;
            border-radius: 15px;
            border: 1px solid rgba(46, 204, 113, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(46, 204, 113, 0.3);
        }

        .feature-item i {
            font-size: 2rem;
            color: #fff;
        }

        .feature-item p {
            font-size: 16px;
            color: #fff;
            font-weight: 600;
            text-transform: uppercase;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        /* About Section */
        .about {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 80px 50px;
            background-color: #1A5C2F;
        }

        .about-image {
            max-width: 45%;
        }

        .about-image img {
            max-width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .about-content {
            max-width: 50%;
        }

        .about-content h2 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .about-content p {
            font-size: 16px;
            color: #ccc;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .about-content a {
            color: #2ecc71;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .about-content a:hover {
            color: #27ae60;
        }

        /* Contact Section */
        .contact {
            padding: 80px 50px;
            text-align: center;
            background-color: #1A5C2F;
            position: relative;
        }

        .contact h2 {
            font-size: 36px;
            margin-bottom: 50px;
            color: #fff;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
            position: relative;
        }

        .contact h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: #2ecc71;
            border-radius: 2px;
        }

        .contact form {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            max-width: 800px;
            margin: 0 auto;
            background: rgba(42, 62, 69, 0.3);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            padding: 40px;
            border-radius: 20px;
            border: 2px solid rgba(46, 204, 113, 0.4);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
            animation: fadeInUp 1s ease-in-out;
        }

        @supports not (backdrop-filter: blur(15px)) {
            .contact form {
                background: rgba(42, 62, 69, 0.6);
            }
        }

        .form-group {
            position: relative;
            flex: 1 1 48%;
        }

        .form-group.textarea-group {
            flex: 1 1 100%;
        }

        .contact input,
        .contact textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid rgba(46, 204, 113, 0.3);
            border-radius: 8px;
            background-color: rgba(26, 46, 53, 0.5);
            color: #fff;
            font-size: 16px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .contact textarea {
            resize: none;
            height: 150px;
        }

        .contact input:focus,
        .contact textarea:focus {
            outline: none;
            border-color: #2ecc71;
            box-shadow: 0 0 10px rgba(46, 204, 113, 0.5);
        }

        .contact label {
            position: absolute;
            top: 15px;
            left: 15px;
            color: #ccc;
            font-size: 16px;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .contact input:focus + label,
        .contact input:not(:placeholder-shown) + label,
        .contact textarea:focus + label,
        .contact textarea:not(:placeholder-shown) + label {
            top: -10px;
            left: 10px;
            font-size: 12px;
            color: #2ecc71;
            background: #1A5C2F;
            padding: 0 5px;
        }

        .contact button {
            background: linear-gradient(135deg, #2ecc71, #27ae60);
            color: #fff;
            padding: 15px 40px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin: 0 auto;
            display: block;
        }

        .contact button:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(46, 204, 113, 0.7);
            animation: bounce 0.5s ease;
        }

        /* Footer */
        footer {
            padding: 40px 50px;
            text-align: center;
            background-color: #134123;
            color: #2ecc71;
            animation: fadeInUp 1s ease-in-out;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 50px;
            margin-bottom: 30px;
        }

        .footer-links div {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .footer-links p {
            color: #2ecc71;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .footer-links a {
            color: #2ecc71;
            text-decoration: none;
            font-size: 14px;
            position: relative;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #27ae60;
        }

        .footer-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #27ae60;
            transition: width 0.3s ease;
        }

        .footer-links a:hover::after {
            width: 100%;
        }

        .social-icons {
            margin-bottom: 20px;
        }

        .social-icons a {
            margin: 0 15px;
            display: inline-block;
            color: #2ecc71;
            font-size: 24px;
            transition: transform 0.3s ease, color 0.3s ease;
        }

        .social-icons a:hover {
            transform: scale(1.2);
            color: #27ae60;
        }

        footer p {
            font-size: 14px;
            color: #2ecc71;
        }

        /* Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounce {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero, .about {
                flex-direction: column;
                text-align: center;
            }
            .hero-content, .about-content {
                max-width: 100%;
                margin-bottom: 20px;
            }
            .hero-image, .about-image {
                max-width: 100%;
            }
            .template-cards {
                flex-direction: column;
                align-items: center;
            }
            .feature-grid {
                grid-template-columns: 1fr;
            }
            header {
                flex-direction: column;
                gap: 10px;
            }
            nav ul {
                flex-direction: column;
                align-items: center;
            }
            nav ul li {
                padding: 10px 20px;
            }
            .footer-links {
                flex-direction: column;
                gap: 20px;
            }
            .contact form {
                padding: 20px;
            }
            .form-group {
                flex: 1 1 100%;
            }
            .features h2,
            .contact h2 {
                font-size: 28px;
            }
            .about-content h2 {
                font-size: 24px;
            }
            .carousel-arrow {
                font-size: 32px;
                width: 60px;
                height: 60px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo"><img src="{{ asset('images/CV/logo.png') }}" alt="">ResumeExpert</div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Templates</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="{{ route('login') }}" class="login-btn">Login</a></li>
                <li><a href="{{ route('register') }}" class="signup-btn">Signup</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>"Fast-Track Your Career with an ATS-Friendly Resume – Built in Minutes!"</h1>
            <button class="cta-btn">Build My Resume</button>
        </div>
        <div class="hero-image">
            <img src="{{ asset('images/CV/images (5).jpeg') }}" alt="Resume Mockup 1">
            <img src="{{ asset('images/CV/creative-edgy-modern-black-neon-green-resume-for-programmer-editor_template.jpeg') }}" alt="Resume Mockup 2">
        </div>
    </section>

    <!-- Templates Section -->
    <section class="templates">
        <h2>Ready to use templates that will help your resume stand out to recruiters</h2>
        <div class="carousel">
            <span class="carousel-arrow" onclick="prevSlide()"><</span>
            <div class="template-cards">
                <div class="template-card">
                    <img src="{{ asset('images/CV/images (6).jpeg') }}" alt="Modern Resume">
                    <p>Modern Resume</p>
                    <button>Use Template</button>
                </div>
                <div class="template-card">
                    <img src="{{ asset('images/CV/creative-edgy-modern-black-neon-green-resume-for-programmer-editor_template.jpeg') }}" alt="Creative Resume">
                    <p>Creative Resume</p>
                    <button>Use Template</button>
                </div>
                <div class="template-card">
                    <img src="{{ asset('images/CV/images (8).jpeg') }}" alt="Professional Resume">
                    <p>Professional Resume</p>
                    <button>Use Template</button>
                </div>
                <div class="template-card">
                    <img src="{{ asset('images/CV/curriculum-vitae-template-free.jpg') }}" alt="Classic Resume">
                    <p>Classic Resume</p>
                    <button>Use Template</button>
                </div>
            </div>
            <span class="carousel-arrow" onclick="nextSlide()">></span>
        </div>
        <div class="carousel-controls">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <h2>Why Choose Our Resume Builder</h2>
        <div class="feature-grid">
            <div class="feature-item">
                <i class="fas fa-hand-pointer"></i>
                <p>Easy-to-Use Interface</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-download"></i>
                <p>Free Resume Creation</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-shield-alt"></i>
                <p>ATS-Friendly Design</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-download"></i>
                <p>Download PDF</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-file-alt"></i>
                <p>Beautiful, Professional Templates</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-edit"></i>
                <p>No Limits on Edits</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="about-image">
            <img src="{{ asset('images/CV/d0217ccf-3887-40d1-a791-ef31c78abb01.png') }}" alt="About Us Image">
        </div>
        <div class="about-content">
            <h2>About Us</h2>
            <p>At ResumeXpert, we believe building a resume should be easy and stress-free.</p>
            <p>We created this platform to help you quickly design a professional resume without the hassle of complicated formatting or design.</p>
            <p>Whether you’re starting your career or looking to make a change, ResumeXpert provides simple, modern, and customizable templates that make your resume stand out. Plus, it’s free to get started—no hidden fees, no surprises.</p>
            <p>Our goal is to save you time and help you create a resume that gets noticed. We’re here to support you at every step of your job search.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <h2>Contact Us</h2>
        <form>
            <div class="form-group">
                <input type="text" placeholder=" " required>
                <label>Name</label>
            </div>
            <div class="form-group">
                <input type="email" placeholder=" " required>
                <label>Email</label>
            </div>
            <div class="form-group textarea-group">
                <textarea placeholder=" " required></textarea>
                <label>Message</label>
            </div>
            <button type="submit">Send Message</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-links">
        <div class="logo"><img src="{{ asset('images/CV/logo.png') }}" alt="">ResumeExpert</div>
            <div>
                <p>Quick Links</p>
                <a href="#">Home</a>
                <a href="#">Templates</a>
                <a href="#">Features</a>
            </div>
            <div>
                <p>Contact Info</p>
                <a href="mailto:resumeXpert@gmail.com">resumeXpert@gmail.com</a>
            </div>
            <div>
                <p>Help Center</p>
                <a href="#">FAQ's</a>
                <a href="#">Terms & Conditions</a>
            </div>
        </div>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <p>© 2025 ResumeXpert. All rights reserved.</p>
    </footer>

    <!-- JavaScript for Modal and Carousel -->
    <script>
        // Modal Functions
        function openModal(modalId) {
            document.getElementById(modalId).style.display = 'flex';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = 'none';
            }
        }

        // Carousel Functions
        let currentSlide = 0;
        const slides = document.querySelectorAll('.template-card');
        const dots = document.querySelectorAll('.dot');
        const totalSlides = slides.length;
        let autoSlideInterval;

        function updateCarousel() {
            const slideWidth = slides[0].offsetWidth + 30;
            document.querySelector('.template-cards').style.transform = translateX(-${currentSlide * slideWidth}px);
            dots.forEach(dot => dot.classList.remove('active'));
            dots[currentSlide].classList.add('active');
        }

        function prevSlide() {
            if (currentSlide > 0) {
                currentSlide--;
            } else {
                currentSlide = totalSlides - 1;
            }
            updateCarousel();
        }

        function nextSlide() {
            if (currentSlide < totalSlides - 1) {
                currentSlide++;
            } else {
                currentSlide = 0;
            }
            updateCarousel();
        }

        // Auto-slide functionality
        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, 5000);
        }

        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }

        // Start auto-slide on page load
        startAutoSlide();

        // Pause auto-slide on hover
        document.querySelector('.carousel').addEventListener('mouseenter', stopAutoSlide);
        document.querySelector('.carousel').addEventListener('mouseleave', startAutoSlide);

        // Update carousel on dot click
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentSlide = index;
                updateCarousel();
            });
        });
    </script>
</body>
</html>
