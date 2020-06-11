<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
  <link rel="stylesheet" href="public/css/style_headers.css">
  </head>
  <body>

    <div class="container-fluid center-div">
      <div class="heading text-center text-uppercase text-white mb-5 col" id="entete">
          <h2>DANGER VIEW ENGINE</h2>
      <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="<?='index.php?page=connexion_admin'; ?>">connexion</a>
    </li>

  </ul>
</div>
       </div>

      <div class="body" >
            <?=$content; ?>
      </div>

    </div>

  </body>
</html>
