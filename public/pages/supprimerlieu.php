<?php
include("bd.php");

if (isset($_GET['id']) and isset($_GET['ville'])   ) {
    $id=$_GET['id'];
    $vil=$_GET['ville'];
  $id_user=$_SESSION['email'];
  $query= "DELETE  FROM lieu WHERE id_lieu=$id";
  $result = mysqli_query($conn,$query);
  $sqlactivite= "INSERT INTO activite(nom_activite,id_utilisateur,lieu_id_lieu) VALUES('suppression de lieu','$id_user','$vil')";
  $resultat= mysqli_query($conn,$sqlactivite);

  if (!$result) {
  die("query failed");
  // code...
  }

 header("location:index.php?page=liste_lieu");
}






 ?>
