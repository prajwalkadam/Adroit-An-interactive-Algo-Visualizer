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
		<li style="float:right"><a href="login.php"><i class ="fa fa-sign-in" ></i> Login</a></li>
		<li style="float:right"><a class="active" href="register 1.php"><i class ="fa fa-user-plus" ></i>  Register</a></li>
		
	  </ul>

	
<!-- partial:index.partial.html -->

<?php 

$name = "";
$lastname = "";
$username_u = "";
$gender = "";
$date = "";
$email = "";
$contact_number = "";
$password_u ="";
$birthday = "";

	if(isset($_POST['submit'])){							
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$username_u = $_POST['username_u'];
	$gender = $_POST['gender'];
	$birthday = $_POST['birthday'];
	$email = $_POST['email'];
	$contact_number = $_POST['contact_number'];
	$password_u =$_POST['password_u'];
                       
	$check = "";
	$check=mysqli_query($conn,"SELECT * FROM myquiz.registration where username = '$username_u'");

	if (mysqli_num_rows($check) > 0) {
    
		echo '<script> alert(" Already Registered. Please login  ")</script>';
		
	}
	
	else {

		
		$sql = "INSERT INTO myquiz.registration(firstname,lastname,username,gender,birthday,password,email,contact)
		values ('$name','$lastname','$username_u','$gender','$birthday','$password_u','$email','$contact_number')";

       if ($conn->query($sql) == TRUE)

		echo '<script> alert("Registered Successfully")</script>';		
	}				

	}				
		

?>



<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" >

			<h4><img src="favicon.png" alt="Logo" width="30"> Register Here</h4>


			  	<div><label>FirstName</label></div>
				<input name="name" id="username" type="text" pattern="[A-Za-z]{1,50}" placeholder="Enter Firstname" title="Firstname can not contain numbers">
			 		
					 
				<div><label>Lastname</label></div>
				<input name="lastname" id="userLastname" type="text" pattern="[A-Za-z]{1,50}" placeholder="Enter Lastname" title="Lastname can not contain numbers">
			  
				<div><label>Username</label></div>
				<input name="username_u" id="username" type="text" placeholder="Enter Username"  > 

				<div><label>Gender</label></div>
			  		<span class="gend">
							Male<input type="radio" name="gender" value="Male"  checked="checked">
							Female<input type="radio" name="gender" value="Female" >	
							Other<input type="radio" name="gender" value="Other"  >			
			  		</span>
				  
				<div><label>Birthday</label></div>
				<input type="date" name="birthday" id="userbday" >			 
					
										
				<div><label>Email Address</label></div>				
				<input name="email" id="useremail" type="email" placeholder="Enter email">
					
					
				<div><label>Contact Number</label></div>
				<input name="contact_number"  type="text" placeholder="Contact Number" maxlength="10"> 
						
				<div><label>Password</label></div>
				<input name="password_u" id="userPass" type="password" placeholder="Enter password" >
						
				<span id="info"></span>
						<div style="color:rgb(139, 139, 139);"><label for="username">Already a member?</label><a href="index2.html">  Login.</a>	</div>


			<div style="color:rgb(139, 139, 139);">
	
			
			<input class="button" type="submit" value="Send" name="submit">

			<div class="alert alert-success" id="success" style = "margin-top:100px; margin-left:-10px; color:red; display:none">
  <strong> successful : ( </strong>
                             </div>
			
		  </form>

 

</body>
</html>
