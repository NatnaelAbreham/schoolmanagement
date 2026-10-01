<?php
$pageTitle = "Login | Aurora College";
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

        .login-page {
            min-height: 100vh;
            background:
                radial-gradient(
                    circle at 15% 20%,
                    rgba(79, 140, 255, 0.14),
                    transparent 32%
                ),
                radial-gradient(
                    circle at 85% 80%,
                    rgba(139, 92, 246, 0.14),
                    transparent 32%
                ),
                #080b1c;
        }

        /* Login area */

        .login-section {
            min-height: calc(100vh - 80px);
            display: flex;
            align-items: center;
            padding: 60px 0;
        }

        .login-wrapper {
            width: 100%;
            max-width: 1050px;
            margin: auto;
        }

        /* Left side */

        .login-showcase {
            position: relative;
            min-height: 610px;
            border-radius: 30px;
            overflow: hidden;

            background:
                linear-gradient(
                    135deg,
                    rgba(8, 11, 28, 0.35),
                    rgba(8, 11, 28, 0.88)
                ),
                url("https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=1200&q=85")
                center/cover;
        }

        .login-showcase-content {
            position: absolute;
            left: 40px;
            right: 40px;
            bottom: 40px;
        }

        .showcase-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 14px;
            border-radius: 50px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 18px;
        }

        .login-showcase h1 {
            font-family: "Playfair Display", serif;
            font-size: clamp(38px, 4vw, 56px);
            line-height: 1.1;
            margin-bottom: 18px;
        }

        .login-showcase h1 span {
            background: linear-gradient(
                90deg,
                #7aa7ff,
                #22d3ee,
                #a78bfa
            );
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .login-showcase p {
            max-width: 470px;
            color: #c2c8d8;
            line-height: 1.7;
            margin-bottom: 25px;
        }

        .showcase-points {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .showcase-point {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 9px 13px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #e0e4ef;
            font-size: 13px;
        }

        .showcase-point i {
            color: #6ee7b7;
        }

        /* Login card */

        .login-card {
            background: rgba(255, 255, 255, 0.045);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 30px;
            padding: 45px;
            backdrop-filter: blur(18px);
            box-shadow: 0 25px 80px rgba(0, 0, 0, 0.25);
        }

        .login-logo {
            width: 58px;
            height: 58px;
            border-radius: 17px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;

            background: linear-gradient(
                135deg,
                #4f8cff,
                #8b5cf6
            );

            box-shadow:
                0 12px 35px rgba(79, 140, 255, 0.25);
        }

        .login-logo i {
            font-size: 25px;
        }

        .login-card h2 {
            font-family: "Playfair Display", serif;
            font-size: 36px;
            margin-bottom: 10px;
        }

        .login-subtitle {
            color: #9299ae;
            line-height: 1.6;
            margin-bottom: 32px;
        }

        /* Form */

        .form-label {
            color: #dfe3ee;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .input-group-custom {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #747d94;
            z-index: 3;
        }

        .login-input {
            width: 100%;
            min-height: 52px;
            padding: 13px 45px;
            border-radius: 13px;
            background: rgba(255, 255, 255, 0.055);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff;
            outline: none;
            transition: 0.25s ease;
        }

        .login-input::placeholder {
            color: #6e768b;
        }

        .login-input:focus {
            background: rgba(255, 255, 255, 0.07);
            border-color: #4f8cff;
            box-shadow: 0 0 0 3px rgba(79, 140, 255, 0.12);
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            background: transparent;
            color: #7d859a;
            z-index: 4;
            cursor: pointer;
        }

        .password-toggle:hover {
            color: #fff;
        }

        .forgot-link {
            color: #7aa7ff;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
        }

        .forgot-link:hover {
            color: #a7c3ff;
        }

        .remember-label {
            color: #969daf;
            font-size: 14px;
            cursor: pointer;
        }

        .remember-check {
            background-color: transparent;
            border-color: #586176;
        }

        .remember-check:checked {
            background-color: #4f8cff;
            border-color: #4f8cff;
        }

        .login-btn {
            width: 100%;
            min-height: 53px;
            border: none;
            border-radius: 13px;
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

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow:
                0 15px 35px rgba(79, 140, 255, 0.25);
        }

        /* Divider */

        .login-divider {
            display: flex;
            align-items: center;
            gap: 15px;
            color: #686f82;
            font-size: 13px;
            margin: 28px 0;
        }

        .login-divider::before,
        .login-divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background: rgba(255, 255, 255, 0.08);
        }

        /* Register box */

        .register-box {
            text-align: center;
            padding: 17px;
            border-radius: 13px;
            background: rgba(255, 255, 255, 0.035);
            border: 1px solid rgba(255, 255, 255, 0.06);
            color: #9299ae;
            font-size: 14px;
        }

        .register-box a {
            color: #7aa7ff;
            font-weight: 700;
            text-decoration: none;
        }

        .register-box a:hover {
            color: #a7c3ff;
        }

        .security-note {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 7px;
            color: #656d81;
            font-size: 12px;
            margin-top: 22px;
        }

        .security-note i {
            color: #6ee7b7;
        }

        /* Navbar */

        .login-navbar {
            border-bottom: 1px solid rgba(255, 255, 255, 0.07);
        }

        /* Responsive */

        @media (max-width: 991px) {

            .login-section {
                padding: 45px 0;
            }

            .login-showcase {
                min-height: 450px;
            }

            .login-card {
                padding: 35px;
            }
        }

        @media (max-width: 767px) {

            .login-section {
                min-height: auto;
                padding: 35px 0 60px;
            }

            .login-showcase {
                display: none;
            }

            .login-card {
                padding: 30px 23px;
                border-radius: 22px;
            }

            .login-card h2 {
                font-size: 31px;
            }

            .login-logo {
                width: 53px;
                height: 53px;
            }
        }

        @media (max-width: 380px) {

            .login-card {
                padding: 25px 18px;
            }

            .login-card h2 {
                font-size: 28px;
            }
        }
    </style>
</head>

<body>

<div class="login-page">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark py-3 login-navbar">

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


            <div class="d-flex align-items-center gap-2">

                <span
                    class="d-none d-sm-inline"
                    style="color:#858da2;font-size:14px;"
                >
                    Don't have an account?
                </span>

                <a
                    href="register.php"
                    class="btn btn-outline-light px-3"
                >
                    Apply Now
                </a>

            </div>

        </div>

    </nav>


    <!-- LOGIN -->
    <section class="login-section">

        <div class="container">

            <div class="login-wrapper">

                <div class="row g-4 align-items-stretch">

                    <!-- SHOWCASE -->
                    <div class="col-lg-6">

                        <div class="login-showcase">

                            <div class="login-showcase-content">

                                <div class="showcase-badge">
                                    <i class="bi bi-stars"></i>
                                    Welcome back to Aurora
                                </div>

                                <h1>
                                    Your journey
                                    <span>continues.</span>
                                </h1>

                                <p>
                                    Sign in to access your student account,
                                    check your application status, explore
                                    opportunities, and stay connected with
                                    Aurora College.
                                </p>

                                <div class="showcase-points">

                                    <div class="showcase-point">
                                        <i class="bi bi-check-circle-fill"></i>
                                        Secure access
                                    </div>

                                    <div class="showcase-point">
                                        <i class="bi bi-check-circle-fill"></i>
                                        Student portal
                                    </div>

                                    <div class="showcase-point">
                                        <i class="bi bi-check-circle-fill"></i>
                                        Application tracking
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- FORM -->
                    <div class="col-lg-6">

                        <div class="login-card">

                            <div class="login-logo">
                                <i class="bi bi-stars"></i>
                            </div>

                            <h2>
                                Welcome back
                            </h2>

                            <p class="login-subtitle">
                                Sign in to your Aurora College account
                                to continue.
                            </p>


                            <form
                                action="#"
                                method="POST"
                                id="loginForm"
                            >

                                <!-- EMAIL -->
                                <div class="mb-4">

                                    <label class="form-label">
                                        Email Address
                                    </label>

                                    <div class="input-group-custom">

                                        <i
                                            class="bi bi-envelope input-icon"
                                        ></i>

                                        <input
                                            type="email"
                                            name="email"
                                            class="login-input"
                                            placeholder="you@example.com"
                                            autocomplete="email"
                                            required
                                        >

                                    </div>

                                </div>


                                <!-- PASSWORD -->
                                <div class="mb-3">

                                    <div class="d-flex justify-content-between align-items-center mb-2">

                                        <label class="form-label mb-0">
                                            Password
                                        </label>

                                        <a
                                            href="#"
                                            class="forgot-link"
                                        >
                                            Forgot password?
                                        </a>

                                    </div>

                                    <div class="input-group-custom">

                                        <i
                                            class="bi bi-lock input-icon"
                                        ></i>

                                        <input
                                            type="password"
                                            name="password"
                                            id="password"
                                            class="login-input"
                                            placeholder="Enter your password"
                                            autocomplete="current-password"
                                            required
                                        >

                                        <button
                                            type="button"
                                            class="password-toggle"
                                            id="togglePassword"
                                            aria-label="Show password"
                                        >
                                            <i class="bi bi-eye"></i>
                                        </button>

                                    </div>

                                </div>


                                <!-- REMEMBER -->
                                <div
                                    class="d-flex align-items-center mb-4"
                                >

                                    <div class="form-check">

                                        <input
                                            class="form-check-input remember-check"
                                            type="checkbox"
                                            name="remember"
                                            id="remember"
                                        >

                                        <label
                                            class="form-check-label remember-label"
                                            for="remember"
                                        >
                                            Remember me
                                        </label>

                                    </div>

                                </div>


                                <!-- LOGIN BUTTON -->
                                <button
                                    type="submit"
                                    class="login-btn"
                                >
                                    <i class="bi bi-box-arrow-in-right me-2"></i>
                                    Sign In
                                </button>

                            </form>


                            <div class="login-divider">
                                OR
                            </div>


                            <div class="register-box">

                                Don't have an Aurora account?

                                <a href="register.php">
                                    Create an account
                                </a>

                            </div>


                            <div class="security-note">

                                <i class="bi bi-shield-lock-fill"></i>

                                Your information is protected and secure.

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>


<script>

    const passwordInput = document.getElementById("password");
    const togglePassword = document.getElementById("togglePassword");

    togglePassword.addEventListener("click", function () {

        const icon = this.querySelector("i");

        if (passwordInput.type === "password") {

            passwordInput.type = "text";

            icon.classList.remove("bi-eye");
            icon.classList.add("bi-eye-slash");

        } else {

            passwordInput.type = "password";

            icon.classList.remove("bi-eye-slash");
            icon.classList.add("bi-eye");

        }

    });

</script>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>