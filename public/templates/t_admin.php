<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>page administrateur</title>
    <!-- boostrap 4 -->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<!-- fontawesome -->
  <script src="https://kit.fontawesome.com/a72d38c84f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="public/css/style_admin.css">
  <link rel="stylesheet" href="public/css/dataTables.bootstrap.min.css">
  </head>

  <body>
  <div class="container-fluid" >
    <div class="row no-gutter">

      <div class="col-sm-3 col-md-3 col-lg-3  " id="part_one">

        <div class="" id="bloc1">
          <img src="public/img/logo.png" class="img-fluid"  alt="">
        </div>

        <nav class=" " id="" >

            <ul class="navbar-nav">
                <li class="active nav-item"><a href="<?='index.php?page=acceuil'; ?>" class="nav-link"><img src="public/img/home.png" alt="" >Accueil</a></li>
                <li class="active nav-item"><a href="<?='index.php?page=historique_activite'; ?>"><img src="public/img/job-search.png" alt="">Voire les activités</a></li>
                <li class="active nav-item"><a href="<?='index.php?page=historique_lieu'; ?>"><img src="public/img/contract.png" alt="">Historique des lieu</a></li>
                <li class="active nav-item"><a href="<?='index.php?page=messages'; ?>"><img src="public/img/test.png" alt="">Messages</a></li>
                <li class="active nav-item"><a href="<?='index.php?page=list_user'; ?>"><img src="public/img/report.png" alt="">Liste des utilisateurs</a></li>
                <li class="active nav-item"><a href="<?='index.php?page=ajout_utilisateur'; ?>"><img src="public/img/report.png" alt="">Ajouter un utilisateur</a></li>
                <li class="active nav-item"><a href="<?='index.php?page=profil_admin'; ?>"><img src="public/img/report.png" alt="">Mon Profil</a></li>

            </ul>

        </nav>

      </div>

	    <div class="col-sm-9 col-md-9 col-lg-9 no-gutter "  id="part_two">

          <div class=" no-gutter" id="header">
              <div class="" id="aa">
                <a href="<?='index.php?page=deconnexion'; ?>" class="btn btn-danger btn-sm">Deconnexion</a>
              </div>
          </div>


        <div class="" id="body">
                <?=$content; ?>
        </div>

      </div>

  </div>

  </div>



  </body>
</html>
