<?php
include('bd.php');
$sql="select count(*) as total from utilisateur";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($result);

 ?>
<div class="container" id="content_acceuil">

  <h1 style="text-transform:capitalize">bienvenue, Admin <?= $_SESSION['nom'].' '.$_SESSION['prenom'] ?></h1>
  <div class="" id="dd">


  <div class="" id="crow1">
    <div id="bloc1" class="col-5">
        <img src="public/img/contract.png"  alt="">
        <p id="titre"> Nombre de lieu enregistré</p>
        <p id="nombre">200</p>
    </div>
    <div id="bloc2" class="col-5">
      <img src="public/img/alert.png" width="22Opx" height="40px" alt="">
      <p id="titre">Nombre de Danger Enregistré</p>
      <p id="nombre">200</p>
    </div>
  </div>
  <div id="crow2">
    <div id="bloc3" class="col-5">
      <img src="public/img/search.png" width="22Opx" height="40px" alt="">
      <p id="titre">Nombre de visites</p>
      <p id="nombre">200</p>

    </div>
    <div id="bloc4" class="col-5">
      <img src="public/img/businessman.png" width="22Opx" height="40px" alt="">
      <p id="titre">Nombre utilisateur</p>
      <p id="nombre"><?= $data['total']; ?></p>

    </div>
  </div>
  </div>
</div>
