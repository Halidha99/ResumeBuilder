<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-guest-layout>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }} - Register</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap"
            rel="stylesheet">
    </head>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url('{{ asset('images/CV/back.png') }}');
            background-size: cover;
            background-position: center 20%;
            width: 100%;
            height: 100vh;
            position: relative;
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(5, 44, 19, 0.6), rgba(0, 0, 0, 0.4));
            z-index: -1;
        }

        .main-container {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .left-section {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 2rem;
            animation: fadeInLeft 1s ease-out;
        }

        .left-section h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
        }

        .left-section h1 span {
            color: #0CFE0C;
            background: linear-gradient(90deg, #0CFE0C, #26A155);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .left-section p {
            font-size: 1.3rem;
            font-weight: 300;
            margin: 0.2rem 0;
            opacity: 0.9;
        }

        .left-section p:last-child {
            color: #0CFE0C;
            font-weight: 600;
            background: linear-gradient(90deg, #0CFE0C, #26A155);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .left-section img {
            width: 280px;
            transform: rotate(-12deg);
            opacity: 0.9;
            margin-top: 2rem;
            transition: transform 0.3s ease;
            animation: float 3s ease-in-out infinite;
        }

        .left-section img:hover {
            transform: rotate(-12deg) scale(1.05);
        }

        .register-container {
            flex: 1;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(5, 44, 19, 0.3));
            padding: 2.5rem;
            border-radius: 15px;
            max-width: 450px;
            position: relative;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: fadeInRight 1s ease-out;
        }

        .register-container::before {
            content: "";
            position: absolute;
            top: 2px;
            left: 2px;
            right: 2px;
            bottom: 2px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 13px;
            pointer-events: none;
        }

        .register-title {
            text-align: center;
            color: white;
            font-weight: 600;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            letter-spacing: 1.5px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
        }

        .transparent-input {
            background: rgba(255, 255, 255, 0.15);
            padding: 0.85rem;
            color: white;
            font-size: 1rem;
            border-radius: 8px;
            width: 100%;
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .transparent-input::placeholder {
            color: rgba(255, 255, 255, 0.6);
            font-weight: 300;
        }

        .transparent-input:focus {
            border-color: #26A155;
            box-shadow: 0 0 10px rgba(38, 161, 85, 0.3);
            outline: none;
        }

        .input-type-label {
            color: #0CFE0C;
            font-size: 0.9rem;
            font-weight: 500;
            text-transform: uppercase;
            margin-bottom: 0.5rem;
            display: block;
            letter-spacing: 1px;
        }

        .primary-button {
            background: linear-gradient(90deg, #0E3B1F, #26A155);
            color: white;
            padding: 0.85rem;
            width: 100%;
            font-weight: 600;
            text-transform: uppercase;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(38, 161, 85, 0.3);
        }

        .primary-button:hover {
            background: linear-gradient(90deg, #26A155, #0E3B1F);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(38, 161, 85, 0.5);
        }

        .login-link {
            color: white;
            text-decoration: none;
            position: relative;
            transition: color 0.3s ease;
        }

        .login-link:hover {
            color: #0CFE0C;
        }

        .login-link::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 1px;
            background: #0CFE0C;
            bottom: -2px;
            left: 0;
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.3s ease-out;
        }

        .login-link:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        .or-divider {
            display: flex;
            align-items: center;
            text-align: center;
            color: #fff;
            margin: 1rem 0;
        }

        .or-divider::before,
        .or-divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #fff;
        }

        .or-divider::before {
            margin-right: .5em;
        }

        .or-divider::after {
            margin-left: .5em;
        }

        .social-login {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .social-button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            font-size: 1.3rem;
            transition: all 0.3s ease;
        }

        .social-button:hover {
            color: #0CFE0C;
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 10px rgba(12, 254, 12, 0.5);
            transform: translateY(-2px);
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes float {
            0% {
                transform: rotate(-12deg) translateY(0);
            }

            50% {
                transform: rotate(-12deg) translateY(-10px);
            }

            100% {
                transform: rotate(-12deg) translateY(0);
            }
        }

        @media (max-width: 768px) {
            .main-container {
                flex-direction: column;
                padding: 1rem;
            }

            .left-section {
                margin-bottom: 2rem;
            }

            .left-section h1 {
                font-size: 2rem;
            }

            .left-section p {
                font-size: 1rem;
            }

            .left-section img {
                width: 200px;
            }

            .register-container {
                max-width: 100%;
                padding: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .left-section h1 {
                font-size: 1.5rem;
            }

            .left-section p {
                font-size: 0.9rem;
            }

            .register-title {
                font-size: 1.3rem;
            }

            .transparent-input {
                font-size: 0.9rem;
                padding: 0.65rem;
            }

            .primary-button {
                padding: 0.65rem;
            }
        }

        .message {
            color: red;
            font-size: 14px;
            margin-top: 0.25rem;
            display: block;
        }
    </style>

    <body>
        <div class="main-container">
            <div class="left-section">
                <h1>Join <span>ResumeXpert</span> Today</h1>
                <p>Build Your Perfect Resume &</p>
                <p>Land Your Dream Job</p>
                <img src="{{ asset('images/CV/1.png') }}" alt="Resume">
            </div>

            <div class="register-container">
                <div class="register-title">Register</div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <span class="input-type-label">Name</span>
                        <input id="name" class="transparent-input" type="text" name="name" value="{{ old('name') }}"
                            required autofocus autocomplete="name" placeholder="Enter your username">
                        @error('name') <span class="message">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <span class="input-type-label">Email</span>
                        <input id="email" class="transparent-input" type="email" name="email" value="{{ old('email') }}"
                            required autocomplete="email" placeholder="Enter your Email">
                        @error('email') <span class="message">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <span class="input-type-label">Contact Number</span>
                        <input id="contact_number" class="transparent-input" type="tel" name="contact_number"
                            value="{{ old('contact_number') }}" autocomplete="tel"
                            placeholder="Enter your contact number">
                        @error('contact_number') <span class="message">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <span class="input-type-label">Password</span>
                        <input id="password" class="transparent-input" type="password" name="password" required
                            autocomplete="new-password" placeholder="Enter your password">
                        @error('password') <span class="message">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <span class="input-type-label">Confirm Password</span>
                        <input id="password_confirmation" class="transparent-input" type="password"
                            name="password_confirmation" required autocomplete="new-password"
                            placeholder="Confirm your password">
                        @error('password_confirmation') <span class="message">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="primary-button">Register</button>

                    <div class="text-center mt-3">
                        <a class="text-sm login-link" href="{{ route('login') }}">Already registered? Login</a>
                    </div>

                    <div class="or-divider">or</div>

                    <div class="social-login">
                        <a href="#" class="social-button"><i class="fab fa-google"></i></a>
                        <a href="#" class="social-button"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-button"><i class="fab fa-instagram"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</x-guest-layout>

</html>
