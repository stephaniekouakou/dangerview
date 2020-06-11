<?php
  include('bd.php');
 ?>
<div class="" id="listedangers">
  <div class="container">
    <h1>liste des dangers enregistrés</h1>
			<div class="row">

					<div class="col-md-12">
						<table class="table table-bordered">
							<thead>
								<tr>
                  <th>type de danger</th>
									<th>description du danger</th>
									<th>victme</th>
									<th>source</th>
									<th>date</th>
                  <th>type d'acteur</th>
                  <th>lieu</th>
                    <th>mod/supp</th>
								</tr>
							</thead>
							<tbody>

							<?php
									$query= "SELECT * FROM dangertable";
									$result_task = mysqli_query($conn,$query);

									while($row=mysqli_fetch_array($result_task)){ ?>
											<tr>
													<td><?php echo $row['dangertype'] ;?></td>
													<td><?php echo $row['nom_danger'] ;?></td>
													<td><?php echo $row['sexevictime'] ;?></td>
                          <td><?php echo $row['source'] ;?></td>
                          <td><?php echo $row['date_danger'] ;?></td>
                          <td><?php echo $row['acteur'] ;?></td>
                          <td><?php echo $row['source'] ;?></td>

													<td>
                          <?php $rowid=$row['id_danger'];
                                $rowtype=$row['dangertype'];
                           ?>

															<a href="<?='index.php?page=modifier&id='.$rowid.''?>" class="btn btn-secondary" style="">
																<i class="fas fa-marker"></i>
															</a>
															<a href="<?='index.php?page=supprimer&type='.$rowtype.'&id='.$rowid.''?>"   class="btn btn-danger" style="">
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
