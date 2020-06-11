<?php
  include("bd.php");

  if (isset($_GET['id'])) {
    $id_user = $_SESSION['email'];
    $reqtype="SELECT * FROM dangertype " ;
    $typedangers=mysqli_query($conn,$reqtype);

    $reqacteur="SELECT * FROM acteur " ;
    $acteurs=mysqli_query($conn,$reqacteur);

    $id= $_GET['id'];
    $erreur='';
    $query= "SELECT * FROM dangertable WHERE id_danger=$id";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
      $row= mysqli_fetch_array($result);
      $nom= $row['nom_danger'];
      $dangertype= $row['dangertype'];
      $sexevictime=$row['sexevictime'];
      $source=$row['source'];
      $date_danger=$row['date_danger'];
      $dangertype=$row['dangertype'];
      $acteur=$row['acteur'];
      $lieu=$row['lieu'];
    }


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

        }
      }

      if (isset($_SESSION['ville']) and !empty($_SESSION['ville'])) {
          $lieu=$_SESSION['ville'];
      }

    }

    if (isset($_POST['modifier'])) {
      $nom= $_POST['nom'];
      $dangertype= $_POST['typedange'];
      $sexevictime=$_POST['sexevictime'];
      $source=$_POST['source'];
      $date_danger=$_POST['date'];
      $acteur=$_POST['typeacteur'];
   $query = "UPDATE dangertable set nom_danger='$nom',sexevictime='$sexevictime',source='$source',date_danger='$date_danger',dangertype='$dangertype',acteur='$acteur',lieu='$lieu'
    WHERE id_danger =$id ";
    $sqlactivite= "INSERT INTO activite(nom_activite,id_utilisateur,id_danger) VALUES('modification de danger','$id_user','$dangertype')";
    $resultat= mysqli_query($conn,$sqlactivite);
   mysqli_query($conn,$query);
   header("location:index.php?page=liste_dangers");
  }

    if (isset($_POST['annuler'])) {
        header("location:index.php?page=liste_dangers");
     }


  }


 ?>


 <div class="container" id="modifier">
   <div class="container"id="typedanger">
  <h1 style="text-align:center">modifier les informations</h1>

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
             <?php while ($rowt=mysqli_fetch_array($typedangers)) {?>
                  <option><?= $rowt['libelle']?></option>
             <?php   } ?>
         </select>
         <label for="">Nom du danger</label>
         <input type="text" value="<?= $nom?>" class="form-control mb-3" id="nom" placeholder="" name="nom">
         <label for="">victime</label>
         <input type="text" value="<?=$sexevictime?>"  class="form-control mb-3" id="nom" placeholder="" name="sexevictime">
       </div>
       <div class="col">
           <label for="">sexe responsable</label>
           <select class=" form-control mb-3"name="typeacteur"  >
             <?php while ($rowA=mysqli_fetch_array($acteurs)) {?>
                      <option ><?= $rowA['libelle'] ?></option>
                 <?php   } ?>
           </select>
         <label for="">date</label>
         <input type="date" value="<?= $date_danger?>"  class="form-control mb-3" placeholder="" name="date">
         <label for="">source information</label>
           <input type="text"  value="<?=$source?>" class="form-control mb-3" placeholder="" name="source">
       </div>
     </div>
     <input type="submit" name="modifier" value="Modifier" class="btn btn-success">
      <input type="submit" name="annuler" value="Annuler" class="btn btn-warning" >
   </form>

   <?php if (isset($erreur) and !empty($erreur) ) {?>

     <div class="alert alert-success alert-dismissible fade show " role ="alert" id="alert" style="margin-top:30px; width:400px; margin-left:100px">
       <?=$erreur?>
       <button type="button" class="close" data-dismiss="alert" aria-label="close" >&times;</button>

     </div>
     <?php  } ?>

   </div>

 </div>
