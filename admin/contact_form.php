<?php
session_start();
include "header.php";
include "../connection.php";

?>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");

 .animate
{
	transition: all 0.1s;
	-webkit-transition: all 0.1s;
}

.action-button
{

	position: relative;
	padding: 5px 20px;
  margin: 0px 10px 10px 0px;
  float: left;
	border-radius: 10px;
	font-family: "Poppins", sans-serif;
	font-size: 15px;
	color: #FFF;
	text-decoration: none;	
}

.red
{
	background-color: #E74C3C;
	border-bottom: 5px solid #BD3E31;
	
}

.green
{
	background-color: #82BF56;
	border-bottom: 5px solid #669644;
	
}
.action-button:active
{
	transform: translate(0px,5px);
  -webkit-transform: translate(0px,5px);
	border-bottom: 1px solid;
}

    </style>
<title>Adroit</title>
     <link rel="shortcut icon" href="favicon.png" type="image/x-icon"> 

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Contact Form Results</h1>
                    </div>
                </div>
            </div>
           
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            
                            <div class="card-body">
                            <br><br>
            <center>
            <h1> Contact Form Results </h1><br> 
            </center>
             <?php
             $count = 0;
            $res = mysqli_query($link,"select * from contact");
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
echo "<tr style = 'background-color:black;color:white;'>";
echo "<th>"; echo "Name"; echo "</th>";
echo "<th>"; echo "Email"; echo "</th>";
echo "<th>"; echo "Phone"; echo "</th>";
echo "<th>"; echo "Subject"; echo "</th>";
echo "<th>";  echo "Message"; echo "</th>";
echo "<th>";  echo "Delete"; echo "</th>";
echo "<th>";  echo "Mail"; echo "</th>";
echo "</tr>";

while($row = mysqli_fetch_array($res))
{
    echo "<tr>";
    echo "<td>"; echo $row["name"]; echo "</td>";
    echo "<td>"; echo $row["email"]; echo "</td>";
    echo "<td>"; echo $row["phno"]; echo "</td>";
    echo "<td>"; echo $row["subject"]; echo "</td>";
    echo "<td>"; echo $row["msg"]; echo "</td>"; ?>
    
     <td><a href = "deletecon.php?id=<?php echo $row["id"]; ?>" class="action-button shadow animate red"> Delete</a></div></td>
     <td><a href = "emailcom.php?id=<?php echo $row["id"]; ?>"class="action-button shadow animate green" > Email  </a></div></td>
    <?php echo "</tr>";
}


    echo "</table>";
}
             ?>
                                
                            </div>
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->

                    
</div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->
<?php
include "footer.php";
?>