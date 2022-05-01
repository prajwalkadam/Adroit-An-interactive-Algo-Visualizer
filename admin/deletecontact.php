<?php
session_start();

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"myquiz");


if(!isset($_SESSION["admin"]))
{
    ?>
<script type = "text/javascript">
window.location="index.php";
</script>
    <?php
}

$subject = $_GET["name"];

mysqli_query($link,"delete from contact where name = $subject");
?>
<script type = "text/javascript">
 window.location.href=window.location.href;
  </script>