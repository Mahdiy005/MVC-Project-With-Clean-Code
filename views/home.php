<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #111 !important;
            line-height: 1.6;
        }

        /* Navigation Bar */
        nav {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1.2rem;
        }

        nav ul li a:hover {
            color: #f4f4f4;
            text-decoration: underline;
        }

        /* Hero Section */
        .hero {
            background: url('https://source.unsplash.com/1600x900/?nature,landscape') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333;
            text-align: center;
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .hero a {
            color: #fff;
            text-decoration: none;
            background-color: #333;
            padding: 15px 30px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .hero a:hover {
            background-color: #f4f4f4;
            color: #333;
        }

        /* Services Section */
        .services {
            padding: 50px;
            text-align: center;
        }

        .services h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .services .service {
            display: inline-block;
            width: 30%;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .services .service img {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
        }

        .services .service h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .services .service p {
            font-size: 1rem;
            color: #777;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        footer p {
            margin: 10px 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.2rem;
            }

            .services .service {
                width: 100%;
                margin: 20px 0;
            }
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div>
            <h1>Welcome to Our Website</h1>
            <p>Your success is our priority. Let us help you achieve your goals.</p>
            <a href="#">Get Started</a>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <h2>Our Services</h2>
        <div class="service">
            <img src="https://source.unsplash.com/100x100/?consulting" alt="Service 1">
            <h3>Consulting</h3>
            <p>Professional consulting services to boost your business.</p>
        </div>
        <div class="service">
            <img src="https://source.unsplash.com/100x100/?development" alt="Service 2">
            <h3>Development</h3>
            <p>High-quality web development tailored to your needs.</p>
        </div>
        <div class="service">
            <img src="https://source.unsplash.com/100x100/?design" alt="Service 3">
            <h3>Design</h3>
            <p>Creative and innovative designs for your business.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Your Website. All Rights Reserved.</p>
    </footer>

</body>
</html>
