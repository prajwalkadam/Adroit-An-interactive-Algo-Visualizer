<?php
session_start();
/*if(!isset($_SESSION["username"]))
{

    ?>
    <script type="text/javascript">
        window.location="loginquiz.php";
    </script>
    <?php

}*/
?>
<?php
include "connection.php";
include "header.php";
?>
<title>Adroit</title>
     <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

    <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;background-image: url(img3.png);">

        <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: white;">

            <hr>
            <center>
            <h3>Select Exam Category</h3>
            </center>
            <hr>

            <?php
            $res=mysqli_query($link,"select * from exam_category");
            while($row=mysqli_fetch_array($res))
            {
                ?>
            <input type="button" class="btn btn-success form-control" value="<?php echo $row["category"]; ?>" style="margin-top: 10px; background-color: #0E57A7 ; color: white" onclick="set_exam_type_session(this.value);">
                <?php

            }



            ?>


        </div>

    </div>


<?php
include "footer.php";
?>

<script type="text/javascript">
    function set_exam_type_session(exam_category)
    {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                window.location = "dashboard.php";
            }
        };
        xmlhttp.open("GET","forajax/set_exam_type_session.php?exam_category="+ exam_category,true);
        xmlhttp.send(null);
    }
</script>
