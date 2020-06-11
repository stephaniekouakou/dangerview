<?php
if ( isset($_SESSION['email']) and isset($_SESSION['role'] ) and isset($_SESSION['nom']) ) {

  if ($_SESSION['role']=='utilisateur') {

    header("location:index.php?page=acceuil_edit");

  }else if ($_SESSION['role']=='surperviseur'){
      header("location:index.php?page=acceuil");
  }

}
