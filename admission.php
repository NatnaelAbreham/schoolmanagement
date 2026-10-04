<?php
$pageTitle = "Admissions | Aurora College";
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

        .admission-page {
            min-height: 100vh;
            background:
                radial-gradient(
                    circle at 10% 15%,
                    rgba(79, 140, 255, .12),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 90% 25%,
                    rgba(139, 92, 246, .12),
                    transparent 30%
                ),
                #080b1c;
        }

        /* Hero */

        .admission-hero {
            position: relative;
            overflow: hidden;
            padding: 120px 0 100px;
        }

        .admission-hero::before {
            content: "";
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: rgba(79, 140, 255, .08);
            filter: blur(90px);
            top: -250px;
            left: -150px;
        }

        .admission-hero::after {
            content: "";
            position: absolute;
            width: 450px;
            height: 450px;
            border-radius: 50%;
            background: rgba(139, 92, 246, .08);
            filter: blur(90px);
            right: -180px;
            top: -100px;
        }

        .admission-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 9px 16px;
            border-radius: 50px;
            background: rgba(79, 140, 255, .1);
            border: 1px solid rgba(79, 140, 255, .25);
            color: #8db5ff;
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 22px;
        }

        .admission-hero h1 {
            font-family: "Playfair Display", serif;
            font-size: clamp(45px, 6vw, 76px);
            line-height: 1.05;
            font-weight: 700;
            margin-bottom: 24px;
        }

        .admission-hero h1 span {
            background: linear-gradient(
                90deg,
                #7aa7ff,
                #22d3ee,
                #a78bfa
            );
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .admission-hero p {
            max-width: 690px;
            color: #a8afc5;
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 32px;
        }

        .hero-buttons {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }

        .hero-btn-primary {
            padding: 14px 25px;
            border-radius: 12px;
            color: #fff;
            text-decoration: none;
            font-weight: 700;
            background: linear-gradient(
                135deg,
                #4f8cff,
                #7c5cff
            );
            transition: .3s ease;
        }

        .hero-btn-primary:hover {
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(79, 140, 255, .25);
        }

        .hero-btn-outline {
            padding: 14px 25px;
            border-radius: 12px;
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            border: 1px solid rgba(255,255,255,.15);
            background: rgba(255,255,255,.04);
            transition: .3s ease;
        }

        .hero-btn-outline:hover {
            color: #fff;
            background: rgba(255,255,255,.08);
            transform: translateY(-3px);
        }

        /* Hero visual */

        .admission-visual {
            position: relative;
            height: 470px;
            border-radius: 30px;
            overflow: hidden;

            background:
                linear-gradient(
                    135deg,
                    rgba(8,11,28,.15),
                    rgba(8,11,28,.7)
                ),
                url("https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1200&q=85")
                center/cover;
        }

        .visual-card {
            position: absolute;
            padding: 18px 20px;
            border-radius: 17px;
            background: rgba(8,11,28,.72);
            border: 1px solid rgba(255,255,255,.12);
            backdrop-filter: blur(15px);
            box-shadow: 0 20px 50px rgba(0,0,0,.25);
        }

        .visual-card.top {
            top: 25px;
            right: 25px;
        }

        .visual-card.bottom {
            bottom: 25px;
            left: 25px;
        }

        .visual-card strong {
            display: block;
            font-size: 22px;
        }

        .visual-card small {
            color: #9da5b9;
        }

        /* General section */

        .admission-section {
            padding: 90px 0;
        }

        .section-heading {
            max-width: 700px;
            margin: 0 auto 55px;
            text-align: center;
        }

        .section-heading h2 {
            font-family: "Playfair Display", serif;
            font-size: clamp(32px, 4vw, 48px);
            margin-bottom: 15px;
        }

        .section-heading p {
            color: #9299ae;
            line-height: 1.8;
        }

        /* Steps */

        .step-card {
            position: relative;
            height: 100%;
            padding: 30px;
            border-radius: 22px;
            background: rgba(255,255,255,.045);
            border: 1px solid rgba(255,255,255,.08);
            transition: .3s ease;
        }

        .step-card:hover {
            transform: translateY(-6px);
            border-color: rgba(79,140,255,.35);
            background: rgba(255,255,255,.065);
        }

        .step-number {
            width: 52px;
            height: 52px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 22px;

            background: linear-gradient(
                135deg,
                #4f8cff,
                #8b5cf6
            );

            font-weight: 800;
            font-size: 18px;
        }

        .step-card h4 {
            font-family: "Playfair Display", serif;
            font-size: 24px;
            margin-bottom: 12px;
        }

        .step-card p {
            color: #9299ae;
            line-height: 1.7;
            margin: 0;
        }

        /* Requirements */

        .requirements {
            background:
                linear-gradient(
                    135deg,
                    rgba(79,140,255,.08),
                    rgba(139,92,246,.06)
                );
            border-top: 1px solid rgba(255,255,255,.06);
            border-bottom: 1px solid rgba(255,255,255,.06);
        }

        .requirement-card {
            padding: 30px;
            border-radius: 22px;
            background: rgba(255,255,255,.045);
            border: 1px solid rgba(255,255,255,.08);
            height: 100%;
        }

        .requirement-card h3 {
            font-family: "Playfair Display", serif;
            font-size: 28px;
            margin-bottom: 25px;
        }

        .requirement-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .requirement-list li {
            display: flex;
            gap: 13px;
            margin-bottom: 18px;
            color: #c2c8d7;
            line-height: 1.6;
        }

        .requirement-list i {
            color: #6ee7b7;
            margin-top: 3px;
        }

        /* Dates */

        .date-card {
            display: flex;
            align-items: center;
            gap: 18px;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 16px;
            background: rgba(255,255,255,.04);
            border: 1px solid rgba(255,255,255,.07);
        }

        .date-icon {
            width: 48px;
            height: 48px;
            min-width: 48px;
            border-radius: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(79,140,255,.13);
            color: #7aa7ff;
            font-size: 20px;
        }

        .date-card h6 {
            margin: 0 0 4px;
            font-weight: 700;
        }

        .date-card p {
            margin: 0;
            color: #9299ae;
            font-size: 14px;
        }

        /* FAQ */

        .faq-item {
            background: rgba(255,255,255,.04);
            border: 1px solid rgba(255,255,255,.08) !important;
            margin-bottom: 12px;
            border-radius: 15px !important;
            overflow: hidden;
        }

        .faq-button {
            background: transparent !important;
            color: #fff !important;
            box-shadow: none !important;
            padding: 20px;
            font-weight: 600;
        }

        .faq-button::after {
            filter: invert(1);
        }

        .faq-answer {
            background: rgba(255,255,255,.02);
            color: #9299ae;
            line-height: 1.7;
            padding: 0 20px 20px;
        }

        /* CTA */

        .admission-cta {
            position: relative;
            overflow: hidden;
            padding: 70px 40px;
            border-radius: 30px;
            text-align: center;

            background:
                radial-gradient(
                    circle at 20% 50%,
                    rgba(34,211,238,.16),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 80% 50%,
                    rgba(139,92,246,.2),
                    transparent 30%
                ),
                #11162d;

            border: 1px solid rgba(255,255,255,.1);
        }

        .admission-cta h2 {
            font-family: "Playfair Display", serif;
            font-size: clamp(34px, 5vw, 50px);
            margin-bottom: 15px;
        }

        .admission-cta p {
            color: #a3aabd;
            max-width: 600px;
            margin: 0 auto 28px;
            line-height: 1.7;
        }

        /* Footer */

        .admission-footer {
            padding: 30px 0;
            border-top: 1px solid rgba(255,255,255,.07);
            color: #777f95;
            font-size: 14px;
        }

        .admission-footer strong {
            color: #d0d5e1;
        }

        /* Responsive */

        @media (max-width: 991px) {

            .admission-hero {
                padding: 90px 0 70px;
            }

            .admission-visual {
                height: 400px;
            }

            .admission-section {
                padding: 70px 0;
            }
        }

        @media (max-width: 767px) {

            .admission-hero {
                padding: 70px 0 55px;
            }

            .admission-hero p {
                font-size: 16px;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .hero-btn-primary,
            .hero-btn-outline {
                width: 100%;
                text-align: center;
            }

            .admission-visual {
                height: 330px;
            }

            .visual-card.top {
                top: 15px;
                right: 15px;
            }

            .visual-card.bottom {
                bottom: 15px;
                left: 15px;
            }

            .admission-section {
                padding: 60px 0;
            }

            .admission-cta {
                padding: 55px 22px;
                border-radius: 22px;
            }
        }

        @media (max-width: 380px) {

            .admission-hero h1 {
                font-size: 40px;
            }

            .admission-visual {
                height: 290px;
            }

            .visual-card {
                padding: 13px 15px;
            }
        }
    </style>
</head>

<body>

<div class="admission-page">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark py-3">

        <div class="container">

            <a
                class="navbar-brand d-flex align-items-center gap-2"
                href="index.php"
            >
                <span
                    style="
                        width:38px;
                        height:38px;
                        border-radius:11px;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        background:linear-gradient(135deg,#4f8cff,#8b5cf6);
                    "
                >
                    <i class="bi bi-stars"></i>
                </span>

                <span style="font-weight:700;">
                    Aurora College
                </span>
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

                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.php">
                            About
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="programs.php">
                            Programs
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link active"
                            href="admission.php"
                        >
                            Admissions
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">
                            Contact
                        </a>
                    </li>

                </ul>


                <div class="d-flex gap-2">

                    <a
                        href="login.php"
                        class="btn btn-outline-light px-4"
                    >
                        Login
                    </a>

                    <a
                        href="register.php"
                        class="btn btn-primary px-4"
                    >
                        Apply Now
                    </a>

                </div>

            </div>

        </div>

    </nav>


    <!-- HERO -->

    <section class="admission-hero">

        <div class="container position-relative" style="z-index:2;">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <div class="admission-badge">
                        <i class="bi bi-mortarboard-fill"></i>
                        Admissions 2026 / 2027
                    </div>

                    <h1>
                        Your next chapter
                        <span>starts here.</span>
                    </h1>

                    <p>
                        At Aurora College, we believe education should
                        open doors, build confidence, and prepare you for
                        a meaningful future. Explore our admission process
                        and take your first step today.
                    </p>

                    <div class="hero-buttons">

                        <a
                            href="register.php"
                            class="hero-btn-primary"
                        >
                            Start Your Application
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>

                        <a
                            href="programs.php"
                            class="hero-btn-outline"
                        >
                            Explore Programs
                        </a>

                    </div>

                </div>


                <div class="col-lg-6">

                    <div class="admission-visual">

                        <div class="visual-card top">

                            <strong>25+</strong>

                            <small>
                                Programs available
                            </small>

                        </div>


                        <div class="visual-card bottom">

                            <strong>
                                <i class="bi bi-check-circle-fill text-success me-1"></i>
                                Applications Open
                            </strong>

                            <small>
                                Begin your journey today
                            </small>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- HOW IT WORKS -->

    <section class="admission-section">

        <div class="container">

            <div class="section-heading">

                <div class="admission-badge">
                    <i class="bi bi-signpost-2"></i>
                    Simple application process
                </div>

                <h2>
                    How to apply
                </h2>

                <p>
                    We've designed our admission process to be simple,
                    clear, and convenient so you can focus on what matters:
                    preparing for your future.
                </p>

            </div>


            <div class="row g-4">

                <div class="col-md-6 col-lg-3">

                    <div class="step-card">

                        <div class="step-number">
                            01
                        </div>

                        <h4>
                            Explore
                        </h4>

                        <p>
                            Browse our programs and discover the course
                            that matches your interests and career goals.
                        </p>

                    </div>

                </div>


                <div class="col-md-6 col-lg-3">

                    <div class="step-card">

                        <div class="step-number">
                            02
                        </div>

                        <h4>
                            Apply
                        </h4>

                        <p>
                            Complete our online application form with
                            your personal and academic information.
                        </p>

                    </div>

                </div>


                <div class="col-md-6 col-lg-3">

                    <div class="step-card">

                        <div class="step-number">
                            03
                        </div>

                        <h4>
                            Review
                        </h4>

                        <p>
                            Our admissions team carefully reviews your
                            application and supporting information.
                        </p>

                    </div>

                </div>


                <div class="col-md-6 col-lg-3">

                    <div class="step-card">

                        <div class="step-number">
                            04
                        </div>

                        <h4>
                            Begin
                        </h4>

                        <p>
                            Receive your admission decision and prepare
                            to begin your Aurora College journey.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- REQUIREMENTS -->

    <section class="admission-section requirements">

        <div class="container">

            <div class="row g-5 align-items-start">

                <div class="col-lg-6">

                    <div class="section-heading text-lg-start mx-0 mb-4">

                        <h2>
                            Admission requirements
                        </h2>

                        <p>
                            Make sure you have the following information
                            ready before beginning your application.
                        </p>

                    </div>


                    <div class="requirement-card">

                        <h3>
                            What you'll need
                        </h3>

                        <ul class="requirement-list">

                            <li>
                                <i class="bi bi-check-circle-fill"></i>

                                <span>
                                    Valid personal identification
                                    information
                                </span>
                            </li>

                            <li>
                                <i class="bi bi-check-circle-fill"></i>

                                <span>
                                    Previous school or educational
                                    information
                                </span>
                            </li>

                            <li>
                                <i class="bi bi-check-circle-fill"></i>

                                <span>
                                    Your preferred academic program
                                </span>
                            </li>

                            <li>
                                <i class="bi bi-check-circle-fill"></i>

                                <span>
                                    Valid email address and phone number
                                </span>
                            </li>

                            <li>
                                <i class="bi bi-check-circle-fill"></i>

                                <span>
                                    Emergency contact information
                                </span>
                            </li>

                            <li>
                                <i class="bi bi-check-circle-fill"></i>

                                <span>
                                    Academic documents when requested
                                </span>
                            </li>

                        </ul>

                    </div>

                </div>


                <div class="col-lg-6">

                    <div class="section-heading text-lg-start mx-0 mb-4">

                        <h2>
                            Important dates
                        </h2>

                        <p>
                            Keep track of the key dates for the
                            2026/2027 admission cycle.
                        </p>

                    </div>


                    <div class="date-card">

                        <div class="date-icon">
                            <i class="bi bi-calendar-event"></i>
                        </div>

                        <div>
                            <h6>
                                Applications Open
                            </h6>

                            <p>
                                January 2026
                            </p>
                        </div>

                    </div>


                    <div class="date-card">

                        <div class="date-icon">
                            <i class="bi bi-calendar-check"></i>
                        </div>

                        <div>
                            <h6>
                                Early Application
                            </h6>

                            <p>
                                March – June 2026
                            </p>
                        </div>

                    </div>


                    <div class="date-card">

                        <div class="date-icon">
                            <i class="bi bi-hourglass-split"></i>
                        </div>

                        <div>
                            <h6>
                                Final Application Period
                            </h6>

                            <p>
                                July – September 2026
                            </p>
                        </div>

                    </div>


                    <div class="date-card">

                        <div class="date-icon">
                            <i class="bi bi-mortarboard"></i>
                        </div>

                        <div>
                            <h6>
                                Academic Year Begins
                            </h6>

                            <p>
                                October 2026
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- FAQ -->

    <section class="admission-section">

        <div class="container">

            <div class="section-heading">

                <div class="admission-badge">
                    <i class="bi bi-question-circle"></i>
                    Frequently asked questions
                </div>

                <h2>
                    Questions? We've got answers.
                </h2>

                <p>
                    Here are some common questions prospective students
                    ask about the admission process.
                </p>

            </div>


            <div
                class="accordion"
                id="admissionFaq"
            >

                <div class="accordion-item faq-item">

                    <h2 class="accordion-header">

                        <button
                            class="accordion-button collapsed faq-button"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faqOne"
                        >
                            How do I apply to Aurora College?
                        </button>

                    </h2>

                    <div
                        id="faqOne"
                        class="accordion-collapse collapse"
                        data-bs-parent="#admissionFaq"
                    >

                        <div class="faq-answer">
                            You can apply online by visiting our
                            registration page and completing the
                            application form. The process is designed
                            to be simple and convenient.
                        </div>

                    </div>

                </div>


                <div class="accordion-item faq-item">

                    <h2 class="accordion-header">

                        <button
                            class="accordion-button collapsed faq-button"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faqTwo"
                        >
                            Can I apply using my phone?
                        </button>

                    </h2>

                    <div
                        id="faqTwo"
                        class="accordion-collapse collapse"
                        data-bs-parent="#admissionFaq"
                    >

                        <div class="faq-answer">
                            Yes. Our application system is designed to
                            work on smartphones, tablets, and computers,
                            allowing you to apply wherever you are.
                        </div>

                    </div>

                </div>


                <div class="accordion-item faq-item">

                    <h2 class="accordion-header">

                        <button
                            class="accordion-button collapsed faq-button"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faqThree"
                        >
                            Can I track my application?
                        </button>

                    </h2>

                    <div
                        id="faqThree"
                        class="accordion-collapse collapse"
                        data-bs-parent="#admissionFaq"
                    >

                        <div class="faq-answer">
                            Yes. Once your account is created, you will
                            be able to sign in and view the status of
                            your application through your student
                            dashboard.
                        </div>

                    </div>

                </div>


                <div class="accordion-item faq-item">

                    <h2 class="accordion-header">

                        <button
                            class="accordion-button collapsed faq-button"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faqFour"
                        >
                            What if I need help with my application?
                        </button>

                    </h2>

                    <div
                        id="faqFour"
                        class="accordion-collapse collapse"
                        data-bs-parent="#admissionFaq"
                    >

                        <div class="faq-answer">
                            Our admissions team is available to help.
                            Visit our contact page or contact the
                            admissions office for assistance.
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- CTA -->

    <section class="admission-section pt-0">

        <div class="container">

            <div class="admission-cta">

                <h2>
                    Ready to take the first step?
                </h2>

                <p>
                    Your future is waiting. Start your Aurora College
                    application today and take one step closer to
                    becoming the person you want to be.
                </p>

                <a
                    href="register.php"
                    class="hero-btn-primary d-inline-block"
                >
                    Start Your Application
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>

            </div>

        </div>

    </section>


    <!-- FOOTER -->

    <footer class="admission-footer">

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