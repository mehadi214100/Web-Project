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

    <!-- Navigation Bar -->
    <header class="header">
        <nav class="navbar">
            <div class="logo">
                <img class="log" src="image/logo.png" alt="">
            </div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Crop Information</a></li>
                <li><a href="#">Disease Diagnosis</a></li>
                <li><a href="#">Marketplace</a></li>
                <li><a href="#">Expert Consultation</a></li>
                <li><a href="labor_machinery.php">Labor & Machinery</a></li>
                <li><a href="#">Loan Assistance</a></li>
                <li><a class="Contact" href="logout.php">Logout</a></li>
            </ul>
            
        </nav>

        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-text">
                <h1>From Soil to Success</h1>
                <hr class="hr">
                <p>Empowering farmers with knowledge, support, and resources at every step. Join AmaderKrisok to enhance your farming journey with expert advice, easy access to services, and real-time updates.</p>
                <a href="#" class="learn-more-button">Learn More</a>
            </div>
            <div class="hero-image">
                <img  class="hero-image-img" src="image/nav-image.png" alt="Hand holding plant">
            </div>
        </section>
    </header>

    <main class="container-why">
        
        <div class="chosse-image">
            <img src="image/choose-man.png" alt="">
        </div>
        <div class="why-amaderkrisok">
            <h3>Why Choose Amader Krisok</h3>
            <h1>Bringing the Best Agricultural Resources to Your Farm</h1>
            <p class="para">A reliable resource for sustainable farming practices, disease management, and quality crop production.</p>
            <div class="progress">
                <div>
                    <p>Organic Crop Information </p>
                    <p>85%</p>
                </div>
                <hr class="h85">
                <div>
                    <p>Farmer Satisfaction </p>
                    <p>90%</p>
                </div>
                <hr class="h90">
                <div>
                    <p>Healthy Farming Techniques </p>
                    <p>80%</p>
                </div>
                <hr class="h80">
            </div>
            <div>
                <button class="btn readmore">Read More</button>
            </div>
        </div>
    </main>

    <section class="galary">
        <div class="galary-title">
            <div class="why-amaderkrisok">
                <h3>OUR GALLARY</h3>
                <h1>Bringing natures bounty to your plate</h1>
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
        <button class="btn viewbtn">View All Projects</button>
    </section>

    <section class="about-section">
        <div class="about-content">
            <h3>Empowering Farmers, Enriching Lives</h3>
            <h1>Growing Together for a Better Tomorrow</h1>
            <p>Agriculture and farming are essential industries that involve the cultivation of crops, raising of livestock, and production of food.</p>
            
            <div class="about-boxes">
                <div class="about-box">
                    <div class="icon">
                        <i class="fa-solid fa-wheat-awn"></i>
                    </div>
                    <h4>Growing strong and feeding</h4>
                </div>
                <div class="about-box">
                    <div class="icon">
                        <i class="fa-solid fa-earth-americas"></i>
                    </div>
                    <h4>Taking care of the Earth</h4>
                </div>
            </div>
        </div>
        
        <div class="contact-form">
            <h2>Leave message</h2>
            <form>
                <div class="form-group">
                    <input type="text" placeholder="Name" required>
                    <input type="email" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Your Number" required>
                    <select required>
                        <option value="">Your Area</option>
                        <option value="area1">Area 1</option>
                        <option value="area2">Area 2</option>
                        <option value="area3">Area 3</option>
                    </select>
                </div>
                <textarea placeholder="Message" required></textarea>
                <button type="submit">Submit Now</button>
            </form>
          
        </div>
    </section>
    

    <div class="newsletter-section">
        <div class="newsletter-content">
            <div class="newsletter-image">
                <img src="image/subscribe.png" alt="Farmer holding vegetables">
            </div>
            <div class="newsletter-text">
                <h2>Subscribe to our newsletter</h2>
                <p>Get the latest updates on sustainable farming practices and fresh produce directly to your inbox.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Enter Your Email" required>
                    <button type="submit">
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
                <p>Empowering sustainable agriculture from seed to harvest. Join us in building a healthier future through eco-friendly practices.</p>
            </div>
    
            <!-- Quick Links -->
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Crop Information</a></li>
                    <li><a href="#">Disease Diagnosis</a></li>
                    <li><a href="#">Marketplace</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
    
            <!-- Contact Information -->
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p>Email: amaderkrisok.com</p>
                <p>Phone: 01777400185</p>
                <p>Address: DUET,Joydebpur,Gazipur,Bangladesh</p>
            </div>
    
            <!-- Social Media Icons -->
            <div class="footer-social">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-telegram"></i></a>
                </div>
            </div>
        </div>
    
        <div class="footer-bottom">
            <p>&copy;2024 Amader Krisok.com. All rights reserved.</p>
        </div>
    </footer>
    

    


    <script src="https://kit.fontawesome.com/d34502dac2.js" crossorigin="anonymous"></script>
</body>
</html>
