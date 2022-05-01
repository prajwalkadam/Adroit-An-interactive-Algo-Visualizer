<?php

error_reporting(E_ALL & ~E_NOTICE);
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

if(isset($_POST['submit1'])) {
    						
	$name_t = $_POST['name_t'];
	$subject = $_POST['subject'];
	$email_u = $_POST['email_u'];
	$phno = $_POST['phno'];
	$msg =$_POST['msg'];

    $sql = "INSERT INTO myquiz.contact(name,email,phone,subject,message)
	values ('$name_t','$email_u','$phno','$subject','$msg')";
	if ($conn->query($sql) == TRUE) {
									
			   echo"Registration Sucessful";                     
	}
}
    else
    {

    $name_t = $email_u = $subject = $phno = $msg = "";							
	$name_t = $_POST['name_t'];
	$subject = $_POST['subject'];
	$email_u = $_POST['email_u'];
	$phno = $_POST['phno'];
	$msg =$_POST['msg'];

    $sql = "INSERT INTO myquiz.contact(name,email,phone,subject,message)
	values ('$name_t','$email_u','$phno','$subject','$msg')";
	/*if ($conn->query($sql) == TRUE) 
				{	*/				
        echo '<script> alert("Contacted Successfully")</script>';	
               // }
	
    /*else {
        echo '<script> alert("Contacted Successfully")</script>';	    
        
    }*/
}
?>