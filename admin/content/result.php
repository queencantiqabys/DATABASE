<?php
    $result=select("select * from result order by score desc");
    
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
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Grade</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Score</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Sekolah</th>
                      
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
                        <span class="text-xs font-weight-bold upper"><?= $row['grade']; ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold"><?= $row['score']?>%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: <?= $row['score']?>%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm upper"><?= $data['user_school']; ?></h6>
                          </div>
                        </div>
                      </td>
      
                    </tr>
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