<?php include('bd.php') ?>
<div class="container" style="margin-Top:20px" id="histo_lieu">
    <h1>historique des activités des utilisateurs</h1>
  <div class="row">
    <div class="col-md-12 col-md-offset-2">
      <table class ="table table-bordered table-hovered">
        <thead>
          <tr>
            <td>ID</td>
            <td>continent</td>
            <td>pays</td>
            <td>ville</td>
            <td>quatier</td>
            <td>habitant</td>
            <td>superficie</td>
            <td>description</td>
            <td>suprimer</td>
          </tr>
        </thead>
        <tbody>
              <?php
                    $sql =$conn->query('SELECT * FROM lieu ') ;
                    while ($data = $sql->fetch_array()) {
                      echo'
                      <tr>
                        <td>'.$data['id_lieu'].'</td>
                        <td>'.$data['continent'].'</td>
                        <td>'.$data['pays'].'</td>
                        <td>'.$data['ville'].'</td>
                        <td>'.$data['quatier'].'</td>
                        <td>'.$data['nbre_hab'].'</td>
                        <td>'.$data['surperficie'].'</td>
                        <td>'.$data['description'].'</td>
                        <td>

                        <a href="index.php?page=supp_user&id='.$data['id_lieu'].'"class="btn btn-danger" style="">
                            <i class="far fa-trash-alt"></i>
                        </a>
                        </td>
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
