
    <?php
    session_start();
    include "../connection.php";    
include "header.php";
$id = $_GET["id"];
$res = mysqli_query($link,"select email from contact where id = $id");
while($row=mysqli_fetch_array($res))
  {
    $email = $row["email"];
  }
?>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    input[type=text] {
  border: 1px solid blue;
  border-radius: 4px;
}


    .button {
  width: 170px;
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: center;
  color: #000;
  text-transform: uppercase;
  font-weight: 600;
  margin-left: 50px;
  margin-bottom: 30px;
  cursor: pointer;
  display: inline-block;
}
.button-3 {
  border: 2px solid #3c73ff;
  background-color: #3c73ff;
  border-radius: 20px;
  color: #fff;
  transition: .3s;
}
.button-3:hover {
  box-shadow: 8px 8px #99bdff;
  transition: .3s;
}

    </style></head>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Email</h1>
                    </div>
                </div>
            </div>
           
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" style="background-color:#D7D7D7  ;">
                        
                            <div class="card-body" style="font-size:18px">
                            
                            <form  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                    <center>
                        <h2 style="margin-left:70px;">Send Mail<img src="e.png" width="80px" height="50"></h2>

                        <br>
                           Email: &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                           <input type="text" name="email" style="font-size: 16pt height: 40px; width:280px; border-color: #AFAFAF  " value = "<?php echo $email; ?>">
                           <br><br>

                           Subject: &nbsp; &nbsp;
                           <input type="text" name="subject" style="font-size: 16pt height: 40px; width:280px; border-color: #AFAFAF  ">

                       <br><br>
                          <label style="vertical-align: top;">Message: &nbsp;</label>
                         <textarea name="message" style="font-size: 12pt; height: 80px; width:280px; border: 1px solid #AFAFAF;"></textarea>
                         <br><br>

                         
                         <input class="button button-3" type="submit" name = "submit" value="Send" style="margin-left: 60px;">
                           
                      </center>
                       </form>	
                            
                            <?php
 



if (isset($_POST['submit']))
{

$to = $_POST['email']; 
//$to = mysqli_query($link,"select email from contact where id = $id");

$myemail = "adroitbusiness2021@gmail.com";
$sub = $_POST['subject']; 
$msg = $_POST['message']; 
  
   
   $headers = "From: $myemail";
  $result = mail($to,$sub,$msg,$headers);

  
 
if($result == true ){  
 
 
?>
<script type = "text/javascript">
       alert("Emailed Successfully !!");
    window.location = "contact_form.php";
  </script>
  <?php
}
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

