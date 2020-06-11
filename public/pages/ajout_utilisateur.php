<?php include("trait_ajout.php") ?>
<div class="container" id="ajout_utilisateur">
<h1>ajouter un utilisateur</h1>
      <div class="container row justify-content-center" id="ajout">

        <div class="">
          <form class="" action="" method="POST">

            <div class="form-group  mb-3">
              <input type="text" name="nom" value="" class="form-control " autocomplete="off" placeholder="Nom">
            </div>
            <div class="form-group  mb-3">
              <input type="text" name="prenom" value="" class="form-control " autocomplete="off" placeholder="Prenom">
            </div>
            <div class="form-group  mb-3">
              <input type="text" name="email" value="" class="form-control " autocomplete="off" placeholder="Email">
            </div>

            <div class="form-group  mb-3">
              <input type="text" name="password" value="" class="form-control " autocomplete="off" placeholder="Mot De Passe">
            </div>

            <div class="form-group  mb-3" id="select">
              <select class="form-control" name="role">
                <option value="utilisateur">utilisateur</option>
                <option value="surperviseur">surperviseur</option>
              </select>
            </div>

            <input type="submit" name="send" value="AJOUTER" class="btn btn-success">

          </form>

          <div class="col-md-12">
            <?php if (isset($message) && !empty($message)) {?>

              <div class="alert alert-success alert-dismissible fade show " role ="alert" id="alert" >
                <?=$message?>
                <button type="button" class="close" data-dismiss="alert" aria-label="close" >&times;</button>

              </div>
              <?php  } ?>
        </div>
      </div>

</div>
