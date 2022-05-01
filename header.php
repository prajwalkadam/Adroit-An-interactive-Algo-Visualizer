<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Adroit</title>
     <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">


</head>

<body>

<div class="all-content-wrapper">

    <div class="header-advance-area" >
        <div class="header-top-area">
            <div class="container-fluid"style="background-color:white;" >
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper" >
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                            <i class="educate-icon educate-nav"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12" >
                                    <div class="header-top-menu tabl-d-n" >
                                        <ul class="nav navbar-nav mai-top-nav">
<li style="padding-top: 10px;"><img src="logof.png" alt="Logo" width="200"></li>
                                            <?php
                                            /*if(!isset($_SESSION["exam_category"]))
                                            {*/
                                                ?>
                                                <li class="nav-item" ><a href="select_exam.php" class="nav-link" style="color: black;font-size: 20px;padding-top: 40px;">Select Exam</a>
                                                </li>
                                                <li class="nav-item"><a href="old_exam_results.php" class="nav-link"  style="color: black;font-size: 20px;padding-top: 40px;">Last Results</a>
                                                </li>
                                                <?php

                                            //}
                                            ?>


                                            <li class="nav-item"><a href="logout.php" class="nav-link"  style="color: black;font-size: 20px;padding-top: 40px;">End Quiz</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">


                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <img src="user.png" alt="" />
                                                    <span class="admin-name"  style="color: black;font-size: 20px;padding-top: 40px;"><?php echo $_SESSION["username_u"]; ?></span>
                                                    <i class="fa fa-angle-down edu-icon edu-down-arrow"  style="color: black;font-size: 20px;padding-top: 40px;"></i>
                                                </a>
                                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">

                                                    <li><a href="logout.php"><span class="edu-icon edu-locked author-log-ic"></span>End Quiz</a>
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu start -->

        <!-- Mobile Menu end -->
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row" style="background-color: #0E57A7 ; ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
                            <div class="row">
                                <div class="col-lg-6" style = "font-size:20px">Welcome, <b><?php echo $_SESSION["username_u"]; ?></b></div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
                                    <ul class="breadcome-menu">
                                        <li><div id="countdowntimer" style="display: block; font-size:20px;"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    setInterval(function(){
        timer();
    },1000);
    function timer()
    {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                if(xmlhttp.responseText=="00:00:01")
                {
                    window.location="result.php";
                }

                document.getElementById("countdowntimer").innerHTML=xmlhttp.responseText;

            }
        };
        xmlhttp.open("GET","forajax/load_timer.php",true);
        xmlhttp.send(null);
    }

    </script>