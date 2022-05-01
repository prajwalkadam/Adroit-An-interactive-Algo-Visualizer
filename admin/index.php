    <?php 
    session_start();
include "../connection.php";
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo" style = "color:white">
                    ADMIN LOGIN
                </div>
                <div class="login-form">
                    <form name = "form1" action = "" method = "post">
                    <form>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name = "username" class="form-control" placeholder="Username" required>
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name = "password" class="form-control" placeholder="Password" required>
                        </div>
                               
                                <button type="submit" name = "submit1" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                                <div class="alert alert-danger" id = "errormsg" style = "margin-top:15px; display : none">
  <strong>Invalid!</strong> Invalid Username or Password!
</div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>

<?php
if(isset($_POST["submit1"]))
{
    $count = 2;
    $username = mysqli_real_escape_string($link,$_POST["username"]);
  // mmysqli_real_escape_srting is used cause it will prevent from injections
  $password = mysqli_real_escape_string($link,$_POST["password"]);

  $res = mysqli_query($link,"select * from admin_login where username = '$username' && password = '$password'");

  $count = mysqli_num_rows($res);

  if($count == 0)
  {
      ?>
        <script type = "text/javascript">
        document.getElementById("errormsg").style.display="block";   
        </script> 

      <?php

  }

  else{
      $_SESSION["admin"]=$username;
      ?>
 <script type = "text/javascript">
        window.location="exam_category.php"   
        
        </script> 
<?php
  }
}
?>