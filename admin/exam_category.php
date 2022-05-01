<?php
session_start();
 include "header.php";
 include "../connection.php";
 if(!isset($_SESSION["admin"]))
{
    ?>
<script type = "text/javascript">
window.location="index.php";
</script>
    <?php
}
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
    padding: 9px;
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

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Quiz Categories</h1>
                    </div>
                </div>
            </div>
          
          
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                        
                        <form name = "form1" action = "" method = "post">

                            <div class="card-body">

                            <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header" style="background-color:lightgrey;"><strong>Add Quiz  Categories</strong><small></small></div>
                                <div class="card-body card-block">
                                    <div class="form-group"><label for="company" class=" form-control-label">New Quiz Category</label><input type="text" name = "examname" placeholder="Enter your Quiz category" class="form-control"></div>
                                        <div class="form-group"><label for="vat" class=" form-control-label">Quiz Time In Minutes</label><input type="text" name = "examtime" placeholder="Quiz Time In Minutes" class="form-control"></div>
                                            
                                        <div class="form-group"> 
                                      <input type = "submit" name = "submit1" value = "Add Category" class = "btn btn-success"> 

                                        </div>
                                                </div>
                                            </div>

                            </div>


                            <div class="col-lg-6">
                        <div class="card" >
                            <div class="card-header" style="background-color:lightgrey;">
                                <strong class="card-title">Quiz Categories</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" style = "font-size:20px;">#</th>
                                            <th scope="col" style = "font-size:20px;">Quiz Name</th>
                                            <th scope="col" style = "font-size:20px;">QuizTime</th>
                                            <th scope="col" style = "font-size:20px;">Edit</th>
                                            <th scope="col" style = "font-size:20px;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count = 0;
                                $res = mysqli_query($link,"select * from exam_category");
                                while($row=mysqli_fetch_array($res))
                                {
                                    $count = $count+1;
                                        ?>
                                         <tr>
                                            <th scope="row" style = "font-size:20px;"><?php  echo $count; ?></th>
                                            <td style = "font-size:20px;"><?php echo $row["category"]; ?></td>
                                            <td style = "font-size:20px;"><?php echo $row["exam_time_in_minutes"]; ?></td>
                                            <td style = "font-size:20px;"><a href = "edit_exam.php?id=<?php echo $row["id"]; ?>"><i class="action-button shadow animate green">Edit</a></i></td>
                                            <td style = "font-size:20px;"><a href = "delete.php?id=<?php echo $row["id"]; ?>"><i class="action-button shadow animate red"> Delete </a></i></td>
                                        </tr>
                                        <?php

                                }
                                ?>
                                       

                                       
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


</form>


                        </div>  

                    </div>
                    <!--/.col-->



                                               
                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->

<?php
  
  if(isset($_POST["submit1"]))
  {
     mysqli_query($link,"insert into exam_category values(NULL,'$_POST[examname]','$_POST[examtime]')") or die(mysqli_error($link)); 

     ?>
<script type = "text/javascript">
    alert("Quiz Category added successfully");
    window.location.href = window.location.href;
  </script>

<?php

  }

?>

                             <?php
                             include "footer.php";
                       ?>