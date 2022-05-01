<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Adroit</title>
  <link rel="stylesheet" href="./style.css">

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
</head>


<style>
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:white;
    height: 75px;
    }
    
    li {
    float: left;

    }
    
    li:last-child {
    border-right: none;
    }
    
    li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    height: 60px;
    font-size: 23px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    
    li a:hover:not(.active) {
    color:orange;
    }
    
    .active {
    background-color: orange;
    }

    .arrange {
    
    }

    .arrange li{
 
 
    }
    </style>
<body style="background-image: url(f2.svg);">
<ul>  
    <li style="padding-left: 180px; padding-top: 10px;"><img src="logof.png" alt="Logo" width="200"></li>
    
    <li  style="float:right; padding: 20px; margin-right: 5px;"><a class="nav-link" ><?php  echo $_SESSION["username_u"]; ?></li></a>
  
       <li style="float:right; padding: 20px; margin-right: 5px;"><a class="nav-link" href="http://localhost/user/adroit/homepage.php"><span class="edu-icon edu-locked author-log-ic"></span>LogOut</a>
       </li>
       


    <li style="float:right; padding: 20px; margin-right: 5px;"><a href="http://localhost/user/adroit/intro/html/introduction.php"><i class ="fa fa-user-plus" ></i> Back</a></li>
  
    </ul><h1 align="center" style="color: #1437BE;background-color:   #FFEF55 ; font-size: 45px;width: 660px;padding-left: 50px; margin-left: 400px;"> CHOOSE YOUR CONCEPT: </h1>
<br>
<div class="webinar-grid"  >

  
  <a href="manpreet/other/stackmain.php" class="link-block">
    <div class="jumbotron left-right-jumbotron-block" style="height:550px;background-color:darkblue;">
      <div class="webinar-image-container">
        <img src="stack.gif">
      </div>
     <h1 class="dundas-blue-text-long" align="center" style="font-size: 27px;color: white;">
     STACK :<ol><li>PUSH OPERATION </li>
   
     <li>POP OPERATION</li></ol>
    </h1>
      <div class="webinar-content-box"  style="font-size: 20px">
        <p>We’ll show you how Stack Operations can be visualized. This includes visualization of PUSH and POP operations . It is simple and easy to learn. </p>
        <span class="dundas-blue-link" onclick="window.location='manpreet/other/stackmain.php'">Visualization</span>
      </div>
    </div>
  </a>

  <a href="manpreet/other/queue.php" class="link-block">
    <div class="jumbotron left-right-jumbotron-block" style="height:550px;background-color:darkblue;">
      <div class="webinar-image-container">
        <img src="queue1.gif">
      </div>
      <h1 class="dundas-blue-text-long" align="center" style="font-size: 27px;color: white;">
     QUEUE :<ol><li>ENQUEUE OPERATION </li>
   
     <li>DEQUEUE OPERATION</li></ol>
    </h1>
      <div class="webinar-content-box"  style="font-size: 20px">
        <p>We’ll show you how Queue Operations can be visualized. This includes visualization of ENQUEUE and DEQUEUE operations . It is simple and easy to learn.</p>
        <span class="dundas-blue-link" onclick="window.location='manpreet/other/queue.php'">Visualization</span>
      </div>
    </div>
  </a>
<a href="manpreet/other/sort_index.php" class="link-block" >
    <div class="jumbotron left-right-jumbotron-block" style="height:550px;background-color:darkblue;">
      <div class="webinar-image-container">
        <img src="sorting.gif">
      </div>
      <h1 class="dundas-blue-text-long" align="center" style="font-size: 27px; color: white;">
     SORTING :<ol><li>Bubble Sort </li>
     <li>Insertion Sort</li>
     <li>Selection Sort</li></ol>
    </h1>

      <div class="webinar-content-box" style="font-size: 20px;">
        <p>We’ll show you how sorting can be visualized. This includes visualization of three types of sorting - Bubble sort, Insertion Sort and Selection Sort. </p>
        <span class="dundas-blue-link"  onclick="window.location='manpreet/other/sort_index.php'">Visualization</span>
      </div>
    </div>
  </a>
  
  
<a href="manpreet/dijkstra/index.php" class="link-block">
    <div class="jumbotron left-right-jumbotron-block" style="height:550px; background-color:darkblue;">
      <div class="webinar-image-container">
        <img src="path.gif">

      </div>
      <h1 class="dundas-blue-text-long" align="center" style="font-size: 27px; padding-left: 23px;color: white;">
      DIJKSTRAS ALGORITHM
    </h1>
      <div class="webinar-content-box"  style="font-size: 20px">
        <p>We’ll show you how algorithms can be visualized. This includes visualization of Dijkstra's Algorithm . It is fun and interesting to learn. </p>
        <span class="dundas-blue-link" onclick="window.location='manpreet/dijkstra/index.php'">Visualization</span>
      </div>
    </div>
  </a>
<a href="manpreet/bst/index.php" class="link-block">
    <div class="jumbotron left-right-jumbotron-block" style="height:550px; background-color:darkblue;">
      <div class="webinar-image-container">
        <img src="bst.gif">

      </div>
      <h1 class="dundas-blue-text-long" align="center" style="font-size: 27px; padding-left: 26px;color: white;">
      BINARY SEARCH TREE:
      <ol><li> BST</li> <br>
   
     <li> AVL</li></ol>
    </h1>
      <div class="webinar-content-box"  style="font-size: 20px">
        <p>We’ll show you Binary Search Tree can be visualized. This includes visualization of BST and AVL . It is fun and interesting to learn. </p>
        <span class="dundas-blue-link" onclick="window.location='manpreet/bst/index.php'"> Visualization</span>
      </div>
    </div>
  </a>
 



</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>