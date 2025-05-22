<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - FitZone</title>
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
        .contact-hero {
            height: 50vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('./contactus.jpg') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            margin-top: 70px;
        }

        .contact-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .contact-hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Contact Content Section */
        .contact-content {
            padding: 80px 0;
            background-color: #fff;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .contact-info h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            position: relative;
        }

        .contact-info h2::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 4px;
            background-color: #ff4500;
            bottom: -10px;
            left: 0;
        }

        .contact-details {
            list-style: none;
            margin-bottom: 40px;
        }

        .contact-details li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }

        .contact-details i {
            width: 30px;
            height: 30px;
            background-color: #ff4500;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .contact-details .contact-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
            display: block;
        }

        .contact-details .contact-value {
            color: #666;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: #f4f4f4;
            border-radius: 50%;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background-color: #ff4500;
            color: #fff;
            transform: translateY(-3px);
        }

        /* Contact Form */
        .contact-form h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            position: relative;
        }

        .contact-form h2::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 4px;
            background-color: #ff4500;
            bottom: -10px;
            left: 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: #ff4500;
        }

        textarea.form-control {
            height: 150px;
            resize: vertical;
        }

        .btn {
            display: inline-block;
            background-color: #ff4500;
            color: #fff;
            padding: 12px 30px;
            border: none;
            border-radius: 30px;
            text-transform: uppercase;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn:hover {
            background-color: #ff5722;
            transform: translateY(-3px);
        }

        /* Form Validation */
        .form-group.error .form-control {
            border-color: #ff0000;
        }

        .form-group.success .form-control {
            border-color: #28a745;
        }

        .error-message {
            color: #ff0000;
            font-size: 0.9rem;
            margin-top: 5px;
            display: none;
        }

        .form-group.error .error-message {
            display: block;
        }

        /* Success Message */
        .form-success {
            display: none;
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        /* Business Hours Section */
        .business-hours {
            padding: 80px 0;
            background-color: #f9f9f9;
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

        .hours-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .hours-card {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
        }

        .hours-card h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #ff4500;
        }

        .hours-list {
            list-style: none;
        }

        .hours-list li {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px dashed #ddd;
        }

        .hours-list li:last-child {
            border-bottom: none;
        }

        .hours-list .day {
            font-weight: 600;
        }

        /* Location Map */
        .location {
            padding: 80px 0;
            background-color: #fff;
        }

        .map-container {
            height: 450px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* FAQ Section */
        .faq {
            padding: 80px 0;
            background-color: #f9f9f9;
        }

        .accordion {
            max-width: 800px;
            margin: 0 auto;
        }

        .accordion-item {
            margin-bottom: 15px;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .accordion-header {
            background-color: #fff;
            padding: 15px 20px;
            cursor: pointer;
            position: relative;
            font-weight: 600;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .accordion-header::after {
            content: '+';
            font-size: 1.5rem;
            color: #ff4500;
        }

        .accordion-item.active .accordion-header::after {
            content: '-';
        }

        .accordion-content {
            background-color: #fff;
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .accordion-item.active .accordion-content {
            padding: 0 20px 20px;
            max-height: 1000px;
        }

        /* Call to Action */
        .cta {
            padding: 80px 0;
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('./contactus.jpg') center/cover no-repeat;
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
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .contact-form {
                margin-top: 50px;
            }

            .contact-hero h1 {
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

            .contact-hero h1 {
                font-size: 2rem;
            }

            .contact-hero p {
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

    <section class="contact-hero">
        <div class="container">
            <h1>Contact Us</h1>
            <p>Get in touch with our team for any questions or to schedule a free trial session</p>
        </div>
    </section>

    <section class="contact-content">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h2>Get In Touch</h2>
                    <ul class="contact-details">
                        <li>
                            <i>📍</i>
                            <div>
                                <span class="contact-label">Our Location</span>
                                <span class="contact-value">123 Fitness Avenue, Workout City, WC 10001</span>
                            </div>
                        </li>
                        <li>
                            <i>📞</i>
                            <div>
                                <span class="contact-label">Phone Number</span>
                                <span class="contact-value">(555) 123-4567</span>
                            </div>
                        </li>
                        <li>
                            <i>✉️</i>
                            <div>
                                <span class="contact-label">Email Address</span>
                                <span class="contact-value">info@fitzone.com</span>
                            </div>
                        </li>
                        <li>
                            <i>⏰</i>
                            <div>
                                <span class="contact-label">Working Hours</span>
                                <span class="contact-value">Monday-Friday: 5:00 AM - 10:00 PM<br>
                                    Weekends: 7:00 AM - 8:00 PM</span>
                            </div>
                        </li>
                    </ul>

                    <h3>Follow Us</h3>
                    <div class="social-links">
                        <a href="#" title="Facebook"><span>FB</span></a>
                        <a href="#" title="Instagram"><span>IG</span></a>
                        <a href="#" title="Twitter"><span>TW</span></a>
                        <a href="#" title="YouTube"><span>YT</span></a>
                    </div>
                </div>

                <div class="contact-form">
                    <h2>Send Us a Message</h2>
                    <div class="form-success" id="formSuccess">
                        Thank you for your message! We'll get back to you as soon as possible.
                    </div>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <span class="error-message">Please enter your name</span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <span class="error-message">Please enter a valid email address</span>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                            <span class="error-message">Please enter a valid phone number</span>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                            <span class="error-message">Please enter a subject</span>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" required></textarea>
                            <span class="error-message">Please enter your message</span>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="business-hours">
        <div class="container">
            <div class="section-title">
                <h2>Our Hours</h2>
                <p>We're open daily to accommodate your busy schedule</p>
            </div>
            <div class="hours-grid">
                <div class="hours-card">
                    <h3>Gym Hours</h3>
                    <ul class="hours-list">
                        <li>
                            <span class="day">Monday</span>
                            <span class="time">5:00 AM - 10:00 PM</span>
                        </li>
                        <li>
                            <span class="day">Tuesday</span>
                            <span class="time">5:00 AM - 10:00 PM</span>
                        </li>
                        <li>
                            <span class="day">Wednesday</span>
                            <span class="time">5:00 AM - 10:00 PM</span>
                        </li>
                        <li>
                            <span class="day">Thursday</span>
                            <span class="time">5:00 AM - 10:00 PM</span>
                        </li>
                        <li>
                            <span class="day">Friday</span>
                            <span class="time">5:00 AM - 10:00 PM</span>
                        </li>
                        <li>
                            <span class="day">Saturday</span>
                            <span class="time">7:00 AM - 8:00 PM</span>
                        </li>
                        <li>
                            <span class="day">Sunday</span>
                            <span class="time">7:00 AM - 8:00 PM</span>
                        </li>
                    </ul>
                </div>
                <div class="hours-card">
                    <h3>Class Schedule</h3>
                    <ul class="hours-list">
                        <li>
                            <span class="day">Morning</span>
                            <span class="time">6:00 AM - 9:00 AM</span>
                        </li>
                        <li>
                            <span class="day">Midday</span>
                            <span class="time">11:00 AM - 2:00 PM</span>
                        </li>
                        <li>
                            <span class="day">Evening</span>
                            <span class="time">5:00 PM - 9:00 PM</span>
                        </li>
                        <li>
                            <span class="day">Weekend</span>
                            <span class="time">8:00 AM - 1:00 PM</span>
                        </li>
                    </ul>
                </div>
                <div class="hours-card">
                    <h3>Personal Training</h3>
                    <ul class="hours-list">
                        <li>
                            <span class="day">Weekdays</span>
                            <span class="time">6:00 AM - 9:00 PM</span>
                        </li>
                        <li>
                            <span class="day">Weekends</span>
                            <span class="time">8:00 AM - 6:00 PM</span>
                        </li>
                    </ul>
                    <p style="margin-top: 15px; font-style: italic;">Personal training sessions must be scheduled in advance</p>
                </div>
            </div>
        </div>
    </section>

    <section class="location">
        <div class="container">
            <div class="section-title">
                <h2>Find Us</h2>
                <p>Conveniently located in the heart of the city with ample parking</p>
            </div>
            <div class="map-container">
                <div>Interactive Map Would Be Displayed Here</div>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to our most commonly asked questions</p>
            </div>
            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-header">Do you offer a free trial?</div>
                    <div class="accordion-content">
                        <p>Yes! We offer a complimentary 3-day pass for new members. This gives you access to our facilities, classes, and a free consultation with one of our fitness experts. You can sign up for the free trial on our website or in person.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">What's included in the membership?</div>
                    <div class="accordion-content">
                        <p>Our standard membership includes full access to our gym facilities, locker rooms, and fitness classes. Premium memberships include additional perks such as personal training sessions, nutrition consultations, and access to exclusive recovery facilities. All members receive a complimentary fitness assessment when they join.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">Do I need to bring my own equipment?</div>
                    <div class="accordion-content">
                        <p>We provide all necessary exercise equipment for workouts and classes. We recommend bringing a water bottle, towel, and appropriate workout attire. For hygiene purposes, we ask members to bring their own yoga mats for yoga and pilates classes, although we do have some available for rent.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">How do I cancel or freeze my membership?</div>
                    <div class="accordion-content">
                        <p>Membership cancellations require a 30-day notice and can be processed at the front desk or through your online account. If you need to temporarily freeze your membership due to medical reasons, travel, or other circumstances, you can do so for up to 3 months per year at no additional cost. Please contact our membership team for details.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">Are there any age restrictions?</div>
                    <div class="accordion-content">
                        <p>Members must be at least 16 years old to use the gym facilities independently. We offer special family memberships that include supervised programs for children aged 10-15. Children under 10 can participate in our dedicated kids' fitness classes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <h2>Ready to Start Your Fitness Journey?</h2>
            <p>Join FitZone today and take the first step toward a healthier, stronger you. Sign up now for a free trial session!</p>
            <a href="#" class="btn">Join Now</a>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3>About FitZone</h3>
                    <p style="color: #bbb; margin-bottom: 20px;">FitZone is a premier fitness center dedicated to helping you achieve your fitness goals through expert guidance, state-of-the-art equipment, and a supportive community.</p>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="#">Classes</a></li>
                        <li><a href="#">Trainers</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact Info</h3>
                    <ul class="footer-contact">
                        <li>
                            <i>📍</i>
                            <span>123 Fitness Avenue, Workout City, WC 10001</span>
                        </li>
                        <li>
                            <i>📞</i>
                            <span>(555) 123-4567</span>
                        </li>
                        <li>
                            <i>✉️</i>
                            <span>info@fitzone.com</span>
                        </li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Follow Us</h3>
                    <div class="footer-socials">
                        <a href="#"><span>FB</span></a>
                        <a href="#"><span>IG</span></a>
                        <a href="#"><span>TW</span></a>
                        <a href="#"><span>YT</span></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 FitZone. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navLinks.classList.toggle('active');
        });

        document.querySelectorAll('.nav-links li').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navLinks.classList.remove('active');
            });
        });

        // Accordion functionality
        const accordionItems = document.querySelectorAll('.accordion-item');

        accordionItems.forEach(item => {
            const header = item.querySelector('.accordion-header');
            
            header.addEventListener('click', () => {
                // Close all other accordion items
                accordionItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                    }
                });
                
                // Toggle current item
                item.classList.toggle('active');
            });
        });

    
      </script>
      </body>
      </html>