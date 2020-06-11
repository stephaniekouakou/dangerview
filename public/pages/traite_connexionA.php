<?php


if (isset($_POST['submit'])) {

				
	  include("public/pages/bd.php") ;
	  include('app/securite.php');
	$db = mysqli_select_db($conn,'danger_view');
  $email= secure($_POST['email']);
  $password = sha1($_POST['pass']);
  $message = '';
  if (verifie($email) AND verifie($password)   ) {

       if(filter_var($email, FILTER_VALIDATE_EMAIL)){

  $sql = " SELECT *  FROM utilisateur WHERE email ='$email' and password ='$password' ";
  $query = mysqli_query($conn,$sql);

	if ($query->num_rows > 0) {

			while($row =$query->fetch_assoc()) {
				$_SESSION['id']=$row["id_utilisateur"];
	  		$_SESSION['role']=$row["role"];
	  		$_SESSION['nom']=$row["nom"];
				$_SESSION['prenom']=$row["prenom"];
				$_SESSION['email']=$row["email"];

				}

				  header("location:index.php?page=instruction");
} else {$message= 'mot de passe incorect ou email incorect';}

}else {$message='email invalide';}

}else {$message='remplissez tous les champs svp';}


 }




 ?>
