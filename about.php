<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Us | Aurora College</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

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
           ABOUT PAGE
        ========================================= */

        .about-hero {
            position: relative;
            min-height: 72vh;
            display: flex;
            align-items: center;
            overflow: hidden;
            background:
                radial-gradient(circle at 80% 20%, rgba(139, 92, 246, .20), transparent 35%),
                radial-gradient(circle at 15% 80%, rgba(34, 211, 238, .12), transparent 30%),
                var(--navy);
        }

        .about-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(255,255,255,.025) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,.025) 1px, transparent 1px);
            background-size: 55px 55px;
            pointer-events: none;
        }

        .about-hero-content {
            position: relative;
            z-index: 2;
            padding: 150px 0 90px;
        }

        .about-badge {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 9px 16px;
            border-radius: 50px;
            background: rgba(79, 140, 255, .10);
            border: 1px solid rgba(122, 167, 255, .25);
            color: #9fc0ff;
            font-size: .85rem;
            font-weight: 600;
            margin-bottom: 24px;
        }

        .about-badge i {
            color: var(--cyan);
        }

        .about-hero h1 {
            font-family: "Playfair Display", serif;
            font-size: clamp(3rem, 6vw, 5.5rem);
            line-height: 1.05;
            color: #fff;
            margin-bottom: 24px;
        }

        .about-hero h1 span {
            background: linear-gradient(
                90deg,
                var(--blue-light),
                var(--purple),
                var(--cyan)
            );
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .about-hero p {
            max-width: 650px;
            color: rgba(255,255,255,.68);
            font-size: 1.08rem;
            line-height: 1.8;
            margin-bottom: 32px;
        }

        .about-hero-image {
            position: relative;
            z-index: 2;
        }

        .about-hero-image img {
            width: 100%;
            height: 520px;
            object-fit: cover;
            border-radius: 28px;
            box-shadow:
                0 30px 80px rgba(0,0,0,.45),
                0 0 50px rgba(79,140,255,.10);
        }

        .about-image-overlay {
            position: absolute;
            left: -35px;
            bottom: 35px;
            padding: 20px 24px;
            border-radius: 18px;
            background: rgba(17,22,45,.88);
            border: 1px solid rgba(255,255,255,.10);
            backdrop-filter: blur(15px);
            color: #fff;
            box-shadow: 0 20px 50px rgba(0,0,0,.35);
        }

        .about-image-overlay strong {
            display: block;
            font-size: 1.5rem;
            margin-bottom: 2px;
        }

        .about-image-overlay span {
            color: rgba(255,255,255,.6);
            font-size: .85rem;
        }


        /* =========================================
           STORY SECTION
        ========================================= */

        .about-story {
            padding: 110px 0;
            background: var(--navy);
        }

        .about-story-image {
            position: relative;
        }

        .about-story-image img {
            width: 100%;
            height: 520px;
            object-fit: cover;
            border-radius: 25px;
        }

        .experience-card {
            position: absolute;
            right: -25px;
            bottom: 30px;
            padding: 22px 26px;
            border-radius: 18px;
            background: linear-gradient(
                135deg,
                rgba(79,140,255,.95),
                rgba(139,92,246,.95)
            );
            color: #fff;
            box-shadow: 0 20px 45px rgba(0,0,0,.35);
        }

        .experience-card strong {
            display: block;
            font-size: 2rem;
            font-weight: 700;
        }

        .experience-card span {
            font-size: .82rem;
            opacity: .85;
        }

        .section-label {
            display: inline-block;
            color: var(--cyan);
            font-size: .8rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 700;
            margin-bottom: 14px;
        }

        .section-title {
            font-family: "Playfair Display", serif;
            color: #fff;
            font-size: clamp(2.2rem, 4vw, 3.5rem);
            line-height: 1.15;
            margin-bottom: 22px;
        }

        .section-text {
            color: rgba(255,255,255,.62);
            line-height: 1.85;
            margin-bottom: 18px;
        }

        .story-points {
            margin-top: 28px;
        }

        .story-point {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            margin-bottom: 18px;
        }

        .story-point-icon {
            width: 38px;
            height: 38px;
            min-width: 38px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(79,140,255,.12);
            color: var(--blue-light);
        }

        .story-point strong {
            color: #fff;
            display: block;
            margin-bottom: 4px;
        }

        .story-point span {
            color: rgba(255,255,255,.55);
            font-size: .9rem;
            line-height: 1.6;
        }


        /* =========================================
           MISSION & VISION
        ========================================= */

        .mission-section {
            padding: 100px 0;
            background:
                linear-gradient(
                    180deg,
                    var(--navy-light),
                    var(--navy)
                );
        }

        .mission-card {
            height: 100%;
            padding: 42px;
            border-radius: 25px;
            background: rgba(255,255,255,.035);
            border: 1px solid rgba(255,255,255,.08);
            transition: .3s ease;
        }

        .mission-card:hover {
            transform: translateY(-8px);
            border-color: rgba(79,140,255,.3);
            box-shadow: 0 25px 60px rgba(0,0,0,.2);
        }

        .mission-icon {
            width: 62px;
            height: 62px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            color: #fff;
            background: linear-gradient(
                135deg,
                var(--blue),
                var(--purple)
            );
            margin-bottom: 25px;
        }

        .mission-card h3 {
            color: #fff;
            font-family: "Playfair Display", serif;
            font-size: 1.8rem;
            margin-bottom: 15px;
        }

        .mission-card p {
            color: rgba(255,255,255,.58);
            line-height: 1.8;
            margin: 0;
        }


        /* =========================================
           VALUES
        ========================================= */

        .values-section {
            padding: 110px 0;
            background: var(--navy);
        }

        .values-heading {
            max-width: 700px;
            margin: 0 auto 60px;
            text-align: center;
        }

        .value-card {
            height: 100%;
            padding: 32px 28px;
            border-radius: 22px;
            background: rgba(255,255,255,.025);
            border: 1px solid rgba(255,255,255,.07);
            transition: .3s ease;
        }

        .value-card:hover {
            transform: translateY(-7px);
            background: rgba(255,255,255,.04);
            border-color: rgba(34,211,238,.25);
        }

        .value-number {
            color: rgba(255,255,255,.16);
            font-size: .8rem;
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }

        .value-icon {
            width: 52px;
            height: 52px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
            color: var(--cyan);
            background: rgba(34,211,238,.08);
            font-size: 1.3rem;
            margin-bottom: 20px;
        }

        .value-card h4 {
            color: #fff;
            margin-bottom: 12px;
            font-size: 1.15rem;
        }

        .value-card p {
            color: rgba(255,255,255,.55);
            font-size: .9rem;
            line-height: 1.7;
            margin: 0;
        }


        /* =========================================
           WHY AURORA
        ========================================= */

        .why-section {
            padding: 110px 0;
            background: var(--navy-light);
        }

        .why-list {
            margin-top: 35px;
        }

        .why-item {
            display: flex;
            gap: 18px;
            padding: 20px 0;
            border-bottom: 1px solid rgba(255,255,255,.07);
        }

        .why-item:last-child {
            border-bottom: 0;
        }

        .why-check {
            width: 40px;
            height: 40px;
            min-width: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            background: linear-gradient(
                135deg,
                var(--blue),
                var(--purple)
            );
        }

        .why-item h5 {
            color: #fff;
            margin-bottom: 5px;
            font-size: 1rem;
        }

        .why-item p {
            color: rgba(255,255,255,.55);
            margin: 0;
            line-height: 1.65;
            font-size: .9rem;
        }

        .why-image {
            position: relative;
        }

        .why-image img {
            width: 100%;
            height: 580px;
            object-fit: cover;
            border-radius: 28px;
        }

        .why-stat {
            position: absolute;
            top: 30px;
            left: 30px;
            padding: 18px 22px;
            background: rgba(8,11,28,.85);
            border: 1px solid rgba(255,255,255,.1);
            border-radius: 16px;
            backdrop-filter: blur(15px);
        }

        .why-stat strong {
            color: #fff;
            display: block;
            font-size: 1.5rem;
        }

        .why-stat span {
            color: rgba(255,255,255,.55);
            font-size: .78rem;
        }


        /* =========================================
           STATS
        ========================================= */

        .about-stats {
            padding: 70px 0;
            background:
                linear-gradient(
                    135deg,
                    #101936,
                    #16102f
                );
            border-top: 1px solid rgba(255,255,255,.06);
            border-bottom: 1px solid rgba(255,255,255,.06);
        }

        .about-stat {
            text-align: center;
            padding: 15px;
        }

        .about-stat strong {
            display: block;
            color: #fff;
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 700;
            margin-bottom: 5px;
        }

        .about-stat strong span {
            color: var(--cyan);
        }

        .about-stat p {
            color: rgba(255,255,255,.5);
            margin: 0;
            font-size: .9rem;
        }


        /* =========================================
           CTA
        ========================================= */

        .about-cta {
            padding: 110px 0;
            background: var(--navy);
        }

        .about-cta-box {
            position: relative;
            overflow: hidden;
            text-align: center;
            padding: 85px 40px;
            border-radius: 32px;
            background:
                radial-gradient(
                    circle at 20% 20%,
                    rgba(79,140,255,.28),
                    transparent 35%
                ),
                radial-gradient(
                    circle at 80% 80%,
                    rgba(139,92,246,.28),
                    transparent 35%
                ),
                #11162d;
            border: 1px solid rgba(255,255,255,.08);
        }

        .about-cta-box h2 {
            position: relative;
            z-index: 2;
            color: #fff;
            font-family: "Playfair Display", serif;
            font-size: clamp(2.2rem, 5vw, 4rem);
            margin-bottom: 18px;
        }

        .about-cta-box p {
            position: relative;
            z-index: 2;
            max-width: 650px;
            margin: 0 auto 30px;
            color: rgba(255,255,255,.62);
            line-height: 1.8;
        }

        .about-cta-box .btn {
            position: relative;
            z-index: 2;
        }


        /* =========================================
           RESPONSIVE
        ========================================= */

        @media (max-width: 991px) {

            .about-hero {
                min-height: auto;
            }

            .about-hero-content {
                padding: 130px 0 70px;
            }

            .about-hero-image {
                margin-top: 40px;
            }

            .about-hero-image img {
                height: 430px;
            }

            .about-image-overlay {
                left: 20px;
            }

            .about-story,
            .values-section,
            .why-section {
                padding: 80px 0;
            }

            .about-story-image {
                margin-bottom: 60px;
            }

            .why-image {
                margin-top: 50px;
            }
        }

        @media (max-width: 767px) {

            .about-hero-content {
                padding: 110px 0 55px;
            }

            .about-hero h1 {
                font-size: 3rem;
            }

            .about-hero p {
                font-size: .95rem;
            }

            .about-hero-image img {
                height: 350px;
                border-radius: 20px;
            }

            .about-image-overlay {
                left: 12px;
                bottom: 15px;
                padding: 15px 18px;
            }

            .about-image-overlay strong {
                font-size: 1.2rem;
            }

            .about-story-image img {
                height: 360px;
            }

            .experience-card {
                right: 12px;
                bottom: 15px;
                padding: 15px 18px;
            }

            .experience-card strong {
                font-size: 1.5rem;
            }

            .mission-card {
                padding: 30px 24px;
            }

            .why-image img {
                height: 400px;
            }

            .about-cta-box {
                padding: 60px 25px;
                border-radius: 22px;
            }

            .about-stats {
                padding: 45px 0;
            }

            .about-stat {
                margin-bottom: 20px;
            }
        }

        @media (max-width: 380px) {

            .about-hero h1 {
                font-size: 2.5rem;
            }

            .about-hero-image img {
                height: 300px;
            }

            .section-title {
                font-size: 2.1rem;
            }

            .experience-card {
                position: relative;
                right: auto;
                bottom: auto;
                display: inline-block;
                margin-top: -25px;
                margin-left: 15px;
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
                        href="contactcontact"
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

<section class="about-hero">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <div class="about-hero-content">

                    <div class="about-badge">
                        <i class="bi bi-buildings"></i>
                        About Aurora College
                    </div>

                    <h1>
                        Education that
                        <span>opens possibilities.</span>
                    </h1>

                    <p>
                        Aurora College is a forward-thinking institution
                        dedicated to helping students discover their potential,
                        develop meaningful skills, and prepare for a future
                        full of opportunity.
                    </p>

                    <div class="d-flex flex-wrap gap-3">

                        <a href="programs.php" class="btn btn-primary-custom">
                            Explore Programs
                            <i class="bi bi-arrow-right ms-1"></i>
                        </a>

                        <a href="register.php" class="btn btn-outline-light-custom">
                            Start Your Application
                        </a>

                    </div>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="about-hero-image">

                    <img
                        src="https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=1200&q=85"
                        alt="Aurora College campus"
                    >

                    <div class="about-image-overlay">

                        <strong>15+ Years</strong>

                        <span>
                            Inspiring future generations
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================
     OUR STORY
========================================= -->

<section class="about-story">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <div class="about-story-image">

                    <img
                        src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=1200&q=85"
                        alt="Students at Aurora College"
                    >

                    <div class="experience-card">

                        <strong>5K+</strong>

                        <span>
                            Students building their future
                        </span>

                    </div>

                </div>

            </div>


            <div class="col-lg-6">

                <span class="section-label">
                    Our Story
                </span>

                <h2 class="section-title">
                    A place where ambition becomes direction.
                </h2>

                <p class="section-text">
                    Aurora College was created around a simple idea:
                    education should do more than provide a qualification.
                    It should help people discover what they are capable of
                    and give them the confidence and skills to move forward.
                </p>

                <p class="section-text">
                    Our learning environment combines academic knowledge,
                    practical experience, technology, and collaboration.
                    Students are encouraged to ask questions, solve problems,
                    explore new ideas, and prepare for the changing world
                    beyond the classroom.
                </p>


                <div class="story-points">

                    <div class="story-point">

                        <div class="story-point-icon">
                            <i class="bi bi-mortarboard"></i>
                        </div>

                        <div>
                            <strong>Student-focused learning</strong>

                            <span>
                                We place students at the center of the
                                learning experience.
                            </span>
                        </div>

                    </div>


                    <div class="story-point">

                        <div class="story-point-icon">
                            <i class="bi bi-lightbulb"></i>
                        </div>

                        <div>
                            <strong>Practical knowledge</strong>

                            <span>
                                We connect classroom learning with
                                real-world applications.
                            </span>
                        </div>

                    </div>


                    <div class="story-point">

                        <div class="story-point-icon">
                            <i class="bi bi-people"></i>
                        </div>

                        <div>
                            <strong>A community of growth</strong>

                            <span>
                                Students learn through collaboration,
                                mentorship, and shared experiences.
                            </span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================
     MISSION & VISION
========================================= -->

<section class="mission-section">

    <div class="container">

        <div class="row g-4">

            <div class="col-lg-6">

                <div class="mission-card">

                    <div class="mission-icon">
                        <i class="bi bi-compass"></i>
                    </div>

                    <h3>
                        Our Mission
                    </h3>

                    <p>
                        To provide accessible, engaging, and practical
                        education that equips students with knowledge,
                        confidence, creativity, and the skills needed
                        to contribute meaningfully to society.
                    </p>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="mission-card">

                    <div class="mission-icon">
                        <i class="bi bi-eye"></i>
                    </div>

                    <h3>
                        Our Vision
                    </h3>

                    <p>
                        To become a respected center of learning where
                        ambitious students develop the knowledge and
                        character needed to shape a better future.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================
     CORE VALUES
========================================= -->

<section class="values-section">

    <div class="container">

        <div class="values-heading">

            <span class="section-label">
                What We Believe
            </span>

            <h2 class="section-title">
                Values that guide everything we do.
            </h2>

            <p class="section-text">
                Our community is built around principles that encourage
                students and educators to learn, grow, and create positive
                impact.
            </p>

        </div>


        <div class="row g-4">

            <div class="col-md-6 col-lg-3">

                <div class="value-card">

                    <div class="value-number">
                        01
                    </div>

                    <div class="value-icon">
                        <i class="bi bi-lightbulb"></i>
                    </div>

                    <h4>
                        Innovation
                    </h4>

                    <p>
                        We encourage curiosity, creativity, and new ways
                        of thinking.
                    </p>

                </div>

            </div>


            <div class="col-md-6 col-lg-3">

                <div class="value-card">

                    <div class="value-number">
                        02
                    </div>

                    <div class="value-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>

                    <h4>
                        Integrity
                    </h4>

                    <p>
                        We value honesty, responsibility, respect, and
                        ethical decision-making.
                    </p>

                </div>

            </div>


            <div class="col-md-6 col-lg-3">

                <div class="value-card">

                    <div class="value-number">
                        03
                    </div>

                    <div class="value-icon">
                        <i class="bi bi-stars"></i>
                    </div>

                    <h4>
                        Excellence
                    </h4>

                    <p>
                        We encourage students to pursue meaningful
                        improvement in everything they do.
                    </p>

                </div>

            </div>


            <div class="col-md-6 col-lg-3">

                <div class="value-card">

                    <div class="value-number">
                        04
                    </div>

                    <div class="value-icon">
                        <i class="bi bi-people"></i>
                    </div>

                    <h4>
                        Community
                    </h4>

                    <p>
                        We believe strong communities create stronger
                        learning experiences.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================
     WHY AURORA
========================================= -->

<section class="why-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <span class="section-label">
                    Why Aurora
                </span>

                <h2 class="section-title">
                    More than a classroom.
                    A launchpad for your future.
                </h2>

                <p class="section-text">
                    Choosing a college is an important decision.
                    At Aurora, we aim to create an environment where
                    students can build academic knowledge while developing
                    confidence, practical skills, and meaningful connections.
                </p>


                <div class="why-list">

                    <div class="why-item">

                        <div class="why-check">
                            <i class="bi bi-check-lg"></i>
                        </div>

                        <div>

                            <h5>
                                Modern learning environment
                            </h5>

                            <p>
                                Technology-supported classrooms and
                                learning spaces designed for today's students.
                            </p>

                        </div>

                    </div>


                    <div class="why-item">

                        <div class="why-check">
                            <i class="bi bi-check-lg"></i>
                        </div>

                        <div>

                            <h5>
                                Career-focused programs
                            </h5>

                            <p>
                                Programs designed to connect academic
                                learning with practical skills.
                            </p>

                        </div>

                    </div>


                    <div class="why-item">

                        <div class="why-check">
                            <i class="bi bi-check-lg"></i>
                        </div>

                        <div>

                            <h5>
                                Supportive community
                            </h5>

                            <p>
                                A community where students can collaborate,
                                learn, and grow together.
                            </p>

                        </div>

                    </div>


                    <div class="why-item">

                        <div class="why-check">
                            <i class="bi bi-check-lg"></i>
                        </div>

                        <div>

                            <h5>
                                Opportunities to grow
                            </h5>

                            <p>
                                Activities and experiences that help students
                                develop beyond the classroom.
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="why-image">

                    <img
                        src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1200&q=85"
                        alt="Aurora College students"
                    >

                    <div class="why-stat">

                        <strong>98%</strong>

                        <span>
                            Graduate success
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================
     STATISTICS
========================================= -->

<section class="about-stats">

    <div class="container">

        <div class="row">

            <div class="col-6 col-lg-3">

                <div class="about-stat">

                    <strong>
                        15<span>+</span>
                    </strong>

                    <p>
                        Years of Excellence
                    </p>

                </div>

            </div>


            <div class="col-6 col-lg-3">

                <div class="about-stat">

                    <strong>
                        5K<span>+</span>
                    </strong>

                    <p>
                        Students
                    </p>

                </div>

            </div>


            <div class="col-6 col-lg-3">

                <div class="about-stat">

                    <strong>
                        150<span>+</span>
                    </strong>

                    <p>
                        Lecturers
                    </p>

                </div>

            </div>


            <div class="col-6 col-lg-3">

                <div class="about-stat">

                    <strong>
                        25<span>+</span>
                    </strong>

                    <p>
                        Programs
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================
     CTA
========================================= -->

<section class="about-cta" id="admissions">

    <div class="container">

        <div class="about-cta-box">

            <h2>
                Ready to start your journey?
            </h2>

            <p>
                Your future begins with a decision to learn, grow,
                and take the next step. Explore our programs and
                begin your Aurora College application today.
            </p>

            <a href="register.php" class="btn btn-primary-custom btn-lg">

                Apply to Aurora College

                <i class="bi bi-arrow-up-right ms-1"></i>

            </a>

        </div>

    </div>

</section>


<!-- =========================================
     FOOTER
========================================= -->

<footer class="main-footer" id="contact">

    <div class="container">

        <div class="row g-5">

            <div class="col-lg-5">

                <a
                    href="index.php"
                    class="navbar-brand d-inline-flex align-items-center gap-2 mb-3"
                >

                    <span class="brand-icon">
                        <i class="bi bi-stars"></i>
                    </span>

                    <span class="brand-name">
                        Aurora
                    </span>

                </a>

                <p class="footer-description">
                    Discover your potential. Build your skills.
                    Create your future.
                </p>

                <div class="footer-socials">

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
                        <i class="bi bi-youtube"></i>
                    </a>

                </div>

            </div>


            <div class="col-6 col-lg-2">

                <h5 class="footer-title">
                    Explore
                </h5>

                <ul class="footer-links">

                    <li>
                        <a href="index.php">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="about.php">
                            About
                        </a>
                    </li>

                    <li>
                        <a href="programs.php">
                            Programs
                        </a>
                    </li>

                    <li>
                        <a href="register.php">
                            Admissions
                        </a>
                    </li>

                </ul>

            </div>


            <div class="col-6 col-lg-2">

                <h5 class="footer-title">
                    Students
                </h5>

                <ul class="footer-links">

                    <li>
                        <a href="login.php">
                            Student Login
                        </a>
                    </li>

                    <li>
                        <a href="register.php">
                            Apply Now
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Student Life
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Resources
                        </a>
                    </li>

                </ul>

            </div>


            <div class="col-lg-3">

                <h5 class="footer-title">
                    Contact
                </h5>

                <ul class="footer-contact">

                    <li>
                        <i class="bi bi-geo-alt"></i>

                        <span>
                            Aurora Campus<br>
                            Main Academic Avenue
                        </span>
                    </li>

                    <li>
                        <i class="bi bi-envelope"></i>

                        <span>
                            info@auroracollege.edu
                        </span>
                    </li>

                    <li>
                        <i class="bi bi-telephone"></i>

                        <span>
                            +251 900 000 000
                        </span>
                    </li>

                </ul>

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


<!-- Bootstrap JS -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>