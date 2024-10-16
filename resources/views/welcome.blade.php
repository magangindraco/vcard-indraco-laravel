<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Welcome to Indraco">
    <meta name="author" content="Indraco Team">
    <title>Welcome to Indraco</title>
    <link rel="icon" type="image/x-icon" href="assets/img/icon-indraco.ico">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <style>
        body {
            background: linear-gradient(to right, #f2f2f2, #e2e2e2);
            font-family: Arial, sans-serif;
        }

        .top-bar {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.2);
            z-index: 2;
            display: flex;
            gap: 15px;
            color: #f0f0f0;
        }

        .top-bar a {
            color: rgba(255, 255, 255, 0.7);
            font-size: 16px;
            transition: color 0.3s;
        }

        .top-bar a:hover {
            color: white;
        }

        .top-bar i {
            margin-right: 5px;
        }

        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('assets/img/background.jpg') no-repeat center center/cover;
            overflow: hidden;
        }

        .hero-content {
            color: white;
            z-index: 10;
            opacity: 0;
            animation: fadeIn 1s forwards;
            animation-delay: 1.5s;
            text-align: center; /* Ini akan memastikan semua konten dalam .hero-content termasuk tombol berada di tengah */

        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo-animation {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            animation: logoFadeOut 2.5s forwards;
        }

        @keyframes logoFadeOut {
            from {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1);
            }
            to {
                opacity: 0;
                transform: translate(-50%, -50%) scale(1.5);
            }
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }

        .map-container, .video-container {
            margin: 50px 0;
            display: flex;
            justify-content: center;
        }

        .map, .video {
            width: 80%;
            height: 400px;
            border: 0;
        }

        .services-section {
            margin: 50px 0;
            text-align: center;
        }

        .sales-chart {
            margin-top: 30px;
            width: 80%;
            height: 400px;
        }

        /* Adjust container for centering */
        .container {
            max-width: 1140px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 15px;
            padding-right: 15px;
        }

        .services-section h2, 
        .map-container h2,
        .video-container h2, 
        .sales-chart h2 {
            margin-bottom: 30px;
            font-size: 32px;
            color: #333;
            font-weight: 600;
        }

        .card-body {
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <style>
        /* Tambahkan CSS khusus di sini */
        .card-img-top {
            width: 100%;
            height: auto;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover .card-img-top {
            transform: scale(1.05) rotateY(10deg);
            transition: transform 0.5s ease-in-out;
        }

        .card:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            transition: box-shadow 0.3s ease-in-out;
        }

        .card-body {
            transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
        }

        .card:hover .card-body {
            transform: translateY(-10px);
            opacity: 0.9;
        }

        @media (max-width: 768px) {
            .card-img-top {
                transform: none;
            }
        }
    </style>
</head>


<body>
    <div class="logo-animation">
        <img src="assets/img/icon-indraco.png" alt="Indraco Logo" width="150" height="150">
    </div>

    <div class="hero">
        <!-- Top Bar for About, Instagram, TikTok -->
        <div class="top-bar">
            <a href="#"><i class="bi bi-info-circle"></i> About</a>
            <a href="https://www.instagram.com/indraco" target="_blank"><i class="bi bi-instagram"></i> Instagram</a>
            <a href="https://www.tiktok.com/@indraco" target="_blank"><i class="bi bi-tiktok"></i> TikTok</a>
        </div>

        <div class="hero-content">
            <h1 class="display-4">Welcome to Indraco</h1>
            <p class="lead">Experience the finest exquisite coffee since 1971.</p>
            <a href="{{ route('business-cards.index') }}" class="btn btn-custom btn-lg">Get Started</a>
        </div>
    </div>

    <!-- Our Services Section -->
    <div class="services-section container">
        <h2 class="text-center mb-5">Our Services</h2>
        <div class="row justify-content-center">
            <!-- Service 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow">
                    <img src="assets/img/pasar.jpeg" class="card-img-top" alt="Quality Coffee">
                    <div class="card-body text-center">
                        <h5 class="card-title">Quality Coffee</h5>
                        <p class="card-text">We offer a wide range of high-quality coffee products sourced from the best beans.</p>
                    </div>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow">
                    <img src="assets/img/indracostore.png" class="card-img-top" alt="Expert Roasting">
                    <div class="card-body text-center">
                        <h5 class="card-title">Expert Roasting</h5>
                        <p class="card-text">Our expert roasters ensure the perfect roast for every batch.</p>
                    </div>
                </div>
            </div>
            <!-- Service 3 (New) -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow">
                    <img src="assets/img/kopi.jpg" class="card-img-top" alt="Coffee Packaging">
                    <div class="card-body text-center">
                        <h5 class="card-title">Coffee Packaging</h5>
                        <p class="card-text">We provide eco-friendly packaging that ensures the freshness of our coffee beans.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Peta Indraco -->
    <div class="container map-container">
        <h2 class="text-center mb-4">Our Location</h2>
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.099488512425!2d112.73402871452403!3d-7.291669074622064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7880326b8f97a9%3A0x9c648be1bbdc25f6!2sPT.%20Indraco!5e0!3m2!1sen!2sid!4v1697376934676!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- Video Tentang Kopi -->
    <div class="container video-container">
        <h2 class="text-center mb-4">Our Coffee Journey</h2>
        <iframe class="video" src="https://www.youtube.com/embed/jTzZyybK4UQ" allowfullscreen></iframe>
    </div>

    <!-- Footer -->
    <div class="footer text-center">
        <p>&copy; 2024 Indraco | <a href="https://www.indraco.com" target="_blank">Visit Indraco</a></p>
    </div>
</body>
</html>
