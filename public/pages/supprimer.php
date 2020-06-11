<?php
include("bd.php");

if (isset($_GET['id']) and isset($_GET['type']) ) {
    $id=$_GET['id'];
    $type = $_GET['type'];
    $message='';
    $id_user=$_SESSION['email'];
$query= "DELETE  FROM dangertable WHERE id_danger=$id";
$result = mysqli_query($conn,$query);
$sqlactivite= "INSERT INTO activite(nom_activite,id_utilisateur,id_danger) VALUES('suppression de danger','$id_user','$type')";
$resultat= mysqli_query($conn,$sqlactivite);
if (!$result) {
  die("query failed");
  // code...
}

header("location:index.php?page=liste_dangers");

}


 ?>



 ?>
