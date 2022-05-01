<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en"  style="background-image: url(c.svg);">
<head>
  <meta charset="UTF-8">
  <title>Adroit</title>
     <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
  <div id="nav" style="height:160px;">
    <ol>
    <li style="padding-left: 50px; padding-top: 10px;" id="img"><img src="logof.png" alt="Logo" width="200"></li>
    <li style="float:right; padding: 20px; padding-right: 40px;" id="bck"><a href="../../visindex.php"><i class ="" ></i> << Back</a></li>
  </ol>
  </div>
 <div style="padding-left:20px;">
<h1 style="font-size: 40px; color:  #00569C;" align="center">Djikstra's Algorithm Visualization.</h1>
<!-- partial:index.partial.html -->
<h2 style="color: darkslateblue; font-size: 30px;">Instructions:</h2>
 <p style="font-size: 25px;">
  Dijkstra's algorithm is an algorithm for finding the shortest paths between nodes in a graph.<br>
  This visualization helps you visualize the working of dijkstra's algorithm.<br>
1. Select option helps you change the positions of the nodes.<br>
2. Add point let's you add more nodes in graph.<br>
3. You can add edges and connect the remaining nodes as per your wish.<br> 
4. You can also specify the nodes to calculate the shortest path from. <br> 
5. Run the algorithm and wait till the shortest path is highlighted green. <br>
6. You can hence visualize and understand the Djikstra's algorithm through this visualization. <br>
</p></div>
<canvas id="canvas" ></canvas>
<div class="controller">
  <ul>
    <li><button id="btn_select" style="font-size:20px;">Select</button></li>
    <li><button id="btn_addPoint" style="font-size:20px;">Add Point</button></li>
    <li><button id="btn_addEdge" style="font-size:20px;">Add Edge</button></li>
    <br><li id="wrap_animationSpeed">
      <label style="font-size:20px;">Animation Speed <span>(1500ms)</span></label>
      <input type="range" min="0" max="3000" step="500" value="1500"></li>
  </ul>
  <p style="padding-left: 60px;font-size:25px;">Shortest Path </br>From <select id="from" style="font-size:20px;"></select> to <select id="to" style="font-size:20px;"></select>
  </p>
<button id="btn_run_algorithm"  style="margin-left: 40px;"><i class="fa fa-play icon" ></i> Run Algorithm</button>
</div>
<div id="notification" style="font-size:20px;">Loading...</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script><script  src="./script.js"></script>
 
</body>
<style type="text/css">
ol {
    list-style-type: none;
    margin: 0;
    padding: 60px;
    overflow: hidden;
    height: 75px;
    }

    #img,#bck {
    float: left;

    }

  li a {
    display: block;
    color: black;
    text-align: right;
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
    li:last-child {
    border-right: none;
    }
    
</style>
</html>
