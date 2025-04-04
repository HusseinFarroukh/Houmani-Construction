<?php require 'connection.php'?>
<?php
// Check if the "delete_all" form has been submitted
if(isset($_POST["delete_all"])) {
    // Perform the deletion operation
    $query = "DELETE FROM tb_upload";
    mysqli_query($conn, $query);
    
    // Delete all image files in the "img" directory
    $files = glob('img/*'); // Get all files in the "img" directory
    foreach($files as $file) {
        if(is_file($file))
            unlink($file); // Delete each file
    }
    
    echo "<script>alert('All products have been deleted.'); window.location.href = 'data.php';</script>";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/cd5d1b5cbc.js" crossorigin="anonymous"></script>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/revolution-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/Favicon-removebg-preview.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/Favicon-removebg-preview.png">

    <style>
        table{
            display:flex;
            justify-content:center;
            
        }
       table .Equipments{
        border-radius:20px;
        box-shadow:5px 15px 25px rgba(0,0,0,0.35);
        
       } 
       table .Equipments td{
        padding:20px;
        
       } 
    </style>
    <title>Data</title>
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
                                        <li><a href="index.html">Used Equipment</a></li>
                                        <li>Mobile Crane</li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li ><a href="index.html">Home</a></li>
                                <li class="current "><a href="UsedEquipment.html">Used Equipment</a></li>
                                <li ><a href="contact.html">Contact</a></li>
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
                                <li><a href="index.html">Home</a></li>
                                <li class="current"><a href="UsedEquipment.html">Used Equipment</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
    
    </header>
    <!--End Main Header -->
</div>
    <form class="Delete" action="" method="post">
        <p>Are you sure you want to delete all products?</p>
        <button type="submit" name="delete_all">Delete All</button>
    </form>
    <table>
        <tr>
            <?php
                
                $rows = mysqli_query($conn, "SELECT * FROM tb_upload ORDER BY id DESC");
            ?>
            <?php
                foreach($rows as $row) :
            ?>
            <div class="equipment" >
                <tr class="Equipments">
                    <td>
                        <h1><?php echo $row["name"]; echo " "; echo $row["model"]?></h1>
                        <img src="img/<?php echo $row['image']; ?>" width="200" title="<?php echo $row['image']; ?>">
                    </td>
                    <td style="padding-left:500px;">
                            <h4>Code: <?php echo $row["code"];?></h4>
                            <h4>Construction year: <?php echo $row["year"];?></h4>
                            <h4>Max. lifting capacity: <?php echo $row["capacity"];?></h4>
                    </td>
                    
                </tr>
            </div>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="../used">Upload Image File</a>
    
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
                                    	<li><a href="services.html">Outdoor Service</a></li>
                                        <li><a href="services.html">Indoor Service</a></li>
                                        <li><a href="services.html">Training</a></li>
                                        <li><a href="services.html">Spare-Parts</a></li>
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
                                        <div class="footer-form ">
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
</body>
</html>