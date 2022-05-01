<html>
<head>
    <style>
body {
 
    background: radial-gradient( white 60%,   #B9A8FB );
}

#search {
    width: 10em;  height: 2.5em;
    background-color: #5991F7 ;
    color: white;
    font-size: 20px;
}

.txt{
	width: 70%;
	height: 5%;
	border: 1px solid brown;
	border-radius: 05px;
	padding: 20px 15px 20px 15px;
	margin: 10px 0px 15px 0px;

}

select{
	width: 42%;
	border: 1px solid brown;
	border-radius: 05px;
	box-shadow: 1px 1px 2px 1px grey;
	padding: 10px 15px 10px 15px;
	font-size:20px;
}

#category 
{
    width:25em;
    height :4em;
    font-size : 18px;
}

table { 
	width: 850px; 
	border-collapse: collapse; 
	margin:50px auto;
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background:   #D1E0FF  ; 
	}

th { 
	background: #030B9B; 
	color: white; 
	font-weight: bold; 
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 20px;
	}


@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table { 
	  	width: 100%; 
	}

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}

	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		/* Label the data */
		content: attr(data-column);

		color:  #B9A8FB ;
		font-weight: bold;
	}


}
        </style>
</head>
<title>Adroit</title>
     <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
<body >
	<div style="background-color: white; margin-top: -10px; margin-left: -10px; margin-right: -4px; height: 100px; ">
		<ul>
 <li style="padding-left: 30px; padding-top: 20px;list-style-type: none;"><img src="logof.png" alt="Logo" width="200;"></li>
<li style="float:right; padding: 20px; margin-right: 15px;position: absolute;top: 20px; right: 60px; font-size:25px;list-style-type: none;"><a href="adroit/intro/html/introduction.php">>>Back</a></li>
</ul>
                         </div>  
<?php
session_start();
include "connection.php";

?>
<br><br>
<form action="<?php $_SERVER['PHP_SELF']; ?> " method="POST">
<center>
<br><br>
<img src="trp.png" style="position: absolute;top:80px; left: 200px; height: 250px;">
<h1 align="center" style="color: white;background-color:#030B9B; font-size: 45px;width: 640px; "> 
  QUIZ SCOREBOARD </h1>
  <img src="trp.png" style="position: absolute;top:80px; left: 1100px; height: 250px;">

<?php 

$sql = "SELECT category FROM exam_category" ;
$res = mysqli_query($link,$sql);
$num = mysqli_num_rows($res);

if ($num != 0) 
{

?>

<label> <h2>Choose a Category <h2> </label>
<select name = "category">
	<option value ="">-- Select -- </options>
	<option value = "All">All</options>
    
	<?php

while ($row = mysqli_fetch_assoc($res)) {
?>

	<option value ="<?php echo $row["category"]; ?>"> <?php echo $row["category"]; ?> 
</options>

	<?php
}
}

?>
	
</select>

<input type = "submit" name = "submit" value = "Submit" id = "search">

</center>
 </form>





<table>
<tr> 
        <th>Sr. No</th>
		<th>Username</th>
		<th>Quiz Type</th>
        <th>Total Questions</th>
		<th>Correct Answer</th>
        <th>Wrong Answer</th>
        <th>Quiz Date</th>
		
	</tr>

    <?php
   // $exam_type="";
    $category = "";
    if( isset($_POST['category'])) {
        $category=$_POST['category'];
    }
    $count = 1;

/* DISPLAYING ALL RESULTS */

 if($category == 'All')
 {
 	$sql= "SELECT * from exam_results ORDER BY correct_answer DESC";
 	$result = mysqli_query($link, $sql) or die(mysqli_error($link));
											while($row = mysqli_fetch_assoc($result))
                                            {
                                                echo "<tr>";
                                                echo "<td>"; echo $count; echo "</td>"; 
                                                    $count++;
                                                echo "<td>"; echo $row["username"]; echo "</td>";
                                                echo "<td>"; echo $row["exam_type"]; echo "</td>";
                                                echo "<td>"; echo $row["total_question"]; echo "</td>";
                                                echo "<td>"; echo $row["correct_answer"]; echo "</td>";
                                                echo "<td>"; echo $row["wrong_answer"]; echo "</td>";
                                                echo "<td>"; echo $row["exam_time"]; echo "</td>";
                                                echo "</tr>";

                                            }

 }
 /* CHOOSING FROM THE SELECTED CATEGORY */
else{

$sql = "SELECT * from exam_results where exam_type = '$category'";

											
											$result = mysqli_query($link, $sql) or die(mysqli_error($link));
											while($row = mysqli_fetch_assoc($result))
                                            {
                                                echo "<tr>";
                                                echo "<td>"; echo $count; echo "</td>"; 
                                                    $count++;
                                                echo "<td>"; echo $row["username"]; echo "</td>";
                                                echo "<td>"; echo $row["exam_type"]; echo "</td>";
                                                echo "<td>"; echo $row["total_question"]; echo "</td>";
                                                echo "<td>"; echo $row["correct_answer"]; echo "</td>";
                                                echo "<td>"; echo $row["wrong_answer"]; echo "</td>";
                                                echo "<td>"; echo $row["exam_time"]; echo "</td>";
                                                echo "</tr>";

                                            }
                                        }

?>
</table>
                                        </body>
</html>