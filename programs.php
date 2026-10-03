<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Programs | Aurora College</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet"
    >

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">


    <style>

        /* =========================================
           PROGRAMS HERO
        ========================================= */

        .programs-hero {
            position: relative;
            min-height: 70vh;
            display: flex;
            align-items: center;
            overflow: hidden;

            background:
                radial-gradient(
                    circle at 15% 30%,
                    rgba(79,140,255,.18),
                    transparent 32%
                ),
                radial-gradient(
                    circle at 85% 20%,
                    rgba(139,92,246,.20),
                    transparent 32%
                ),
                var(--navy);
        }


        .programs-hero::before {
            content: "";
            position: absolute;
            inset: 0;

            background-image:
                linear-gradient(
                    rgba(255,255,255,.025) 1px,
                    transparent 1px
                ),
                linear-gradient(
                    90deg,
                    rgba(255,255,255,.025) 1px,
                    transparent 1px
                );

            background-size: 55px 55px;

            pointer-events: none;
        }


        .programs-hero-content {
            position: relative;
            z-index: 2;
            padding: 150px 0 90px;
        }


        .programs-badge {
            display: inline-flex;
            align-items: center;
            gap: 9px;

            padding: 9px 16px;

            border-radius: 50px;

            background: rgba(79,140,255,.10);

            border: 1px solid rgba(122,167,255,.25);

            color: #9fc0ff;

            font-size: .85rem;
            font-weight: 600;

            margin-bottom: 24px;
        }


        .programs-badge i {
            color: var(--cyan);
        }


        .programs-hero h1 {
            font-family: "Playfair Display", serif;

            font-size: clamp(
                3rem,
                6vw,
                5.4rem
            );

            line-height: 1.05;

            color: #fff;

            margin-bottom: 24px;
        }


        .programs-hero h1 span {
            background:
                linear-gradient(
                    90deg,
                    var(--blue-light),
                    var(--purple),
                    var(--cyan)
                );

            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }


        .programs-hero p {
            max-width: 650px;

            color: rgba(255,255,255,.67);

            font-size: 1.06rem;

            line-height: 1.8;

            margin-bottom: 32px;
        }


        .programs-hero-visual {
            position: relative;
            z-index: 2;
        }


        .programs-hero-visual img {
            width: 100%;
            height: 500px;

            object-fit: cover;

            border-radius: 28px;

            box-shadow:
                0 30px 80px rgba(0,0,0,.45),
                0 0 50px rgba(79,140,255,.10);
        }


        .programs-floating-card {
            position: absolute;

            right: -20px;
            bottom: 30px;

            padding: 20px 24px;

            border-radius: 18px;

            background: rgba(17,22,45,.90);

            border: 1px solid rgba(255,255,255,.10);

            backdrop-filter: blur(15px);

            box-shadow:
                0 20px 50px rgba(0,0,0,.35);

            color: #fff;
        }


        .programs-floating-card strong {
            display: block;

            font-size: 1.8rem;

            margin-bottom: 2px;
        }


        .programs-floating-card span {
            color: rgba(255,255,255,.58);

            font-size: .82rem;
        }


        /* =========================================
           CATEGORY FILTER
        ========================================= */

        .program-category-section {
            padding: 70px 0 35px;

            background: var(--navy);
        }


        .program-category-heading {
            text-align: center;

            max-width: 700px;

            margin: 0 auto 35px;
        }


        .program-category-heading h2 {
            font-family: "Playfair Display", serif;

            color: #fff;

            font-size: clamp(
                2.1rem,
                4vw,
                3.2rem
            );

            margin-bottom: 14px;
        }


        .program-category-heading p {
            color: rgba(255,255,255,.55);

            line-height: 1.7;

            margin: 0;
        }


        .program-filter {
            display: flex;

            justify-content: center;

            flex-wrap: wrap;

            gap: 10px;
        }


        .program-filter button {
            border: 1px solid rgba(255,255,255,.10);

            background: rgba(255,255,255,.035);

            color: rgba(255,255,255,.65);

            border-radius: 50px;

            padding: 11px 21px;

            font-family: inherit;

            font-size: .88rem;

            transition: .25s ease;
        }


        .program-filter button:hover,
        .program-filter button.active {
            color: #fff;

            background:
                linear-gradient(
                    135deg,
                    var(--blue),
                    var(--purple)
                );

            border-color: transparent;

            box-shadow:
                0 8px 25px rgba(79,140,255,.20);
        }


        /* =========================================
           PROGRAMS LIST
        ========================================= */

        .programs-section {
            padding: 45px 0 110px;

            background: var(--navy);
        }


        .program-card {
            position: relative;

            height: 100%;

            overflow: hidden;

            border-radius: 24px;

            background: rgba(255,255,255,.035);

            border: 1px solid rgba(255,255,255,.075);

            transition:
                transform .3s ease,
                border-color .3s ease,
                box-shadow .3s ease;
        }


        .program-card:hover {
            transform: translateY(-8px);

            border-color:
                rgba(79,140,255,.30);

            box-shadow:
                0 25px 60px rgba(0,0,0,.25);
        }


        .program-image {
            position: relative;
            overflow: hidden;
        }


        .program-image img {
            width: 100%;
            height: 235px;

            object-fit: cover;

            transition: transform .5s ease;
        }


        .program-card:hover
        .program-image img {
            transform: scale(1.06);
        }


        .program-level {
            position: absolute;

            top: 18px;
            left: 18px;

            padding: 7px 13px;

            border-radius: 50px;

            background: rgba(8,11,28,.82);

            border: 1px solid rgba(255,255,255,.12);

            color: #fff;

            backdrop-filter: blur(10px);

            font-size: .72rem;

            font-weight: 600;
        }


        .program-content {
            padding: 28px;
        }


        .program-icon {
            width: 50px;
            height: 50px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 15px;

            color: #fff;

            background:
                linear-gradient(
                    135deg,
                    var(--blue),
                    var(--purple)
                );

            font-size: 1.25rem;

            margin-bottom: 20px;
        }


        .program-content h3 {
            color: #fff;

            font-family:
                "Playfair Display",
                serif;

            font-size: 1.55rem;

            margin-bottom: 12px;
        }


        .program-content > p {
            color: rgba(255,255,255,.55);

            line-height: 1.7;

            font-size: .9rem;

            min-height: 76px;

            margin-bottom: 22px;
        }


        .program-meta {
            display: flex;

            flex-wrap: wrap;

            gap: 18px;

            padding: 17px 0;

            border-top:
                1px solid rgba(255,255,255,.07);

            border-bottom:
                1px solid rgba(255,255,255,.07);

            margin-bottom: 20px;
        }


        .program-meta-item {
            display: flex;

            align-items: center;

            gap: 7px;

            color: rgba(255,255,255,.55);

            font-size: .78rem;
        }


        .program-meta-item i {
            color: var(--cyan);
        }


        .program-link {
            display: inline-flex;

            align-items: center;

            gap: 8px;

            color: #fff;

            text-decoration: none;

            font-size: .88rem;

            font-weight: 600;

            transition: .25s ease;
        }


        .program-link i {
            transition: transform .25s ease;
        }


        .program-link:hover {
            color: var(--cyan);
        }


        .program-link:hover i {
            transform: translateX(4px);
        }


        /* =========================================
           FEATURED PROGRAM
        ========================================= */

        .featured-program {
            padding: 110px 0;

            background:
                linear-gradient(
                    180deg,
                    var(--navy-light),
                    var(--navy)
                );
        }


        .featured-box {
            position: relative;

            overflow: hidden;

            border-radius: 30px;

            background:
                radial-gradient(
                    circle at 90% 10%,
                    rgba(139,92,246,.25),
                    transparent 35%
                ),
                radial-gradient(
                    circle at 10% 90%,
                    rgba(34,211,238,.12),
                    transparent 30%
                ),
                #10162e;

            border:
                1px solid rgba(255,255,255,.08);
        }


        .featured-image {
            height: 100%;
            min-height: 500px;
        }


        .featured-image img {
            width: 100%;
            height: 100%;

            min-height: 500px;

            object-fit: cover;
        }


        .featured-content {
            padding: 60px 55px;
        }


        .featured-label {
            display: inline-block;

            padding: 7px 13px;

            border-radius: 50px;

            color: var(--cyan);

            background:
                rgba(34,211,238,.08);

            border:
                1px solid rgba(34,211,238,.15);

            font-size: .72rem;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 1.5px;

            margin-bottom: 20px;
        }


        .featured-content h2 {
            color: #fff;

            font-family:
                "Playfair Display",
                serif;

            font-size:
                clamp(2.1rem, 4vw, 3.5rem);

            line-height: 1.15;

            margin-bottom: 18px;
        }


        .featured-content > p {
            color: rgba(255,255,255,.58);

            line-height: 1.8;

            margin-bottom: 28px;
        }


        .featured-points {
            margin-bottom: 32px;
        }


        .featured-point {
            display: flex;

            align-items: center;

            gap: 12px;

            color: rgba(255,255,255,.72);

            font-size: .9rem;

            margin-bottom: 13px;
        }


        .featured-point i {
            color: var(--cyan);

            font-size: 1.05rem;
        }


        /* =========================================
           CAREER PATH
        ========================================= */

        .career-section {
            padding: 110px 0;

            background: var(--navy);
        }


        .career-heading {
            max-width: 700px;

            margin: 0 auto 55px;

            text-align: center;
        }


        .career-heading h2 {
            font-family:
                "Playfair Display",
                serif;

            color: #fff;

            font-size:
                clamp(2.2rem, 4vw, 3.3rem);

            margin-bottom: 16px;
        }


        .career-heading p {
            color: rgba(255,255,255,.55);

            line-height: 1.75;

            margin: 0;
        }


        .career-card {
            height: 100%;

            padding: 30px;

            border-radius: 22px;

            background:
                rgba(255,255,255,.025);

            border:
                1px solid rgba(255,255,255,.07);

            transition: .3s ease;
        }


        .career-card:hover {
            transform: translateY(-7px);

            border-color:
                rgba(79,140,255,.25);

            background:
                rgba(255,255,255,.04);
        }


        .career-icon {
            width: 55px;
            height: 55px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 16px;

            color: #fff;

            background:
                linear-gradient(
                    135deg,
                    var(--blue),
                    var(--purple)
                );

            margin-bottom: 22px;

            font-size: 1.3rem;
        }


        .career-card h4 {
            color: #fff;

            font-size: 1.1rem;

            margin-bottom: 10px;
        }


        .career-card p {
            color: rgba(255,255,255,.52);

            line-height: 1.7;

            font-size: .88rem;

            margin: 0;
        }


        /* =========================================
           CTA
        ========================================= */

        .programs-cta {
            padding: 100px 0 110px;

            background: var(--navy);
        }


        .programs-cta-box {
            position: relative;

            overflow: hidden;

            text-align: center;

            padding: 85px 30px;

            border-radius: 32px;

            background:
                radial-gradient(
                    circle at 20% 20%,
                    rgba(79,140,255,.25),
                    transparent 35%
                ),
                radial-gradient(
                    circle at 80% 80%,
                    rgba(139,92,246,.25),
                    transparent 35%
                ),
                #11162d;

            border:
                1px solid rgba(255,255,255,.08);
        }


        .programs-cta-box h2 {
            color: #fff;

            font-family:
                "Playfair Display",
                serif;

            font-size:
                clamp(2.2rem, 5vw, 4rem);

            margin-bottom: 18px;
        }


        .programs-cta-box p {
            max-width: 650px;

            margin: 0 auto 30px;

            color: rgba(255,255,255,.60);

            line-height: 1.8;
        }


        /* =========================================
           RESPONSIVE
        ========================================= */

        @media (max-width: 991px) {

            .programs-hero-content {
                padding: 130px 0 65px;
            }


            .programs-hero-visual {
                margin-top: 25px;
            }


            .programs-hero-visual img {
                height: 430px;
            }


            .programs-floating-card {
                right: 20px;
            }


            .featured-image,
            .featured-image img {
                min-height: 400px;
            }


            .featured-content {
                padding: 45px 35px;
            }

        }


        @media (max-width: 767px) {

            .programs-hero-content {
                padding: 110px 0 50px;
            }


            .programs-hero h1 {
                font-size: 3rem;
            }


            .programs-hero p {
                font-size: .95rem;
            }


            .programs-hero-visual img {
                height: 340px;

                border-radius: 20px;
            }


            .programs-floating-card {
                right: 12px;
                bottom: 15px;

                padding: 15px 18px;
            }


            .programs-floating-card strong {
                font-size: 1.35rem;
            }


            .program-category-section {
                padding-top: 55px;
            }


            .programs-section,
            .career-section {
                padding-bottom: 80px;
            }


            .featured-program {
                padding: 80px 0;
            }


            .featured-image,
            .featured-image img {
                min-height: 330px;
            }


            .featured-content {
                padding: 38px 25px;
            }


            .programs-cta {
                padding: 75px 0 80px;
            }


            .programs-cta-box {
                padding: 60px 22px;
                border-radius: 23px;
            }

        }


        @media (max-width: 380px) {

            .programs-hero h1 {
                font-size: 2.5rem;
            }


            .program-filter button {
                width: 100%;
            }


            .program-content {
                padding: 23px;
            }

        }

    </style>

