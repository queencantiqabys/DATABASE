

<div class="row mt-4">
    <!-- row -->
    <?php
      foreach($event as $row) :
    ?>
    <div class="col-lg-4 col-md-6 mt-4 mb-4"><!-- card -->
      <div class="card z-index-2 ">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
          <div class="tengah">
            <img class="shadow-primary border-radius-lg" src="#" alt="" height="160">
          </div>
        </div>
        <div class="card-body">
          <h6 class="mb-0 "><?= $row['event_name']; ?></h6>
          <p class="text-sm "><?= $row['event_description']; ?></p>
          <div style="display:flex; ">
            <i class="material-icons opacity-10">computer</i>
            <p class="mb-0 text-sm " style="margin-left:10px;"><?= $row['event_date']; ?></p>
          </div>

          <div class="sidenav-footer ">
            <div class="">
              <a class="btn bg-gradient-primary mt-4 w-100" href="#" type="button"><?= $row['event_id']; ?>
                Register</a>
            </div>
          </div>
          <!-- <a class="text-sm " href="">Syarat & Ketentuan</a> -->
          <hr class="dark horizontal">
          <div class="d-flex ">
            <i class="material-icons text-sm my-auto me-1">schedule</i>
            <p class="mb-0 text-sm"><?= $row['event_registerdate']; ?> </p>
          </div>
        </div>
      </div>
    </div><!-- end card -->
    <?php
      endforeach;
    ?>
  
</div>

