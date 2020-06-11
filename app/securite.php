<?php
function secure ($data)
      {

        $data = (string) $data;
        $data = trim($data);
        $data = strip_tags($data);
        $data = stripcslashes($data);
        $data =  htmlspecialchars($data);

        return $data;
      }


/**
 * fonction qui permet de verifier si une donnee existe et nest pas vide
 */

 function verifie ($donnees)
 {

   $donnees = (string) $donnees;
         if (isset($donnees) && !empty($donnees)) {
           return $donnees;
         }
         else {
           return false;
         }

 }
