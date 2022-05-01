<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adroit</title>
     <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    
    <link rel="stylesheet" href="stack.css" type="text/css">
    <!-- Latest compiled and minified CSS -->
    
    
</head>
<ol id="nav" class="nav">
    <li style="padding-left: 100px; padding-top: 10px; background-color: lavender;" id="logo"><img src="logof.png" alt="Logo" width="200"></li>
    <li style="float:right; padding: 20px; padding-right: 40px; background-color: lavender;" id="linking"><a href="../../visindex.php">
      <i class ="" ></i> << Back</a></li>
  </ol>
  <br>
<body>
    <br>
    <h1 style="font-family: Times New Roman; color: darkslateblue; font-size: 40px;" align="center"> STACK VISUALIZATION</h1>
    <p style="color: midnightblue;font-size: 25px;">Stack is a linear data structure which follows a particular order in which the operations are performed. <br>The order may be <b>LIFO(Last In First Out)</b> or <b>FILO(First In Last Out).</b></p>
    <p style="font-size: 25px;">
        <b style="color: indigo;">Instructions:</b><br>
    1. A stack is already displayed with values 3,2,1 displayed, inserted in respective order.<br>
    2. Type in the number you want to insert in stack.<br> 
    3. Select the push button. The list item will be created and be pushed into the stack<br>
    5. Repeat previous step to push multiple values into the stack.<br>
    4. After satisfied, select the pop option.<br>
    5. The pop option will be performed for each element in stack and you can visualize how the <br>
    pop option works in a stack.<br>
    6. You can visualize easy to learn push and pop operation.<br>
    
    </p>
    <br>
    <div class="content">
        <label for="text" style="color: mediumblue;">Enter The Element To Be Pushed:-</label>
        <input type="text" name="element"id="text" required
            class="form-control form-control-lg">
        <div >
            <button type="button" id="push" onclick="Push()">PUSH</button>
            <button id="pop" onclick="Pop()" type="button">POP </button>
        </div>
        
    
    <div id="stack">Elements of the Stack Are:-  (Default Stack) <br>[ Here, 3 is inserted first, and then 2, then 1 ]
        <ul id="list"></ul>
    </div>

    <div id = "pop_stack">The Elements Popped Out Of The Stack Are:-
        <ul id="list1"></ul>
    
    </div>
    </div>
    <br>
    <script src="stack.js"></script>
    <!-- jQuery library -->
    
    
</body>
<style type="text/css">
#nav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    height: 75px;
    }

    #logo,#linking {
    float: left;

    }

#logo, #linking:last-child {
    border-right: none;
    }
    #logo, #linking a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    height: 60px;
    font-size: 23px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    
    #logo , #linking a:hover:not(.active) {
    color:orange;
    }

</style>
</html>