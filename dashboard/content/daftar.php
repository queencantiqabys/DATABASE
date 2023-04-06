<?php
    $eventId=$_GET['event'];
    $userId=$_SESSION['user'];

    $users=mysqli_query($conn,"select * from users where user_id=$userId");
    $user=mysqli_fetch_assoc($users);
    
    $events=mysqli_query($conn,"SELECT event_description,event_name, DATE_FORMAT(waktu_mulai, '%H:%i:%s') AS start_time, DATE_FORMAT(waktu_selesai, '%H:%i:%s') AS end_time 
    FROM events 
    WHERE event_id =$eventId;
    ");
    $event=mysqli_fetch_assoc($events);

    // SELECT DATE_FORMAT(waktu_mulai, '%d %H:%i:%s') AS event_datetime
    // FROM events;

?>
<div class="page-header align-items-start min-vh-100" >
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">


          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">REGISTER <br><?= $event['event_name']; ?></h4>
                  <div class="row mt-3">
                    <div class="col-2 text-center ms-auto">
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">


                <form role="form" class="text-start" action="register/register.php" method="post">


                    <label class="form-label upper">NAMA :   <?= $user['user_name']; ?></label><br>


                    <label class="form-label ">EMAIL :   <?= $user['user_email']; ?></label><br>
                    
                    <label class="form-label upper ">SCHOOL :  <?= $user['user_school']; ?></label><br>
                    <hr class="horizontal light mt-0 mb-2">

                    <label class="form-label upper "><?= $event['event_name']; ?></label><br>
                    
                    <label class="form-label upper ">DESKRIPSI EVENT <br> "<?= $event['event_description']; ?>"</label><br>
                    
                    <label class="form-label upper ">mulai : <?= $event['start_time']; ?></label><br>

                    <label class="form-label upper ">selesai : <?= $event['end_time']; ?></label><br>
                    <hr class="horizontal light mt-0 mb-2">

<!-- ====================================================( DATA YANG AKAN DIKIRIMKAN )============================================================== -->
<input type="hidden" name="event_id" value="<?= $eventId; ?>">
<input type="hidden" name="user_id" value="<?= $userId; ?>">

<div class="mb-3">
    <label for="formFileSm" class="form-label">UPLOAD SYARAT</label>
    <input class="form-control form-control-sm" id="formFileSm" type="file" name="register_req" >
</div>
<!-- ====================================================( DATA YANG AKAN DIKIRIMKAN )============================================================== -->


                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2" name="submit">DAFTAR UJIAN</button>
                  </div>

                </form>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>