</head>


<body>


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
                        href="programs.php"
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
                        href="contact.php"
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



<!-- =========================================
     HERO
========================================= -->

<section class="programs-hero">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <div class="programs-hero-content">

                    <div class="programs-badge">

                        <i class="bi bi-mortarboard"></i>

                        Explore Our Programs

                    </div>


                    <h1>

                        Learn skills that
                        <span>shape your future.</span>

                    </h1>


                    <p>

                        Discover programs designed to combine academic
                        knowledge, practical learning, and the skills
                        today's world demands.

                    </p>


                    <div class="d-flex flex-wrap gap-3">

                        <a
                            href="#programs"
                            class="btn btn-primary-custom"
                        >

                            Explore Programs

                            <i class="bi bi-arrow-down ms-1"></i>

                        </a>


                        <a
                            href="register.php"
                            class="btn btn-outline-light-custom"
                        >

                            Apply Now

                        </a>

                    </div>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="programs-hero-visual">

                    <img
                        src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=1200&q=85"
                        alt="Aurora College students"
                    >


                    <div class="programs-floating-card">

                        <strong>
                            25+
                        </strong>

                        <span>
                            Academic Programs
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================
     CATEGORY
========================================= -->

<section class="program-category-section">

    <div class="container">

        <div class="program-category-heading">

            <span class="section-label">
                Find Your Path
            </span>


            <h2>
                Choose a direction.
            </h2>


            <p>
                Explore academic areas and discover a program
                that matches your interests and future goals.
            </p>

        </div>


        <div class="program-filter">

            <button
                class="active"
                type="button"
                data-filter="all"
            >
                All Programs
            </button>


            <button
                type="button"
                data-filter="technology"
            >
                Technology
            </button>


            <button
                type="button"
                data-filter="business"
            >
                Business
            </button>


            <button
                type="button"
                data-filter="finance"
            >
                Finance
            </button>


            <button
                type="button"
                data-filter="social"
            >
                Social Sciences
            </button>

        </div>

    </div>

