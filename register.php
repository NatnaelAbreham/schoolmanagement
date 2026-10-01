<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Apply Now | Aurora College</title>

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
           REGISTRATION PAGE
        ========================================= */

        .register-page {
            min-height: 100vh;

            padding: 130px 0 80px;

            background:
                radial-gradient(
                    circle at 10% 20%,
                    rgba(79,140,255,.13),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 90% 80%,
                    rgba(139,92,246,.13),
                    transparent 30%
                ),
                var(--navy);
        }


        .register-intro {
            margin-bottom: 45px;
        }


        .register-badge {
            display: inline-flex;

            align-items: center;
            gap: 8px;

            padding: 8px 15px;

            border-radius: 50px;

            background: rgba(34,211,238,.08);

            border:
                1px solid rgba(34,211,238,.18);

            color: var(--cyan);

            font-size: .78rem;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 1px;

            margin-bottom: 20px;
        }


        .register-intro h1 {
            color: #fff;

            font-family:
                "Playfair Display",
                serif;

            font-size:
                clamp(2.5rem, 5vw, 4.4rem);

            line-height: 1.1;

            margin-bottom: 18px;
        }


        .register-intro h1 span {
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


        .register-intro p {
            max-width: 700px;

            color: rgba(255,255,255,.58);

            line-height: 1.8;

            margin: 0;
        }


        /* =========================================
           FORM CONTAINER
        ========================================= */

        .registration-wrapper {
            background:
                rgba(255,255,255,.025);

            border:
                1px solid rgba(255,255,255,.08);

            border-radius: 28px;

            overflow: hidden;

            box-shadow:
                0 30px 80px rgba(0,0,0,.25);
        }


        /* =========================================
           PROGRESS
        ========================================= */

        .registration-progress {
            padding: 28px 35px;

            background:
                rgba(255,255,255,.025);

            border-bottom:
                1px solid rgba(255,255,255,.07);
        }


        .progress-steps {
            display: flex;

            justify-content: space-between;

            position: relative;

            max-width: 750px;

            margin: auto;
        }


        .progress-line {
            position: absolute;

            left: 10%;

            right: 10%;

            top: 19px;

            height: 2px;

            background:
                rgba(255,255,255,.10);

            z-index: 0;
        }


        .progress-step {
            position: relative;

            z-index: 1;

            text-align: center;

            color:
                rgba(255,255,255,.40);

            font-size: .72rem;

            font-weight: 600;
        }


        .step-circle {
            width: 38px;
            height: 38px;

            display: flex;

            align-items: center;
            justify-content: center;

            margin: 0 auto 8px;

            border-radius: 50%;

            background:
                #181d35;

            border:
                2px solid rgba(255,255,255,.10);

            color:
                rgba(255,255,255,.45);

            transition: .3s ease;
        }


        .progress-step.active {
            color: #fff;
        }


        .progress-step.active
        .step-circle {

            background:
                linear-gradient(
                    135deg,
                    var(--blue),
                    var(--purple)
                );

            border-color:
                transparent;

            color: #fff;

            box-shadow:
                0 8px 25px rgba(79,140,255,.25);
        }


        /* =========================================
           FORM
        ========================================= */

        .registration-form {
            padding: 45px;
        }


        .form-section {
            margin-bottom: 45px;
        }


        .form-section:last-child {
            margin-bottom: 0;
        }


        .form-section-header {
            display: flex;

            align-items: flex-start;

            gap: 15px;

            padding-bottom: 22px;

            margin-bottom: 28px;

            border-bottom:
                1px solid rgba(255,255,255,.07);
        }


        .form-section-icon {
            width: 46px;
            height: 46px;

            min-width: 46px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 14px;

            color: #fff;

            background:
                linear-gradient(
                    135deg,
                    var(--blue),
                    var(--purple)
                );
        }


        .form-section-header h3 {
            color: #fff;

            font-family:
                "Playfair Display",
                serif;

            font-size: 1.5rem;

            margin: 0 0 4px;
        }


        .form-section-header p {
            color:
                rgba(255,255,255,.42);

            font-size: .82rem;

            margin: 0;
        }


        /* =========================================
           LABELS
        ========================================= */

        .form-label-custom {
            display: block;

            color:
                rgba(255,255,255,.72);

            font-size: .82rem;

            font-weight: 600;

            margin-bottom: 8px;
        }


        .required {
            color: #f87171;
        }


        /* =========================================
           INPUTS
        ========================================= */

        .form-control-custom,
        .form-select-custom {

            width: 100%;

            min-height: 50px;

            padding:
                12px 15px;

            border-radius: 12px;

            border:
                1px solid rgba(255,255,255,.09);

            background:
                rgba(255,255,255,.035);

            color: #fff;

            outline: none;

            font-family: inherit;

            font-size: .88rem;

            transition: .25s ease;
        }


        .form-control-custom::placeholder {
            color:
                rgba(255,255,255,.25);
        }


        .form-control-custom:focus,
        .form-select-custom:focus {

            border-color:
                rgba(79,140,255,.65);

            background:
                rgba(79,140,255,.045);

            box-shadow:
                0 0 0 3px rgba(79,140,255,.08);
        }


        .form-select-custom option {
            background: #11162d;

            color: #fff;
        }


        textarea.form-control-custom {
            min-height: 120px;

            resize: vertical;
        }


        /* =========================================
           INPUT WITH ICON
        ========================================= */

        .input-icon-wrapper {
            position: relative;
        }


        .input-icon-wrapper i {
            position: absolute;

            left: 15px;

            top: 50%;

            transform:
                translateY(-50%);

            color:
                rgba(255,255,255,.35);

            pointer-events: none;
        }


        .input-icon-wrapper
        .form-control-custom {

            padding-left: 43px;
        }


        /* =========================================
           RADIO / GENDER
        ========================================= */

        .gender-options {
            display: flex;

            gap: 12px;

            flex-wrap: wrap;
        }


        .gender-option {
            flex: 1;

            min-width: 100px;
        }


        .gender-option input {
            display: none;
        }


        .gender-option label {
            width: 100%;

            min-height: 50px;

            display: flex;

            align-items: center;
            justify-content: center;

            gap: 8px;

            padding: 10px 15px;

            border-radius: 12px;

            border:
                1px solid rgba(255,255,255,.09);

            background:
                rgba(255,255,255,.035);

            color:
                rgba(255,255,255,.55);

            cursor: pointer;

            font-size: .85rem;

            transition: .25s ease;
        }


        .gender-option
        input:checked
        + label {

            background:
                rgba(79,140,255,.12);

            border-color:
                var(--blue);

            color: #fff;
        }


        /* =========================================
           PASSWORD
        ========================================= */

        .password-wrapper {
            position: relative;
        }


        .password-toggle {
            position: absolute;

            right: 15px;

            top: 50%;

            transform:
                translateY(-50%);

            border: 0;

            background: transparent;

            color:
                rgba(255,255,255,.4);

            cursor: pointer;
        }


        .password-toggle:hover {
            color: #fff;
        }


        /* =========================================
           AGREEMENT
        ========================================= */

        .agreement {
            display: flex;

            align-items: flex-start;

            gap: 10px;

            margin-top: 28px;
        }


        .agreement input {
            margin-top: 4px;

            accent-color:
                var(--blue);
        }


        .agreement label {
            color:
                rgba(255,255,255,.50);

            font-size: .8rem;

            line-height: 1.6;
        }


        .agreement a {
            color:
                var(--blue-light);

            text-decoration: none;
        }


        .agreement a:hover {
            color:
                var(--cyan);
        }


        /* =========================================
           SUBMIT AREA
        ========================================= */

        .form-submit-area {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

            padding-top: 35px;

            margin-top: 35px;

            border-top:
                1px solid rgba(255,255,255,.07);
        }


        .secure-note {

            display: flex;

            align-items: center;

            gap: 8px;

            color:
                rgba(255,255,255,.40);

            font-size: .76rem;
        }


        .secure-note i {
            color:
                #34d399;
        }


        /* =========================================
           SIDE INFORMATION
        ========================================= */

        .registration-sidebar {

            padding: 45px 35px;

            background:
                linear-gradient(
                    180deg,
                    rgba(79,140,255,.07),
                    rgba(139,92,246,.06)
                );

            border-left:
                1px solid rgba(255,255,255,.07);
        }


        .sidebar-image {
            overflow: hidden;

            border-radius: 20px;

            margin-bottom: 30px;
        }


        .sidebar-image img {
            width: 100%;

            height: 240px;

            object-fit: cover;
        }


        .registration-sidebar h3 {
            color: #fff;

            font-family:
                "Playfair Display",
                serif;

            font-size: 1.7rem;

            margin-bottom: 12px;
        }


        .registration-sidebar > p {
            color:
                rgba(255,255,255,.52);

            font-size: .86rem;

            line-height: 1.75;

            margin-bottom: 30px;
        }


        .benefit-item {
            display: flex;

            align-items: flex-start;

            gap: 12px;

            margin-bottom: 20px;
        }


        .benefit-icon {
            width: 36px;
            height: 36px;

            min-width: 36px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 10px;

            background:
                rgba(34,211,238,.08);

            color:
                var(--cyan);

            font-size: .9rem;
        }


        .benefit-item strong {
            display: block;

            color: #fff;

            font-size: .84rem;

            margin-bottom: 3px;
        }


        .benefit-item span {
            color:
                rgba(255,255,255,.42);

            font-size: .75rem;

            line-height: 1.5;
        }


        /* =========================================
           HELP BOX
        ========================================= */

        .help-box {

            margin-top: 30px;

            padding: 20px;

            border-radius: 16px;

            background:
                rgba(255,255,255,.035);

            border:
                1px solid rgba(255,255,255,.07);
        }


        .help-box-title {

            display: flex;

            align-items: center;

            gap: 8px;

            color: #fff;

            font-size: .85rem;

            font-weight: 600;

            margin-bottom: 7px;
        }


        .help-box-title i {
            color:
                var(--cyan);
        }


        .help-box p {
            color:
                rgba(255,255,255,.42);

            font-size: .75rem;

            line-height: 1.6;

            margin: 0;
        }


        /* =========================================
           LOGIN LINK
        ========================================= */

        .login-note {
            text-align: center;

            margin-top: 25px;

            color:
                rgba(255,255,255,.45);

            font-size: .82rem;
        }


        .login-note a {
            color:
                var(--blue-light);

            text-decoration: none;

            font-weight: 600;
        }


        .login-note a:hover {
            color: var(--cyan);
        }


        /* =========================================
           MOBILE
        ========================================= */

        @media (max-width: 991px) {

            .register-page {
                padding-top: 115px;
            }


            .registration-sidebar {
                border-left: 0;

                border-top:
                    1px solid rgba(255,255,255,.07);
            }

        }


        @media (max-width: 767px) {

            .register-page {
                padding:
                    105px 0 50px;
            }


            .register-intro {
                margin-bottom: 30px;
            }


            .register-intro h1 {
                font-size: 2.7rem;
            }


            .registration-progress {
                padding: 22px 15px;
            }


            .progress-step {
                font-size: .62rem;
            }


            .step-circle {
                width: 34px;
                height: 34px;
            }


            .progress-line {
                top: 17px;

                left: 12%;
                right: 12%;
            }


            .registration-form {
                padding: 30px 20px;
            }


            .registration-sidebar {
                padding:
                    30px 20px;
            }


            .form-submit-area {
                flex-direction: column;

                align-items: stretch;
            }


            .secure-note {
                justify-content: center;
            }


            .form-submit-area
            .btn {
                width: 100%;
            }

        }


        @media (max-width: 380px) {

            .register-intro h1 {
                font-size: 2.35rem;
            }


            .progress-step span {
                display: none;
            }


            .registration-form {
                padding: 25px 15px;
            }

        }

    </style>

</head>


<body>


<!-- =========================================
     NAVBAR
========================================= -->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top main-navbar">

    <div class="container">

        <a
            class="navbar-brand d-flex align-items-center gap-2"
            href="index.php"
        >

            <span class="brand-icon">
                <i class="bi bi-stars"></i>
            </span>

            <span class="brand-name">
                Aurora
            </span>

        </a>


        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNavbar"
            aria-controls="mainNavbar"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >

            <span class="navbar-toggler-icon"></span>

        </button>


        <div
            class="collapse navbar-collapse"
            id="mainNavbar"
        >

            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                <li class="nav-item">

                    <a
                        class="nav-link"
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
                        class="nav-link active"
                        href="register.php"
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

            </ul>


            <div class="d-flex align-items-center gap-3">

                <a
                    href="login.php"
                    class="nav-login"
                >
                    Login
                </a>


                <a
                    href="register.php"
                    class="btn btn-primary-custom"
                >

                    Apply Now

                    <i class="bi bi-arrow-up-right ms-1"></i>

                </a>

            </div>

        </div>

    </div>

</nav>



<!-- =========================================
     REGISTRATION
========================================= -->

<main class="register-page">

    <div class="container">


        <!-- INTRO -->

        <div class="register-intro">

            <span class="register-badge">

                <i class="bi bi-pencil-square"></i>

                Admissions 2026 / 2027

            </span>


            <h1>

                Start your
                <span>journey.</span>

            </h1>


            <p>

                Complete the application below to begin your journey
                at Aurora College. Tell us about yourself, your
                academic background, and the program you want to pursue.

            </p>

        </div>



        <!-- REGISTRATION WRAPPER -->

        <div class="registration-wrapper">

            <div class="row g-0">


                <!-- =====================================
                     FORM SIDE
                ====================================== -->

                <div class="col-lg-8">


                    <!-- PROGRESS -->

                    <div class="registration-progress">

                        <div class="progress-steps">

                            <div class="progress-line"></div>


                            <div class="progress-step active">

                                <div class="step-circle">

                                    <i class="bi bi-person"></i>

                                </div>

                                <span>
                                    Personal
                                </span>

                            </div>


                            <div class="progress-step">

                                <div class="step-circle">

                                    <i class="bi bi-mortarboard"></i>

                                </div>

                                <span>
                                    Academic
                                </span>

                            </div>


                            <div class="progress-step">

                                <div class="step-circle">

                                    <i class="bi bi-person-lock"></i>

                                </div>

                                <span>
                                    Account
                                </span>

                            </div>


                            <div class="progress-step">

                                <div class="step-circle">

                                    <i class="bi bi-check-lg"></i>

                                </div>

                                <span>
                                    Submit
                                </span>

                            </div>

                        </div>

                    </div>



                    <!-- FORM -->

                    <form
                        class="registration-form"
                        id="registrationForm"
                        method="POST"
                        action="#"
                    >


                        <!-- =================================
                             PERSONAL INFORMATION
                        ================================== -->

                        <div class="form-section">

                            <div class="form-section-header">

                                <div class="form-section-icon">

                                    <i class="bi bi-person"></i>

                                </div>


                                <div>

                                    <h3>
                                        Personal Information
                                    </h3>

                                    <p>
                                        Tell us a little about yourself.
                                    </p>

                                </div>

                            </div>


                            <div class="row g-4">


                                <!-- FIRST NAME -->

                                <div class="col-md-6">

                                    <label
                                        class="form-label-custom"
                                        for="firstName"
                                    >

                                        First Name

                                        <span class="required">
                                            *
                                        </span>

                                    </label>


                                    <div class="input-icon-wrapper">

                                        <i class="bi bi-person"></i>

                                        <input
                                            type="text"
                                            class="form-control-custom"
                                            id="firstName"
                                            name="firstName"
                                            placeholder="Enter your first name"
                                            required
                                        >

                                    </div>

                                </div>



                                <!-- LAST NAME -->

                                <div class="col-md-6">

                                    <label
                                        class="form-label-custom"
                                        for="lastName"
                                    >

                                        Last Name

                                        <span class="required">
                                            *
                                        </span>

                                    </label>


                                    <div class="input-icon-wrapper">

                                        <i class="bi bi-person"></i>

                                        <input
                                            type="text"
                                            class="form-control-custom"
                                            id="lastName"
                                            name="lastName"
                                            placeholder="Enter your last name"
                                            required
                                        >

                                    </div>

                                </div>



                                <!-- EMAIL -->

                                <div class="col-md-6">

                                    <label
                                        class="form-label-custom"
                                        for="email"
                                    >

                                        Email Address

                                        <span class="required">
                                            *
                                        </span>

                                    </label>


                                    <div class="input-icon-wrapper">

                                        <i class="bi bi-envelope"></i>

                                        <input
                                            type="email"
                                            class="form-control-custom"
                                            id="email"
                                            name="email"
                                            placeholder="you@example.com"
                                            required
                                        >

                                    </div>

                                </div>



                                <!-- PHONE -->

                                <div class="col-md-6">

                                    <label
                                        class="form-label-custom"
                                        for="phone"
                                    >

                                        Phone Number

                                        <span class="required">
                                            *
                                        </span>

                                    </label>


                                    <div class="input-icon-wrapper">

                                        <i class="bi bi-telephone"></i>

                                        <input
                                            type="tel"
                                            class="form-control-custom"
                                            id="phone"
                                            name="phone"
                                            placeholder="+251 9XX XXX XXX"
                                            required
                                        >

                                    </div>

                                </div>



                                <!-- DATE OF BIRTH -->

                                <div class="col-md-6">

                                    <label
                                        class="form-label-custom"
                                        for="dateOfBirth"
                                    >

                                        Date of Birth

                                        <span class="required">
                                            *
                                        </span>

                                    </label>


                                    <div class="input-icon-wrapper">

                                        <i class="bi bi-calendar3"></i>

                                        <input
                                            type="date"
                                            class="form-control-custom"
                                            id="dateOfBirth"
                                            name="dateOfBirth"
                                            required
                                        >

                                    </div>

                                </div>



                                <!-- GENDER -->

                                <div class="col-md-6">

                                    <label class="form-label-custom">

                                        Gender

                                        <span class="required">
                                            *
                                        </span>

                                    </label>


                                    <div class="gender-options">


                                        <div class="gender-option">

                                            <input
                                                type="radio"
                                                id="male"
                                                name="gender"
                                                value="Male"
                                                required
                                            >

                                            <label for="male">

                                                <i class="bi bi-gender-male"></i>

                                                Male

                                            </label>

                                        </div>


                                        <div class="gender-option">

                                            <input
                                                type="radio"
                                                id="female"
                                                name="gender"
                                                value="Female"
                                            >

                                            <label for="female">

                                                <i class="bi bi-gender-female"></i>

                                                Female

                                            </label>

                                        </div>


                                        <div class="gender-option">

                                            <input
                                                type="radio"
                                                id="other"
                                                name="gender"
                                                value="Other"
                                            >

                                            <label for="other">

                                                <i class="bi bi-person"></i>

                                                Other

                                            </label>

                                        </div>

                                    </div>

                                </div>



                                <!-- CITY -->

                                <div class="col-md-6">

                                    <label
                                        class="form-label-custom"
                                        for="city"
                                    >

                                        City

                                    </label>


                                    <div class="input-icon-wrapper">

                                        <i class="bi bi-geo-alt"></i>

                                        <input
                                            type="text"
                                            class="form-control-custom"
                                            id="city"
                                            name="city"
                                            placeholder="Enter your city"
                                        >

                                    </div>

                                </div>



                                <!-- NATIONALITY -->

                                <div class="col-md-6">

                                    <label
                                        class="form-label-custom"
                                        for="nationality"
                                    >

                                        Nationality

                                    </label>


                                    <div class="input-icon-wrapper">

                                        <i class="bi bi-globe2"></i>

                                        <input
                                            type="text"
                                            class="form-control-custom"
                                            id="nationality"
                                            name="nationality"
                                            placeholder="Enter your nationality"
                                        >

                                    </div>

                                </div>

                            </div>

                        </div>



                        <!-- =================================
                             ACADEMIC INFORMATION
                        ================================== -->

                        <div class="form-section">

                            <div class="form-section-header">

                                <div class="form-section-icon">

                                    <i class="bi bi-mortarboard"></i>

                                </div>


                                <div>

                                    <h3>
                                        Academic Information
                                    </h3>

                                    <p>
                                        Tell us about your education and
                                        preferred program.
                                    </p>

                                </div>

                            </div>


                            <div class="row g-4">


                                <!-- EDUCATION LEVEL -->

                                <div class="col-md-6">

                                    <label
                                        class="form-label-custom"
                                        for="educationLevel"
                                    >

                                        Education Level

                                        <span class="required">
                                            *
                                        </span>

                                    </label>


                                    <select
                                        class="form-select-custom"
                                        id="educationLevel"
                                        name="educationLevel"
                                        required
                                    >

                                        <option value="">
                                            Select education level
                                        </option>

                                        <option value="High School">
                                            High School
                                        </option>

                                        <option value="Diploma">
                                            Diploma
                                        </option>

                                        <option value="Certificate">
                                            Certificate
                                        </option>

                                        <option value="Bachelor">
                                            Bachelor's Degree
                                        </option>

                                        <option value="Other">
                                            Other
                                        </option>

                                    </select>

                                </div>



                                <!-- PREVIOUS SCHOOL -->

                                <div class="col-md-6">

                                    <label
                                        class="form-label-custom"
                                        for="previousSchool"
                                    >

                                        Previous School

                                        <span class="required">
                                            *
                                        </span>

                                    </label>


                                    <div class="input-icon-wrapper">

                                        <i class="bi bi-building"></i>

                                        <input
                                            type="text"
                                            class="form-control-custom"
                                            id="previousSchool"
                                            name="previousSchool"
                                            placeholder="School / institution name"
                                            required
                                        >

                                    </div>

                                </div>



                                <!-- PROGRAM -->

                                <div class="col-md-6">

                                    <label
                                        class="form-label-custom"
                                        for="program"
                                    >

                                        Preferred Program

                                        <span class="required">
                                            *
                                        </span>

                                    </label>


                                    <select
                                        class="form-select-custom"
                                        id="program"
                                        name="program"
                                        required
                                    >

                                        <option value="">
                                            Choose a program
                                        </option>

                                        <option value="Computer Science">
                                            Computer Science
                                        </option>

                                        <option value="Business Administration">
                                            Business Administration
                                        </option>

                                        <option value="Accounting and Finance">
                                            Accounting & Finance
                                        </option>

                                        <option value="Information Technology">
                                            Information Technology
                                        </option>

                                        <option value="Economics">
                                            Economics
                                        </option>

                                        <option value="Social Sciences">
                                            Social Sciences
                                        </option>

                                    </select>

                                </div>



                                <!-- STUDY MODE -->

                                <div class="col-md-6">

                                    <label
                                        class="form-label-custom"
                                        for="studyMode"
                                    >

                                        Preferred Study Mode

                                        <span class="required">
                                            *
                                        </span>

                                    </label>


                                    <select
                                        class="form-select-custom"
                                        id="studyMode"
                                        name="studyMode"
                                        required
                                    >

                                        <option value="">
                                            Select study mode
                                        </option>

                                        <option value="Regular">
                                            Regular
                                        </option>

                                        <option value="Evening">
                                            Evening
                                        </option>

                                        <option value="Weekend">
                                            Weekend
                                        </option>

                                    </select>

                                </div>



                                <!-- GRADUATION YEAR -->

                                <div class="col-md-6">

                                    <label
                                        class="form-label-custom"
                                        for="graduationYear"
                                    >

                                        Graduation Year

                                    </label>


                                    <div class="input-icon-wrapper">

                                        <i class="bi bi-calendar-event"></i>

                                        <input
                                            type="number"
                                            class="form-control-custom"
                                            id="graduationYear"
                                            name="graduationYear"
                                            placeholder="e.g. 2025"
                                            min="1950"
                                            max="2035"
                                        >

                                    </div>

                                </div>



                                <!-- EMERGENCY CONTACT -->

                                <div class="col-md-6">

                                    <label
                                        class="form-label-custom"
                                        for="emergencyContact"
                                    >

                                        Emergency Contact

                                    </label>


                                    <div class="input-icon-wrapper">

                                        <i class="bi bi-telephone"></i>

                                        <input
                                            type="tel"
                                            class="form-control-custom"
                                            id="emergencyContact"
                                            name="emergencyContact"
                                            placeholder="+251 9XX XXX XXX"
                                        >

                                    </div>

                                </div>

                            </div>

                        </div>



                        <!-- =================================
                             ACCOUNT
                        ================================== -->

                        <div class="form-section">

                            <div class="form-section-header">

                                <div class="form-section-icon">

                                    <i class="bi bi-person-lock"></i>

                                </div>


                                <div>

                                    <h3>
                                        Create Your Account
                                    </h3>

                                    <p>
                                        You'll use these details to access
                                        your student dashboard.
                                    </p>

                                </div>

                            </div>


                            <div class="row g-4">


                                <!-- PASSWORD -->

                                <div class="col-md-6">

                                    <label
                                        class="form-label-custom"
                                        for="password"
                                    >

                                        Password

                                        <span class="required">
                                            *
                                        </span>

                                    </label>


                                    <div class="password-wrapper">

                                        <input
                                            type="password"
                                            class="form-control-custom"
                                            id="password"
                                            name="password"
                                            placeholder="Create a password"
                                            minlength="8"
                                            required
                                        >


                                        <button
                                            type="button"
                                            class="password-toggle"
                                            onclick="togglePassword(
                                                'password',
                                                'passwordIcon'
                                            )"
                                        >

                                            <i
                                                class="bi bi-eye"
                                                id="passwordIcon"
                                            ></i>

                                        </button>

                                    </div>

                                </div>



                                <!-- CONFIRM PASSWORD -->

                                <div class="col-md-6">

                                    <label
                                        class="form-label-custom"
                                        for="confirmPassword"
                                    >

                                        Confirm Password

                                        <span class="required">
                                            *
                                        </span>

                                    </label>


                                    <div class="password-wrapper">

                                        <input
                                            type="password"
                                            class="form-control-custom"
                                            id="confirmPassword"
                                            name="confirmPassword"
                                            placeholder="Confirm your password"
                                            minlength="8"
                                            required
                                        >


                                        <button
                                            type="button"
                                            class="password-toggle"
                                            onclick="togglePassword(
                                                'confirmPassword',
                                                'confirmPasswordIcon'
                                            )"
                                        >

                                            <i
                                                class="bi bi-eye"
                                                id="confirmPasswordIcon"
                                            ></i>

                                        </button>

                                    </div>

                                </div>

                            </div>



                            <!-- AGREEMENT -->

                            <div class="agreement">

                                <input
                                    type="checkbox"
                                    id="agreement"
                                    name="agreement"
                                    required
                                >


                                <label for="agreement">

                                    I confirm that the information provided
                                    in this application is accurate and
                                    complete. I agree to Aurora College's
                                    <a href="#">
                                        terms and conditions
                                    </a>
                                    and
                                    <a href="#">
                                        privacy policy
                                    </a>.

                                </label>

                            </div>

                        </div>



                        <!-- =================================
                             SUBMIT
                        ================================== -->

                        <div class="form-submit-area">


                            <div class="secure-note">

                                <i class="bi bi-shield-lock-fill"></i>

                                Your information is protected.

                            </div>


                            <button
                                type="submit"
                                class="btn btn-primary-custom btn-lg"
                            >

                                Submit Application

                                <i class="bi bi-arrow-up-right ms-1"></i>

                            </button>

                        </div>


                    </form>


                    <div class="login-note">

                        Already have an account?

                        <a href="login.php">
                            Sign in here
                        </a>

                    </div>

                </div>



                <!-- =====================================
                     SIDEBAR
                ====================================== -->

                <div class="col-lg-4">

                    <aside class="registration-sidebar">


                        <div class="sidebar-image">

                            <img
                                src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=1000&q=85"
                                alt="Aurora College campus"
                            >

                        </div>


                        <h3>
                            Begin something meaningful.
                        </h3>


                        <p>

                            Your college journey starts with one application.
                            Take your first step toward discovering new
                            knowledge, new opportunities, and your future.

                        </p>


                        <!-- BENEFIT 1 -->

                        <div class="benefit-item">

                            <div class="benefit-icon">

                                <i class="bi bi-lightning-charge"></i>

                            </div>


                            <div>

                                <strong>
                                    Simple application
                                </strong>

                                <span>
                                    Complete your application in just
                                    a few minutes.
                                </span>

                            </div>

                        </div>



                        <!-- BENEFIT 2 -->

                        <div class="benefit-item">

                            <div class="benefit-icon">

                                <i class="bi bi-book"></i>

                            </div>


                            <div>

                                <strong>
                                    Explore your potential
                                </strong>

                                <span>
                                    Choose from a growing range of
                                    academic programs.
                                </span>

                            </div>

                        </div>



                        <!-- BENEFIT 3 -->

                        <div class="benefit-item">

                            <div class="benefit-icon">

                                <i class="bi bi-people"></i>

                            </div>


                            <div>

                                <strong>
                                    Join our community
                                </strong>

                                <span>
                                    Become part of a community focused
                                    on learning and growth.
                                </span>

                            </div>

                        </div>



                        <!-- BENEFIT 4 -->

                        <div class="benefit-item">

                            <div class="benefit-icon">

                                <i class="bi bi-headset"></i>

                            </div>


                            <div>

                                <strong>
                                    Admission support
                                </strong>

                                <span>
                                    Our admissions team is here to help
                                    throughout your application.
                                </span>

                            </div>

                        </div>



                        <!-- HELP -->

                        <div class="help-box">

                            <div class="help-box-title">

                                <i class="bi bi-question-circle"></i>

                                Need help?

                            </div>


                            <p>

                                If you have questions about admission,
                                programs, or the application process,
                                contact our admissions team.

                            </p>

                        </div>

                    </aside>

                </div>

            </div>

        </div>

    </div>

