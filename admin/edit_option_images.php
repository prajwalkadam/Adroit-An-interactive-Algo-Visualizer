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


$id = $_GET["id"];
$id1 = $_GET["id1"]; 
$question = "";
$opt1 = "";
$opt2 = "";
$opt3 = "";
$opt4 = "";
$answer = "";
$res = mysqli_query($link,"select * from questions where id = $id");
while($row=mysqli_fetch_array($res))
  {
    $question = $row["question"];
    $opt1 = $row["opt1"];
    $opt2 = $row["opt2"];
    $opt3 = $row["opt3"];
    $opt4 = $row["opt4"];
    $answer = $row["answer"];
  }
?>

       

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Update Questions With Images</h1>
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

                            <div class="col-lg-12">
                            <form name = "form1" action = "" method = "post" enctype = "multipart/form-data">
                            <div class="card">
                                <div class="card-header"><strong>Update Questions with images</strong><small></small></div>
                                <div class="card-body card-block">
                                    <div class="form-group"><label for="company" class=" form-control-label">Question</label><input type="text" name = "fquestion" placeholder="Add Question" class="form-control" value = "<?php echo $question; ?>"></div>
                                    
                                    <div class="form-group">
                                    <img src= "<?php echo $opt1; ?>" height = "80" width = "90"><br>
                                    <label for="company" class=" form-control-label">Option1</label><input type="file" name = "fopt1"  class="form-control" style = "padding-bottom:37px"></div>    
                                    
                                    <div class="form-group">
                                    <img src= "<?php echo $opt2; ?>" height = "80" width = "90"><br>
                                   <label for="company" class=" form-control-label">Option2</label><input type="file" name = "fopt2"  class="form-control" style = "padding-bottom:37px"></div>    
                                    
                                    <div class="form-group">
                                    <img src= "<?php echo $opt3; ?>" height = "80" width = "90"><br>
                                    <label for="company" class=" form-control-label">Option3</label><input type="file" name = "fopt3"  class="form-control" style = "padding-bottom:37px"></div>    
                                    
                                    <div class="form-group">
                                    <img src= "<?php echo $opt4; ?>" height = "80" width = "90"><br>
                                    <label for="company" class=" form-control-label">Option4</label><input type="file" name = "fopt4"  class="form-control" style = "padding-bottom:37px"></div>    
                                    
                                    <div class="form-group">
                                    <img src= "<?php echo $answer; ?>" height = "80" width = "90"><br>
                                    <label for="company" class=" form-control-label">Add Answer</label><input type="file" name = "fanswer" placeholder="Add Option1" class="form-control" style = "padding-bottom:37px" ></div>    
                                  
                                            
                                        <div class="form-group"> 
                                      <input type = "submit" name = "submit2" value = "Update Question" class = "btn btn-success"> 

                                        </div>
                                                </div> 
                                                 </form>
                                            </div>

                            </div>

                           
                            </div>
                        </div> <!-- .card -->
                        
                    </div>
                    <!--/.col-->

                    
</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php
if(isset($_POST["submit2"]))
{
    $opt1 = $_FILES["fopt1"]["name"];
    $opt2 = $_FILES["fopt2"]["name"];
    $opt3 = $_FILES["fopt3"]["name"];
    $opt4 = $_FILES["fopt4"]["name"];
    $answer = $_FILES["fanswer"]["name"];
    $tm = md5(time());
    
    if($opt1!="")
    {
        $dist1 = "./opt_images/".$tm.$opt1;
        $dst_db1 = "opt_images/".$tm.$opt1;
        move_uploaded_file($_FILES["fopt1"]["tmp_name"],$dist1);
    
        mysqli_query($link,"update questions set question='$_POST[fquestion]',opt1='$dst_db1' where id = $id") or die(mysqli_error($link));
    
    }

    if($opt2!="")
    {
        $dist2 = "./opt_images/".$tm.$opt2;
        $dst_db2= "opt_images/".$tm.$opt2;
        move_uploaded_file($_FILES["fopt2"]["tmp_name"],$dist2);
    
        mysqli_query($link,"update questions set question='$_POST[fquestion]',opt2='$dst_db2' where id = $id") or die(mysqli_error($link));
    
    }

    if($opt3!="")
    {
        $dist3 = "./opt_images/".$tm.$opt3;
        $dst_db3= "opt_images/".$tm.$opt3;
        move_uploaded_file($_FILES["fopt3"]["tmp_name"],$dist3);
    
        mysqli_query($link,"update questions set question='$_POST[fquestion]',opt3='$dst_db3' where id = $id") or die(mysqli_error($link));
    
    }

    if($opt4!="")
    {
        $dist4 = "./opt_images/".$tm.$opt4;
        $dst_db4= "opt_images/".$tm.$opt4;
        move_uploaded_file($_FILES["fopt4"]["tmp_name"],$dist4);
    
        mysqli_query($link,"update questions set question='$_POST[fquestion]',opt4='$dst_db4' where id = $id") or die(mysqli_error($link));
    
    }

    if($answer!="")
    {
        $dist5 = "./opt_images/".$tm.$answer;
        $dst_db5= "opt_images/".$tm.$answer;
        move_uploaded_file($_FILES["fanswer"]["tmp_name"],$dist5);
    
        mysqli_query($link,"update questions set question='$_POST[fquestion]',answer='$dst_db5' where id = $id") or die(mysqli_error($link));
    
    }
    mysqli_query($link,"update questions set question='$_POST[fquestion]' where id = $id") or die(mysqli_error($link));

    ?>
    <script type = "text/javascript">
     window.location="add_edit_questions.php?id=<?php  echo $id1; ?>";
      </script>
      <?php
    
}
  ?>

<?php
include "footer.php";
?>