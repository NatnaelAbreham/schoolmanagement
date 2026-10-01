<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MyWebsite | Welcome</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<!-- ================= NAVBAR ================= -->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">

    <div class="container">

        <a class="navbar-brand fw-bold" href="index.php">
            <i class="bi bi-stars"></i>
            MyWebsite
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNavbar"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link active" href="index.php">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="register.php">
                        Register
                    </a>
                </li>

                <li class="nav-item ms-lg-3">
                    <a class="btn btn-light login-btn" href="login.php">
                        Login
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>


<!-- ================= HERO ================= -->

<section class="hero-section">

    <div class="container">

        <div class="row align-items-center min-vh-100">

            <div class="col-lg-7">

                <span class="hero-badge">
                    <i class="bi bi-stars"></i>
                    Welcome to our platform
                </span>

                <h1 class="hero-title">
                    Simple.
                    <span>Powerful.</span>
                    Beautiful.
                </h1>

                <p class="hero-text">
                    A modern platform designed to make your experience
                    simple, secure and enjoyable. Create your account
                    and discover what we have built for you.
                </p>

                <div class="hero-buttons">

                    <a href="register.php" class="btn btn-primary btn-lg">
                        Get Started
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>

                    <a href="about.php" class="btn btn-outline-light btn-lg">
                        Learn More
                    </a>

                </div>

            </div>

            <div class="col-lg-5">

                <div class="hero-card">

                    <div class="hero-icon">
                        <i class="bi bi-rocket-takeoff"></i>
                    </div>

                    <h3>Built for You</h3>

                    <p>
                        Everything you need in one simple,
                        secure and easy-to-use platform.
                    </p>

                    <div class="mini-stat-row">

                        <div>
                            <strong>100%</strong>
                            <small>Simple</small>
                        </div>

                        <div>
                            <strong>24/7</strong>
                            <small>Available</small>
                        </div>

                        <div>
                            <strong>Fast</strong>
                            <small>Experience</small>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= FEATURES ================= -->

<section class="features-section">

    <div class="container">

        <div class="section-heading text-center">

            <span>WHAT WE OFFER</span>

            <h2>
                Everything starts with simplicity
            </h2>

            <p>
                We focus on creating a smooth and enjoyable
                experience for every user.
            </p>

        </div>


        <div class="row g-4 mt-4">

            <div class="col-md-4">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>

                    <h4>Secure</h4>

                    <p>
                        Your account and information are protected
                        with secure authentication.
                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-lightning-charge"></i>
                    </div>

                    <h4>Fast</h4>

                    <p>
                        Designed to provide a fast and smooth
                        experience across devices.
                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="feature-card">

                    <div class="feature-icon">
                        <i class="bi bi-phone"></i>
                    </div>

                    <h4>Responsive</h4>

                    <p>
                        Enjoy the website on your computer,
                        tablet or mobile phone.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= ABOUT PREVIEW ================= -->

<section class="about-preview">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <div class="about-image">

                    <div class="image-content">

                        <i class="bi bi-grid-1x2-fill"></i>

                        <h3>One Platform</h3>

                        <p>
                            Simple tools. Clean experience.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-lg-6">

                <span class="section-label">
                    ABOUT US
                </span>

                <h2>
                    Designed with people in mind.
                </h2>

                <p>
                    Our goal is to create a platform that is
                    simple to understand, easy to use and
                    enjoyable to interact with.
                </p>

                <p>
                    Whether you are creating an account,
                    managing your information or simply
                    exploring the platform, everything is
                    designed to be straightforward.
                </p>

                <a href="about.php" class="btn btn-primary">
                    Discover More
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>

            </div>

        </div>

    </div>

</section>


<!-- ================= CTA ================= -->

<section class="cta-section">

    <div class="container text-center">

        <h2>
            Ready to get started?
        </h2>

        <p>
            Create your account today and become part of our platform.
        </p>

        <a href="register.php" class="btn btn-light btn-lg">
            Create Account
            <i class="bi bi-arrow-right ms-2"></i>
        </a>

    </div>

</section>


<!-- ================= FOOTER ================= -->

<footer class="footer">

    <div class="container">

        <div class="row g-4">

            <div class="col-lg-5">

                <h4>
                    <i class="bi bi-stars"></i>
                    MyWebsite
                </h4>

                <p>
                    A simple, modern and secure platform
                    built to provide a better digital experience.
                </p>

            </div>


            <div class="col-6 col-lg-3">

                <h5>Navigation</h5>

                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="register.php">Register</a>
                <a href="login.php">Login</a>

            </div>


            <div class="col-6 col-lg-4">

                <h5>Connect</h5>

                <div class="social-links">

                    <a href="#">
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a href="#">
                        <i class="bi bi-telegram"></i>
                    </a>

                    <a href="#">
                        <i class="bi bi-linkedin"></i>
                    </a>

                    <a href="#">
                        <i class="bi bi-envelope"></i>
                    </a>

                </div>

            </div>

        </div>


        <hr>

        <div class="footer-bottom">

            <span>
                © <?php echo date("Y"); ?> MyWebsite.
                All rights reserved.
            </span>

            <span>
                Built with PHP & Bootstrap
            </span>

        </div>

    </div>

</footer>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>