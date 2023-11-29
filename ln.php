<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
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
            <img src="/images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
        <div class="sign-up">
            <h1>Sign In</h1>
	 
  <form method="post" action="ln.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="sn.php">Sign up</a>
  	</p>
  </form>
        

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