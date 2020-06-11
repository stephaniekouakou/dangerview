<?php
$nom=$_SESSION['nom'];
$prenom=$_SESSION['prenom'];
$role=$_SESSION['role'];
$email=$_SESSION['email'];
 ?>
<div class="container" id="profil">

  <h2 style=" font-family:lora; color:#B4B3B2" class="">MON PROFIL</h2>

<div class="card">
  <div class="row">

        <p class="title col-sm-5"> <?=$role ?></p>
  </div>

  <h1><?=$nom.' '.$prenom ?></h1>

  <p>EMAIL:<?=$email ?></p>
  <p>mot de passe :<br> <span>******</span> </p>
  <div style="margin: 24px 0;">

  </div>
  <p><a href="<?='index.php?page=modif_profiluser'; ?>"><button >modifier</button></a>  </p>

</div>
