<html>
<head>
    <style>
body {
 
    background: linear-gradient(to top right, #9999ff 0%, #ffccff 100%);
}

#search {
    width: 10em;  height: 3.0em;
    background: linear-gradient(to top right, #33ccff 0%, #ff99cc 100%);
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
	width: 46%;
	border: 1px solid brown;
	border-radius: 05px;
	box-shadow: 1px 1px 2px 1px grey;
	padding: 10px 15px 10px 15px;
}

#category 
{
    width:25em;
    height :4em;
    font-size : 20px;
}

table { 
	width: 850px; 
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
<li style="float:right; padding: 20px; margin-right: 15px; font-size:25px"><a href="http://localhost/user/sc.php"><i class ="fa fa-user-plus" ></i> >>Back</a></li>

<br><br>
<center>
 <h1> 
&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; All Quiz Results</h1>  
</center>

<?php
include "connection.php";
             $count = 0;
            $res = mysqli_query($link,"select * from exam_results order by id desc");
            $count = mysqli_num_rows($res);

            if($count == 0)
            {
                ?>
 <center>
            <h1> No Results Found </h1>
            </center>
                <?php
            }
else{

    echo "<table class = 'table table-bordered'>";
echo "<tr style = 'background-color:#cc99ff'>";
echo "<th>"; echo "username"; echo "</th>";
echo "<th>"; echo "exam_type"; echo "</th>";
echo "<th>"; echo "total_questions"; echo "</th>";
echo "<th>"; echo "correct_answer"; echo "</th>";
echo "<th>";  echo "wrong_answer"; echo "</th>";
echo "<th>"; echo "exam time"; echo "</th>";
echo "</tr>";

while($row = mysqli_fetch_array($res))
{
    echo "<tr>";
    echo "<td>"; echo $row["username"]; echo "</td>";
    echo "<td>"; echo $row["exam_type"]; echo "</td>";
    echo "<td>"; echo $row["total_question"]; echo "</td>";
    echo "<td>"; echo $row["correct_answer"]; echo "</td>";
    echo "<td>"; echo $row["wrong_answer"]; echo "</td>";
    echo "<td>"; echo $row["exam_time"]; echo "</td>";
    echo "</tr>";

}


    echo "</table>";
}
             ?>



</table>
                                        </body>
</html>