
	<?php 
	session_start();
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
	
	
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>AdroIt</title>
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
	ul {
		list-style-type: none;
		margin: 0;
		padding: 20;
		overflow: hidden;
		background-color:darkslategrey;
		height: 60px;
	  }
	  
	  li {
		float: left;
		border-right:1px solid #bbb;
	  }
	  
	  li:last-child {
		border-right: none;
	  }
	  
	  li a {
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		height: 60px;
		font-size: 23px;
		font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
	  }
	  
	  li a:hover:not(.active) {
		background-color:lavender;
		color: orange;
	  }
	  
	  .active {
		background-color: orange;
	  }
	  </style>
</head>
<body>

	<ul>
		<li><a href="homepage.php">Home</a></li>
		<li style="float:right"><a href="../admin/adminlogin.php"><i class ="fa fa-lock"></i></a></li>
		<li style="float:right"><a class="active" href="login.php"><i class ="fa fa-sign-in" ></i>  Login</a></li>
		<li style="float:right"><a href="register 1.php"><i class ="fa fa-user-plus" ></i>  Register</a></li>
		
	  </ul>
	
<!-- partial:index.partial.html -->
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" ><br>
			<h4><img src="favicon.png" alt="Logo" width="30"> Welcome Back!</h4><br>
					
					<div><label for="username">UserName</label></div>				
			<input name="username_u" id="username" type="text" placeholder="Enter UserName" maxlength="50">
					
					
					<div><label for="userPass">Password</label></div>
			<input name="password_u" id="userPass" type="password" placeholder="Enter password" maxlength="20" pattern=".{6,20}"  title="6 to 20 characters">
						
						
						<div style="color:rgb(139, 139, 139);"><label for="username">Not a member yet?</label><a href="register 1.php">  Register Here.</a>	</div>
			<br><input class="button" type="submit" value="Login" name="login">	


			<div class="alert alert-danger" id="failure" style = "margin-top:100px; margin-left:-10px; color:red; display:none">
  <strong> Does not match! Invalid Username or Password : ( </strong>
                             </div>
			
		  </form>


<!-- partial -->
  <script  src="./script.js"></script>


  <?php
    if(isset($_POST["login"]))
{
	$username_u = $_POST['username_u'];
	$password_u =$_POST['password_u'];


    $count = 0;
    $res = mysqli_query($conn,"select * from myquiz.registration where username = '$_POST[username_u]' && password = '$_POST[password_u]'");
    $count = mysqli_num_rows($res);


      if($count == 0)
      {
          ?>
        <script type = "text/javascript">
        document.getElementById("failure").style.display="block";
        </script>
        <?php
      }
       else {
           $_SESSION["username_u"] = $_POST["username_u"];
		   
           ?>
           <script type = "text/javascript">
           window.location = "intro/html/introduction.php";
           </script>
           <?php
       }
}
?>

</body>
</html>