</section>



<!-- =========================================
     PROGRAMS
========================================= -->

<section
    class="programs-section"
    id="programs"
>

    <div class="container">

        <div class="row g-4">


            <!-- Computer Science -->

            <div
                class="col-md-6 col-lg-4 program-item"
                data-category="technology"
            >

                <div class="program-card">

                    <div class="program-image">

                        <img
                            src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1000&q=85"
                            alt="Computer Science"
                        >


                        <span class="program-level">
                            Undergraduate
                        </span>

                    </div>


                    <div class="program-content">

                        <div class="program-icon">

                            <i class="bi bi-code-slash"></i>

                        </div>


                        <h3>
                            Computer Science
                        </h3>


                        <p>
                            Build strong foundations in programming,
                            software development, databases, networks,
                            and modern computing technologies.
                        </p>


                        <div class="program-meta">

                            <div class="program-meta-item">

                                <i class="bi bi-clock"></i>

                                <span>
                                    4 Years
                                </span>

                            </div>


                            <div class="program-meta-item">

                                <i class="bi bi-laptop"></i>

                                <span>
                                    Technology
                                </span>

                            </div>

                        </div>


                        <a
                            href="#"
                            class="program-link"
                        >

                            View Program

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>

                </div>

            </div>



            <!-- Business -->

            <div
                class="col-md-6 col-lg-4 program-item"
                data-category="business"
            >

                <div class="program-card">

                    <div class="program-image">

                        <img
                            src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1000&q=85"
                            alt="Business Administration"
                        >


                        <span class="program-level">
                            Undergraduate
                        </span>

                    </div>


                    <div class="program-content">

                        <div class="program-icon">

                            <i class="bi bi-briefcase"></i>

                        </div>


                        <h3>
                            Business Administration
                        </h3>


                        <p>
                            Develop practical knowledge in management,
                            entrepreneurship, marketing, leadership,
                            and organizational strategy.
                        </p>


                        <div class="program-meta">

                            <div class="program-meta-item">

                                <i class="bi bi-clock"></i>

                                <span>
                                    4 Years
                                </span>

                            </div>


                            <div class="program-meta-item">

                                <i class="bi bi-bar-chart"></i>

                                <span>
                                    Business
                                </span>

                            </div>

                        </div>


                        <a
                            href="#"
                            class="program-link"
                        >

                            View Program

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>

                </div>

            </div>



            <!-- Accounting -->

            <div
                class="col-md-6 col-lg-4 program-item"
                data-category="finance"
            >

                <div class="program-card">

                    <div class="program-image">

                        <img
                            src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=1000&q=85"
                            alt="Accounting and Finance"
                        >


                        <span class="program-level">
                            Undergraduate
                        </span>

                    </div>


                    <div class="program-content">

                        <div class="program-icon">

                            <i class="bi bi-calculator"></i>

                        </div>


                        <h3>
                            Accounting & Finance
                        </h3>


                        <p>
                            Learn financial reporting, accounting systems,
                            auditing, taxation, financial management,
                            and business analysis.
                        </p>


                        <div class="program-meta">

                            <div class="program-meta-item">

                                <i class="bi bi-clock"></i>

                                <span>
                                    4 Years
                                </span>

                            </div>


                            <div class="program-meta-item">

                                <i class="bi bi-cash-stack"></i>

                                <span>
                                    Finance
                                </span>

                            </div>

                        </div>


                        <a
                            href="#"
                            class="program-link"
                        >

                            View Program

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>

                </div>

            </div>



            <!-- Information Technology -->

            <div
                class="col-md-6 col-lg-4 program-item"
                data-category="technology"
            >

                <div class="program-card">

                    <div class="program-image">

                        <img
                            src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1000&q=85"
                            alt="Information Technology"
                        >


                        <span class="program-level">
                            Undergraduate
                        </span>

                    </div>


                    <div class="program-content">

                        <div class="program-icon">

                            <i class="bi bi-pc-display"></i>

                        </div>


                        <h3>
                            Information Technology
                        </h3>


                        <p>
                            Explore systems, networks, cybersecurity,
                            cloud technologies, technical support,
                            and enterprise IT solutions.
                        </p>


                        <div class="program-meta">

                            <div class="program-meta-item">

                                <i class="bi bi-clock"></i>

                                <span>
                                    4 Years
                                </span>

                            </div>


                            <div class="program-meta-item">

                                <i class="bi bi-cpu"></i>

                                <span>
                                    Technology
                                </span>

                            </div>

                        </div>


                        <a
                            href="#"
                            class="program-link"
                        >

                            View Program

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>

                </div>

            </div>



            <!-- Economics -->

            <div
                class="col-md-6 col-lg-4 program-item"
                data-category="business"
            >

                <div class="program-card">

                    <div class="program-image">

                        <img
                            src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1000&q=85"
                            alt="Economics"
                        >


                        <span class="program-level">
                            Undergraduate
                        </span>

                    </div>


                    <div class="program-content">

                        <div class="program-icon">

                            <i class="bi bi-graph-up-arrow"></i>

                        </div>


                        <h3>
                            Economics
                        </h3>


                        <p>
                            Study markets, economic policy, data analysis,
                            development, business decision-making,
                            and economic systems.
                        </p>


                        <div class="program-meta">

                            <div class="program-meta-item">

                                <i class="bi bi-clock"></i>

                                <span>
                                    4 Years
                                </span>

                            </div>


                            <div class="program-meta-item">

                                <i class="bi bi-graph-up"></i>

                                <span>
                                    Business
                                </span>

                            </div>

                        </div>


                        <a
                            href="#"
                            class="program-link"
                        >

                            View Program

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>

                </div>

            </div>



            <!-- Social Science -->

            <div
                class="col-md-6 col-lg-4 program-item"
                data-category="social"
            >

                <div class="program-card">

                    <div class="program-image">

                        <img
                            src="https://images.unsplash.com/photo-1529390079861-591de354faf5?auto=format&fit=crop&w=1000&q=85"
                            alt="Social Sciences"
                        >


                        <span class="program-level">
                            Undergraduate
                        </span>

                    </div>


                    <div class="program-content">

                        <div class="program-icon">

                            <i class="bi bi-people"></i>

                        </div>


                        <h3>
                            Social Sciences
                        </h3>


                        <p>
                            Explore people, society, communication,
                            social development, research, and the forces
                            that shape communities.
                        </p>


                        <div class="program-meta">

                            <div class="program-meta-item">

                                <i class="bi bi-clock"></i>

                                <span>
                                    4 Years
                                </span>

                            </div>


                            <div class="program-meta-item">

                                <i class="bi bi-people"></i>

                                <span>
                                    Social Sciences
                                </span>

                            </div>

                        </div>


                        <a
                            href="#"
                            class="program-link"
                        >

                            View Program

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================
     FEATURED PROGRAM
