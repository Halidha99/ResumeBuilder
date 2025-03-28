<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} - CV Create Step 1</title>
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

    /* Progress Bar */
    .progress-bar {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 1rem;
        padding: 2rem;
        background: #0E3B1F;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .progress-bar .step {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .progress-bar .step i {
        font-size: 1.2rem;
        color: #0CFE0C;
    }

    .progress-bar .step span {
        font-size: 1rem;
        font-weight: 500;
        color: white;
    }

    .progress-bar .step.active span {
        color: #0CFE0C;
    }

    .progress-bar .step:not(:last-child)::after {
        content: '';
        width: 30px;
        height: 2px;
        background: rgba(255, 255, 255, 0.3);
        margin: 0 0.5rem;
    }

    /* Main Content */
    .main-content {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 3rem 2rem;
    }

    .main-content h1 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .main-content p {
        font-size: 1rem;
        opacity: 0.9;
        margin-bottom: 2rem;
        text-align: center;
        max-width: 600px;
    }

    .form-container {
        width: 100%;
        max-width: 800px;
    }

    .form-group {
        display: flex;
        gap: 1rem;
        margin-bottom: 1rem;
    }

    .form-group div {
        flex: 1;
    }

    .form-group label {
        display: block;
        font-size: 0.9rem;
        font-weight: 500;
        margin-bottom: 0.5rem;
    }

    .form-group input {
        width: 100%;
        padding: 0.75rem;
        border: none;
        border-radius: 5px;
        background: #D3D3D3;
        font-size: 1rem;
        color: #333;
    }

    .form-group input:focus {
        outline: none;
        background: #C0C0C0;
    }

    .additional-section {
        margin-top: 2rem;
    }

    .additional-section h3 {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .additional-section h3 i {
        font-size: 1.2rem;
        color: #0CFE0C;
    }

    /* Navigation Buttons */
    .nav-buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 2rem;
        width: 100%;
        max-width: 800px;
    }

    .nav-buttons a,
    .nav-buttons button {
        padding: 0.75rem 2rem;
        border: none;
        border-radius: 5px;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .nav-buttons .back-btn {
        background: none;
        color: white;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .nav-buttons .back-btn i {
        font-size: 1.2rem;
    }

    .nav-buttons .back-btn:hover {
        color: #0CFE0C;
    }

    .nav-buttons .next-btn {
        background: #0CFE0C;
        color: #0E3B1F;
    }

    .nav-buttons .next-btn:hover {
        background: #26A155;
        color: white;
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
            font-size: 1.5rem;
        }

        .main-content p {
            font-size: 0.9rem;
        }

        .form-group {
            flex-direction: column;
            gap: 0.5rem;
        }
    }

    @media (max-width: 480px) {
        .progress-bar {
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .progress-bar .step:not(:last-child)::after {
            display: none;
        }

        .nav-buttons {
            flex-direction: column;
            gap: 1rem;
        }

        .nav-buttons a,
        .nav-buttons button {
            width: 100%;
            text-align: center;
        }
    }
</style>

<body>
    <!-- Progress Bar -->
    <div class="progress-bar">
        <div class="step active">
            <i class="fas fa-check-circle"></i>
            <span>Contact</span>
        </div>
        <div class="step">
            <i class="fas fa-circle"></i>
            <span>Summary</span>
        </div>
        <div class="step">
            <i class="fas fa-circle"></i>
            <span>Experience</span>
        </div>
        <div class="step">
            <i class="fas fa-circle"></i>
            <span>Skills</span>
        </div>
        <div class="step">
            <i class="fas fa-circle"></i>
            <span>Education</span>
        </div>
        <div class="step">
            <i class="fas fa-circle"></i>
            <span>Project</span>
        </div>
        <div class="step">
            <i class="fas fa-circle"></i>
            <span>Finalize</span>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Contact</h1>
        <p>Including your contacts in your resume is crucial so potential employers can easily get in touch with you.
        </p>

        <form method="POST" action="{{ route('contact') }}" class="form-container">
            @csrf
            <div class="form-group">
                <div>
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" required>
                </div>
                <div>
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" required>
                </div>
            </div>

            <div class="form-group">
                <div>
                    <label for="desired_job_title">Desired Job Title</label>
                    <input type="text" id="desired_job_title" name="desired_job_title" required>
                </div>
            </div>

            <div class="form-group">
                <div>
                    <label for="phone_number">Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number" required>
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
            </div>

            <div class="additional-section">
                <h3><i class="fas fa-plus-circle"></i> Additional Section</h3>
                <div class="form-group">
                    <div>
                        <label for="git_link">GIT Link</label>
                        <input type="url" id="git_link" name="git_link">
                    </div>
                    <div>
                        <label for="linkedin_link">LinkedIn Link</label>
                        <input type="url" id="linkedin_link" name="linkedin_link">
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <label for="country">Country</label>
                        <input type="text" id="country" name="country">
                    </div>
                    <div>
                        <label for="city">City</label>
                        <input type="text" id="city" name="city">
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address">
                    </div>
                    <div>
                        <label for="post_code">Post Code</label>
                        <input type="text" id="post_code" name="post_code">
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="nav-buttons">
                <a href="{{ route('cv.create.step-zero') }}" class="back-btn">
                    <i class="fas fa-arrow-left"></i> Go Back
                </a>
                <button type="submit" class="next-btn">Next</button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>© 2025 ResumeXpert. All rights reserved.</p>
    </footer>
</body>

</html>
