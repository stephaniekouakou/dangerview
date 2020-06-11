<?php
SESSION_START();
require "app/loading.php";
define("DS", DIRECTORY_SEPARATOR);
$tabl = Loading("public".DS."pages".DS);


if (isset($_GET["page"]))
 {
 	$vue = $_GET["page"];
 }
 else
 {
 	$vue = "connexion_admin";
 }


 ob_start();

 if (in_array($vue, $tabl))
 {

 	require "public".DS."pages".DS.$vue.".php";
 }
 else
 {
 	require "public".DS."error".DS."eror.php";
 }

 $content = ob_get_clean();

 $templ1 = array("acceuil","deconnexion","historique_activite","acceuil","list_user","profil_admin","supp_user","historique_lieu","messages","modif_profil","ajout_utilisateur");
 $templ2=array("enregistre_lieu","engr_typedanger","liste_danger","deconnect_edit","acceuil_edit","ajoutertype","liste_dangers","supprimer","modifier","liste_lieu","supprimerlieu","modifierlieu","profile","modif_profiluser");
 $templ3=array("connexion_admin","instruction");
  if(in_array($vue, $templ1)){require "public".DS."templates".DS."t_admin.php";}
  elseif(in_array($vue, $templ2)){require "public".DS."templates".DS."t_utilisateur.php";}
  elseif(in_array($vue, $templ3)){require "public".DS."templates".DS."header.php";}
