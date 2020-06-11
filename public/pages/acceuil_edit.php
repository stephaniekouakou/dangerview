
<div class="container" id="acceuil_edit">

  <h1>bienvenue,Editeur <?= $_SESSION['nom'] ?></h1>
  <h5 style="text-align:center; margin-top:20px; margin-left:-100px;color:#FEC400">ACTIVITES</h5>
  <div class="row md-10" id="block">

    <div class="btn-group-vertical">
      <div class="btn-group " >
      <a href="<?='index.php?page=enregistre_lieu'; ?>">  <button type="button" class="btn btn-primary" name="ajouter">
          AJOUTER UN LIEU
        </button></a>

      </div>
      <div class="btn-group">
        <a href="<?='index.php?page=engr_typedanger'; ?>">  <button type="button" class="btn btn-primary"name="ajouter">
            AJOUTER UN DANGER DANS UNE ZONE
          </button></a>
      </div>

    </div>

  </div>
</div>