========================================= -->

<section class="featured-program">

    <div class="container">

        <div class="featured-box">

            <div class="row g-0 align-items-stretch">

                <div class="col-lg-6">

                    <div class="featured-image">

                        <img
                            src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1200&q=85"
                            alt="Technology students"
                        >

                    </div>

                </div>


                <div class="col-lg-6">

                    <div class="featured-content">

                        <span class="featured-label">
                            Featured Program
                        </span>


                        <h2>
                            Build the technology of tomorrow.
                        </h2>


                        <p>
                            Our Computer Science program gives students
                            the opportunity to explore software development,
                            data, systems, and emerging technologies while
                            developing strong problem-solving skills.
                        </p>


                        <div class="featured-points">

                            <div class="featured-point">

                                <i class="bi bi-check-circle-fill"></i>

                                Programming & Software Development

                            </div>


                            <div class="featured-point">

                                <i class="bi bi-check-circle-fill"></i>

                                Database & Information Systems

                            </div>


                            <div class="featured-point">

                                <i class="bi bi-check-circle-fill"></i>

                                Web & Application Development

                            </div>


                            <div class="featured-point">

                                <i class="bi bi-check-circle-fill"></i>

                                Problem Solving & Innovation

                            </div>

                        </div>


                        <a
                            href="register.php"
                            class="btn btn-primary-custom"
                        >

                            Apply for This Program

                            <i class="bi bi-arrow-up-right ms-1"></i>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================
     CAREER PATHS
