

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
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Event Id</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Event role</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Event Img</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Event Date</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Event Description</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">start time</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">end time</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>




                  <?php
                    $events=select("select * from events");
                    foreach($events as $event) :
                  ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm upper"><?= $event['event_id']; ?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0 upper"><?= $event['event_name']; ?></p>
                      </td>

                      <td>
                        <span class="text-xs font-weight-bold"><?= $event['event_img']; ?></span>
                      </td>

                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold"><?= $event['event_date']; ?></span>
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
                            <h6 class="mb-0 text-sm upper"><?= $event['event_description']; ?> </h6>
                          </div>
                        </div>
                      </td>
      
                      <td>
                        <div class="d-flex px-2">
                          <div>
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm upper"><?= $event['waktu_mulai']; ?> </h6>
                          </div>
                        </div>
                      </td>
      
                      <td>
                        <div class="d-flex px-2">
                          <div>
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm upper"><?= $event['waktu_selesai']; ?></h6>
                          </div>
                        </div>
                      </td>
      
                      <td>
                        <div class="d-flex px-2">
                          <div>
                          </div>
                          <div class="my-auto">
                            <a href="action/event.php?event=<?= $event['event_id']; ?>"><i class='fas fa-pen px-1' style=''></i></a>
                            <a href=""><i class="fa fa-trash-o px-1"></i></a>
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
      <div class="sidenav-footer ">
        <div class="">
          <a class="btn bg-gradient-info mt-4 w-100" href="" type="button">
                tambahkan </a>
        </div>
      </div>

