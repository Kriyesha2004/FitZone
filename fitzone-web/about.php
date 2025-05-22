<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - FitZone</title>
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
        .about-hero {
            height: 60vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('./gymabout.jpg') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            margin-top: 70px;
        }

        .about-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .about-hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
        }

        /* About Content Section */
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
            height: 450px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .about-text h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            position: relative;
        }

        .about-text h2::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 4px;
            background-color: #ff4500;
            bottom: -10px;
            left: 0;
        }

        .about-text p {
            margin-bottom: 20px;
            font-size: 1.05rem;
            color: #555;
        }

        /* Mission Section */
        .mission {
            padding: 80px 0;
            background-color: #f9f9f9;
        }

        .mission-content {
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .mission-content h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
        }

        .mission-content h2::after {
            content: '';
            position: absolute;
            width: 50%;
            height: 4px;
            background-color: #ff4500;
            bottom: -10px;
            left: 25%;
        }

        .mission-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        /* Values Section */
        .values {
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
            height: 4px;
            background-color: #ff4500;
            bottom: -10px;
            left: 25%;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .value-card {
            background-color: #f9f9f9;
            padding: 40px 30px;
            border-radius: 10px;
            text-align: center;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .value-card i {
            font-size: 3rem;
            color: #ff4500;
            margin-bottom: 20px;
        }

        .value-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .value-card p {
            color: #666;
        }

        /* Team Section */
        .team {
            padding: 80px 0;
            background-color: #f9f9f9;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
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
            height: 300px;
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .team-info {
            padding: 25px;
            text-align: center;
        }

        .team-info h3 {
            font-size: 1.5rem;
            margin-bottom: 5px;
        }

        .team-info .position {
            font-weight: 600;
            color: #ff4500;
            margin-bottom: 15px;
        }

        .team-info p {
            color: #666;
            margin-bottom: 20px;
        }

        .team-socials {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .team-socials a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: #f4f4f4;
            border-radius: 50%;
            transition: all 0.3s;
        }

        .team-socials a:hover {
            background-color: #ff4500;
            color: #fff;
        }

        /* History Section */
        .history {
            padding: 80px 0;
            background-color: #fff;
        }

        .timeline {
            position: relative;
            max-width: 800px;
            margin: 60px auto 0;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 4px;
            background-color: #ff4500;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -2px;
        }

        .timeline-item {
            padding: 10px 50px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: #fff;
            border: 4px solid #ff4500;
            border-radius: 50%;
            top: 15px;
            z-index: 1;
        }

        .timeline-item:nth-child(odd) {
            left: 0;
        }

        .timeline-item:nth-child(even) {
            left: 50%;
        }

        .timeline-item:nth-child(odd)::after {
            right: -14px;
        }

        .timeline-item:nth-child(even)::after {
            left: -14px;
        }

        .timeline-content {
            padding: 20px;
            background-color: #f9f9f9;
            position: relative;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .timeline-date {
            color: #ff4500;
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        .timeline-content h3 {
            margin-bottom: 10px;
            font-size: 1.3rem;
        }

        /* Achievements Section */
        .achievements {
            padding: 80px 0;
            background-color: #f9f9f9;
        }

        .achievements-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .achievement-card {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
        }

        .achievement-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .achievement-number {
            font-size: 3rem;
            font-weight: 700;
            color: #ff4500;
            margin-bottom: 10px;
        }

        .achievement-card h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        /* Testimonial Section */
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

        .testimonial-author-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 15px;
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .testimonial-author h4 {
            margin-bottom: 5px;
            font-size: 1.2rem;
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
            max-width: 700px;
            margin: 0 auto 30px;
            font-size: 1.1rem;
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

        /* Responsive Styles */
        @media (max-width: 992px) {
            .about-grid {
                grid-template-columns: 1fr;
            }

            .about-image {
                height: 350px;
                margin-bottom: 30px;
            }

            .about-hero h1 {
                font-size: 2.5rem;
            }

            .section-title h2,
            .about-text h2,
            .mission-content h2 {
                font-size: 2rem;
            }

            .timeline::after {
                left: 31px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            .timeline-item:nth-child(even) {
                left: 0;
            }

            .timeline-item:nth-child(odd)::after,
            .timeline-item:nth-child(even)::after {
                left: 18px;
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

            .about-hero h1 {
                font-size: 2rem;
            }

            .about-hero p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="index.html" class="logo">Fit<span>Zone</span></a>
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

    <section class="about-hero">
        <div class="container">
            <h1>About FitZone</h1>
            <p>Learn about our story, mission, and the passionate team behind FitZone</p>
        </div>
    </section>

    <section class="about-content">
        <div class="container">
            <div class="about-grid">
                <div class="about-image">
                    <span><img src="./inter.jpg" alt=""></span>
                </div>
                <div class="about-text">
                    <h2>Our Story</h2>
                    <p>FitZone was founded in 2018 by fitness enthusiast and certified personal trainer John Doe, who was frustrated with traditional gyms that often intimidated beginners and lacked personalized guidance. He envisioned creating a fitness center that would cater to people of all fitness levels and backgrounds – a place where everyone would feel welcome and receive the support they need to achieve their fitness goals.</p>
                    <p>What started as a small studio with just a handful of members has grown into a comprehensive fitness facility that serves hundreds of members daily. Our growth has been driven by our unwavering commitment to providing exceptional service, maintaining state-of-the-art equipment, and fostering a supportive community.</p>
                    <p>Today, FitZone is recognized as one of the leading fitness centers in the region, known for its inclusive atmosphere, expert trainers, and comprehensive approach to health and wellness. As we continue to grow, we remain dedicated to our original mission of helping people transform their lives through fitness.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mission">
        <div class="container">
            <div class="mission-content">
                <h2>Our Mission</h2>
                <p>At FitZone, our mission is to empower individuals to achieve their optimal health and fitness by providing a supportive, inclusive environment, personalized guidance, and state-of-the-art facilities. We believe that fitness is not just about physical transformation but also about building confidence, discipline, and overall well-being. We are committed to making fitness accessible, enjoyable, and sustainable for everyone, regardless of their current fitness level or background.</p>
            </div>
        </div>
    </section>

    <section class="values">
        <div class="container">
            <div class="section-title">
                <h2>Our Core Values</h2>
                <p>The principles that guide everything we do at FitZone</p>
            </div>
            <div class="values-grid">
                <div class="value-card">
                    <i>🤝</i>
                    <h3>Community</h3>
                    <p>We believe in building a supportive community where members motivate and inspire each other. At FitZone, you're never alone on your fitness journey.</p>
                </div>
                <div class="value-card">
                    <i>🏆</i>
                    <h3>Excellence</h3>
                    <p>We strive for excellence in everything we do, from our facilities and equipment to our training programs and customer service.</p>
                </div>
                <div class="value-card">
                    <i>🌱</i>
                    <h3>Growth</h3>
                    <p>We are committed to continuous growth and improvement, both for our members and our staff. We believe in pushing boundaries and reaching new heights.</p>
                </div>
                <div class="value-card">
                    <i>💪</i>
                    <h3>Inclusivity</h3>
                    <p>We welcome people of all fitness levels, ages, backgrounds, and abilities. Everyone deserves access to quality fitness resources and support.</p>
                </div>
                <div class="value-card">
                    <i>🔍</i>
                    <h3>Integrity</h3>
                    <p>We operate with honesty, transparency, and ethical standards in all our interactions with members, staff, and the wider community.</p>
                </div>
                <div class="value-card">
                    <i>🧠</i>
                    <h3>Wellness</h3>
                    <p>We promote holistic wellness that encompasses physical fitness, mental health, proper nutrition, and recovery, creating balanced, sustainable lifestyle changes.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="container">
            <div class="section-title">
                <h2>Meet Our Expert Team</h2>
                <p>Our certified professionals are here to guide and support you on your fitness journey</p>
            </div>
            <div class="team-grid">
                <div class="team-member">
                    <div class="team-img">
                        <span><img src="./gymtrainer.jpg" alt=""></span>
                    </div>
                    <div class="team-info">
                        <h3>John Doe</h3>
                        <p class="position">Founder & Head Trainer</p>
                        <p>Certified in strength training, HIIT, and nutrition coaching with over 15 years of experience in the fitness industry.</p>
                        <div class="team-socials">
                            <a href="#"><span>FB</span></a>
                            <a href="#"><span>IG</span></a>
                            <a href="#"><span>TW</span></a>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-img">
                        <span><img src="./gymtrainer.jpg" alt=""></span>
                    </div>
                    <div class="team-info">
                        <h3>Jane Smith</h3>
                        <p class="position">Yoga & Pilates Instructor</p>
                        <p>Specializes in vinyasa yoga, meditation, and mindfulness practices with 8+ years of teaching experience.</p>
                        <div class="team-socials">
                            <a href="#"><span>FB</span></a>
                            <a href="#"><span>IG</span></a>
                            <a href="#"><span>TW</span></a>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-img">
                        <span><img src="./gymtrainer.jpg" alt=""></span>
                    </div>
                    <div class="team-info">
                        <h3>Mike Johnson</h3>
                        <p class="position">Strength & Conditioning Coach</p>
                        <p>Former athlete with expertise in sports performance, functional training, and rehabilitation exercises.</p>
                        <div class="team-socials">
                            <a href="#"><span>FB</span></a>
                            <a href="#"><span>IG</span></a>
                            <a href="#"><span>TW</span></a>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-img">
                        <span><img src="./gymtrainer.jpg" alt=""></span>
                    </div>
                    <div class="team-info">
                        <h3>Sarah Williams</h3>
                        <p class="position">Nutrition Specialist</p>
                        <p>Certified nutritionist helping members develop sustainable eating habits and personalized meal plans.</p>
                        <div class="team-socials">
                            <a href="#"><span>FB</span></a>
                            <a href="#"><span>IG</span></a>
                            <a href="#"><span>TW</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="history">
        <div class="container">
            <div class="section-title">
                <h2>Our Journey</h2>
                <p>A look at how FitZone has evolved over the years</p>
            </div>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">2018</div>
                        <h3>The Beginning</h3>
                        <p>FitZone was founded by John Doe in a small studio space with just a handful of members and basic equipment.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">2019</div>
                        <h3>Expanding Our Community</h3>
                        <p>As membership grew, we moved to a larger facility and added more classes and equipment to meet demand.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">2020</div>
                        <h3>Adapting to Challenges</h3>
                        <p>During the global pandemic, we pivoted to offer virtual training sessions and outdoor classes to keep our community active.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">2021</div>
                        <h3>Community Recognition</h3>
                        <p>FitZone was voted "Best Fitness Center" in the local community awards, recognizing our commitment to excellence.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">2022</div>
                        <h3>Facility Upgrade</h3>
                        <p>Major renovation and equipment upgrade to create a more advanced and comfortable workout environment.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">2023</div>
                        <h3>New Programs Launch</h3>
                        <p>Introduction of specialized training programs, nutrition coaching, and recovery services for a holistic approach.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">2024</div>
                        <h3>Celebrating Growth</h3>
                        <p>Opened our second location to serve more members and expanded our team of certified trainers.</p>
                    </div>
                </div>
            </div>
    </section>

    </body>
</html>