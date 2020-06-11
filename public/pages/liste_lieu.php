<?php
  include('bd.php');
 ?>
<div class="container" id="liste_lieu">
  <div class="container">
    <h1>liste des lieux enregistrés</h1>
      <div class="row">

          <div class="col-md-12">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>continent</th>
                  <th>pays</th>
                  <th>ville</th>
                  <th>quatier</th>
                  <th>nombre d'habitant</th>
                  <th>superficie</th>
                  <th>description</th>
                    <th>mod/supp</th>
                </tr>
              </thead>
              <tbody>

              <?php
                  $query= "SELECT * FROM lieu";
                  $result_task = mysqli_query($conn,$query);

                  while($row=mysqli_fetch_array($result_task)){ ?>
                      <tr>
                          <td><?php echo $row['continent'] ;?></td>
                          <td><?php echo $row['pays'] ;?></td>
                          <td><?php echo $row['ville'] ;?></td>
                          <td><?php echo $row['quatier'] ;?></td>
                          <td><?php echo $row['nbre_hab'] ;?></td>
                          <td><?php echo $row['surperficie'] ;?></td>
                          <td><?php echo $row['description'] ;?></td>

                          <td>
                          <?php $rowid=$row['id_lieu'];
                                $rowville=$row['ville'];

                           ?>
                              <a href="<?='index.php?page=modifierlieu&ville='.$rowville.'&id='.$rowid.''?>" class="btn btn-secondary" style="">
                                <i class="fas fa-marker"></i>
                              </a>
                              <a href="<?='index.php?page=supprimerlieu&ville='.$rowville.'&id='.$rowid.''?>"   class="btn btn-danger" style="">
                                  <i class="far fa-trash-alt"></i>
                              </a>
                          </td>
                      </tr>

                <?php } ?>




              </tbody>
              <tfoot>

              </tfoot>

            </table>
          </div>
      </div>
</div>
