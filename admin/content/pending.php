<?php
    $result=select("select * from register "  );
    
?>

<div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Events Result</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Event Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Register Date</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Requirement</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                      
                    </tr>
                  </thead>
                  <tbody>


                  <?php
                  
                    foreach($result as $row) :
                        $eventid=$row['event_id'];
                        $events=mysqli_query($conn,"select event_name from events where event_id =$eventid ");
                        $event=mysqli_fetch_assoc($events);
                        
                        
                        $userId=$row['user_id'];
                        $users=mysqli_query($conn,"select user_name from users where user_id =$userId ");
                        $user=mysqli_fetch_assoc($users);
                        
                        
                  ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm upper"><?= $user['user_name']; ?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0 upper"><?= $event['event_name']; ?></p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold upper"><?= $row['register_date']; ?></span>
                      </td>

                      <td>
                        <div class="d-flex px-2">
                          <div>
                          </div>
                          <div class="my-auto d-flex justify-content-center">
                            <img class="rounded-3" src="../directory/users/<?= $row['register_req']; ?>" alt="persyaratan" width="160px"data-bs-toggle="modal" data-bs-target="#img">

                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                          </div>
                          <div class="my-auto d-flex justify-content-center">
                            <!-- <button class="rounded-3" src="../directory/users/<?= $row['register_req']; ?>" alt="persyaratan" > -->
                            <?php
                              if($row['register_acc']==0):
                            ?>
                            <button width="160px"data-bs-toggle="modal" data-bs-target="#acc" class="btn btn-success">ACC</button>
                            <?php
                              else:
                            ?>
                            <button width="160px" class="btn btn-info">TERDAFTAR</button>
                            <?php
                              endif;
                            ?>

                          </div>
                        </div>
                      </td>
      
                    </tr>

  <!-- =============================================( MODAL )=================================================================== -->
                      </div>

                      <!-- The Modal -->
                      <div class="modal fade" id="img">
                        <div class="modal-dialog ">
                              <img class="rounded-1"   src="../directory/users/<?= $row['register_req']; ?>" alt="" width="600px">
                        </div>
                      </div>

<!-- The Modal -->
<div class="modal fade" id="acc">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">



      <!-- Modal Header -->
      <form action="action/acc_register.php" method="post">
      <div class="modal-header">
        <h4 class="modal-title">Acc Pendaftaran</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p>Apakah anda yakin ingin menerima pendaftar?</p>
        <input type="hidden" value="<?= $row['register_id']; ?>" name="register_id">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" name="submit" >Terima</button>
      </div>
      </form>

    </div>
  </div>
</div>

                      


                    <?php
                        endforeach;
                    ?>
                    
                    
                    
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>