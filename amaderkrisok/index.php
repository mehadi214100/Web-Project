<?php
    session_start();
    if (!isset( $_SESSION["user"])){
        header("Location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmaderKrisok - From Soil to Success</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <!-- Toggle Button for Language -->
    <div style="text-align: right; padding: 10px;">
        <button id="toggleLang" style="padding: 8px 16px; font-size: 14px;">Switch to Bangla</button>
    </div>

    <!-- Navigation Bar -->
    <header class="header">
        <nav class="navbar">
            <div class="logo">
                <img class="log" src="image/logo.png" alt="">
            </div>
            <ul class="nav-links">
                <li><a href="#" data-en="Home" data-bn="হোম">Home</a></li>
                <li><a href="tahi/cropinfo.html" data-en="Crop Information" data-bn="ফসলের তথ্য">Crop Information</a></li>
                <li><a href="#" data-en="Disease Diagnosis" data-bn="রোগ নির্ণয়">Disease Diagnosis</a></li>
                <li><a href="agricultural_product_store/index.html" data-en="Marketplace" data-bn="বাজার">Marketplace</a></li>
                <li><a href="expert_appointment_form/index.html" data-en="Expert Consultation" data-bn="বিশেষজ্ঞ পরামর্শ">Expert Consultation</a></li>
                <li><a href="labor_machinery.php" data-en="Labor & Machinery" data-bn="শ্রম ও যন্ত্রপাতি">Labor & Machinery</a></li>
                <li><a href="#" data-en="Loan Assistance" data-bn="ঋণ সহায়তা">Loan Assistance</a></li>
                <li><a class="Contact" href="logout.php" data-en="Logout" data-bn="লগআউট">Logout</a></li>
            </ul>
        </nav>

        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-text">
                <h1 data-en="From Soil to Success" data-bn="মাটি থেকে সাফল্যে">From Soil to Success</h1>
                <hr class="hr">
                <p data-en="Empowering farmers with knowledge, support, and resources at every step. Join AmaderKrisok to enhance your farming journey with expert advice, easy access to services, and real-time updates." 
                   data-bn="কৃষকদের জ্ঞান, সহায়তা এবং সংস্থান দিয়ে ক্ষমতায়িত করা। আপনার কৃষিকাজকে উন্নত করতে বিশেষজ্ঞ পরামর্শ, সহজ পরিষেবা এবং রিয়েল-টাইম আপডেট পান।">
                   Empowering farmers with knowledge, support, and resources at every step. Join AmaderKrisok to enhance your farming journey with expert advice, easy access to services, and real-time updates.
                </p>
                <a href="#f" class="learn-more-button" data-en="Learn More" data-bn="আরও জানুন">Learn More</a>
            </div>
        </section>
    </header>

    <main class="container-why">
        <div class="chosse-image">
            <img src="image/choose-man.png" alt="">
        </div>
        <div class="why-amaderkrisok">
            <h3 data-en="Why Choose Amader Krisok" data-bn="আমাদের কৃষক কেন বেছে নেবেন">Why Choose Amader Krisok</h3>
            <h1 data-en="Bringing the Best Agricultural Resources to Your Farm" data-bn="আপনার খামারে সেরা কৃষি সম্পদ আনছে">Bringing the Best Agricultural Resources to Your Farm</h1>
            <p class="para" data-en="A reliable resource for sustainable farming practices, disease management, and quality crop production." data-bn="টেকসই কৃষি চর্চা, রোগ ব্যবস্থাপনা এবং মানসম্পন্ন ফসল উৎপাদনের জন্য একটি নির্ভরযোগ্য সম্পদ।">A reliable resource for sustainable farming practices, disease management, and quality crop production.</p>
            <div class="progress">
                <div>
                    <p data-en="Organic Crop Information" data-bn="জৈব ফসলের তথ্য">Organic Crop Information</p>
                    <p>85%</p>
                </div>
                <hr class="h85">
                <div>
                    <p data-en="Farmer Satisfaction" data-bn="কৃষকের সন্তুষ্টি">Farmer Satisfaction</p>
                    <p>90%</p>
                </div>
                <hr class="h90">
                <div>
                    <p data-en="Healthy Farming Techniques" data-bn="স্বাস্থ্যকর কৃষি কৌশল">Healthy Farming Techniques</p>
                    <p>80%</p>
                </div>
                <hr class="h80">
            </div>
            <div>
                <button class="btn readmore" data-en="Read More" data-bn="আরও পড়ুন">Read More</button>
            </div>
        </div>
    </main>

    <section class="galary">
        <div class="galary-title">
            <div class="why-amaderkrisok">
                <h3 data-en="OUR GALLERY" data-bn="আমাদের গ্যালারি">OUR GALLERY</h3>
                <h1 data-en="Bringing nature's bounty to your plate" data-bn="প্রকৃতির প্রাচুর্য আপনার প্লেটে নিয়ে আসা">Bringing nature's bounty to your plate</h1>
            </div>
        </div>
        <div class="images">
            <img src="image/blog1.jpeg" alt="">
            <img src="image/blog2.jpeg" alt="">
            <img src="image/blog3.jpeg" alt="">
        </div>
        <div class="images">
            <img src="image/gl2.jpg" alt="">
            <img src="image/gl4.jpg" alt="">
            <img src="image/gl5.jpg" alt="">
        </div>
        <button class="btn viewbtn" data-en="View All Projects" data-bn="সব প্রকল্প দেখুন">View All Projects</button>
    </section>

    <section class="about-section">
        <div class="about-content">
            <h3 data-en="Empowering Farmers, Enriching Lives" data-bn="কৃষকদের ক্ষমতায়ন, জীবনের সমৃদ্ধি">Empowering Farmers, Enriching Lives</h3>
            <h1 data-en="Growing Together for a Better Tomorrow" data-bn="উজ্জ্বল আগামী জন্য একসাথে বেড়ে উঠা">Growing Together for a Better Tomorrow</h1>
            <p data-en="Agriculture and farming are essential industries that involve the cultivation of crops, raising of livestock, and production of food." data-bn="কৃষি এবং চাষাবাদ হল প্রয়োজনীয় শিল্প যা ফসলের চাষ, পশুপালন এবং খাদ্য উৎপাদনকে অন্তর্ভুক্ত করে।">Agriculture and farming are essential industries that involve the cultivation of crops, raising of livestock, and production of food.</p>
            
            <div class="about-boxes">
                <div class="about-box">
                    <div class="icon">
                        <i class="fa-solid fa-wheat-awn"></i>
                    </div>
                    <h4 data-en="Growing strong and feeding" data-bn="শক্তিশালী হয়ে খাওয়ানো">Growing strong and feeding</h4>
                </div>
                <div class="about-box">
                    <div class="icon">
                        <i class="fa-solid fa-earth-americas"></i>
                    </div>
                    <h4 data-en="Taking care of the Earth" data-bn="পৃথিবীর যত্ন নেওয়া">Taking care of the Earth</h4>
                </div>
            </div>
        </div>
        
        <div class="contact-form">
            <h2 data-en="Leave a message" data-bn="বার্তা দিন">Leave a message</h2>
            <form>
                <div class="form-group">
                    <input type="text" placeholder="Name" data-en="Name" data-bn="নাম" required>
                    <input type="email" placeholder="E-mail" data-en="E-mail" data-bn="ই-মেইল" required>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Your Number" data-en="Your Number" data-bn="আপনার নম্বর" required>
                    <select required>
                        <option value="" data-en="Your Area" data-bn="আপনার এলাকা">Your Area</option>
                        <option value="area1" data-en="Area 1" data-bn="এলাকা ১">Area 1</option>
                        <option value="area2" data-en="Area 2" data-bn="এলাকা ২">Area 2</option>
                        <option value="area3" data-en="Area 3" data-bn="এলাকা ৩">Area 3</option>
                    </select>
                </div>
                <textarea placeholder="Message" data-en="Message" data-bn="বার্তা" required></textarea>
                <button type="submit" data-en="Submit Now" data-bn="এখন জমা দিন">Submit Now</button>
            </form>
        </div>
    </section>

    <div class="newsletter-section">
        <div class="newsletter-content">
            <div class="newsletter-image">
                <img src="image/subscribe.png" alt="Farmer holding vegetables">
            </div>
            <div class="newsletter-text">
                <h2 data-en="Subscribe to our newsletter" data-bn="আমাদের নিউজলেটার সাবস্ক্রাইব করুন">Subscribe to our newsletter</h2>
                <p data-en="Get the latest updates on sustainable farming practices and fresh produce directly to your inbox." data-bn="টেকসই কৃষি চর্চা এবং তাজা পণ্যের সর্বশেষ আপডেট সরাসরি আপনার ইনবক্সে পান।">Get the latest updates on sustainable farming practices and fresh produce directly to your inbox.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Enter Your Email" data-en="Enter Your Email" data-bn="আপনার ইমেইল দিন" required>
                    <button type="submit" data-en="Send" data-bn="পাঠান">
                        <i class="fa-regular fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <!-- Logo and Description -->
            <div class="footer-logo">
                <img src="image/logo.png" alt="Logo">
                <p data-en="Empowering sustainable agriculture from seed to harvest. Join us in building a healthier future through eco-friendly practices." data-bn="বীজ থেকে ফসল পর্যন্ত টেকসই কৃষিকে ক্ষমতায়ন। পরিবেশ-বান্ধব চর্চার মাধ্যমে একটি সুস্থ ভবিষ্যত নির্মাণে আমাদের সাথে যোগ দিন।">Empowering sustainable agriculture from seed to harvest. Join us in building a healthier future through eco-friendly practices.</p>
            </div>

            <!-- Quick Links -->
            <div class="footer-links">
                <h3 data-en="Quick Links" data-bn="দ্রুত লিঙ্ক">Quick Links</h3>
                <ul>
                    <li><a href="#" data-en="Home" data-bn="হোম">Home</a></li>
                    <li><a href="#" data-en="Crop Information" data-bn="ফসলের তথ্য">Crop Information</a></li>
                    <li><a href="#" data-en="Disease Diagnosis" data-bn="রোগ নির্ণয়">Disease Diagnosis</a></li>
                    <li><a href="#" data-en="Marketplace" data-bn="বাজার">Marketplace</a></li>
                    <li><a href="#" data-en="Contact" data-bn="যোগাযোগ">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="footer-contact">
                <h3 data-en="Contact Us" data-bn="যোগাযোগ করুন">Contact Us</h3>
                <p data-en="Email: amaderkrisok.com" data-bn="ইমেইল: amaderkrisok.com">Email: amaderkrisok.com</p>
                <p data-en="Phone: 01777400185" data-bn="ফোন: 01777400185">Phone: 01777400185</p>
                <p data-en="Address: DUET,Joydebpur,Gazipur,Bangladesh" data-bn="ঠিকানা: ডুয়েট, জয়দেবপুর, গাজীপুর, বাংলাদেশ">Address: DUET,Joydebpur,Gazipur,Bangladesh</p>
            </div>

            <!-- Social Media Icons -->
            <div class="footer-social">
                <h3 data-en="Follow Us" data-bn="আমাদের অনুসরণ করুন">Follow Us</h3>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-telegram"></i></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p data-en="&copy;2024 Amader Krisok.com. All rights reserved." data-bn="&copy;2024 Amader Krisok.com. সর্বস্বত্ব সংরক্ষিত।">&copy;2024 Amader Krisok.com. All rights reserved.</p>
        </div>
    </footer>

    <script>
        const toggleLangButton = document.getElementById('toggleLang');
        let isEnglish = true; // Initial language state

        toggleLangButton.addEventListener('click', () => {
            const elements = document.querySelectorAll('[data-en]');
            elements.forEach(element => {
                if (isEnglish) {
                    element.textContent = element.getAttribute('data-bn');
                } else {
                    element.textContent = element.getAttribute('data-en');
                }
            });

            isEnglish = !isEnglish; // Toggle language state
            toggleLangButton.textContent = isEnglish ? 'Switch to Bangla' : 'Switch to English';
        });
    </script>
</body>
</html>
