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
        }

        .top-bar {
            position: absolute;
            top: 20px;
            right: 20px; /* Pindah ke pojok kanan atas */
            padding: 10px 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            z-index: 2;
            display: flex;
            gap: 15px; /* Jarak antar elemen */
        }

        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: url('assets/img/background.jpg') no-repeat center center/cover;
            overflow: hidden;
        }

        .hero-content {
            color: white;
            z-index: 1;
            opacity: 0; /* Mulai dengan tidak terlihat */
            animation: fadeIn 1s forwards;
            animation-delay: 1s; /* Delay sebelum animasi muncul */
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
            animation: logoFadeOut 1s forwards;
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

        .map-container {
            margin: 50px 0;
            display: flex;
            justify-content: center; /* Pusatkan peta */
        }

        .map {
            width: 80%; /* Lebar peta */
            height: 400px; /* Set a height for the map */
            border: 0;
        }

        .services-section {
            margin: 50px 0;
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
            <a href="#">About</a>
            <a href="https://www.instagram.com/indraco" target="_blank">Instagram</a>
            <a href="https://www.tiktok.com/@indraco" target="_blank">TikTok</a>
        </div>

        <div class="hero-content">
            <h1 class="display-4">Welcome to Indraco</h1>
            <p class="lead">Experience the finest exquisite coffee since 1971.</p>
            <a href="{{ route('business-cards.index') }}" class="btn btn-custom btn-lg">Get Started</a>
        </div>
    </div>

    <div class="services-section container">
        <h2 class="text-center mb-4">Our Services</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow">
                    <img src="assets/img/service1.jpg" class="card-img-top" alt="Service 1">
                    <div class="card-body">
                        <h5 class="card-title">Quality Coffee</h5>
                        <p class="card-text">We offer a wide range of high-quality coffee products sourced from the best beans.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow">
                    <img src="assets/img/service2.jpg" class="card-img-top" alt="Service 2">
                    <div class="card-body">
                        <h5 class="card-title">Expert Roasting</h5>
                        <p class="card-text">Our expert roasters ensure the perfect roast for every batch.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow">
                    <img src="assets/img/service3.jpg" class="card-img-top" alt="Service 3">
                    <div class="card-body">
                        <h5 class="card-title">Customer Satisfaction</h5>
                        <p class="card-text">We prioritize customer satisfaction and quality service at all times.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Peta Indraco -->
    <div class="container map-container">
        <h2 class="text-center mb-4">Our Location</h2>
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.099488512425!2d112.73402871452403!3d-7.291669074622064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7880326b8f97a9%3A0x9c648be1bbdc25f6!2sPT.%20Indraco!5e0!3m2!1sen!2sid!4v1697376934676!5m2!1sen!2sid"
            allowfullscreen="" loading="lazy"></iframe>
    </div>

    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2023 Indraco. All Rights Reserved.</p>
            <a href="https://www.indraco.com" target="_blank" class="text-white">Visit Our Website</a>
        </div>
    </footer>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
