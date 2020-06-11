<?php include("traite_enregistre.php") ?>
<div class="container" id="enregistre_lieu">
  <h1 class="" style="text-align:center;">Ajouter un lieu</h1>
  <div class="col-md-12">
    <?php if (isset($msg) and !empty($msg) ) {?>

      <div class="alert alert-success alert-dismissible fade show " role ="alert" id="alert" >
        <?=$msg?>
        <button type="button" class="close" data-dismiss="alert" aria-label="close" >&times;</button>

      </div>
      <?php  } ?>
 </div>
  <form class="" action="" method="POST">
  <div class="row form-group" id="lieu">

    <div class="col">
      <input type="text" class="form-control mb-3" id="sexe" placeholder="continent" name="continent">
      <input type="text" class="form-control mb-3" placeholder="pays" name="pays">
        <input type="text" class="form-control mb-3" placeholder="ville" name="ville">
    </div>
    <div class="col">
      <input type="text" class="form-control mb-3" id="sexe" placeholder="quatier" name="quatier">
      <input type="text" class="form-control mb-3" placeholder="nombre habitant" name="nbrehabitant">
        <input type="text" class="form-control mb-3" placeholder="superficie" name="superficie">
    </div>

  </div>
  <div class="row form-group " id="description">
     <textarea name="decris" rows="4" cols="50" placeholder="description Du lieu" class="form-control"></textarea>
     <button type="button" name="button" class="btn btn-secondary" >images</button>
     <button type="button" name="button" class="btn btn-secondary" > carte</button>

  </div>
  <div class="" id="submit">
    <input type="submit" name="ajoutlieu" value="Enregistrer" class="btn btn-success">

  </div>
      </form>


</div>
