<html>
<head>
    <style>
body {
    background-color :#fff;
}

table { 
	width: 750px; 
	border-collapse: collapse; 
	margin:50px auto;
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #3498db; 
	color: white; 
	font-weight: bold; 
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 18px;
	}

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
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

		color: #000;
		font-weight: bold;
	}

}
        </style>
</head>
<body>

<?php
session_start();
include "connection.php";

?>

<form action="<?php $_SERVER['PHP_SELF']; ?> " method="POST">
<label>Select Category </label>
<input name="exam_type"  type="text" placeholder="Select Category">
<br>
<br>
<input type = "submit" name = "submit" value = "Submit">
 </form>



<table>
<tr> 
        <th>Sr. No</th>
		<th>Username</th>
		<th>Quiz Type</th>
        <th>Total Questions</th>
		<th>Correct Answer</th>
        <th>Wrong Answer</th>
        <th>Exam Time</th>
		
	</tr>

    <?php
    $exam_type="";
    
    if( isset($_POST['exam_type'])) {
        $exam_type=$_POST['exam_type'];
    }
    $count = 1;
$sql = "SELECT * from exam_results where exam_type = '$exam_type'";

											
											$result = mysqli_query($link, $sql) or die(mysqli_error($link));
											while($row = mysqli_fetch_assoc($result))
                                            {
                                                echo "<tr>";
                                                echo "<td>"; echo $count; echo "</td><br>"; 
                                                    $count++;
                                                echo "<td>"; echo $row["username"]; echo "</td>";
                                                echo "<td>"; echo $row["exam_type"]; echo "</td>";
                                                echo "<td>"; echo $row["total_question"]; echo "</td>";
                                                echo "<td>"; echo $row["correct_answer"]; echo "</td>";
                                                echo "<td>"; echo $row["wrong_answer"]; echo "</td>";
                                                echo "<td>"; echo $row["exam_time"]; echo "</td>";
                                                echo "</tr>";

                                            }

?>
</table>
                                        </body>
</html>