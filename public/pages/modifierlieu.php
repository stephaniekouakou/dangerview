<?php
include('bd.php');

if (isset($_GET['id']) and isset($_GET['ville']) ) {

  $id_user = $_SESSION['email'];
  $id= $_GET['id'];

  $query= "SELECT * FROM lieu WHERE id_lieu=$id";
  $result = mysqli_query($conn,$query);
  if(mysqli_num_rows($result)==1){
    $row= mysqli_fetch_array($result);
    $continent= $row['continent'];
    $pays= $row['pays'];
    $ville=$row['ville'];
    $quatier=$row['quatier'];
    $superficie=$row['surperficie'];
    $descrip=$row['description'];
    $habitant=$row['nbre_hab'];

}

    if (isset($_POST['annule'])) {
      header("location:index.php?page=liste_lieu");
     }

    if (isset($_POST['modifie'])) {
      $continent= $_POST['continent'];
      $pays= $_POST['pays'];
      $ville=$_POST['ville'];
      $quatier=$_POST['quatier'];
      $superficie=$_POST['superficie'];
      $descrip=$_POST['decris'];
      $habitant=$_POST['nbrehabitant'];

    $query = "UPDATE lieu set continent='$continent',pays='$pays',ville='$ville',quatier='$quatier',nbre_hab='$habitant',surperficie='$superficie',description='$descrip'
    WHERE id_lieu=$id ";
    $sqlactivite= "INSERT INTO activite(nom_activite,id_utilisateur,id_danger) VALUES('modification de lieu','$id_user','$ville')";
    $resultat= mysqli_query($conn,$sqlactivite);
    mysqli_query($conn,$query);
    header("location:index.php?page=liste_lieu");
    }


  }

 ?>
<div class="container" id="modifie_lieu">
  <h1 style="text-align:center">modifier le lieu</h1>
  <form class="" action="" method="POST">
  <div class="row form-group" id="lieu">

    <div class="col">
      <input type="text" class="form-control mb-3" value="<?=$continent?>" id="sexe" placeholder="continent" name="continent">
      <input type="text" class="form-control mb-3" value="<?=$pays?>" placeholder="pays" name="pays">
        <input type="text" class="form-control mb-3" value="<?=$ville?>" placeholder="ville" name="ville">
    </div>
    <div class="col">
      <input type="text" class="form-control mb-3" value="<?=$quatier?>" id="sexe" placeholder="quatier" name="quatier">
      <input type="text" class="form-control mb-3" value="<?=$habitant?>" placeholder="nombre habitant" name="nbrehabitant">
        <input type="text" class="form-control mb-3" value="<?=$superficie?>" placeholder="superficie" name="superficie">
    </div>

  </div>
  <div class="row form-group " id="description">
     <textarea name="decris" rows="4" cols="50" placeholder="" class="form-control"><?=$descrip?></textarea>
     <button type="button" name="button" class="btn btn-secondary">images</button>
     <button type="button" name="button" class="btn btn-secondary"> carte</button>

  </div>
  <div class="" id="submit">
    <input type="submit" name="modifie" value="Modifier" class="btn btn-success">
   <input type="submit" name="annule" value="Annuler" class="btn btn-primary">
  </div>
      </form>

</div>
