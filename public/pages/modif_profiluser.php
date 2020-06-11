<?php
include("public/pages/bd.php") ;
include('app/securite.php');
  $iduser = $_SESSION['id'];

  if (isset($_SESSION['id']) ) {

    $query= "SELECT * FROM utilisateur WHERE id_utilisateur=$iduser";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
      $row= mysqli_fetch_array($result);
      $nom= $row['nom'];
      $prenom= $row['prenom'];
      $email=$row['email'];
      $role=$row['role'];

  }
    }

    if (isset($_POST['modif'])) {
      $nom= $_POST['nom'];
      $prenom= $_POST['prenom'];
      $email=$_POST['email'];
      $role=$_POST['role'];

    $query = "UPDATE utilisateur set nom='$nom',prenom='$prenom',email='$email',role='$role'
    WHERE id_utilisateur=$iduser ";

    mysqli_query($conn,$query);
    header("location:index.php?page=profil_admin");
    }

if (isset($_POST['valider'])) {
      $erreur ='';
  $mdpactuel = secure($_POST['mdpA']);
  $Cmdpactuel = secure($_POST['CmdpA']);
  $mdpchange= secure($_POST['mdp']);
  $Cmdpchange= secure($_POST['Cmdp']);



  if (verifie($mdpactuel) AND  verifie($Cmdpactuel) AND verifie($mdpchange)  AND verifie($Cmdpchange)) {

          if ($mdpactuel==$Cmdpactuel ) {

            $reqmdp= "SELECT password FROM utilisateur  WHERE id_utilisateur = $iduser";
            $motpass= mysqli_query($conn,$reqmdp);
              if(mysqli_num_rows($motpass)==1){
              $rowa= mysqli_fetch_array($motpass);
               $mdpactuel =sha1( $mdpactuel);
            if( $rowa["password"] == $mdpactuel){

              if ($mdpchange == $Cmdpchange){

                        $Cmdpchange= sha1($Cmdpchange);
                        $req="UPDATE utilisateur SET password= '$Cmdpchange' WHERE id_utilisateur=$iduser ";
                        mysqli_query($conn,$req);
                         $erreur ="votre mot de passe a bien été modifier";

              }else {  $erreur ="vos nouveau mot de passe sont differents!!";}

            }else {$erreur ="mot de passe incorrect"; }

          }else {  $erreur ="vos mot de passe sont differents!!";}

  }else {  $erreur ="remplissez tous les champs svp!!";}

}
}


 ?>

<div class="container" id="modif_profil">

  <form class="" action="" method="POST">
    <fieldset>
      <legend>Modifier vos informations</legend>
    <div class="form-group  mb-3">
      <input type="text" name="nom" value="<?=$nom ?>" class="form-control " autocomplete="off" placeholder="Nom">
    </div>
    <div class="form-group  mb-3">
      <input type="text" name="prenom" value="<?=$prenom ?>" class="form-control " autocomplete="off" placeholder="Prenom">
    </div>
    <div class="form-group  mb-3">
      <input type="text" name="email" value="<?=$email ?>" class="form-control " autocomplete="off" placeholder="Email">
    </div>

    <div class="form-group  mb-3" id="select">
      <select class="form-control" name="role">
        <option value=""><?=$role?></option>
        <option value="utilisateur">utilisateur</option>
        <option value="surperviseur">surperviseur</option>
      </select>
    </div>

    <input type="submit" name="modif" value="MODIFIER" class="btn btn-success">
</fieldset>
  </form>

  <form class="" action="" method="post">

      <fieldset>
        <legend>Verification du mot de passe actuel</legend>
            <div class="in">
              <div class="">
                  <label for="">Entrer le mot de passe actuel*</label>
                </div>
                <input type="password" name="mdpA" value="" class="form-control " autocomplete="off">
              </div>
              <div class="in">
                <div class="">
                    <label for="">Confirmation du mot de passe actuel*</label>
                  </div>
                  <input type="password" name="CmdpA" value="" class="form-control " autocomplete="off">
                </div>
            </fieldset>

        <fieldset>
          <legend>Changement de mot de passe</legend>
                <div class="in">
                  <div class="">
                    <label for="">Entrer le nouveau mot de passe*</label>
                  </div>
                  <input type="password" name="mdp" value="" class="form-control " autocomplete="off">
                </div>
                <div class="in">
                  <div class="">
                    <label for="">Confirmation du nouveau mot de passe*</label>
                  </div>
                  <input type="password" name="Cmdp" value="" class="form-control " autocomplete="off">
                </div>
                <input type="submit" name="valider" value="valider" class="btn btn-primary" autocomplete="off">
      </fieldset>
         <div class="mb-2">

          </div>
    </form>
    <div class="col-md-12">
      <?php if (isset($erreur) and !empty($erreur) ) {?>

        <div class="alert alert-success alert-dismissible fade show " role ="alert" id="alert" >
          <?=$erreur?>
          <button type="button" class="close" data-dismiss="alert" aria-label="close" >&times;</button>

        </div>
        <?php  } ?>
   </div>
</div>
