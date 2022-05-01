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
    input[type=text] {
  border: 1px solid blue;
  border-radius: 4px;
}


    .button {
  width: 120px;
  padding-top: 5px;
  padding-bottom: 0.03px;
  text-align: top;
  color: #000;
  text-transform: uppercase;
  font-weight: 600;
  margin-left: 20px;
  margin-bottom: 20px;
  cursor: pointer;
  display: inline-block;
  position:relative;
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
    </style>
<title>Adroit</title>
     <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
       

        <div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Select exam categories to add and edit questions</h1>
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
                            <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" style = "font-size:21px;">#</th>
                                            <th scope="col"style = "font-size:21px;">Quiz Name</th>
                                            <th scope="col"style = "font-size:21px;">Quiz Time</th>
                                            <th scope="col"style = "font-size:21px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select</th>
                                        
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
                                            <th scope="row" style = "font-size:21px;"><?php  echo $count; ?></th>
                                            <td style = "font-size:21px;"><?php echo $row["category"]; ?></td>
                                            <td style = "font-size:21px;"><?php echo $row["exam_time_in_minutes"]; ?></td>
                                            <td><a href = "add_edit_questions.php?id=<?php echo $row["id"]; ?>" class="button button-3">Select</a></td>
                                            
                                        </tr>
                                        <?php

                                }
                                ?>
                                       

                                       
                                    </tbody>
                                </table>
                                
                            </div>
                        </div> 

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