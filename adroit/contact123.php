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
error_reporting(error_reporting() & -E_NOTICE);


$name_t = $email_u = $subject = $phno = $msg = "";
?>

<?PHP
error_reporting(error_reporting() & -E_NOTICE);

if(isset($_POST['submit'])){							


    $sql = "INSERT INTO myquiz.contact(name,email,subject,phno,msg)
	values ('$name_t','$email_u','$subject','$phno','$msg')";
	if ($conn->query($sql) === TRUE) {
									
			   echo"Registration Sucessful";                     
	}else{
	echo "error3";
	}	
				

	}	
    else{
        $name_t = $email_u = $subject = $phno = $msg = "";
        $name_t = $_POST['name_t'];
	$subject = $_POST['subject'];
	$email_u = $_POST['email_u'];
	$phno = $_POST['phno'];
	$msg =$_POST['msg'];

    $sql = "INSERT INTO myquiz.contact(name,email,subject,phno,msg)
	values ('$name_t','$email_u','$subject','$phno','$msg')";
	if ($conn->query($sql) === TRUE) {
		echo '<script> alert("Contacted Successfully !!")</script>';

		echo '<script> window.location = "http://localhost/user/adroit/homepage.php";</script>';					
        
        
        
            
                   
	}
    
    }


?>
