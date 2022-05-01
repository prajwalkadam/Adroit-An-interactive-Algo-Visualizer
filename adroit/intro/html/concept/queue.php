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
     <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

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

                              <h2 class="mb-4" data-aos="fade-up">What is <strong>Queue</strong> ?</h2>

                              <p class="mb-0" data-aos="fade-up">
A Queue is a linear structure which follows a particular order in which the operations are performed. The order is First In First Out (FIFO). A good example of a queue is any queue of consumers for a resource where the consumer that came first is served first. The difference between stacks and queues is in removing. In a stack we remove the item the most recently added; in a queue, we remove the item the least recently added.
                              <br><br>
It is an abstract data structure, somewhat similar to Stacks. Unlike stacks, a queue is open at both its ends. One end is always used to insert data (enqueue) and the other is used to remove data (dequeue). Queue follows First-In-First-Out methodology, i.e., the data item stored first will be accessed first.<br>A real-world example of queue can be a single-lane one-way road, where the vehicle enters first, exits first. More real-world examples can be seen as queues at the ticket windows and bus-stops.<br><br>
</p>
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
                            <br><br><br><br><br><br><br><br><br>
                        
                          <img src="queue.gif" width = "800px"  height = "1200px"  class="img-fluid" alt="website"> <br><br><br><br><br><br><br>
                         
                            <img src="cir.gif" width = "800px"  height = "1200px"  class="img-fluid" alt="website"> 
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-7 col-12">
                      <h2 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">QUEUE OPERATIONS</h2>

                      <div class="" data-aos="fade-up" data-aos-delay="200"></div>
           <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300" style="color: darkblue;"> ENQUEUE Operation</h3>
                      <h5 class="mb-4" data-aos="fade-up" data-aos-delay="300">Queues maintain two data pointers, front and rear. Therefore, its operations are comparatively difficult to implement than that of stacks.
The following steps should be taken to enqueue (insert) data into a queue −<br>

Step 1 − Check if the queue is full.<br>

Step 2 − If the queue is full, produce overflow error and exit.
<br>
Step 3 − If the queue is not full, increment rear pointer to point the next empty space.
<br>
Step 4 − Add data element to the queue location, where the rear is pointing.
<br>
Step 5 − return success.</h5>
                      
                      <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300" style="color: darkblue;"> DEQUEUE Operation</h3>
                      <h5 class="mb-4" data-aos="fade-up" data-aos-delay="300">Accessing data from the queue is a process of two tasks − access the data where front is pointing and remove the data after access. The following steps are taken to perform dequeue operation −<br>

Step 1 − Check if the queue is empty.
<br>
Step 2 − If the queue is empty, produce underflow error and exit.
<br>
Step 3 − If the queue is not empty, access the data where front is pointing.
<br>
Step 4 − Increment front pointer to point to the next available data element.
<br>
Step 5 − Return success.
                        
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
                                     <iframe width="725" height="487" src="https://www.youtube.com/embed/sDO9bPaBg6A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                   
                                  
                                          
                              </div>

                              

                              <div class="item project-wrapper" data-aos="fade-up">
                                   
                                        <img src="enqueue.png" width="725px" height="487px" alt="project image">
                              
                                  
                              </div>

                             

                              <div class="item project-wrapper" data-aos="fade-up">
                                   
                              <iframe width="725" height="487" src="https://www.youtube.com/embed/vPVWuoR43oM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <small></small>

                                     
                              </div>


                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="dequeue.png" width="725px" height="487px" alt="project image">

                                   
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