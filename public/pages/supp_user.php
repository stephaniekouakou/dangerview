<?php
include("bd.php");

if (isset($_GET['id'])){
    $id=$_GET['id'];

  $query= "DELETE  FROM utilisateur WHERE id_utilisateur = $id";
  $result = mysqli_query($conn,$query);

  if (!$result) {
  die("query failed");
  // code...
  }

 header("location:index.php?page=list_user");
}

if (isset($_GET['id_lieu'])){
    $id=$_GET['id_lieu'];

  $query= "DELETE  FROM lieu WHERE id_lieu = $id";
  $result = mysqli_query($conn,$query);

  if (!$result) {
  die("query failed");
  // code...
  }

 header("location:index.php?page=list_user");
}
