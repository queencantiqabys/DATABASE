

<div class="row mt-4">
    <!-- row -->

    <?php

      foreach($registers as $register) :
        $userEvent=$register['event_id'];
        $jadwal=select("SELECT* FROM events where event_id = $userEvent");
        foreach($jadwal as $row) :

    ?>
    <div class="col-lg-4 col-md-6 mt-4 mb-4"><!-- card -->
      <div class="card z-index-2 ">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
          <div class="tengah">
            <img class="shadow-primary border-radius-lg" src="../directory/events/<?= $row['event_img']; ?>" alt="" height="160">
          </div>
        </div>
        <div class="card-body">
          <h6 class="mb-0 up  per"><?= $row['event_name']; ?></h6>
          <p class="text-sm upper"><?= $row['event_description']; ?></p>
          <div style="display:flex; ">
            <i class="material-icons opacity-10">computer</i>
            <p class="mb-0 text-sm " style="margin-left:10px;"><?= $row['event_date']; ?></p>
          </div>

          <div class="sidenav-footer ">
            <div class="">
              <a class="btn bg-gradient-success mt-4 w-100" href="../ujian/val.php?event=<?= $row['event_id']; ?>" type="button">
                MULAI UJIAN</a>
            </div>
          </div>

          <!-- <div class="sidenav-footer ">
            <div class="">
              <a class="btn bg-gradient-warning mt-4 w-100" href="../ujian/index.php?event=<?= $row['event_id']; ?>" type="button">
                PENDING</a>
            </div>
          </div> -->
          <!-- <a class="text-sm " href="">Syarat & Ketentuan</a> -->
          <hr class="dark horizontal">
          <div class="d-flex ">
            <i class="material-icons text-sm my-auto me-1">schedule</i>
            <p class="mb-0 text-sm"><?= $row['waktu_mulai']; ?> - <?= $row['waktu_selesai']; ?></p>
          </div>
        </div>
      </div>
    </div><!-- end card -->
    <?php
            endforeach;
      endforeach;
    ?>

    <?php

      foreach($pending as $result) :
        $userEvent=$result['event_id'];
        $jadwal=select("SELECT* FROM events where event_id = $userEvent");
        foreach($jadwal as $row) :

    ?>
    <div class="col-lg-4 col-md-6 mt-4 mb-4"><!-- card -->
      <div class="card z-index-2 ">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
          <div class="tengah">
            <img class="shadow-primary border-radius-lg" src="#" alt="" height="160">
          </div>
        </div>
        <div class="card-body">
          <h6 class="mb-0 up  per"><?= $row['event_name']; ?></h6>
          <p class="text-sm upper"><?= $row['event_description']; ?></p>
          <div style="display:flex; ">
            <i class="material-icons opacity-10">computer</i>
            <p class="mb-0 text-sm " style="margin-left:10px;"><?= $row['event_date']; ?></p>
          </div>

          <div class="sidenav-footer ">
            <div class="">
              <a class="btn bg-gradient-warning mt-4 w-100" href="" type="button">
                PENDING</a>
            </div>
          </div>
          <!-- <a class="text-sm " href="">Syarat & Ketentuan</a> -->
          <hr class="dark horizontal">
          <div class="d-flex ">
            <i class="material-icons text-sm my-auto me-1">schedule</i>
            <p class="mb-0 text-sm"><?= $row['waktu_mulai']; ?> - <?= $row['waktu_selesai']; ?></p>
          </div>
        </div>
      </div>
    </div><!-- end card -->
    <?php
            endforeach;
      endforeach;
    ?>


</div>

