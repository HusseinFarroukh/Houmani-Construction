<?php
session_start();

// Handle the clear all button click
if (isset($_POST["clear_all"])) {
    // Clear all submitted data from the session
    $_SESSION['submitted_data'] = array();
}

// Handle the delete button click
if (isset($_POST["delete"])) {
    $index = $_POST["index"];
    
    // Remove the selected submission from the session array
    if (isset($_SESSION['submitted_data'][$index])) {
        unset($_SESSION['submitted_data'][$index]);
    }
    
    // Reindex the array to prevent gaps
    $_SESSION['submitted_data'] = array_values($_SESSION['submitted_data']);
}

// Display submitted data history
function displaySubmittedData() {
    if (!empty($_SESSION['submitted_data'])) {
        echo "<h2>Submitted Data History:</h2>";
        foreach ($_SESSION['submitted_data'] as $index => $data) {
            echo '<div class="title">Title: ' . $data["title"] . '</div><br>';
            echo "Code: " . $data["code"] . "<br>";
            echo "Construction year: " . $data["year"] . "<br>";
            echo "Max. lifting capacity: " . $data["capacity"] . "<br>";
            echo "Price: " . $data["price"] . "<br>";
            echo "Main Data: " . "<br>";
            echo "Model / Type of crane: " . $data["type"] . "<br>";
            echo "Max. capacity (75%) / max. loadmoment (tm): " . $data["max"] . "<br>";
            echo "Year / First taken into operation: " . $data["Firsttaken"] . "<br>";
            echo "Working hours chasis (h) / date:" . $data["chasis"] . "<br>";
            echo "Working hours superstructure (h) / date:" . $data["superstructure"] . "<br>";
            echo "Mileage (km) / date:" . $data["Mileage"] . "<br>";
            echo "Carrier cabin:" . $data["cabin"] . "<br>";
            echo "Aircondition:" . $data["Aircondition"] . "<br>";
            echo "Engine:" . $data["Engine"] . "<br>";
            echo "manufacturer:" . $data["manufacturer"] . "<br>";
            echo "driveable:" . $data["driveable"] . "<br>";
            echo "current:" . $data["current"] . "<br>";
            echo "steering:" . $data["steering"] . "<br>";
            echo "wheels:" . $data["wheels"] . "<br>";
            echo "Sparewheel:" . $data["Sparewheel"] . "<br>";
            echo "basis:" . $data["basis"] . "<br>";
            echo "validity:" . $data["validity"] . "<br>";
            echo "Mainboom:" . $data["Mainboom"] . "<br>";
            echo "boom:" . $data["boom"] . "<br>";
            echo "Lattice:" . $data["Lattice"] . "<br>";
            echo "Derrick:" . $data["Derrick"] . "<br>";
            echo "Counterweight:" . $data["Counterweight"] . "<br>";
            echo "DerrickCounterweight:" . $data["DerrickCounterweight"] . "<br>";
            echo "jib:" . $data["jib"] . "<br>";
            echo "Whip:" . $data["Whip"] . "<br>";
            echo "boomhead1:" . $data["boomhead1"] . "<br>";
            echo "Variable1:" . $data["Variable1"] . "<br>";
            echo "Variable2:" . $data["Variable2"] . "<br>";
            echo "Variable3:" . $data["Variable3"] . "<br>";
            echo "Variable4:" . $data["Variable4"] . "<br>";
            echo "Variable5:" . $data["Variable5"] . "<br>";
            echo "Variable6:" . $data["Variable6"] . "<br>";
            echo "Variable7:" . $data["Variable7"] . "<br>";
            echo "Variable8:" . $data["Variable8"] . "<br>";
            echo "Variable9:" . $data["Variable9"] . "<br>";
            echo "Variable10:" . $data["Variable10"] . "<br>";
            echo "Variable11:" . $data["Variable11"] . "<br>";
            echo "Variable12:" . $data["Variable12"] . "<br>";
            echo "Variable13:" . $data["Variable13"] . "<br>";
            echo "slewing:" . $data["slewing"] . "<br>";
            echo "hook:" . $data["hook"] . "<br>";
            echo "Aircondition2:" . $data["Aircondition2"] . "<br>";
            echo "load:" . $data["load"] . "<br>";
            echo "validity:" . $data["validity"] . "<br>";




            // Add a delete button for each submission
            echo "<form method='post'>";
            echo "<input type='hidden' name='index' value='$index'>";
            echo "<input type='submit' name='delete' value='Delete'>";
            echo "</form>";
            
            echo "<hr>"; // Add a line to separate each submission
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Mobile and crawler crane - HOUMANI Construction Equipment</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">


<!--Favicon-->
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/Favicon-removebg-preview.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/Favicon-removebg-preview.png">
<script src="https://kit.fontawesome.com/cd5d1b5cbc.js" crossorigin="anonymous"></script>

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<style>
    .title{
        font-size: 20px;
        color: red;
    }
</style>
</head>

<body>

<div class="page-wrapper">
    
   
    
    <!-- Main Header-->
    <header class="main-header">
    
    	<!--Header Top-->
    	<div class="header-top">
        	<div class="auto-container">
            	<div class="clearfix">
                    
                    <div class="top-right clearfix">
                        <ul class="social-icon-one">
                            <li class="facebook"><a href="https://www.facebook.com/LiebherrLB" target="_blank"><span
                                        class="fa fa-facebook"></span></a></li>
                            <li class="twitter"><a href="https://x.com/liebherr_lb_hce?s=21" target="_blank"><i
                                        class="fa-brands fa-x-twitter"></i></a></li>
                            <li class="instagram"><a href="https://www.instagram.com/liebherr_lb_hce/" target="_blank"><span
                                        class="fa fa-instagram"></span></a></li>
                            <li class="linkedin"><a href="https://www.linkedin.com/company/-liebherr-lb.hce-/" target="_blank"><span
                                        class="fa fa-linkedin"></span></a></li>
                            <li class="youtube"><a href="https://www.youtube.com/channel/UCrIsqGuuZ944FqElYWR_YsQ" target="_blank"><span
                                        class="fa fa-youtube"></span></a></li>
                        </ul>
                        <ul class="links-nav">
                            <li class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><img src="images/icons/flag.jpg" alt="" />&ensp; English <span class="icon fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu2">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">Arabic</a></li>
                                </ul>
                            </li>
                        </ul>
                    	<ul class="clearfix">                        	
                            <li class="quote-btn-box"><a href="contact.html" class="quote-btn">Get in touch</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
        <!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                    <div class="flex">
                        <div class="pull-left logo-outer">
                            <div class="logo"><a href="index.html"><img src="images/ORIGINAL2-removebg-preview.png" alt="" title="" ></a></div>
                        </div>
                        <div class="pull-left logo-outer">
                            <div class="logo2"><a href="index.html"><img src="images/Transparent2.png" alt="" title="" ></a></div>
                        </div>
                    </div>  
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
        <!--Header Lower-->
        <div class="header-lower">
            
        	<div class="auto-container">
            	<div class="nav-outer clearfix menu-bg">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!--Page Title-->
                        <section class="page-title1" >
                            <div class="auto-container1">
                                <div class="title-box1">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="product.html">Product</a></li>
                                        <li>Mobile cranes</li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li ><a href="index.html">Home</a></li>
                                <li class="current "><a href="UsedEquipment.html">Used Equipment</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <div class="d-flex position1" style="background-color: grey; border-radius: 20px;position: relative; bottom: 20px;">
                                    <a id="userlink" class="nav-link mx-2" href="#" style="color: #fff;">Username</a>
                                    <a id="Signoutlink" class="nav-link mx-2" href="login7.html" style="color: #fff;">Signout</a>
                                </div>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    
                </div>
            </div>
        </div>
        <!--End Header Lower-->
        
        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.html" class="img-responsive"><img src="images/ORIGINAL2-removebg-preview.png" alt="" title=""></a>
                </div>
                
                
                
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li ><a href="index.html">Home</a></li>
                                <li class="current "><a href="UsedEquipment.html">Used Equipment</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    
    </header>
    <!--End Main Header -->
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/3.png);">
        <div class="auto-container">
            <div class="title-box">
                <h2>Mobile cranes</h2>
                
            </div>
        </div>
    </section>
    <!--End Page Title-->
    
    <div class="Upload">
    <a href="index.php"><h1>Sell your crane</h1></a>
    </div>
    <form method="post">
    <input type="submit" name="clear_all" value="Clear All Data">
    </form>
    <?php
    // Display the submitted data history
    displaySubmittedData();
    ?>
    
       
    
    <!--Cases Section-->
    <!--  team section -->
    <div class="team-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <h2>Our Shop</h2>
                <div class="separater"></div>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme">
                <div class="team-member">
                    <div class="inner-box">
                        <div class="image">
                            <div class="single-product-item">
                                <div class="img-holder">
                                    <img src="images/shop/Asset 1.png" alt="Awesome Product Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="icon-holder">
                                                    <a class="thm-btn bg-clr1" href="images/catalogue.pdf" target="_blank">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <div class="top clearfix">
                                        <div class="product-title pull-left">
                                            <a href="images/catalogue.pdf" target="_blank">
                                                <h5>Backpack</h5>
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <h4 class="rate">€15.00</h4>
                                </div>
                            </div>
                           
                        </div>
                        
                    </div>
                </div>
                <div class="team-member">
                    <div class="inner-box">
                        <div class="image">
                            <div class="single-product-item">
                                <div class="img-holder">
                                    <img src="images/shop/Asset 2.png" alt="Awesome Product Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="icon-holder">
                                                    <a class="thm-btn bg-clr1" href="images/catalogue.pdf" target="_blank">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <div class="top clearfix">
                                        <div class="product-title pull-left">
                                            <a href="images/catalogue.pdf" target="_blank">
                                                <h5>LTC 1050-3.1
                                                </h5>
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <h4 class="rate">€168.00

        

                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="team-member">
                    <div class="inner-box">
                        <div class="image">
                            <div class="single-product-item">
                                <div class="img-holder">
                                    <img src="images/shop/Asset 3.png" alt="Awesome Product Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="icon-holder">
                                                    <a class="thm-btn bg-clr1" href="images/catalogue.pdf" target="_blank">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <div class="top clearfix">
                                        <div class="product-title pull-left">
                                            <a href="images/catalogue.pdf" target="_blank">
                                                <h5>LR 11000</h5>
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <h4 class="rate">€980.00

                                    </h4>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>



                <div class="team-member">
                    <div class="inner-box">
                        <div class="image">
                            <div class="single-product-item">
                                <div class="img-holder">
                                    <img src="images/shop/Asset 4.png" alt="Awesome Product Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="icon-holder">
                                                    <a class="thm-btn bg-clr1" href="images/catalogue.pdf" target="_blank">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <div class="top clearfix">
                                        <div class="product-title pull-left">
                                            <a href="images/catalogue.pdf" target="_blank">
                                                <h5>Wristwatch
                                                </h5>
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <h4 class="rate">€26.50

        


                                    </h4>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Call To Action Section-->
    <section class="call-to-action-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-md-8 col-sm-12 col-xs-12">
                    <h2>We are providing good & on <span class="theme_color">time services</span> to our valuable customers.</h2>
                </div>
                <!--Btn Column-->
                <div class="btn-column col-md-4 col-sm-12 col-xs-12">
                    <a href="contact.html" class="theme-btn btn-style-one1">Get in touch</a>
                </div>
            </div>
        </div>
    </section>
    <!--Main Footer-->
    <footer class="main-footer">
    	<!--Widgets Section-->
		<div class="widgets-section">
        	<div class="auto-container">
            	<div class="row clearfix">
                
                	<!--Big Column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
							
                            <!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="footer-widget logo-widget">
                                    
                                    
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-12 col-sm-12 col-xs-12">
                            	<div class="footer-widget links-widget">
                                	<h2>Our Services</h2>
                                    <ul class="services-list">
                                    	<li><a href="#">General Builder</a></li>
                                        <li><a href="#">House Extensions</a></li>
                                        <li><a href="#">Refurbishment</a></li>
                                        <li><a href="#">Electricity</a></li>
                                    </ul>
                                    <div class="widget-content">
                                        
                                        <ul class="social-icon-one">
                                            <li class="facebook"><a href="https://www.facebook.com/LiebherrLB" target="_blank"><span
                                                        class="fa fa-facebook"></span></a></li>
                                            <li class="twitter"><a href="https://x.com/liebherr_lb_hce?s=21" target="_blank"><i
                                                        class="fa-brands fa-x-twitter"></i></a></li>
                                            <li class="instagram"><a href="https://www.instagram.com/liebherr_lb_hce/" target="_blank"><span
                                                        class="fa fa-instagram"></span></a></li>
                                            <li class="linkedin"><a href="https://www.linkedin.com/company/-liebherr-lb.hce-/" target="_blank"><span
                                                        class="fa fa-linkedin"></span></a></li>
                                            <li class="youtube"><a href="https://www.youtube.com/channel/UCrIsqGuuZ944FqElYWR_YsQ" target="_blank"><span
                                                        class="fa fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!--Big Column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
							
                           
                            
                            <!--Footer Column / Contact Widget-->
                            <div class="footer-column col-md-12 col-sm-6 col-xs-12">
                                <div class="footer-widget contact-widget">
                                    <h2>Send us a Message</h2>
                                    
                                    <div class="widget-content">
                                        <div class="footer-form">
                                            <form method="post" action="mail.php">
                                                <div class="form-group">
                                                    <input type="text" name="name" id="name" value="" placeholder="Full Name *" required="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="namecompany" id="namecompany" value="" placeholder="Company name *" required="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="number" id="number" value="" placeholder="Phone number *" required="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" name="email" id="email" value="" placeholder="Email Address *" required="">
                                                </div>
                                                <div class="form-group">
                                                    <textarea placeholder="Message" name="message" id="message" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="theme-btn btn-style-one1">Submit Now</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
						</div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--Footer Bottom-->
        <div class="footer-bottom">
        	<div class="auto-container">
            	<div class="row clearfix">
                	<!--Column-->
                	<div class="column col-md-12 col-sm-12 col-xs-12">
                    	<div class="copyright">Copyrights &copy; 2023 </div>
                    </div>
                    
                	
                </div>
            </div>
        </div>
    </footer>
    
</div>
<!--End pagewrapper-->
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-long-arrow-up"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/648850b694cf5d49dc5d6514/1h2q7mipf';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    <script>
        //-----------------------------Reference----------------------------//
        let userlink = document.getElementById('userlink');
        let signoutlink = document.getElementById('Signoutlink');
        let header = document.getElementById('hh');

        let currentuser = null;

        //-----------------------------Functions---------------------------//
        function getUsername() {
            let keepLoggedIn = localStorage.getItem("keepLoggedIn");

            if (keepLoggedIn == "yes") {
                currentuser = JSON.parse(localStorage.getItem('user'));
            }
            else {
                currentuser = JSON.parse(sessionStorage.getItem('user'));
            }
        }
        function Signout() {
            sessionStorage.removeItem('user');
            localStorage.removeItem('user');
            localStorage.removeItem('keepLoggedIn');
            window.location = "home.html";
        }

        //---------------------------Windows Loads--------------------//
        window.onload = function () {
            getUsername();
            if (currentuser == null) {
                userlink.innerText = "Create New Account";
                userlink.classList.replace("nav-link", "btn");
                userlink.classList.add("btn-primary");
                userlink.href = "register.html";

                signoutlink.innerText = "Login";
                signoutlink.classList.replace("nav-link", "btn");
                signoutlink.classList.add("btn-success");
                signoutlink.href = "login.html";
            } else {
                userlink.innerText = currentuser.username;
                header.innerText = "Welcome " + currentuser.fullname;
                userlink.classList.replace("btn", "nav-link");
                userlink.classList.remove("btn-primary");
                userlink.href = "#";

                signoutlink.innerText = "Sign Out";
                signoutlink.classList.replace("btn", "nav-link");
                signoutlink.classList.remove("btn-success");
                signoutlink.href = "javascript:Signout()";
            }
        }
    </script>
</body>
</html>