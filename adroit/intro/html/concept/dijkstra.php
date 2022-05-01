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

                              <h2 class="mb-4" data-aos="fade-up">What is <strong> Dijkstra's Algorithm </strong>?</h2>

                              <p class="mb-0" data-aos="fade-up">Dijkstra's algorithm is an algorithm for finding the shortest paths between nodes in a graph, which may represent, for example, road networks. It was conceived by computer scientist Edsger W. Dijkstra in 1956 and published three years later.<br>
For a given source node in the graph, the algorithm finds the shortest path between that node and every other.It can also be used for finding the shortest paths from a single node to a single destination node by stopping the algorithm once the shortest path to the destination node has been determined. <br>

The Dijkstra algorithm uses labels that are positive integers or real numbers, which are totally ordered. It can be generalized to use any labels that are partially ordered, provided the subsequent labels (a subsequent label is produced when traversing an edge) are monotonically non-decreasing. This generalization is called the generic Dijkstra shortest-path algorithm</p>
                         </div>

                         
                    </div>
</div>
               </div>
          </div>
     </section>

     <!-- TESTIMONIAL -->
     <section class=" section-padding1">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 col-md-5 col-12">
                        <div class="contact-image" data-aos="fade-up">
                            
                          <img src="d1.png" width = "500px" height = "200px" class="img-fluid" alt="website">
                          <img src="d2.png" width = "500px" height = "200px" class="img-fluid" alt="website">
                          <img src="d3.png" width = "500px" height = "200px" class="img-fluid" alt="website">
                          <img src="d7.png" width = "500px" height = "200px" class="img-fluid" alt="website">

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-7 col-12">
                      <h3 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100" style="color: darkblue;">How does the Algorithm work ?</h3>

                      <div class="" data-aos="fade-up" data-aos-delay="200"></div>

                      <h5 class="mb-4" data-aos="fade-up" data-aos-delay="300">Let the node at which we are starting be called the initial node. Let the distance of node Y be the distance from the initial node to Y. Dijkstra's algorithm will assign some initial distance values and will try to improve them step by step.</h5>
                      <h5 class="mb-4" data-aos="fade-up" data-aos-delay="300">1. Mark all nodes unvisited. Create a set of all the unvisited nodes called the unvisited set.</h5>

                      <h5 class="mb-4" data-aos="fade-up" data-aos-delay="300">2. Assign to every node a tentative distance value: set it to zero for our initial node and to infinity for all other nodes. Set the initial node as current.</h5>

                      <h5 class="mb-4" data-aos="fade-up" data-aos-delay="300">3. For the current node, consider all of its unvisited neighbours and calculate their tentative distances through the current node. Compare the newly calculated tentative distance to the current assigned value and assign the smaller one. For example, if the current node A is marked with a distance of 6, and the edge connecting it with a neighbour B has length 2, then the distance to B through A will be 6 + 2 = 8. If B was previously marked with a distance greater than 8 then change it to 8. Otherwise, the current value will be kept.</h5>

                      <h5 class="mb-4" data-aos="fade-up" data-aos-delay="300">4. When we are done considering all of the unvisited neighbours of the current node, mark the current node as visited and remove it from the unvisited set. A visited node will never be checked again.</h5>
                      
                      <h5 class="mb-4" data-aos="fade-up" data-aos-delay="300">5. If the destination node has been marked visited (when planning a route between two specific nodes) or if the smallest tentative distance among the nodes in the unvisited set is infinity (when planning a complete traversal; occurs when there is no connection between the initial node and remaining unvisited nodes), then stop. The algorithm has finished.</h5>

                      <h5 class="mb-4" data-aos="fade-up" data-aos-delay="300">6. Otherwise, select the unvisited node that is marked with the smallest tentative distance, set it as the new "current node", and go back to step 3.<br>When planning a route, it is actually not necessary to wait until the destination node is "visited" as above: the algorithm can stop once the destination node has the smallest tentative distance among all "unvisited" nodes (and thus could be selected as the next "current").</h5>
                      
                      
                    </div>

               </div>
          </div>
     </section>


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
                                   
                                  <iframe width="725" height="487" src="https://www.youtube.com/embed/pSqmAO-m7Lk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                     <small></small>
                              </div>

                              

                              <div class="item project-wrapper" data-aos="fade-up">
                                   
                                        <img src="da.png" width="725px" height="487px" alt="project image">
                              
                                  
                              </div>

                             

                              <div class="item project-wrapper" data-aos="fade-up">
                                     <iframe width="725" height="487" src="https://www.youtube.com/embed/EFg3u_E6eHU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    
                                        <small></small>

                                     
                              </div>


                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="da2.png" width="725px" height="487px" alt="project image">

                                   
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



