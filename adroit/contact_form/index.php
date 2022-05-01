<!doctype html>
<html lang="en">
<title>AdroIT</title>
    

    <link rel="shortcut icon" href="favicon.png" type="image/png">
  <head>
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!--====== Slick css ======-->
<link rel="stylesheet" href="css/slick.css">

<!--====== Animate css ======-->
<link rel="stylesheet" href="css/animate.css">

<!--====== Nice Select css ======-->
<link rel="stylesheet" href="css/nice-select.css">

<!--====== Nice Number css ======-->
<link rel="stylesheet" href="css/jquery.nice-number.min.css">

<!--====== Magnific Popup css ======-->
<link rel="stylesheet" href="css/magnific-popup.css">

<!--====== Bootstrap css ======-->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!--====== Fontawesome css ======-->
<link rel="stylesheet" href="css/font-awesome.min.css">

<!--====== Default css ======-->
<link rel="stylesheet" href="css/default.css">

<!--====== Style css ======-->
<link rel="stylesheet" href="css/style.css">

<!--====== Responsive css ======-->
<link rel="stylesheet" href="css/responsive.css">
  <style>

.container{
	background-color :rgb(253, 255, 157);
	box-shadow: 1px 1px 2px 1px grey;
	padding: 50px 8px 20px 38px;
	
	height: 30%;
	margin-left:35%; 
    position: relative;
    width: 0%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;

}
.content {
    background-color :#edf0f2;  
}

.a {
    color :#000000;
}


      </style>

<body>
   
   <!--====== PRELOADER PART START ======-->
   
   <div class="preloader">
       <div class="loader rubix-cube">
           <div class="layer layer-1"></div>
           <div class="layer layer-2"></div>
           <div class="layer layer-3 color-1"></div>
           <div class="layer layer-4"></div>
           <div class="layer layer-5"></div>
           <div class="layer layer-6"></div>
           <div class="layer layer-7"></div>
           <div class="layer layer-8"></div>
       </div>
   </div>
   
   <!--====== PRELOADER PART START ======-->
   
   <!--====== HEADER PART START ======-->
   
   <header id="header-part" style="background-color:lavender">
       
       <div class="navigation navigation-2">
        
               <div class="row no-gutters">
                   <div class="col-lg-11 col-md-10 col-sm-9 col-9">
                       <nav class="navbar navbar-expand-lg">
                           <a class="navbar-brand" href="index.html">
                               <img src="logof.png" alt="Logo" width="200">
                           </a>
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                           </button>

                           <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                               <ul class="navbar-nav ml-auto">
                                   <li class="nav-item" >
                                       <a class="active" style = "color:#000000; font-size:20px;" href="http://localhost/user/adroit/homepage.php"><br>HOME</b></a>
                                   </li>
                                
                               </ul>
                           </div>
                       </nav> <!-- nav -->
                   </div>
        
                   </div>
               </div> <!-- row -->
           </div> <!-- container -->
       </div>
       
   </header>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css1">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

   
  </head>
  
  

  <div class="content">
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          

          <div class="row justify-content-center">
            <div class="col-md-6">
              
              <h2 class="heading mb-4">CONTACT US</h2>
              <p></p>

              <p><img src="images/undraw-contact.svg" alt="Image" class="img-fluid"></p>


            </div>
            <div class="col-md-6">
              
              <form class="mb-5" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" >
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea class="form-control" name="message" id="message"  placeholder="Write your message"></textarea>
                  </div>
                </div>  
                <div class="row">
                  <div class="col-12">
                    <input type="submit" value="Send Message" name = "submit" class="btn btn-primary rounded-0 py-2 px-4">
                 
                  </div>
                </div>
              </form>

              <div id="form-message-warning mt-4"></div> 
              <div id="form-message-success">
                Your message was sent, thank you!
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
    
    

    <script src="js1/jquery-3.3.1.min.js"></script>
    <script src="js1/popper.min.js"></script>
    <script src="js1/bootstrap.min.js"></script>
    <script src="js1/jquery.validate.min.js"></script>
    <script src="js1/main.js"></script>

  </body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myquiz";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

$name_t = $email_u = $subject = $phno = $msg = "";



if(isset($_POST['submit'])){							
	$name_t = $_POST['name'];
	$subject = $_POST['subject'];
	$email_u = $_POST['email'];
	$msg =$_POST['message'];

    $sql = "INSERT INTO myquiz.contact(name,email,subject,message)
	values ('$name_t','$email_u','$subject','$msg')";
	 if ($conn->query($sql) === TRUE)
{
     echo '<script> alert("Thankyou for Contacting!")</script>';	                
	}else{
	echo "error3";
	}	
				

	}	


?>


<div>
        <div>
        <iframe width="100%" height="500"src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Pune+(Your%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
        </iframe>
        </div> </div>
    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->
    <footer id="footer-part" >
        <div class="footer-top pt-40 pb-70" style="background-color:rgb(238, 237, 237)">
            <div class="container" style="background-color:rgb(129, 92, 202); width:700px; height:200px">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo" style = "text-align:center;">
                                <center>
                                <a href="#"><img src="logof.png" style = "text-align:center;" alt="Logo" width="200" ></a>
        </center>

                            </div>
        </div>
        </div>
        </div>



        
                            <h6 style = "color:#fff;">Interactive Visualizer Website.</h6>
        </div>  
        <p style="color:rgb(129, 92, 202); text-align: center;font-size: 24px;background-color: rgb(238, 237, 237);font-family: 'Courier New'">&copy; Copyright 2021 AdroIT</p>
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
   
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    
    <!--====== jquery js ======-->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    
    <!--====== Nice Select js ======-->
    <script src="js/jquery.nice-select.min.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="js/jquery.nice-number.min.js"></script>
    
    <!--====== Count Down js ======-->
    <script src="js/jquery.countdown.min.js"></script>
    
    <!--====== Validator js ======-->
    <script src="js/validator.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="js/ajax-contact.js"></script>
    
    <!--====== Main js ======-->
    <script src="js/main.js"></script>
    
    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="js/map-script.js"></script>

</body>
</html>