========================================= -->

<section class="career-section">

    <div class="container">

        <div class="career-heading">

            <span class="section-label">
                Beyond Graduation
            </span>


            <h2>
                Your program can open many doors.
            </h2>


            <p>
                Build knowledge and transferable skills that can support
                different career paths, industries, and future studies.
            </p>

        </div>


        <div class="row g-4">


            <div class="col-md-6 col-lg-3">

                <div class="career-card">

                    <div class="career-icon">
                        <i class="bi bi-laptop"></i>
                    </div>

                    <h4>
                        Technology
                    </h4>

                    <p>
                        Software development, IT, systems,
                        cybersecurity, data, and technology services.
                    </p>

                </div>

            </div>


            <div class="col-md-6 col-lg-3">

                <div class="career-card">

                    <div class="career-icon">
                        <i class="bi bi-building"></i>
                    </div>

                    <h4>
                        Business
                    </h4>

                    <p>
                        Management, entrepreneurship, marketing,
                        operations, and organizational roles.
                    </p>

                </div>

            </div>


            <div class="col-md-6 col-lg-3">

                <div class="career-card">

                    <div class="career-icon">
                        <i class="bi bi-bank"></i>
                    </div>

                    <h4>
                        Finance
                    </h4>

                    <p>
                        Accounting, banking, financial analysis,
                        auditing, and financial management.
                    </p>

                </div>

            </div>


            <div class="col-md-6 col-lg-3">

                <div class="career-card">

                    <div class="career-icon">
                        <i class="bi bi-globe2"></i>
                    </div>

                    <h4>
                        Further Study
                    </h4>

                    <p>
                        Continue developing your expertise through
                        advanced education and professional learning.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================
     CTA
