<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./registerpage.php">
         <button >
        Register Page
    </button>
    </a>
   
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitZone - Your Fitness Journey Begins Here</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Header Styles */
        header {
            background-color: #1a1a1a;
            color: #fff;
            padding: 20px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
        }

        .logo span {
            color: #ff4500;
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            color: #fff;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #ff4500;
        }

        .active {
            color: #ff4500 !important;
        }

        .hamburger {
            display: none;
            cursor: pointer;
        }

        .bar {
            display: block;
            width: 25px;
            height: 3px;
            margin: 5px auto;
            background-color: #fff;
            transition: all 0.3s ease-in-out;
        }

        /* Hero Section Styles */
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('./gymback.jpg') center/cover no-repeat;
            display: flex;
            align-items: center;
            text-align: center;
            color: #fff;
            margin-top: 70px;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .hero h2 {
            font-size: 1.5rem;
            margin-bottom: 30px;
            font-weight: 400;
        }

        .btn {
            display: inline-block;
            background-color: #ff4500;
            color: #fff;
            padding: 12px 30px;
            border-radius: 30px;
            text-transform: uppercase;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn:hover {
            background-color: #ff5722;
            transform: translateY(-3px);
        }

        /* Features Section */
        .features {
            padding: 80px 0;
            background-color: #fff;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            background-color: #ff4500;
            bottom: -10px;
            left: 25%;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background-color: #f9f9f9;
            padding: 40px 30px;
            border-radius: 10px;
            text-align: center;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .feature-card i {
            font-size: 3rem;
            color: #ff4500;
            margin-bottom: 20px;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        /* Classes Section */
        .classes {
            padding: 80px 0;
            background-color: #f9f9f9;
        }

        .class-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .class-card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
        }

        .class-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .class-img {
            height: 200px;
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .class-content {
            padding: 20px;
        }

        .class-content h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .class-content p {
            margin-bottom: 15px;
            color: #666;
        }

        .class-meta {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #eee;
            color: #666;
        }

        /* Testimonials Section */
        .testimonials {
            padding: 80px 0;
            background-color: #fff;
        }

        .testimonial-slider {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
            overflow: hidden;
        }

        .testimonial-slides {
            display: flex;
            transition: transform 0.5s ease;
        }

        .testimonial-slide {
            flex: 0 0 100%;
            padding: 20px;
            text-align: center;
        }

        .testimonial-content {
            background-color: #f9f9f9;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            position: relative;
        }

        .testimonial-content::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            border-width: 20px 20px 0;
            border-style: solid;
            border-color: #f9f9f9 transparent transparent;
        }

        .testimonial-content p {
            font-style: italic;
            font-size: 1.1rem;
        }

        .testimonial-author {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .testimonial-author img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-bottom: 10px;
            background-color: #ddd;
        }

        .testimonial-author h4 {
            margin-bottom: 5px;
        }

        .testimonial-author p {
            color: #666;
        }

        .testimonial-dots {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .dot {
            width: 12px;
            height: 12px;
            background-color: #ddd;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .dot.active {
            background-color: #ff4500;
        }

        /* CTA Section */
        .cta {
            padding: 80px 0;
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('/api/placeholder/1200/800') center/cover no-repeat;
            color: #fff;
            text-align: center;
        }

        .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .cta p {
            max-width: 600px;
            margin: 0 auto 30px;
            font-size: 1.1rem;
        }

        /* Footer */
        footer {
            background-color: #1a1a1a;
            color: #fff;
            padding: 60px 0 20px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background-color: #ff4500;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #bbb;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #ff4500;
        }

        .footer-contact li {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
        }

        .footer-contact i {
            margin-right: 10px;
            color: #ff4500;
        }

        .footer-socials {
            display: flex;
            gap: 15px;
        }

        .footer-socials a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: #333;
            border-radius: 50%;
            transition: all 0.3s;
        }

        .footer-socials a:hover {
            background-color: #ff4500;
            transform: translateY(-3px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #333;
        }

        /* About Page Specific Styles */
        .about-hero {
            height: 50vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/api/placeholder/1200/600') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            margin-top: 70px;
        }

        .about-hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .about-content {
            padding: 80px 0;
            background-color: #fff;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .about-image {
            background-color: #ddd;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            overflow: hidden;
        }

        .about-text h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .about-text p {
            margin-bottom: 20px;
        }

        .team {
            padding: 80px 0;
            background-color: #f9f9f9;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .team-member {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
        }

        .team-member:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .team-img {
            height: 250px;
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .team-info {
            padding: 20px;
            text-align: center;
        }

        .team-info h3 {
            font-size: 1.3rem;
            margin-bottom: 5px;
        }

        .team-info p {
            color: #666;
            margin-bottom: 15px;
        }

        .team-socials {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .team-socials a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            background-color: #f4f4f4;
            border-radius: 50%;
            transition: all 0.3s;
        }

        .team-socials a:hover {
            background-color: #ff4500;
            color: #fff;
        }

        /* Contact Page Specific Styles */
        .contact-content {
            padding: 80px 0;
            background-color: #fff;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .contact-info h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .contact-details {
            list-style: none;
            margin-bottom: 30px;
        }

        .contact-details li {
            display: flex;
            margin-bottom: 15px;
        }

        .contact-details i {
            margin-right: 15px;
            color: #ff4500;
            font-size: 1.2rem;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .contact-form textarea {
            height: 150px;
            resize: vertical;
        }

        .contact-form button {
            background-color: #ff4500;
            color: #fff;
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: all 0.3s;
        }

        .contact-form button:hover {
            background-color: #ff5722;
            transform: translateY(-3px);
        }

        .map {
            height: 400px;
            background-color: #ddd;
            margin-top: 80px;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .about-grid,
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .about-image {
                height: 300px;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .section-title h2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 768px) {
            .hamburger {
                display: block;
            }

            .nav-links {
                position: fixed;
                left: -100%;
                top: 70px;
                flex-direction: column;
                background-color: #1a1a1a;
                width: 100%;
                text-align: center;
                transition: 0.3s;
                box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
                padding: 20px 0;
            }

            .nav-links.active {
                left: 0;
            }

            .nav-links li {
                margin: 15px 0;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero h2 {
                font-size: 1.2rem;
            }
        }

        /* Page Content Display Control */
        .page-content {
            display: none;
        }

        .page-content.active {
            display: block;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">Fit<span>Zone</span></a>
                <ul class="nav-links">
                    <li><a href="./index.php">Home</a></li>
                   <li><a href="./about.php">About Us</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./registerpage.php">Register and Login</a></li>
                </ul>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </div>
    </header>

    <!-- HOME PAGE CONTENT -->
    <div id="home" class="page-content active">
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <h1>Transform Your Body, Transform Your Life</h1>
                    <h2>Join FitZone and embark on your fitness journey today</h2>
                    <a href="#" class="btn">Get Started</a>
                </div>
            </div>
        </section>



        <section class="features">
            <div class="container">
                <div class="section-title">
                    <h2>Why Choose FitZone</h2>
                    <p>We offer top-notch facilities and services for all your fitness needs</p>
                </div>
                <div class="feature-grid">
                    <div class="feature-card">
                        <i>🏋️</i>
                        <h3>Modern Equipment</h3>
                        <p>Access to state-of-the-art fitness equipment and machines to help you achieve your goals.</p>
                    </div>
                    <div class="feature-card">
                        <i>👨‍🏫</i>
                        <h3>Expert Trainers</h3>
                        <p>Our certified professional trainers are dedicated to helping you reach your fitness goals.</p>
                    </div>
                    <div class="feature-card">
                        <i>📅</i>
                        <h3>Flexible Schedule</h3>
                        <p>With classes throughout the day, we make it easy to fit your workout into your busy schedule.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="classes">
            <div class="container">
                <div class="section-title">
                    <h2>Our Classes</h2>
                    <p>Find the perfect workout routine that suits your lifestyle</p>
                </div>
                <div class="class-grid">
                    <div class="class-card">
                        <div class="class-img">
                           <img src="./strength.jpg" alt="">
                            <span></span>
                        </div>
                        <div class="class-content">
                            <h3>Strength Training</h3>
                            <p>Build muscle, increase strength, and boost your metabolism with our strength training classes.</p>
                            <div class="class-meta">
                                <span>60 min</span>
                                <span>Intermediate</span>
                            </div>
                        </div>
                    </div>
                    <div class="class-card">
                        <div class="class-img">
                            <img src="./cardionew.jpeg" alt="">
                            <span></span>
                        </div>
                        <div class="class-content">
                            <h3>Cardio Blast</h3>
                            <p>Get your heart pumping and burn calories with our high-energy cardio blast sessions.</p>
                            <div class="class-meta">
                                <span>45 min</span>
                                <span>All Levels</span>
                            </div>
                        </div>
                    </div>
                    <div class="class-card">
                        <div class="class-img">
                            <span><img src="./yoga.jpeg" alt=""></span>
                        </div>
                        <div class="class-content">
                            <h3>Yoga Flow</h3>
                            <p>Improve flexibility, balance, and mental clarity with our rejuvenating yoga flow classes.</p>
                            <div class="class-meta">
                                <span>75 min</span>
                                <span>All Levels</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials">
            <div class="container">
                <div class="section-title">
                    <h2>Success Stories</h2>
                    <p>Hear what our members have to say about their experience at FitZone</p>
                </div>
                <div class="testimonial-slider">
                    <div class="testimonial-slides">
                        <div class="testimonial-slide">
                            <div class="testimonial-content">
                                <p>"Joining FitZone was the best decision I've ever made. The trainers are supportive and knowledgeable, and the community is amazing. I've lost 30 pounds and gained so much confidence!"</p>
                            </div>
                            <div class="testimonial-author">
                                <div>Member Image</div>
                                <h4>Sarah Johnson</h4>
                                <p>Member since 2023</p>
                            </div>
                        </div>
                        <div class="testimonial-slide">
                            <div class="testimonial-content">
                                <p>"The variety of classes at FitZone keeps me motivated. I never get bored with my workout routine, and the results speak for themselves. The staff goes above and beyond to help you succeed."</p>
                            </div>
                            <div class="testimonial-author">
                                <div>Member Image</div>
                                <h4>Michael Rodriguez</h4>
                                <p>Member since 2022</p>
                            </div>
                        </div>
                        <div class="testimonial-slide">
                            <div class="testimonial-content">
                                <p>"After trying many gyms in the city, FitZone is by far the best. The equipment is top-notch, the facility is always clean, and the atmosphere is energizing yet welcoming. Worth every penny!"</p>
                            </div>
                            <div class="testimonial-author">
                                <div>Member Image</div>
                                <h4>Emma Thompson</h4>
                                <p>Member since 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta">
            <div class="container">
                <h2>Ready to Begin Your Fitness Journey?</h2>
                <p>Join FitZone today and take the first step toward a healthier, stronger you. Sign up now for a free trial session!</p>
                <a href="registerpage.php" class="btn">Join Now</a>
            </div>
        </section>
    </div>

   
    </body>