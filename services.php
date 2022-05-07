<?php

  session_start();
  if ($_SESSION["connected"] != "connected") {
   
    header("location:connexion.php");

  }


  if (isset($_POST["submit"])) {
    session_destroy(); 
    header("location:connexion.php");
  }


?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Stand Blog - About Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <style>
        .inner {
                overflow: hidden;
               }
        .inner img {
                    transform: all 1.5s ease;
                   }
        .inner:hover img {
                          transform: scale(1.5);
                         }
    </style>
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
        <div class="container" >
          <a class="navbar-brand" href="index.php"> <h2>Map Jeunesse <i class="fa fa-graduation-cap" aria-hidden="true"><em></em></i> </h2> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive"  >
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Accueil
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link active" href="services.php">Nos services</a>
              </li>
              <li class="nav-item">
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
          <div class="dropdown">

                <a style="cursor:pointer" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  <div   style="display:flex;justify-content:center;align-items:center" >
                      <i style="font-size:30px" class="fas fa-user-circle" ></i>
                      &nbsp;<div style="font-style:italic" > <?php echo $_SESSION["username"] ?> </div>
                  </div>
                </a>  
                
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"  >
                  
                    <form action="services.php" method="POST" style="display:flex;justify-content:center;align-items:center;width:100%" >
                      <input type="submit" name="submit" value="Déconnexion" class="btn btn-light mb-3" style="width:100%;border-radius:0px" >
                    </form>
                  
                </div>

              <!--
                
              -->
             
          
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
                <h4> Nos services </h4>
                <h2>more about us!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->

  
    </div>

    <br/><br/>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow" style="width: 20rem; height: 26rem">
                    <div class="inner">
                        <img class="card-img-top" src="assets/images/STAGE.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body text-center">
                      <h5 class="card-title"> Offre de Stage</h5>
                      <p class="card-text">Bienvenue dans la page de Candidature de stage. Veuillez cliquez sur le bouton pour continuer</p>
                      <a href="stage.php" class="btn btn-success"> Consulter </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow" style="width: 20rem;">
                    <div class="inner">
                        <img class="card-img-top" src="assets/images/JOB.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body text-center">
                      <h5 class="card-title"> Offre d'emploi</h5>
                      <p class="card-text">Bienvenue dans la page de Candidature d'emploi. Veuillez cliquez sur le bouton pour continuer</p>
                      <a href="emploi.php" class="btn btn-success"> Consulter </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow" style="width: 20rem;">
                    <div class="inner"> 
                        <img class="card-img-top" src="assets/images/PROJECT.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body text-center">
                      <h5 class="card-title"> Candidature de Projet</h5>
                      <p class="card-text">Bienvenue dans la page de Candidature de projet. Cliquez sur le bouton pour poursuivre</p>
                      <a href="projet.php" class="btn btn-success"> Consulter </a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <section class="about-us">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
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