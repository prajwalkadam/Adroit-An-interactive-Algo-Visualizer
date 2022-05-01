<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" style="background-image: url(f2.svg);">
<head>
  <meta charset="UTF-8">
  <title>Adroit</title>
     <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  

</head>
<body>
<!-- partial:index.partial.html -->

<ul>  
    <li style="padding-left: 100px; padding-top: 10px;"><img src="logof.png" alt="Logo" width="200"></li>
    <li style="float:right; padding: 20px; padding-right: 40px;"><a href="../../visindex.php">
      <i class ="fa fa-user-plus" ></i> << Back</a></li>
      
</ul>
<br> <br> <br> 
<h1 style="font-size: 40px; color:  #00569C;" align="center">Binary Search Tree Visualization and AVL </h1>
<p style="font-family: Times New Roman; font-size: 25px;">Instructions : <br>
1. Type in the Number that you want to see inserted in the Binary Search Tree and AVL. <br>
2. Click on the insert button to insert your typed number in binary search tree and AVL.<br>
3. Repeat steps 1 and 2 for more dynamic search tree visualization.<br>
4. Use the find button to find a particular node in the binary tree.<br>
5. You can Delete a node, just insert the number to be deleted and press delete.<br>
6. Change speed as : 1x, 2x, 5x, 20x, to your preference.<br>
</p>

<div style="background-color: white;">
  
  <button id="cmd-insert" onclick="window.click_insert()">Insert</button>
  <button id="cmd-find" onclick="window.click_find()">Find</button>
  <button id="cmd-delete" onclick="window.click_delete()">Delete</button>
</div>
<div id="controls" style="background-color: white;">
  <button id="turbo-button" onclick="window.toggle_turbo()">1x Speed</button>
  <button id="play-button" onclick="window.click_play()">Playing</button>
  <button id="next-button" onclick="window.click_next()" style="background-color: white; border: white;"></button>
</div>
<p style="font-size: 20px; ">node =<input id="arg-value" type="number"></input></p>
<div id="bst-msg" align="center">BST:</div>
<div id="bst-drawing" align="center"></div>
<div id="avl-msg" align="center">AVL:</div>
<div id="avl-drawing" align="center"></div>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/svg.js/2.6.6/svg.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/color-js/1.0.1/color.min.js'></script><script  src="./script.js"></script>

</body>
<style>
#bst-msg, #avl-msg{
  font-size: 28px;
}
#turbo-button, #play-button, #next-button
,#cmd-insert, #cmd-find, #cmd-delete{
  background-color: #3399ff;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
#text {
  width: 30%;
  margin-bottom: 1%;
}
input[type=number] {
  height: 30%;
  border: 4px solid #aaa;
  border-radius: 5px;
  outline: none;
  padding: 15px;
  font-size: medium;
  box-sizing: border-box;
  transition: .3s;
}

input[type=number]:focus {
  border-color: dodgerBlue;
  box-shadow: 0 0 12px 0 dodgerBlue;
}

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

html{
  margin: 0%;
  background-repeat: no-repeat;
  background-size: cover;
  background-color: white;
}
</style>
</html>
