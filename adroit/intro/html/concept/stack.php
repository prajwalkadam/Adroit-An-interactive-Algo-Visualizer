<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
    .design
    {
     background-color: #ffffff;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 200 200'%3E%3Cpolygon fill='%23DCEFFA' fill-opacity='0.54' points='100 0 0 100 100 100 100 200 200 100 200 0'/%3E%3C/svg%3E");
    }

    .design2
    {
     background-color: black;
    }

    .design3
    {
     background-color: #ffccff;
    }



    </style>
     <title>Adroit</title>
     <link rel="shortcut icon" href="http://localhost/user/adroit/intro/html/concept/favicon.png" type="image/x-icon">

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-digital-trend.css">

</head>
<body>

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg" style="background-color:white">
        <div class="container" >
            <a class="navbar-brand" href="#" style="color:black;">
              <img src="images/logof.png" alt="Logo" width="180">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation" >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto" >
                    
                  
                    <li class="nav-item">
                        <a href="../introduction.php" class="nav-link contact" style="color:black;font-size: 23px;"><< Back</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


     <!-- HERO -->
     <section class="hero hero-bg d-flex justify-content-center align-items-center">
     <div class = "design2">
        
               <div class="container" style="height:500px;">
                    <div class="row">

                        <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text">

                                   <h1 class="text-white" data-aos="fade-up" >An algorithm must be seen to be believed. <h5 class="text" data-aos="fade-up" style="color:  #FFE10A ;" >-Donald Ervin Knuth</h5></h1>

                    
                              </div>
                        </div>

                        <div class="col-lg-6 col-12">
                          <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                            <img src="1.svg" class="img-fluid" alt="working girl">
                          </div>
                        </div>
</div>
                    </div>
               </div>
     </section>


     <!-- ABOUT -->
     <section class="section-padding1" id="about">
         <div class = "design">
          <div class="container">
               <div class="row">

                    <div class="col-lg-7 mx-auto col-md-10 col-12">
                         <div class="about-info">

                              <h2 class="mb-4" data-aos="fade-up">What is <strong>Stack</strong> ?</h2>

                              <p class="mb-0" data-aos="fade-up">A Stack is a linear data structure that follows the LIFO (Last-In-First-Out) principle. Stack has one end, whereas the Queue has two ends (front and rear). It contains only one pointer top pointer pointing to the topmost element of the stack.

                              <br><br>
  Whenever an element is added in the stack, it is added on the top of the stack, and the element can be deleted only from the stack. In other words, a stack can be defined as a container in which insertion and deletion can be done from the one end known as the top of the stack.</p><br>It is called as stack because it behaves like a real-world stack, piles of books, etc.
A Stack is an abstract data type with a pre-defined capacity, which means that it can store the elements of a limited size.<br><br>

                         </div>

                    </div>
</div>
               </div>
          </div>
     </section>

     <!-- TESTIMONIAL -->
     <section class=" section-padding1">
          <div class="container" style="width: 100%;">
               <div class="row">

                    <div class="col-lg-6 col-md-5 col-12">
                        <div class="contact-image" data-aos="fade-up">
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                          <img src="st.gif" width = "800px"  height = "1200px"  class="img-fluid" alt="website"> <br><br><br><br><br><br><br><br><br><br><br><br>
                         
                        
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-7 col-12">
                      <h2 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">STACK OPERATIONS</h2>

                      <div class="" data-aos="fade-up" data-aos-delay="200"></div>
           <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300" style="color: darkblue;"> PUSH Operation</h3>
                      <h5 class="mb-4" data-aos="fade-up" data-aos-delay="300">The steps involved in the PUSH operation is given below:
<br><bR>
1. Before inserting an element in a stack, we check whether the stack is full.<br>
2. If we try to insert the element in a stack, and the stack is full, then the overflow condition occurs.<br>
3. When we initialize a stack, we set the value of top as -1 to check that the stack is empty.<br>
4. When the new element is pushed in a stack, first, the value of the top gets incremented, i.e., top=top+1, and the element will be placed at the new position of the top.<br>
5. The elements will be inserted until we reach the max size of the stack.</h5>
                      
                      <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300" style="color: darkblue;"> POP Operation</h3>
                      <h5 class="mb-4" data-aos="fade-up" data-aos-delay="300">The steps involved in the POP operation is given below:<br><br>

1. Before deleting the element from the stack, we check whether the stack is empty.<br>
2. If we try to delete the element from the empty stack, then the underflow condition occurs.<br>
3. If the stack is not empty, we first access the element which is pointed by the top<br>
4. Once the pop operation is performed, the top is decremented by 1, i.e., top=top-1.</h5>

           
                     
                        
                      </p>
                    </div>

               </div>
          </div>
     </section>



     <!-- PROJECT -->
     <section class="section-padding1" id="project"  style="background-color:#DBB4FF">
     <div class = "design3">
          <div class="container-fluid"  style="background-color:#C5E2FF">
               <div class="row">

                    <div class="col-lg-12 col-12">

                        <h2 class="mb-5 text-center" data-aos="fade-up">
                         Take a look at
                            <strong>References</strong>
                        </h2>

                         <div class="owl-carousel owl-theme" id="project-slide">
                              <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                                   
                                  <iframe width="725" height="487" src="https://www.youtube.com/embed/r7P9sy5Rar8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                          
                              </div>

                              

                              <div class="item project-wrapper" data-aos="fade-up">
                                   
                                        <img src="push.png" width="725px" height="487px" alt="project image">
                              
                                  
                              </div>

                             

                              <div class="item project-wrapper" data-aos="fade-up">
                                   
                                   
                                   <iframe width="725" height="487" src="https://www.youtube.com/embed/p3MJ9EA_1W8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <small></small>

                                     
                              </div>


                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="pop.png" width="725px" height="487px" alt="project image">

                                   
                              </div>

                              
                         </div>
                    </div>

               </div>
          </div>
          </div>
     </section>

     
      <footer class="site-footer" style="background-color:#29292A;">
      <div class="container" style="margin-left: 550px; height: 2px;">
        <div class="row">
       
        <img src="favicon.png" alt="" width="40">
        <p class="d-inline-block ml-2" style="color:#CACACE ;">Copyright &copy; <a href="#" class="fg-white fw-medium" style="color:white ;">AdroIT ID</a>. All rights reserved</p>
                                 
     </div>
    </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>