</main>



<!-- =========================================
     FOOTER
========================================= -->

<footer
    class="main-footer"
    id="contact"
>

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



<!-- =========================================
     BOOTSTRAP JS
========================================= -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>



<!-- =========================================
     JAVASCRIPT
========================================= -->

<script>

    function togglePassword(
        inputId,
        iconId
    ) {

        const input =
            document.getElementById(inputId);

        const icon =
            document.getElementById(iconId);


        if (input.type === "password") {

            input.type = "text";

            icon.classList.remove(
                "bi-eye"
            );

            icon.classList.add(
                "bi-eye-slash"
            );

        } else {

            input.type = "password";

            icon.classList.remove(
                "bi-eye-slash"
            );

            icon.classList.add(
                "bi-eye"
            );

        }

    }



    /* =========================================
       PASSWORD VALIDATION
    ========================================= */

    document
        .getElementById("registrationForm")
        .addEventListener(
            "submit",
            function (event) {

                const password =
                    document.getElementById(
                        "password"
                    ).value;

                const confirmPassword =
                    document.getElementById(
                        "confirmPassword"
                    ).value;


                if (
                    password !==
                    confirmPassword
                ) {

                    event.preventDefault();

                    alert(
                        "Passwords do not match."
                    );

                    return;

                }


                if (password.length < 8) {

                    event.preventDefault();

                    alert(
                        "Password must contain at least 8 characters."
                    );

                    return;

                }

            }
        );

</script>


</body>
</html>