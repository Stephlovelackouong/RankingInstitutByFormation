<?php 
session_start();
$db = mysqli_connect('localhost', 'root', '', 'yellow');

// initialize variables
$nom = "";
$prenom = "";
$email = "";
$matricule = "";
$update = false;


if (isset($_POST['update'])) 
	{$matricule = $_POST['matricule'];
	 $nom = $_POST['nom'];
	 $prenom = $_POST['prenom'];
	 $email = $_POST['email'];

	 mysqli_query($db, "UPDATE etudiant SET matricule='$matricule', nom='$nom', prenom ='$prenom' email='$email' WHERE matricule='$matricule'");
	 $_SESSION['message'] = "LES DETAILS DE L'ETUDIANT A ETE MIS A JOUR !"; 
	 header('location: GererEtudiant.php');
	}

if (isset($_GET['delete'])) 
	{$matricule = $_GET['delete'];

	 mysqli_query($db, "DELETE FROM etudiant WHERE matricule='$matricule'");
	 $_SESSION['message'] = "Etudiant est suprimer avec  succes!!"; 
	 header('location: GererEtudiant.php');
	}
?>