========================================= -->

<section
    class="programs-cta"
    id="admissions"
>

    <div class="container">

        <div class="programs-cta-box">

            <h2>
                Found your direction?
            </h2>


            <p>
                Take the next step toward your future.
                Submit your application and begin your journey
                at Aurora College.
            </p>


            <a
                href="register.php"
                class="btn btn-primary-custom btn-lg"
            >

                Start Your Application

                <i class="bi bi-arrow-up-right ms-1"></i>

            </a>

        </div>

    </div>

</section>



<!-- =========================================
     FOOTER
========================================= -->

<footer
    class="footer"
    id="contact"
>


    <div class="container">


        <div class="row g-5">


            <div class="col-lg-5">


                <a
                    href="index.php"
                    class="college-logo footer-logo"
                >

                    <div class="logo-symbol">

                        <i class="bi bi-stars"></i>

                    </div>

                    <div class="logo-text">

                        <strong>AURORA</strong>

                        <span>COLLEGE</span>

                    </div>

                </a>


                <p class="footer-description">

                    Empowering students with knowledge,
                    skills and confidence to create a
                    better tomorrow.

                </p>


                <div class="social-links">

                    <a href="#">
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a href="#">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="#">
                        <i class="bi bi-linkedin"></i>
                    </a>

                    <a href="#">
                        <i class="bi bi-telegram"></i>
                    </a>

                </div>

            </div>



            <div class="col-6 col-lg-2">

                <h5>
                    Explore
                </h5>

                <a href="index.php">
                    Home
                </a>

                <a href="about.php">
                    About
                </a>

                <a href="#programs">
                    Programs
                </a>

                <a href="#admission">
                    Admissions
                </a>

            </div>



            <div class="col-6 col-lg-2">

                <h5>
                    Students
                </h5>

                <a href="register.php">
                    Register
                </a>

                <a href="login.php">
                    Login
                </a>

                <a href="#">
                    Student Portal
                </a>

                <a href="#">
                    FAQs
                </a>

            </div>



            <div class="col-lg-3">

                <h5>
                    Contact
                </h5>

                <div class="contact-item">

                    <i class="bi bi-geo-alt"></i>

                    <span>
                        Aurora Campus,
                        Addis Ababa
                    </span>

                </div>


                <div class="contact-item">

                    <i class="bi bi-envelope"></i>

                    <span>
                        info@auroracollege.edu
                    </span>

                </div>


                <div class="contact-item">

                    <i class="bi bi-telephone"></i>

                    <span>
                        +251 11 000 0000
                    </span>

                </div>

            </div>


        </div>


        <div class="footer-bottom">

            <span>
                © <?php echo date("Y"); ?> Aurora College.
                All rights reserved.
            </span>

            <span>
                Discover. Learn. Become.
            </span>

        </div>


    </div>

