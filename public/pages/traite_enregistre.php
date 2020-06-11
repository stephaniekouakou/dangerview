<?php

if ( isset($_POST['ajoutlieu']) ) {
	include('bd.php');
	include('app/securite.php');
   $msg='';
	$continent =secure( $_POST['continent']);
  $pays =secure( $_POST['pays']);
  $ville =secure( $_POST['ville']);
  $quatier =secure( $_POST['quatier']);
  $nbrehabitant =secure( $_POST['nbrehabitant']);
  $superficie =secure( $_POST['superficie']);
  $description =secure( $_POST['decris']);
  $id_user=$_SESSION['nom'].' '.$_SESSION['prenom'];
  echo $id_user;
 if (verifie($continent) AND verifie($pays) AND verifie($ville) AND verifie($quatier)AND verifie($nbrehabitant) AND verifie($superficie) AND verifie($description )  ) {
   $sql= "INSERT INTO lieu(continent,pays,ville,quatier,nbre_hab,surperficie,description) VALUES('$continent','$pays','$ville','$quatier','$nbrehabitant','$superficie','$description' )";
   $result= mysqli_query($conn,$sql);
	 $sqlactivite= "INSERT INTO activite(nom_activite,id_utilisateur,lieu_id_lieu) VALUES('ajout de lieu','$id_user','$ville')";
	 $resultat= mysqli_query($conn,$sqlactivite);

   	if (!$result) {

   		die("Query Failed");
   	}

   	$msg= 'Lieu ajouter';



 }else {
   $msg= 'remplissez tous les champs svp';

}

}


?>
