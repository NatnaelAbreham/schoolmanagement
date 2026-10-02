<?php
$pageTitle = "Contact Us | Aurora College";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $pageTitle; ?></title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet"
    >

    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        body {
            background: #080b1c;
            color: #fff;
        }

        .contact-page {
            min-height: 100vh;
            background:
                radial-gradient(circle at 10% 20%, rgba(79, 140, 255, 0.12), transparent 30%),
                radial-gradient(circle at 90% 10%, rgba(139, 92, 246, 0.12), transparent 30%),
                #080b1c;
        }

        /* Hero */
        .contact-hero {
            position: relative;
            padding: 120px 0 80px;
            overflow: hidden;
            text-align: center;
        }

        .contact-hero::before {
            content: "";
            position: absolute;
            width: 450px;
            height: 450px;
            border-radius: 50%;
            background: rgba(79, 140, 255, 0.08);
            filter: blur(80px);
            top: -180px;
            left: -150px;
        }

        .contact-hero::after {
            content: "";
            position: absolute;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: rgba(139, 92, 246, 0.08);
            filter: blur(80px);
            right: -150px;
            top: -100px;
        }

        .contact-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 9px 16px;
            border-radius: 50px;
            background: rgba(79, 140, 255, 0.1);
            border: 1px solid rgba(79, 140, 255, 0.25);
            color: #8db5ff;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 22px;
        }

        .contact-hero h1 {
            font-family: "Playfair Display", serif;
            font-size: clamp(42px, 6vw, 72px);
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 22px;
        }

        .contact-hero h1 span {
            background: linear-gradient(
                90deg,
                #7aa7ff,
                #22d3ee,
                #a78bfa
            );
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .contact-hero p {
            max-width: 680px;
            margin: auto;
            color: #a8afc5;
            font-size: 18px;
            line-height: 1.8;
        }

        /* Contact section */
        .contact-section {
            padding: 30px 0 100px;
        }

        .contact-card {
            height: 100%;
            padding: 32px;
            border-radius: 24px;
            background: rgba(255, 255, 255, 0.045);
            border: 1px solid rgba(255, 255, 255, 0.09);
            backdrop-filter: blur(15px);
        }

        .contact-card h3 {
            font-family: "Playfair Display", serif;
            font-size: 28px;
            margin-bottom: 12px;
        }

        .contact-card > p {
            color: #9299ae;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        /* Information */
        .contact-info {
            display: flex;
            align-items: flex-start;
            gap: 18px;
            margin-bottom: 28px;
        }

        .contact-icon {
            min-width: 52px;
            width: 52px;
            height: 52px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
            color: #fff;
            background: linear-gradient(
                135deg,
                rgba(79, 140, 255, 0.9),
                rgba(139, 92, 246, 0.9)
            );
            box-shadow: 0 10px 30px rgba(79, 140, 255, 0.15);
        }

        .contact-info h6 {
            margin: 0 0 5px;
            font-size: 15px;
            color: #fff;
            font-weight: 700;
        }

        .contact-info p {
            margin: 0;
            color: #9299ae;
            line-height: 1.6;
        }

        /* Form */
        .form-label {
            color: #dfe3ee;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .form-control,
        .form-select {
            background: rgba(255, 255, 255, 0.055);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff;
            border-radius: 12px;
            padding: 13px 15px;
            min-height: 50px;
        }

        .form-control::placeholder {
            color: #70778b;
        }

        .form-control:focus,
        .form-select:focus {
            background: rgba(255, 255, 255, 0.07);
            border-color: #4f8cff;
            color: #fff;
            box-shadow: 0 0 0 3px rgba(79, 140, 255, 0.12);
        }

        .form-select option {
            background: #11162d;
            color: #fff;
        }

        textarea.form-control {
            min-height: 145px;
            resize: vertical;
        }

        .send-btn {
            width: 100%;
            border: none;
            border-radius: 12px;
            padding: 14px 22px;
            color: #fff;
            font-weight: 700;
            font-size: 15px;
            background: linear-gradient(
                135deg,
                #4f8cff,
                #7c5cff
            );
            transition: all 0.3s ease;
        }

        .send-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(79, 140, 255, 0.25);
        }

        /* Map / campus card */
        .campus-card {
            margin-top: 24px;
            min-height: 230px;
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            background:
                linear-gradient(
                    rgba(8, 11, 28, 0.45),
                    rgba(8, 11, 28, 0.8)
                ),
                url("https://images.unsplash.com/photo-1564981797816-1043664bf78d?auto=format&fit=crop&w=1200&q=85")
                center/cover;
            display: flex;
            align-items: flex-end;
        }

        .campus-content {
            padding: 25px;
        }

        .campus-content h5 {
            font-family: "Playfair Display", serif;
            font-size: 23px;
            margin-bottom: 6px;
        }

        .campus-content p {
            margin: 0;
            color: #c1c6d4;
        }

        /* Social */
        .social-links {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        .social-links a {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #cbd2e3;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.08);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            color: #fff;
            background: #4f8cff;
            transform: translateY(-3px);
        }

        /* Footer */
        .contact-footer {
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            padding: 30px 0;
            color: #777f95;
            font-size: 14px;
        }

        .contact-footer strong {
            color: #cbd2e3;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .contact-hero {
                padding: 100px 0 65px;
            }

            .contact-section {
                padding-bottom: 70px;
            }

            .contact-card {
                padding: 28px;
            }
        }

        @media (max-width: 767px) {
            .contact-hero {
                padding: 75px 0 55px;
            }

            .contact-hero p {
                font-size: 16px;
                padding: 0 10px;
            }

            .contact-section {
                padding-top: 10px;
            }

            .contact-card {
                padding: 23px;
                border-radius: 20px;
            }

            .contact-card h3 {
                font-size: 25px;
            }

            .campus-card {
                min-height: 200px;
            }
        }

        @media (max-width: 380px) {
            .contact-hero h1 {
                font-size: 39px;
            }

            .contact-card {
                padding: 19px;
            }

            .contact-info {
                gap: 12px;
            }

            .contact-icon {
                min-width: 45px;
                width: 45px;
                height: 45px;
            }
        }
    </style>
</head>

<body>

<div class="contact-page">

   <!-- =====================================================
     NAVBAR
===================================================== -->

<nav class="navbar navbar-expand-lg navbar-dark main-navbar">

    <div class="container">


        <!-- LOGO -->

        <a
            class="navbar-brand college-logo"
            href="index.php"
        >

            <div class="logo-symbol">

                <i class="bi bi-stars"></i>

            </div>

            <div class="logo-text">

                <strong>AURORA</strong>

                <span>COLLEGE</span>

            </div>

        </a>


        <!-- MOBILE BUTTON -->

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNavigation"
            aria-controls="mainNavigation"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >

            <span class="navbar-toggler-icon"></span>

        </button>


        <!-- NAVIGATION -->

        <div
            class="collapse navbar-collapse"
            id="mainNavigation"
        >

            <ul class="navbar-nav ms-auto align-items-lg-center">


                <li class="nav-item">

                    <a
                        class="nav-link active"
                        href="index.php"
                    >
                        Home
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="about.php"
                    >
                        About
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="#programs"
                    >
                        Programs
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="#admission"
                    >
                        Admissions
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="#contact"
                    >
                        Contact
                    </a>

                </li>


                <li class="nav-item nav-login">

                    <a
                        class="nav-link login-link"
                        href="login.php"
                    >
                        Login
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        class="btn apply-btn"
                        href="register.php"
                    >

                        Apply Now

                        <i class="bi bi-arrow-up-right"></i>

                    </a>

                </li>


            </ul>

        </div>

    </div>

</nav>


    <!-- HERO -->
    <section class="contact-hero">

        <div class="container position-relative" style="z-index:2;">

            <div class="contact-badge">
                <i class="bi bi-chat-dots"></i>
                We'd love to hear from you
            </div>

            <h1>
                Let's start a <span>conversation.</span>
            </h1>

            <p>
                Have questions about our programs, admissions, campus life,
                or student experience? Our team is ready to help you take
                the next step toward your future.
            </p>

        </div>

    </section>


    <!-- CONTACT CONTENT -->
    <section class="contact-section">

        <div class="container">

            <div class="row g-4">

                <!-- LEFT -->
                <div class="col-lg-5">

                    <div class="contact-card">

                        <h3>Get in touch</h3>

                        <p>
                            Whether you're a prospective student, parent,
                            or current student, we're here to answer your
                            questions and provide the information you need.
                        </p>


                        <div class="contact-info">

                            <div class="contact-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>

                            <div>
                                <h6>Our Campus</h6>
                                <p>
                                    Aurora Avenue<br>
                                    Addis Ababa, Ethiopia
                                </p>
                            </div>

                        </div>


                        <div class="contact-info">

                            <div class="contact-icon">
                                <i class="bi bi-telephone"></i>
                            </div>

                            <div>
                                <h6>Phone</h6>
                                <p>
                                    +251 900 000 000<br>
                                    +251 911 000 000
                                </p>
                            </div>

                        </div>


                        <div class="contact-info">

                            <div class="contact-icon">
                                <i class="bi bi-envelope"></i>
                            </div>

                            <div>
                                <h6>Email</h6>
                                <p>
                                    info@auroracollege.edu<br>
                                    admissions@auroracollege.edu
                                </p>
                            </div>

                        </div>


                        <div class="contact-info mb-0">

                            <div class="contact-icon">
                                <i class="bi bi-clock"></i>
                            </div>

                            <div>
                                <h6>Office Hours</h6>
                                <p>
                                    Monday – Friday<br>
                                    8:00 AM – 5:00 PM
                                </p>
                            </div>

                        </div>


                        <div class="social-links">

                            <a href="#" aria-label="Facebook">
                                <i class="bi bi-facebook"></i>
                            </a>

                            <a href="#" aria-label="Instagram">
                                <i class="bi bi-instagram"></i>
                            </a>

                            <a href="#" aria-label="LinkedIn">
                                <i class="bi bi-linkedin"></i>
                            </a>

                            <a href="#" aria-label="YouTube">
                                <i class="bi bi-youtube"></i>
                            </a>

                        </div>

                    </div>


                    <div class="campus-card">

                        <div class="campus-content">

                            <h5>Visit Aurora College</h5>

                            <p>
                                Come experience our campus and meet
                                the people behind your future.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- RIGHT -->
                <div class="col-lg-7">

                    <div class="contact-card">

                        <h3>Send us a message</h3>

                        <p>
                            Fill out the form below and our admissions
                            team will get back to you as soon as possible.
                        </p>


                        <form action="#" method="POST">

                            <div class="row g-3">

                                <div class="col-md-6">

                                    <label class="form-label">
                                        First Name
                                    </label>

                                    <input
                                        type="text"
                                        name="first_name"
                                        class="form-control"
                                        placeholder="Your first name"
                                        required
                                    >

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Last Name
                                    </label>

                                    <input
                                        type="text"
                                        name="last_name"
                                        class="form-control"
                                        placeholder="Your last name"
                                        required
                                    >

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Email Address
                                    </label>

                                    <input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        placeholder="you@example.com"
                                        required
                                    >

                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">
                                        Phone Number
                                    </label>

                                    <input
                                        type="tel"
                                        name="phone"
                                        class="form-control"
                                        placeholder="+251 9XX XXX XXX"
                                    >

                                </div>


                                <div class="col-12">

                                    <label class="form-label">
                                        Subject
                                    </label>

                                    <select
                                        name="subject"
                                        class="form-select"
                                        required
                                    >

                                        <option value="" selected disabled>
                                            Select a subject
                                        </option>

                                        <option>
                                            Admissions
                                        </option>

                                        <option>
                                            Programs
                                        </option>

                                        <option>
                                            Tuition & Fees
                                        </option>

                                        <option>
                                            Campus Life
                                        </option>

                                        <option>
                                            General Inquiry
                                        </option>

                                    </select>

                                </div>


                                <div class="col-12">

                                    <label class="form-label">
                                        Your Message
                                    </label>

                                    <textarea
                                        name="message"
                                        class="form-control"
                                        placeholder="Tell us how we can help..."
                                        required
                                    ></textarea>

                                </div>


                                <div class="col-12 pt-2">

                                    <button
                                        type="submit"
                                        class="send-btn"
                                    >
                                        <i class="bi bi-send me-2"></i>
                                        Send Message
                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- FOOTER -->
    <footer class="contact-footer">

        <div class="container">

            <div class="row align-items-center g-3">

                <div class="col-md-6">

                    <strong>Aurora College</strong>

                    <span class="ms-2">
                        Discover. Learn. Become.
                    </span>

                </div>

                <div class="col-md-6 text-md-end">

                    © <?php echo date("Y"); ?> Aurora College.
                    All rights reserved.

                </div>

            </div>

        </div>

    </footer>

</div>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>