</footer>




<!-- =========================================
     BOOTSTRAP
========================================= -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>



<!-- =========================================
     PROGRAM FILTER
========================================= -->

<script>

    document.addEventListener(
        "DOMContentLoaded",
        function () {

            const buttons =
                document.querySelectorAll(
                    ".program-filter button"
                );

            const programs =
                document.querySelectorAll(
                    ".program-item"
                );


            buttons.forEach(function (button) {

                button.addEventListener(
                    "click",
                    function () {

                        const filter =
                            this.getAttribute(
                                "data-filter"
                            );


                        buttons.forEach(
                            function (btn) {

                                btn.classList.remove(
                                    "active"
                                );

                            }
                        );


                        this.classList.add(
                            "active"
                        );


                        programs.forEach(
                            function (program) {

                                const category =
                                    program.getAttribute(
                                        "data-category"
                                    );


                                if (
                                    filter === "all" ||
                                    category === filter
                                ) {

                                    program.style.display =
                                        "";

                                    setTimeout(
                                        function () {

                                            program.style.opacity =
                                                "1";

                                            program.style.transform =
                                                "translateY(0)";

                                        },
                                        20
                                    );

                                } else {

                                    program.style.display =
                                        "none";

                                }

                            }
                        );

                    }
                );

            });

        }
    );

</script>


</body>
</html>