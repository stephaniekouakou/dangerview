<?php
 include('bd.php');
include('app/securite.php');




  $reqtype="SELECT *FROM dangertype " ;
  $typedangers=mysqli_query($conn,$reqtype);

  $reqacteur="SELECT *FROM acteur " ;
  $acteur=mysqli_query($conn,$reqacteur);

  $output="";
  $outputquatier="";
  $outputid="";
  $lieu='';
  if (isset($_POST['q']) and !empty($_POST['q'])) {
    $search=$_POST['q'];
    $search= htmlspecialchars($search);

      $req="SELECT * FROM lieu WHERE ville LIKE'%$search%'";
      $query = mysqli_query($conn,$req);

    if ($query->num_rows==0) {
      $output="pas de resultat";
    }else {
      while ($row = mysqli_fetch_array($query)) {
      $ville=$row['ville'];
      $quatier=$row['quatier'];
      $id = $row['id_lieu'];
      $pays = $row['pays'];
      $output.='<span class="">'.$ville.'<span>  quatier </span>'.$quatier.'</span';
      $outputquatier=$quatier;
      $_SESSION['ville']=$ville .' quatier '.$quatier;
      }
    }
  }
  if (isset($_SESSION['ville']) and !empty($_SESSION['ville'])) {
      $lieu=$_SESSION['ville'];
  }


       $id_user=$_SESSION['email'];

       $erreur = "";
      if (isset($_POST['annuler'])) {
              header("location:index.php?page=enregistre_lieu");
           }


      if (isset($_POST['ajoutdanger'])) {

        $typedanger= secure($_POST['typedange']);
        $nom = secure($_POST['nom']);
        $sexevictime = secure($_POST['sexevictime']);
        $typeacteur= secure($_POST['typeacteur']);
        $date = secure($_POST['date']);
        $source= secure($_POST['source']);

      if (verifie($typedanger) and verifie($nom) and verifie($sexevictime)and verifie($typeacteur)and verifie($date )and verifie($source) ){

        $sql= "INSERT INTO dangertable(nom_danger,sexevictime,source,date_danger,dangertype,acteur,lieu)
         VALUES('$nom','$sexevictime','$source','$date','$typedanger','$typeacteur','$lieu')";
         $result= mysqli_query($conn,$sql);
         $sqlactivite= "INSERT INTO activite(nom_activite,id_utilisateur,id_danger) VALUES('ajout de danger','$id_user','$typedanger')";
         $resultat= mysqli_query($conn,$sqlactivite);
        if (!$result) {
            die("Query Failed");
        }
            $erreur = "Danger enregistré avec succes ";// code...

      }else {
         $erreur = "remplissez tous les champs svp ";
      }

      }



?>



<div class="container"id="typedanger">


<h4>Enregistrer un danger dans la ville de :<?php print("$output"); ?><strong style="color:#FFA208; text-transform:uppercase;" > </strong></h4>
<form action="" method="POST">
  <label for="gsearch">recherher une ville:</label>
  <input type="search" id="gsearch" name="q">
  <input type="submit" value="valider" >
</form>


<form class="" method="POST" action="">

  <div class="row ">
    <div class="col">
      <label for="">type de danger</label>
      <select class=" form-control mb-3" name="typedange">

          <?php while ($row=mysqli_fetch_array($typedangers)) {?>
               <option ><?= $row['libelle'] ?></option>
          <?php   } ?>
      </select>
      <label for="">description du danger</label>
      <input type="text" class="form-control mb-3" id="nom" placeholder="" name="nom">
      <label for="">victime</label>
      <input type="text" class="form-control mb-3" id="nom" placeholder="" name="sexevictime">
    </div>
    <div class="col">
        <label for="">sexe responsable</label>
        <select class=" form-control mb-3"name="typeacteur" >
          <?php while ($rowA=mysqli_fetch_array($acteur)) {?>
                   <option ><?= $rowA['libelle'] ?></option>
              <?php   } ?>
        </select>
      <label for="">date</label>
      <input type="date" class="form-control mb-3" placeholder="" name="date">
      <label for="">source information</label>
        <input type="text" class="form-control mb-3" placeholder="" name="source">
    </div>
  </div>
  <input type="submit" name="ajoutdanger" value="Enregistrer" class="btn btn-success">
   <input type="submit" name="annuler" value="Annuler" class="btn btn-warning" >
</form>

<?php if (isset($erreur) and !empty($erreur) ) {?>

  <div class="alert alert-success alert-dismissible fade show " role ="alert" id="alert" style="margin-top:30px; width:400px; margin-left:100px">
    <?=$erreur?>
    <button type="button" class="close" data-dismiss="alert" aria-label="close" >&times;</button>

  </div>
  <?php  } ?>

</div>
