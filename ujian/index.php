<?php


session_start();
if(!isset($_COOKIE['ujian'])){
  header("Location: ../dashboard/");
}
include "../controller/controller.php";
// ======================= DEKLARASI VARIABEL ==========================
$_GET['pil']=(isset($_GET['pil']))? $_GET['pil'] : "";;


$soal=(isset($_GET['soal']))? $_GET['soal'] : 1;
$pilihan=(isset($_GET['pilihan']))? $_GET['pilihan'] : "0";

$userId=$_SESSION['user'];
// var_dump($userId);
$eventId=$_GET['event'];

$attemp=mysqli_query($conn,"SELECT * FROM result where user_id =$userId AND event_id=$eventId ");
if(mysqli_num_rows($attemp)>0)// cek apakah telah ada di table result atau belum
{
  header("Location: ../dashboard/index.php?3");
}


$totalHalaman=count(select("SELECT * FROM questions where event_id =$eventId   ")); // varibel untuk menampilkan halaman
$awalHalaman=(isset($_GET['soal']))? $_GET['soal'] : 1; //
$active=$awalHalaman-1;
          
      // ===============================================================
      //kalau pilihan di klik maka akan membuat cookie dengan index [soal] dan value $pilihan 
      // ===============================================================

      $result=select("SELECT * FROM questions where event_id =$eventId ORDER BY question_id ASC ");  // varibel untuk menampilkan soal dan pilihan
      
      
      ?>
<!-- // ============================================================================================================================================= -->

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    UJIAN DATABASE
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.0.5" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <style>.box{max-width:10px; min-width: 10px;  } </style>
</head>

<body class="g-sidenav-show  bg-gray-200" data-bs-spy="scroll" data-bs-target="#finish">
  <!-- ===========================================================( SIDE BAR )========================================================= -->
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark ps-auto" id="sidenav-main" style="min-width: 20vw;">
    <div class="sidenav-header d-flex justify-content-center">

    <div class="btn bg-gradient-danger px-6 mt-4" type="button" id="countdown" href="#finish"></div>
    <!-- <a class="btn bg-gradient-primary mt-4 w-100 " href="#finish" type="button" >SELESAIKAN </a> -->


    </div>
    <hr class="horizontal light mt-0 mb-2">

    <div class="sidenav-footer d-flex justify-content-center">
      <div class="ms-2"style="max-width:50vh">
    <?php for ($i=1; $i <=$totalHalaman; $i++) : ?>

    <!-- ==================================================================================================================== -->
    <a class="btn bg-gradient-info box text-center" type="button"  href="#<?= "$i"; ?>"><?= $i; ?></a>
    <!-- ==================================================================================================================== -->
    <?php endfor; ?>
    
    <a class="btn bg-gradient-primary px-6 ms-2" type="button"  href="#finish">SELESAIKAN UJIAN</a>
    <!-- <a class="btn bg-gradient-primary mt-4 w-100 " href="#finish" type="button" >SELESAIKAN </a> -->

      </div>
    </div>
  </aside>
  <!-- ===========================================================( SIDE BAR )========================================================= -->
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row">
      <!-- ===========================================================( FORM )========================================================= -->
      
      <form action="nilai.php?event=<?= $eventId; ?>" method="post" class="col-lg-8 col-md-10 mx-auto" >
      <?php $i=1;  foreach($result as $row) :?>
          <!-- ===========================================================( card )========================================================= -->
          <div class="card mt-4" id="<?= $i; ?>">
            <div class="card-header p-3">
              <h5 class="mb-0" >NOMOR <?= $i; ?></h5>
              <p class="mt-3 mb-0 text-lg" ><?= $row['question']; ?></p>
            </div>
            
            
            <!-- ===========================================================( pilihan )========================================================= -->


            <label id="a" class="card-body  pb-0">
              <div class="btn bg-gradient-primary  w-100 mb-0 toast-btn py-3"    style="display: flex; justify-content: flex-start; align-items:center">
                <span class="text-sm">A</span>
                <input  name="<?= $i; ?>" id="a" class="mx-3" type="radio" value="a">
                <span class="text-sm" style="font-weight: 500;"> <?= $row['a']; ?> </span>
              </div>
            </label>

            <label id="b" class="card-body  pb-0">
              <div class="btn bg-gradient-primary  w-100 mb-0 toast-btn py-3"    style="display: flex; justify-content: flex-start; align-items:center">
                <span class="text-sm">B</span>
                <input  name="<?= $i; ?>" id="b" class="mx-3" type="radio" value="b">
                <span class="text-sm" style="font-weight: 500;"> <?= $row['b']; ?> </span>
              </div>
            </label>

            <label id="c" class="card-body  pb-0">
              <div class="btn bg-gradient-primary  w-100 mb-0 toast-btn py-3"    style="display: flex; justify-content: flex-start; align-items:center">
                <span class="text-sm">C</span>
                <input  name="<?= $i; ?>" id="c" class="mx-3" type="radio" value="c">
                <span class="text-sm" style="font-weight: 500;"> <?= $row['c']; ?> </span>
              </div>
            </label>

            <label id="d" class="card-body  pb-0">
              <div class="btn bg-gradient-primary  w-100 mb-0 toast-btn py-3"    style="display: flex; justify-content: flex-start; align-items:center">
                <span class="text-sm">D</span>
                <input  name="<?= $i; ?>" id="d" class="mx-3" type="radio" value="d">
                <span class="text-sm" style="font-weight: 500;"> <?= $row['d']; ?> </span>
              </div>
            </label>

            <label id="e" class="card-body  pb-0">
              <div class="btn bg-gradient-primary  w-100 mb-0 toast-btn py-3"    style="display: flex; justify-content: flex-start; align-items:center">
                <span class="text-sm">E</span>
                <input  name="<?= $i; ?>" id="e" class="mx-3" type="radio" value="e">
                <span class="text-sm" style="font-weight: 500;"> <?= $row['e']; ?> </span>
              </div>
            </label>

            <input type="hidden" value="<?= $row['question_id']; ?>">

            <!-- ===========================================================( pilihan )========================================================= -->
          </div>
          <!-- ===========================================================( card )========================================================= -->
      <?php $i++;endforeach; ?>

          <div class="card mt-4 ">
            <div class="card-body p-3">
              <div class="row">

                <div class="col-lg-3 col-sm-6 col-12 mt-sm-0 mt-2">
                  <button class="btn bg-gradient-info w-100 mb-0 toast-btn" type="submit" id="finish" name="submit">FINISH</button>
                </div>


              </div>
            </div>
          </div>


        </form>
        <!-- ===========================================================( FORM )========================================================= -->
      </div>
    </div>
  </main>


  
<!-- script menghitung waktu cookie -->
<script>
// Set the date we're counting down to
var countDownDate = <?php
$ujian=(int) $_COOKIE['ujian'];
  echo $ujian*1000
?>

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "EXPIRED";
    <?php
      $_COOKIE['ujian']=0;
    ?>
  }
}, 1000);
</script>
<!-- <script>
// set cookie
document.cookie = "ujian=contoh; expires=" + new Date(Date.now() + 60000).toUTCString();

// get cookie
function getCookie(name) {
  var cookieArr = document.cookie.split("; ");
  for (var i = 0; i < cookieArr.length; i++) {
    var cookiePair = cookieArr[i].split("=");
    if (name === cookiePair[0]) {
      return decodeURIComponent(cookiePair[1]);
    }
  }
  return null;
} -->

</script>


  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.min.js?v=3.0.5"></script>
</body>

</html>