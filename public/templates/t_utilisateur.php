
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
  <link rel="stylesheet" href="public/css/style_utilisateurs.css">
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

                <li class="active nav-item"><a href="<?='index.php?page=acceuil_edit'; ?>" class="nav-link"><img src="public/img/home.png" alt="" >Accueil</a></li>
                  <li class="active nav-item"><a href="<?='index.php?page=ajoutertype'; ?>"><img src="public/img/contract.png" alt="">Ajouter un type de danger </a></li>
                  <li class="active nav-item"><a href="<?='index.php?page=liste_dangers'; ?>"><img src="public/img/report.png" alt="">Afficher dangers enregistrés</a></li>
                  <li class="active nav-item"><a href="<?='index.php?page=liste_lieu'; ?>"><img src="public/img/report.png" alt="">Afficher lieux enregistrés</a></li>
                <li class="active nav-item"><a href=""><img src="public/img/job-search.png" alt="">Editer un graphique</a></li>
                <li class="active nav-item"><a href="<?='index.php?page=profile'; ?>"><img src="public/img/user-48.png" alt="">Profil</a></li>


            </ul>

        </nav>

      </div>

	    <div class="col-sm-9 col-md-9 col-lg-9 no-gutter "  id="part_two">

          <div class=" no-gutter" id="header">
              <div class="" id="aa">
                <a href="<?='index.php?page=deconnect_edit'; ?>" class="btn btn-danger btn-sm">Deconnexion</a>
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
