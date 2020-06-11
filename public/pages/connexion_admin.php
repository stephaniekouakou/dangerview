
<?php
      include("traite_connexionA.php");
?>


<div class="container row d-flex flex-row justify-content-center">

  <div class="admin-form shadow p-4">

    <form class="" action="" method="POST">
          <div class="form-group  mb-3">
            <label for=""> Votre Email:</label>
            <input type="text" name="email" value="" class="form-control " autocomplete="off">
          </div>
          <div class="form-group mb-3">
            <label for="">Mot de Passe:</label>
            <input type="text" name="pass" value="" class="form-control" autocomplete="off">
          </div>
          <input type="submit" class="btn btn-success" name="submit" value="connexion">
    </form>
  </div>



</div>
<div class="col-md-8 row  justify-content-center " id="form">
  <?php if (isset($message) and !empty($message)) {?>

    <div class="alert alert-success alert-dismissible fade show " role ="alert" id="alert" >
      <?=$message?>
      <button type="button" class="close" data-dismiss="alert" aria-label="close" >&times;</button>

    </div>
    <?php  } ?>
</div>
