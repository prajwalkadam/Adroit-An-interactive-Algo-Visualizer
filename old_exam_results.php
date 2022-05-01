<?php
session_start();
include "header.php";
include "connection.php";

/*if(!isset($_SESSION["username"]))
{
    ?>
    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php
}*/
?>
<title>Adroit</title>
     <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

    <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px; background-image: url(img3.png);">

        <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color:white; ">

            <center>
            <h1>Old Exams Results</h1>
            </center>

            <?php
            $count=0;
            $res=mysqli_query($link,"select * from exam_results where username='$_SESSION[username_u]' order by id desc");
            $count=mysqli_num_rows($res);

            if($count==0)
            {
                ?>
                <center>
                    <h1>No Results Found</h1>
                </center>

                <?php
            }
            else{

                echo "<table class='table table-bordered'>";
                echo "<tr style='background-color: black; color:white'>";
                echo "<th>"; echo "Username"; echo "</th>";
                echo "<th>"; echo "Quiz_Type"; echo "</th>";
                echo "<th>"; echo "Total_Question";  echo "</th>";
                echo "<th>"; echo "Correct_Answer";  echo "</th>";
                echo "<th>"; echo "Wrong_Answer";  echo "</th>";
                echo "<th>"; echo "Quiz Date"; echo "</th>";
                echo "</tr>";

                while($row=mysqli_fetch_array($res))
                {
                    echo "<tr>";
                    echo "<td>"; echo $row["username"]; echo "</td>";
                    echo "<td>"; echo $row["exam_type"]; echo "</td>";
                    echo "<td>"; echo $row["total_question"];  echo "</td>";
                    echo "<td>"; echo $row["correct_answer"];  echo "</td>";
                    echo "<td>"; echo $row["wrong_answer"];  echo "</td>";
                    echo "<td>"; echo $row["exam_time"]; echo "</td>";
                    echo "</tr>";
                }


                echo "</table>";


            }



            ?>

        </div>

    </div>


<?php
include "footer.php";
?>