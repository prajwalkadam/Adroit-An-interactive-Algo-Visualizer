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


$exam_category = '';
$id = $_GET["id"];
$res = mysqli_query($link,"select * from exam_category where id = $id");
 while($row=mysqli_fetch_array($res))
  {
    $exam_category = $row["category"];
  }

 
?>
<title>Adroit</title>
     <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
       <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");

 .animate
{
    transition: all 0.1s;
    -webkit-transition: all 0.1s;
}

.action-button
{


    position: absolute;
    width: 35px;
    padding: 1px ;
  margin: 0px 0px 10px 0px;
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
                        <h1>Add Questions Inside <?php  echo "<font color = 'blue'>".$exam_category; ?></h1>
                    </div>
                </div>
            </div>
           
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                        <form name = "form1" action = "" method = "post" enctype = "multipart/form-data">
                            
                            <div class="card-body">
                            <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header" style="background-color: black;color: white;"><strong>Add New Questions with text</strong><small></small></div>
                                <div class="card-body card-block">
                                    <div class="form-group"><label for="company" class=" form-control-label">Question</label><input type="text" name = "question" placeholder="Add Question" class="form-control" ></div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Option1</label><input type="text" name = "opt1" placeholder="Add Option1" class="form-control" ></div>    
                                    <div class="form-group"><label for="company" class=" form-control-label">Option2</label><input type="text" name = "opt2" placeholder="Add Option2" class="form-control" ></div>    
                                    <div class="form-group"><label for="company" class=" form-control-label">Option3</label><input type="text" name = "opt3" placeholder="Add Option3" class="form-control" ></div>    
                                    <div class="form-group"><label for="company" class=" form-control-label">Option4</label><input type="text" name = "opt4" placeholder="Add Option4" class="form-control" ></div>    
                                    <div class="form-group"><label for="company" class=" form-control-label">Add Answer</label><input type="text" name = "answer" placeholder="Add Answer" class="form-control" ></div>    
                                  
                                            
                                        <div class="form-group"> 
                                      <input type = "submit" name = "submit1" value = "Add Question" class = "btn btn-success"> 

                                        </div>
                                                </div>
                                            </div>

                            

                                
                            </div>



                            <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header" style="background-color: black;color: white;"><strong>Add New Questions with images</strong><small></small></div>
                                <div class="card-body card-block">
                                    <div class="form-group"><label for="company" class=" form-control-label">Question</label><input type="text" name = "fquestion" placeholder="Add Question" class="form-control" ></div>
                                    <div class="form-group"><label for="company" class=" form-control-label">Option1</label><input type="file" name = "fopt1"  class="form-control" style = "padding-bottom:37px"></div>    
                                    <div class="form-group"><label for="company" class=" form-control-label">Option2</label><input type="file" name = "fopt2"  class="form-control" style = "padding-bottom:37px"></div>    
                                    <div class="form-group"><label for="company" class=" form-control-label">Option3</label><input type="file" name = "fopt3"  class="form-control" style = "padding-bottom:37px"></div>    
                                    <div class="form-group"><label for="company" class=" form-control-label">Option4</label><input type="file" name = "fopt4"  class="form-control" style = "padding-bottom:37px"></div>    
                                    <div class="form-group"><label for="company" class=" form-control-label">Add Answer</label><input type="file" name = "fanswer" placeholder="Add Answer" class="form-control" style = "padding-bottom:37px" ></div>    
                                  
                                            
                                        <div class="form-group"> 
                                      <input type = "submit" name = "submit2" value = "Add Question" class = "btn btn-success"> 

                                        </div>
                                                </div>
                                            </div>

                            </div>

                                
                            </div>


                               </form>



                         </div>
                        </div>

                    </div>
                    <!--/.col-->

                    
</div>

                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                        <div class = "card-body">
                        <table class = "table table-bordered">
                        <tr style="background-color: black;color: white;">
                        <th>No</th>
                        <th>Questions</th>
                        <th>Opt1</th>
                        <th>Opt2</th>
                        <th>Opt3</th>
                        <th>Opt4</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </tr>
                       
                       <?php
                        
                        $res = mysqli_query($link,"select * from questions where category = '$exam_category' order by question_no asc");
while($row=mysqli_fetch_array($res))
{
    echo "<tr style='color:#2568BA '>";
    echo "<td>"; echo $row["question_no"]; echo "</td>";
    echo "<td>"; echo $row["question"]; echo "</td>";
    echo "<td>"; 
    if(strpos($row["opt1"],'opt_images/')!==false)
    {
        ?>
        
        <img src = "<?php echo $row["opt1"];?>" height = "50" width = "50">
        <?php
    }
else{
    echo $row["opt1"];
}








    echo "</td>";
    echo "<td>"; 
    if(strpos($row["opt2"],'opt_images/')!==false)
    {
        ?>
        
        <img src = "<?php echo $row["opt2"];?>" height = "50" width = "50">
        <?php
    }
else{
    echo $row["opt2"];
}








    echo "</td>";
    echo "<td>"; 
    if(strpos($row["opt3"],'opt_images/')!==false)
    {
        ?>
        
        <img src = "<?php echo $row["opt3"];?>" height = "50" width = "50">
        <?php
    }
else{
    echo $row["opt3"];
}






     echo "</td>";
    echo "<td>";   
    if(strpos($row["opt4"],'opt_images/')!==false)
    {
        ?>
        
        <img src = "<?php echo $row["opt4"];?>" height = "50" width = "50">
        <?php
    }
else{
    echo $row["opt4"];
}








 echo "</td>";

echo "<td>";
if(strpos($row["opt4"],'opt_images/')!==false)
{
    ?>
    
    <a href = "edit_option_images.php?id=<?php echo $row["id"] ?>&id1=<?php echo $id; ?>"><i class="action-button shadow animate green">Edit</i> Edit </a>
    <?php
}
else{
?>
<a href = "edit_option.php?id=<?php echo $row["id"] ?>&id1=<?php echo $id; ?>"><i class="action-button shadow animate green">Edit</i> </a>


<?php
}

echo "</td>";
echo "<td>";
?>
<a href = "delete_option.php?id=<?php echo $row["id"] ?>&id1=<?php echo $id; ?>"><i class="action-button shadow animate red" style="width:55px;">Delete</i></a></td>
<?php



     echo "</tr>";
}





?>
 </table>
                    <div>
                    </div>
                    </div>
                    </div>





                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                        
                                <?php
  
  if(isset($_POST["submit1"]))
  {
$loop = 0;
$count = 0;
$res = mysqli_query($link,"select * from questions where category = '$exam_category' order by id asc") or die(mysqli_error($link));
$count = mysqli_num_rows($res);
if($count == 0)
{

}
else{
    while($row = mysqli_fetch_array($res))
    {
        $loop = $loop+1;
        mysqli_query($link,"update questions set question_no='$loop' where id = $row[id]");
    }
}

$loop = $loop+1;
mysqli_query($link,"insert into questions values(NULL,'$loop','$_POST[question]','$_POST[opt1]','$_POST[opt2]','$_POST[opt3]','$_POST[opt4]','$_POST[answer]','$exam_category')") or die(mysqli_error($link)); 
?>


<script type = "text/javascript">
 alert = "question added successfully";
 window.location.href = window.location.href;
  </script>
  <?php
  }

  ?>




<?php
  
  if(isset($_POST["submit2"]))
  {
$loop = 0;
$count = 0;
$res = mysqli_query($link,"select * from questions where category = '$exam_category' order by id asc") or die(mysqli_error($link));
$count = mysqli_num_rows($res);
if($count == 0)
{

}
else{
    while($row = mysqli_fetch_array($res))
    {
        $loop = $loop+1;
        mysqli_query($link,"update questions set question_no='$loop' where id = $row[id]");
    }
}



$loop = $loop+1;

$tm = md5(time());
$fnm1 = $_FILES["fopt1"]["name"];
$dist1 = "./opt_images/".$tm.$fnm1;
$dst_db1 = "opt_images/".$tm.$fnm1;
move_uploaded_file($_FILES["fopt1"]["tmp_name"],$dist1);


$tm = md5(time());
$fnm2 = $_FILES["fopt2"]["name"];
$dist2 = "./opt_images/".$tm.$fnm2;
$dst_db2 = "opt_images/".$tm.$fnm2;
move_uploaded_file($_FILES["fopt2"]["tmp_name"],$dist2);



$fnm3 = $_FILES["fopt3"]["name"];
$dist3 = "./opt_images/".$tm.$fnm3;
$dst_db3 = "opt_images/".$tm.$fnm3;
move_uploaded_file($_FILES["fopt3"]["tmp_name"],$dist3);



$fnm4 = $_FILES["fopt4"]["name"];
$dist4 = "./opt_images/".$tm.$fnm4;
$dst_db4 = "opt_images/".$tm.$fnm4;
move_uploaded_file($_FILES["fopt4"]["tmp_name"],$dist4);


$fnm5 = $_FILES["fanswer"]["name"];
$dist5 = "./opt_images/".$tm.$fnm5;
$dst_db5 = "opt_images/".$tm.$fnm5;
move_uploaded_file($_FILES["fanswer"]["tmp_name"],$dist5);


mysqli_query($link,"insert into questions values(NULL,'$loop','$_POST[fquestion]','$dst_db1','$dst_db2','$dst_db3','$dst_db4','$dst_db5','$exam_category')") or die(mysqli_error($link)); 
?>


<script type = "text/javascript">
 alert = "question added successfully";
 window.location.href = window.location.href;
  </script>
  <?php
  }

  ?>




<?php
include "footer.php";
?>