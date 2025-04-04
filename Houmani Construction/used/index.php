<?php
require 'connection.php';

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $code = $_POST["code"];
    $year = $_POST["year"];
    $capacity = $_POST["capacity"];
    $model = $_POST["model"];
    if($_FILES["image"]["error"] === 4){
        echo
        "<script> alert('ImagesDoes Not Exist');</script>"
        ;
    }
    else{
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        $validImageExtension = ['jpg' , 'jpeg' , 'png'];
        $imageExtension = explode('.',$fileName);
        $imageExtension = strtolower(end($imageExtension));
        if(!in_array($imageExtension, $validImageExtension)){
            echo
            "<script> alert('Invalid Image Extension');</script>"
            ;
        }
        else if($fileSize > 1000000){
            echo
            "<script> alert('Image Size is too large');</script>";
        }
        else{
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;
            move_uploaded_file($tmpName, 'img/'. $newImageName);
            $query = "INSERT INTO tb_upload VALUES('','$name','$newImageName','$code','$year','$capacity','$model' )";
            mysqli_query($conn, $query);
            echo
            "<script>
                alert('Thank You For Your Submission\\nCheck Your Email ');
                document.location.href = 'data.php';
             </script>"
            ;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/revolution-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cd5d1b5cbc.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image File</title>
    <style>
        .form{
            padding:30px;
            width:620px;
            margin-top:100px;
            margin-bottom:100px;
            color:black;
            box-shadow: 5px 15px 25px rgba(0,0,0,0.35);
            
        }
        .flex1{
            display:flex;
            justify-content:center;
        }
        .form .input{
            border:1px solid black;
            position:relative;
            left:200px;
            width:300px;
        }
        .form .input0{
            border:1px solid black;
            position:relative;
            left:198px;
            width:300px;
        }
        .form .input1{
            border:1px solid black;
            position:relative;
            left:205.25px;
            width:300px;
        }
        .form .input2{
            border:1px solid black;
            position:relative;
            left: 210px;
            width:300px;
        }
        .form .input3{
            border:1px solid black;
            position:relative;
            left: 52px;
            width:300px;
        }
        .form .input4{
            border:1px solid black;
            position:relative;
            left:143.25px;
            width:300px;
        }
        .form .input5{
            border:1px solid black;
            position:relative;
            left:204.25px;
            width:300px;
        }
        .form .input6{
            border:1px solid black;
            position:relative;
            left:54px;
            width:300px;
        }
        .form .input7{
            border:1px solid black;
            position:relative;
            left:148.75px;
            width:300px;
        }
        .form .input8{
            border:1px solid black;
            position:relative;
            left:155.25px;
            width:300px;
        }
        .form .input9{
            border:1px solid black;
            position:relative;
            left:33.5px;
            width:300px;
        }
        .form .input10{
            border:1px solid black;
            position:relative;
            left:88.5px;
            width:300px;
        }
        .form .input11{
            border:1px solid black;
            position:relative;
            left:39.5px;
            width:300px;
        }
        .form .input12{
            border:1px solid black;
            position:relative;
            left:91.25px;
            width:300px;
        }
        .form .input13{
            border:1px solid black;
            position:relative;
            left:106.5px;
            width:300px;
        }
        .form .input14{
            border:1px solid black;
            position:relative;
            left:110px;
            width:300px;
        }
        .form .input15{
            border:1px solid black;
            position:relative;
            left:67.5px;
            width:300px;
        }
        .form .input16{
            border:1px solid black;
            position:relative;
            left:134.5px;
            width:300px;
        }
        .form .input17{
            border:1px solid black;
            position:relative;
            left: 157px;
            width:300px;
        }
        .form .input18{
            border:1px solid black;
            position:relative;
            left:70px;
            width:300px;
        }
        .form .input19{
            border:1px solid black;
            position:relative;
            left:111px;
            width:300px;
        }
        .form .input20{
            border:1px solid black;
            position:relative;
            left:39.5px;
            width:300px;
        }
        .form .input21{
            border:1px solid black;
            position:relative;
            left:35.5px;
            width:300px;
        }
        .form .input22{
            border:1px solid black;
            position:relative;
            left: 182.25px;
            top: 3px;
            width:300px;
        }
        .form .input23{
            border:1px solid black;
            position:relative;
            left: 135.5px;
            width:300px;
        }
        .form .input24{
            border:1px solid black;
            position:relative;
            left: 48px;
            width:300px;
        }
        .form .input25{
            border:1px solid black;
            position:relative;
            left: 113.25px;
            width:300px;
        }
        .form .input26{
            border:1px solid black;
            position:relative;
            left: 84.5px;
            width:300px;
        }
        .form .input27{
            border:1px solid black;
            position:relative;
            left: 33px;
            width:300px;
        }
        .form .input28{
            border:1px solid black;
            position:relative;
            left: 129.5px;
            width:300px;
        }
        .form .input29{
            border:1px solid black;
            position:relative;
            left: 131px;
            width:300px;
        }
        .form .input30{
            border:1px solid black;
            position:relative;
            left: 44px;
            width:300px;
        }
        .form .input31{
            border:1px solid black;
            position:relative;
            left: 44px;
            width:300px;
        }
        .form .input32{
            border:1px solid black;
            position:relative;
            left: 32px;
            width:300px;
        }
        .form .input33{
            border:1px solid black;
            position:relative;
            left: 87.5px;
            width:300px;
        }
        .form .input34{
            border:1px solid black;
            position:relative;
            left: 44px;
            width:300px;
        }
        .form .input35{
            border:1px solid black;
            position:relative;
            left: 117px;
            width:300px;
        }
        .form .input36{
            border:1px solid black;
            position:relative;
            left: 72.5px;
            width:300px;
        }
        .form .input37{
            border:1px solid black;
            position:relative;
            left: 92px;
            width:300px;
        }
        .form .input38{
            border:1px solid black;
            position:relative;
            left: -14px;
            width:300px;
        }
        .form .input39{
            border:1px solid black;
            position:relative;
            left: 155px;
            width:300px;
        }
        .form .input40{
            border:1px solid black;
            position:relative;
            left: 105px;
            width:300px;
        }
        .form .input41{
            border:1px solid black;
            position:relative;
            left: 68px;
            width:300px;
        }
        .form .input42{
            border:1px solid black;
            position:relative;
            left: 136px;
            width:300px;
            top: 3px;
        }
        .form .input43{
            border:1px solid black;
            position:relative;
            left: 136px;
            width:60px;
            top: 0px;
        }
        .form .input44{
            border:1px solid black;
            position:relative;
            left: 170px;
            width:300px;
            top: 3px;
        }
        

        
        .form .submit{
            color: white;
            background-color:#ffcc01;
            border-color:#ffcc01;
            padding:10px;
            border-radius:30px;
            margin-bottom:20px;
        }
        .form .submit:hover{
            color: #ffcc01;
            background-color:black;
            
            padding:10px;
            border-radius:30px;
            margin-bottom:20px;
        }
        input[type="file"]{
            display:none;
        }
        .form .image-label{
            position:relative;
            left:220px;
            top:10px;
            display:inline-block;
            text-transform:uppercase;
            color:#fff;
            background:#ffcc01;
            text-align:center;
            padding:15px 40px;
            font-size:18px;
            letter-spacing:1.5px;
            user-select:none;
            cursor:pointer;
            box-shadow: 5px 15px 25px rgba(0,0,0,0.35);
            border-radius: 3px;
        }
        .form .image-label i{
            font-size:20px;
            margin-right: 10px;
        }
        .form .image-label:active{
            transform: scale(0.9);
        }
        .form .center{
            display:flex;
            align-items:center;
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
                                        <li><a href="usedequipment.html">Used Equipment</a></li>
                                        <li><a href="Machines.html">Machines</a></li>
                                        <li><a href="category.html">Category</a></li>
                                        <li>Details form</li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li ><a href="index.html">Home</a></li>
                                <li class="current "><a href="UsedEquipment.html">Used Equipment</a></li>
                                <li><a href="contact.html">Contact</a></li>
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
                                <li><a href="UsedEquipment.html">Used Equipment</a></li>
                                <li class="current "><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
    
    </header>
    <!--End Main Header -->
<div class="flex1">
    <div class="form" >
        <form class="form-section" action="" method="post" autocomplete="off" enctype="multipart/form-data">
            <div>
                <h3 style="border-bottom: 2px solid black;margin-bottom:20px;">Main data</h3>
            </div>
            <label for="name">Brand :</label>
            <select name="name" id="name" class="input" required>
                <option value="Choose">Choose..</option>
                <option value="American">AMERICAN</option>
                <option value="Bendini">BENDINI</option>
                <option value="Coles">COLES</option>
                <option value="Cormach">CORMACH</option>
                <option value="Demag">DEMAG</option>
                <option value="EFFER">EFFER</option>
                <option value="FAUN">FAUN</option>
                <option value="FERRARI">FERRARI</option>
                <option value="Fassi">FASSI</option>
                <option value="GOTTWAY">GOTTWAY</option>
                <option value="Grove">GROVE</option>
                <option value="HIAB">HIAB</option>
                <option value="HMF">HMF</option>
                <option value="IFA">IFA</option>
                <option value="Kato">KATO</option>
                <option value="Kobelco">KOBELCO</option>
                <option value="Komatsu">KOMATSU</option>
                <option value="Krupp">KRUPP</option>
                <option value="LINK-BELT">LINK-BELT</option>
                <option value="LOCATELLI">LOCATELLI</option>
                <option value="LORAIN">LORAIN</option>
                <option value="LIEBHERR">LIEBHERR</option>
                <option value="Lokomo">LOKOMO</option>
                <option value="Luna">LUNA</option>
                <option value="MAEDA">MAEDA</option>
                <option value="MANITOWOC">MANITOWOC</option>
                <option value="MARCHETTI">MARCHETTI</option>
                <option value="MKG">MKG</option>
                <option value="P&H">P&H</option>
                <option value="PINGUELY">PINGUELY</option>
                <option value="PPM">PPM</option>
                <option value="Palfinger">Palfinger</option>
                <option value="SPIERINGS">SPIERINGS</option>
                <option value="Sany">SANY</option>
                <option value="Sennebogen">SENNEBOGEN</option>
                <option value="Tadano">TADANO</option>
                <option value="Tadano Faun">TADANO FAUN</option>
                <option value="Terex">TEREX</option>
                <option value="XCMG">XCMG</option>
                <option value="Zoomlion">ZOOMLION</option>
                
            </select>
             <br>


            <label for="model">Model :</label>
            <input type="text" name="model" id="name"  required value="" class="input0"> <br>


            <label for="code">Code :</label>
            <input type="text" name="code" id="code" required value="" class="input1"> <br>


            <label for="year">YOR :</label>
            <input type="text" name="year" id="year" required value="" class="input2"> <br>

            <label for="capacity">Max. Lifting Capacity (TON) :</label>
            <input type="text" name="capacity" id="capacity" required value=""class="input3" > <br>

            <label for="Serial">Serial Number :</label>
            <input type="text" name="Serial" id="Serial" required value=""class="input4" > <br>

            <label for="price">Price :</label>
            <input type="text" name="price" id="price" required value="Price on request" class="input5">
            <select name="price" id="price" class="input43">
                
                <option value="USD">USD</option>
                <option value="Euro">Euro</option>
            </select>
           <br><br>

            <div>
                <h3 style="border-bottom: 2px solid black;margin-bottom:20px;">Data chassis</h3>
            </div>
            <label for="Truck">Truck Chassis Type / Width :</label>
            <input type="text" name="Truck" id="Truck" value=""class="input6" > <br>


            <label for="Carrier">Carrier Cabin  :</label>
            <select name="Carrier" id="Carrier" class="input7" required>
                <option value="Choose">Choose..</option>
                <option value="Wide">Wide</option>
                <option value="Narrow">Narrow</option>
            </select>
             <br>


            <label for="Aircondition">Aircondition   :</label>
            <select name="Aircondition" id="Aircondition" class="input8" required>
                <option value="Choose">Choose..</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
            <br>


            <label for="Engine">Engine (Make/Type) / Hp / KW   :</label>
            <input type="text" name="Engine" id="Engine" value=""class="input9" > <br>


            <label for="exhaust">Engine Exhaust-Stage   :</label>
            <input type="text" name="exhaust" id="exhaust" value=""class="input10" > <br>


            <label for="Gearbox">Gearbox Manufacturer / Type   :</label>
            <input type="text" name="Gearbox" id="Gearbox" value=""class="input11" > <br>


            <label for="Crane">Crane Driveable From  :</label>
            <input type="text" name="Crane" id="Crane" value=""class="input12" > <br>


            <label for="Eddy">Eddy Current Brake   :</label>
            <input type="text" name="Eddy" id="Eddy" value=""class="input13" > <br>


            <label for="Drive">Drive And Steering    :</label>
            <input type="text" name="Drive" id="Drive" value=""class="input14" > <br>


            <label for="axle">Type Of Axle Suspension    :</label>
            <input type="text" name="axle" id="axle" value=""class="input15" > <br>


            <label for="Size">Size Of Wheels    :</label>
            <input type="text" name="Size" id="Size" value=""class="input16" > <br>


            <label for="Sparewheel">Sparewheel    :</label>
                <select name="Sparewheel" id="Sparewheel" class="input17" required>
                    <option value="Choose">Choose..</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
             <br>


            <label for="Controlled">Controlled Support From   :</label>
            <input type="text" name="Controlled" id="Controlled" value=""class="input18" > <br>


            <label for="Support">Support Basis L/W   :</label>
            <input type="text" name="Support" id="Support" value=""class="input19" > <br>


            <label for="Tackle">Tackle Box At Rear Of Carrier   :</label>
            <select name="Tackle" id="Tackle" class="input20">
                <option value="Tackle">Choose..</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
             <br>


            <label for="TÜV">TÜV / SP-Acceptance Validity   :</label>
            <input type="date" name="TÜV" id="TÜV" value=""class="input21" > <br>


            <label for="Mileage">Mileage   :</label>
            <input type="text" name="Mileage" id="Mileage" value=""class="input22" > <br>


            <label for="Working">Working Hours   :</label>
            <input type="text" name="Working" id="Working" value=""class="input23" > <br>


            <div>
                <h3 style="border-bottom: 2px solid black;margin-bottom:20px;">Data Superstructure</h3>
            </div>
            <div class="center">
                <label for="Working">Tele. Boom / Boom  Sections  :</label>
                <input type="text" name="Working" id="Working" value=""class="input24" > <br>
            </div>

            <label for="Guyed">Guyed Tele. Boom  :</label>
            <input type="text" name="Guyed" id="Guyed" value=""class="input25" > <br>

            <label for="Swing">Swing Jip  :</label>
            <select name="Swing" id="Swing" class="input44">
                <option value="Choose">Choose..</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
            <br>

            <label for="Fixed">Fixed Fly Jib / Adapter  :</label>
            <input type="text" name="Fixed" id="Fixed" value=""class="input26" > <br>

            <label for="Luffing">Luffing Fly Jib / Lattice Fly Jib  :</label>
            <input type="text" name="Luffing" id="Luffing" value=""class="input27" > <br>

            <label for="Rooster">Rooster Sheave   :</label>
            <input type="text" name="Rooster" id="Rooster" value=""class="input28" > <br>

            <label for="winches">No. Of Winches  :</label>
            <input type="text" name="winches" id="winches" value=""class="input29" > <br>

            <label for="Winch">Winch 1 Cable Pull / Cable Ø  :</label>
            <input type="text" name="Winch" id="Winch" value=""class="input30" > <br>

            <label for="cable">Winch 2 Cable Pull / Cable Ø   :</label>
            <input type="text" name="cable" id="cable"  value=""class="input31" > <br>

            <label for="make">Engine (Make/Type) / Hp / KW  :</label>
            <input type="text" name="make" id="make"  value=""class="input32" > <br>

            <label for="stage">Engine Exhaust-Stage :</label>
            <input type="text" name="stage" id="stage"  value=""class="input33" > <br>
            
            <label for="hook">Hookblocks / Crane Hook (t)  :</label>
            <input type="text" name="hook" id="hook"  value=""class="input34" > <br>

            <label for="t">Counterweight (t)  :</label>
            <input type="text" name="t" id="t"  value=""class="input35" > <br>
            
            <label for="limitation">Working Area Limitation   :</label>
                <select name="limitation" id="limitation" class="input36" required>
                    <option value="Choose">Choose..</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            <br>

            <label for="indicator">Wind Speed Indicator :</label>
            <select name="indicator" id="indicator" class="input37" required>
                    <option value="Choose">Choose..</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
             <br>

            <div class="center">
                <label for="electrically">Working Floodlights (Xenon) <br> At Pivot Section Electrically Adjustable:</label>
                <select name="electrically" id="electrically" class="input38" required>
                    <option value="Choose">Choose..</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                 <br>
            </div>
            <label for="Aircondition2">Aircondition :</label>
            <select name="Aircondition2" id="Aircondition2" class="input39" required>
                <option value="Choose">Choose..</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
             <br>

            <label for="load">Safe Load Indicator  :</label>
            <input type="text" name="load" id="load"  value=""class="input40" > <br>

            <label for="acceptance">UVV-Acceptance Validity   :</label>
            <input type="date" name="acceptance" id="acceptance"  value=""class="input41"> <br>

            <label for="hours">Working Hours   :</label>
            <input type="text" name="hours" id="hours"  value=""class="input42" > <br>

            <label for="image">Image :</label>
            <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png " value=""> 
            <label for="image" class="image-label"><i class="fa-solid fa-upload"></i> Upload File</label><br> 


            <button type="submit" name="submit" class="submit">Submit</button>
            <br>
            <a href="data.php">Data</a>
        </form>
    </div>
</div>
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
</div>
</body>
</html>