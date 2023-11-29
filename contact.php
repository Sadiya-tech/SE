<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">


<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Glory:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
        type='text/css'>

</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="vertex.png" width="125px">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="allproducts.php">Products</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                    <li><a href="sn.php">Sign Up</a></li>
                    <li><a href="ln.php">Sign In</a></li>
                </ul>
            </nav>
            <a href="cart.html"><img src="cart.png" width="30px" height="30px"></a>
            <img src="menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
        <div class="small-container">
            <h1>Contacts</h1>
            <section class="location">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14601.227424138016!2d90.34804067661871!3d23.80768498604307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0dfcc58eb1b%3A0x9da57147a4f2bd87!2sZaman%20Medical!5e0!3m2!1sen!2sbd!4v1632855776546!5m2!1sen!2sbd"
                    width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </section>
            
            <Section class="contact-us">
                <div class="row">
                    <div class="contact-col">
                        <div>
               
                        <i class="fas fa-home"></i>
                            <span>
                                <h5>Road 4,Zaman Medical Building</h5>
                                <p>Mirpur 2,Dhaka.</p>
                            </span>
                        </div>
                        <div>
                           <i class="fas fa-phone"></i>
                            <span>
                                <h5>+8801700000000</h5>
                                <p>Monday to Saturday,10AM to 8PM</p>
                            </span>
                        </div>
                        <div>
                            <i class="fas fa-envelope"></i>
                            <span>
                                <h5>info@vertex.com</h5>
                                <p>Email us your query</p>
                            </span>
                        </div>
                    </div>
                    <div class="contact-col">
                        <form action="">
                            <input type="text" placeholder="Enter your name" required>
                            <input type="email" placeholder="Enter email address" required>
                            <input type="text" placeholder="Enter your subject" required>
                            <textarea rows="8" placeholder="Message" required></textarea>
                            <button type="submit" class="buttonn">Send Message</button>
                        </form>
                    </div>
                </div>
            </Section>
            </div>
        </div>

        <!---- footer ---->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download Our App</h3>
                        <p>Download App for Andriod and ios mobile phone.</p>
                        <div class="app-logo">
                            <img src="play-store.png">
                            <img src="app-store.png">
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <img src="vertex.png">
                        <p>Our purpose is to sustainably make the pleasure and benefits of sports accessible to the
                            many.
                        </p>
                    </div>
                    <div class="footer-col-3">
                        <h3>Useful Links</h3>
                        <ul>
                            <li>Cupons</li>
                            <li>Blog Post</li>
                            <li>Return Policy</li>
                            <li>Join Affiliate</li>
                        </ul>
                    </div>
                    <div class="footer-col-4">
                        <h3>Follow Us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <li>Youtube</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright">Copyright 2021 - Vertex </p>
            </div>
        </div>
        <!-----js for toggle menu----->
        <script>
            var MenuItems = document.getElementById("MenuItems");

            MenuItems.style.maxHeight = "0px";

            function menutoggle() {
                if (MenuItems.style.maxHeight == "0px") {
                    MenuItems.style.maxHeight = "200px"
                }
                else {
                    MenuItems.style.maxHeight = "0px"
                }
            }
        </script>
</body>

</html>