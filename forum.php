<?php
  include("fonctions.php");

  if(isset($_POST["submit"]))
  {
    $url = $api_url.""; // url de l'api à récuperer ....

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $execution = HandleForumCommentary($url , $name , $email , $subject , $message);

    echo $execution;

  }

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Map Jeunesse</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"> <h2>Map Jeunesse <i class="fa fa-graduation-cap" aria-hidden="true"><em></em></i> </h2> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Accueil
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="services.php">Nos services</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="forum.php">Forum</a>
              </li>
               <li class="nav-item">
                 <a class="nav-link" href="connexion.php">LogIn</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="contact.php">Contact</a>
               </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Forum</h4>
                <h2>Parlons-en</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->
    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="assets/images/blog-post-02.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <span>Investissement</span>
                      <a href="#"><h4>Comment valoriser son projet à l'international</h4></a>
                      <ul class="post-info">
                        <li><a href="#">Adama Sow</a></li>
                        <li><a href="#">May 12, 2020</a></li>
                        <li><a href="#">10 Comments</a></li>
                      </ul>
                      <p>Faire connaître les initiatives entreprises sur un territoire en santé publique présente de nombreux avantages.

                        Pour Hincelin (2004) "une structure adaptée à l'action, un partenariat significatif, des acteurs qui s'investissent, une équipe dynamique, une méthodologie de qualité, un bilan positif, méritent d'être mis en avant : c'est le rôle de la valorisation".
                        
                        Que doit-on mettre en valeur ? 
                        
                        La valorisation d'une action passe vraisemblablement par la mise en avant de ses auteurs ou, mieux encore, de ses bénéficiaires et des résultats acquis. Il peut s'agir d'un processus, d'un partenariat, d'un changement de comportement, du développement de connaissances, d'une modification dans les représentations… Il faut privilégier d'abord une valorisation en interne avant de créer des supports pour d'autres cibles à l'extérieur.
                        
                        Votre action mérite qu'on s'y intéresse ? Soyez candidat pour un atelier lors d'une journée qui rassemble du monde. On vous demandera un texte de présentation de l'action, vous pourrez remettre un résumé aux participants… Il s'agit d'exploiter une action terminée ou l'une de ses phases.</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item comments">
                    <div class="sidebar-heading">
                      <h2>4 comments</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li>
                          <div class="author-thumb">
                            <img src="assets/images/comment-author-01.jpg" alt="">
                          </div>
                          <div class="right-content">
                            <h4>Charles Kate<span>May 16, 2020</span></h4>
                            <p>Très interessant et pertinent!</p>
                          </div>
                        </li>
                        <li class="replied">
                          <div class="author-thumb">
                            <img src="assets/images/comment-author-02.jpg" alt="">
                          </div>
                          <div class="right-content">
                            <h4>Thirteen Man<span>May 20, 2020</span></h4>
                            <p>Je suis d'avis. Par contre ....</p>
                          </div>
                        </li>
                        <li>
                          <div class="author-thumb">
                            <img src="assets/images/comment-author-03.jpg" alt="">
                          </div>
                          <div class="right-content">
                            <h4>Belisimo Mama<span>May 16, 2020</span></h4>
                            <p>Très pertinent!!</p>
                          </div>
                        </li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item submit-comment">
                    <div class="sidebar-heading">
                      <h2>Votre commentaire</h2>
                    </div>
                    <div class="content">
                      <form action="forum.php" id="comment"  method="post">
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Votre nom" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="email" type="text" id="email" placeholder="Votre email" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="subject" type="text" id="subject" placeholder="Objet">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message" rows="6" id="message" placeholder="Ecrivez votre commentaire" required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-button">Envoyez</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                      <input type="text" name="q" class="searchText" placeholder="Thème..." autocomplete="on">
                    </form>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>
                        À la une</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="forum.html">
                            <h5>Emploi des jeunes : La machine est lancée, les différents ministères impliqués donnent le
                              top départ Emploi des jeunes : La machine est lancée, les différents ministères ...</h5>
                            <span>May 31, 2020</span>
                          </a></li>
                        <li><a href="forum.html">
                            <h5>Monsieur le président de la République, offrez du travail à la jeunesse (Par Malick Wade
                              GUEYE) </h5>
                            <span>May 28, 2020</span>
                          </a></li>
                        <li><a href="forum.html">
                            <h5>Refonte et renforcement de la promesse républicaine et du contrat social envers la
                              jeunesse (Par Ndiaye DIA) </h5>
                            <span>May 14, 2020</span>
                          </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-12">
                  <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                      <h2>Tags</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">Finance</a></li>
                        <li><a href="#">Projet</a></li>
                        <li><a href="#">Education</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Motivation</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Behance</a></li>
              <li><a href="#">Linkedin</a></li>
              <li><a href="#">Dribbble</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>Copyright 2021 L'EQUIPE
                    
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
