<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>ajouter etudiant</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.JPG" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .logo{
    width:60px;
    padding-right:20px;
    }  
    .aa{ 
    margin-left: auto;
    margin-right: auto;
    padding: 5% 10%;
    text-align: center;
}
form .con {
    width:100%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
#contenerr h1{
    width: 38%;
    margin: 0 auto;
    padding-bottom: 10px;
}
.inputtbn{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
.input {
    background-color: black;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}
.input:hover {
    background-color: #F3BD00;
    color: white;
    border: 1px solid black;
}
.page-header {
    background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(./img/carousel-.JPG) center center no-repeat;
    background-size: cover;
}
        </style>
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>237 Uds, Dschang, Cameroun</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mer - juil : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+237 673 030 965</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.facebook.com/lackouong.stephane"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://twitter.com/lackouong"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.instagram.com/styvy_mhvv/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href="https://www.instagram.com/styvy_mhvv/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0"><img src="img/logo.GIF" alt="logo" class="logo">Ranking<sub>Instituts</sub></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index2.php" class="nav-item nav-link">Accueil</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">classement</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="bts.php" class="dropdown-item">Par BTS</a>
                        <a href="licencepro.php" class="dropdown-item">Par LICENCEPRO</a>
                        <a href="masterpro.php" class="dropdown-item">Par MASTERPRO</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu bg-light m-0">
                    <a href="GererInstitut.php" class="dropdown-item">Gerer Instiitut</a>
                        <a href="GererEtudiant.php" class="dropdown-item">Gerer Etudiant</a>
                    </div>
                </div>
            </div>
            <a href="logout.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Deconnexion<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Ajouter Etudiant </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index2.php">Accueil</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">GererInstitut</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">AjouterInstitut</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div>
         <div>
                <div class="aa">
                    <div class="contenerr">
                            <!-- <p> Ajoutez un etudiant ici</p><br/> -->
                        <form action="AjouterInstitut.php" method="POST" class="con">
                          <h1>Ajoutez une Institut ici</h1>

                          <label><b>Nom Institut</b></label>
                          <input type="text" class="inputtbn" placeholder="Entrer le matricule etudiant" name="nom_institut" required/>

                          <label><b>Adresse Institut</b></label>
                          <input type="text" class="inputtbn" placeholder="Entrer le nom etudiant" name="Adresse" required/>

                          <div class="input-group">
                              <input type="submit" class="input" name='submit'  value="Ajouter" >
                              <input type="reset" class="input" name="reset" style="position:relative; left:15px;" value="Annuler" >
                           </div>

                        </form>
                    </div> 
                </div>
         </div>
    </div>

    <!-- Footer Start -->

  <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Information</h4>
                    <h3 class="text-primary mb-4"><img src="img/ll.gif" alt="logo" class="logo">Ranking</h3>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>237 Uds, Dschang, CMR</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+237 673 030 965</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>steploveg@gmail.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Racourci Liens</h4>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    <a class="btn btn-link" href="team'php">Team Developpeurs</a>
                    <a class="btn btn-link" href="404.php">Terms & Condition</a>
                    <a class="btn btn-link" href="404.php">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services </h4>
                    <a class="btn btn-link" href="voter.php">Voter Institut</a>
                    <a class="btn btn-link" href="noter.php">Noter Etudiant</a>
                    <a class="btn btn-link" href="connection.php">Administrateur</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <form action="newsletter.php">
                        <div class="input-group">
                            <button class="btn btn-primary">s'abonner</button>
                        </div>
                    </form>
                    <h6 class="text-white mt-4 mb-3">Suivez Nous</h6>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light me-1" href="https://twitter.com/lackouong"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href="https://www.facebook.com/lackouong.stephan"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href="https://www.instagram.com/styvy_mhvv/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-light me-0" href="https://www.instagram.com/styvy_mhvv/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy;2022 <a href="index.php"> RANKING WEB OF INSTITUTS</a>, Tout Les Droit Reserves.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designer avec <a href="404.php">HTML CSS Bootstrap</a>
                    <br>Effetuer par: <a href="404.php" target="_blank">Etudiant Info III</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>                     

</body>
<?php
      include 'websiteDB.php';
if(isset($_POST['submit'])){

    $nom = mysqli_real_escape_string($db,htmlspecialchars($_POST['nominstitut']));
    $adresse = mysqli_real_escape_string($db,htmlspecialchars($_POST['adresse'])); 

$query = "SELECT * FROM institut WHERE nomI='$nomI' AND adresse='$adresse'  LIMIT 1";
$results = mysqli_query($db, $query)or die('Error in updating Database');
$row=mysqli_fetch_array($results);
  if (mysqli_num_rows($results) == 1) {
    ?>
    <script type="text/javascript" >
        alert("Institut existe deja");
    </script>
<?php
  }else{
  $query = "INSERT INTO institut
                (nomI,adresse)
                VALUES ('".$nom."','".$adresse."')";
                mysqli_query($db,$query)or die ('Error in updating Database');
                ?>
                     <script type="text/javascript">
            alert("Institut ajouter avec Succes!!.");
            window.location = "AjouterInstitut.php";
        </script>
        <?php
             }               
            }
?>