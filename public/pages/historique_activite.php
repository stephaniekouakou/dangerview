<?php include('bd.php') ?>
<div class="container" style="margin-Top:20px">
    <h1>historique des activités des utilisateurs</h1>
  <div class="row">
    <div class="col-md-12 col-md-offset-2">
      <table class ="table table-bordered table-hovered">
        <thead>
          <tr>
            <td>ID</td>
            <td>ACTION</td>
            <td>NOM OU EMAIL DE L'UTILISATEUR</td>
            <td>DATE</td>
          </tr>
        </thead>
        <tbody>
              <?php
                    $sql =$conn->query('SELECT * FROM activite') ;
                    while ($data = $sql->fetch_array()) {
                      echo'
                      <tr>
                        <td>'.$data['id_activite'].'</td>
                        <td>'.$data['nom_activite'].'</td>
                        <td>'.$data['id_utilisateur'].'</td>
                        <td>'.$data['date'].'</td>
                      </tr>

                      ';
                    }
               ?>
        </tbody>
      </table>

    </div>

  </div>

</div>
<script
    src="http://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous">
  </script>
<script type="text/javascript" src="public/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="public/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
 $(document).ready(function(){
   $(".table").DataTable({
      "ordering":false,
      "searching":true,
      "paging":true,
      "columnDerfs":[{
        "targets":0,
        "searchable":true,
        "visible":true
      }],
      "order":[[2,"desc"]]

   });

 });
</script>
