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

                              <h2 class="mb-4" data-aos="fade-up">What is <strong> Binary Search Tree </strong> ?</h2>

                              <p class="mb-0" data-aos="fade-up">The binary search tree is an advanced algorithm used for analyzing the node, its left and right branches, which are modeled in a tree structure and returning the value. The BST is devised on the architecture of a basic binary search algorithm; hence it enables faster lookups, insertions, and removals of nodes. This makes the program really fast and accurate.

                              <br><br>The tree always has<strong> a root node</strong> and further child nodes, whether on the left or right. The algorithm performs all the operations by comparing values with the root and its further child nodes in the left or right sub-tree accordingly.</p>
                         </div>

                         <div class="about-image" data-aos="fade-up" data-aos-delay="200">
<br>
                          <img src="images/node2.png"  width="300" height="350" class="img-fluid" alt="office">
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
                            <br><br><br><br><br><br><br><br><br><br><br><br>
                          <img src="images/gif1.gif" width = "500px" height = "400px" class="img-fluid" alt="website">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-7 col-12">
                      <h3 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100" style="color: darkblue;">Attributes of Binary Search Tree</h3>

                      <div class="" data-aos="fade-up" data-aos-delay="200"></div>

                      <h5 class="mb-4" data-aos="fade-up" data-aos-delay="300"> Nodes of the tree are represented in a parent-child relationship</h5>
                      <h5 class="mb-4" data-aos="fade-up" data-aos-delay="300">Each parent node can have zero child nodes or a maximum of two subnodes or subtrees on the left and right sides.</h5>
                      <h5 class="mb-4" data-aos="fade-up" data-aos-delay="300">Every sub-tree, also known as a binary search tree, has sub-branches on the right and left of themselves.</h5>
                      <h5 class="mb-4" data-aos="fade-up" data-aos-delay="300">All the nodes are linked with key-value pairs.</h5>
                      <h5 class="mb-4" data-aos="fade-up" data-aos-delay="300">The keys of the nodes present on the left subtree are smaller than the keys of their parent node</h5>
                      <h5 class="mb-4" data-aos="fade-up" data-aos-delay="300">Similarly, The left subtree nodes' keys have lesser values than their parent node's keys.</h5>
                      <h5 class="mb-4" data-aos="fade-up" data-aos-delay="300">There is the main node or parent level 11. Under it, there are left and right nodes/branches with their own key values</h5>
                      <h5 class="mb-4" data-aos="fade-up" data-aos-delay="300">The right sub-tree has key values greater than the parent node</h5>
                      <h5 class="mb-4" data-aos="fade-up" data-aos-delay="300">The left sub-tree has values than the parent node</h5>
                      <p data-aos="fade-up" data-aos-delay="400">
                        <strong>Reference Link :</strong>

                        <span class="mx-1">/</span>

                        <small><a href = "https://www.guru99.com/binary-search-tree-data-structure.html">Click here for Reference</small></a>
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
                                   
                                  
                                        <iframe width="725" height="487" src="https://www.youtube.com/embed/V97oYgN9cIE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>

                              

                              <div class="item project-wrapper" data-aos="fade-up">
                                   
                                        <img src="images/project/bst.jpg" width="725px" height="487px" alt="project image">
                              
                                  
                              </div>

                             

                              <div class="item project-wrapper" data-aos="fade-up">
                                   
                                    <iframe width="725" height="487" src="https://www.youtube.com/embed/xT10fDc_hq8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <small></small>

                                     
                              </div>


                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="images/project/bst2.jpg" width="725px" height="487px" alt="project image">

                                   
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



