<?php

include "../../controller/controller.php";

  session_start();
  if(!isset($_SESSION['login'])){
    header("Location: login/login.html");
    exit;
  }

  // +=======================(deklarasi variabel)===========================+
  $input=$_SESSION['user'];
  // var_dump($input);
  $user=mysqli_query($conn,"select* from users where user_id= '$input' or user_email= '$input'");////////( DATA USER )
  $data=mysqli_fetch_assoc($user);
  $userId=$data['user_id'];


// $event=select("SELECT * FROM events ");/////////( DATA EVENT )

// $registers=select("SELECT event_id FROM register where register.user_id=$userId and register_acc=1 order by register_id DESC");////// ( DATA JADWAL )


// $pending=select("SELECT event_id FROM register where register.user_id=$userId and register_acc=0 order by register_id DESC");////// ( DATA JADWAL )

// $register=mysqli_fetch_assoc($registers);

//  $userEvent=$register['event_id'];
// $jadwal=select("SELECT* FROM events where event_id = $userEvent");
// var_dump($jadwal);


// ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.5" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <style>.tengah{display: flex; justify-content: center;} .upper{text-transform: uppercase; } .capt{text-transform: capitalize; }</style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200 d-flex justify-content-center">


  <?php
    $btn_name="Events";
    $active="active bg-gradient-primary";
    $content="content/event.php";

    $btn1="";
    $btn1_name="Events";
    $btn1_get="?1";

    $btn2="";
    $btn2_name="Jadwal";
    $btn2_get="?2";

    $btn3="";
    $btn3_name="Result";
    $btn3_get="?3";
    
    $btn4="";
    $btn4_name="Login";
    $btn4_get="?4";

    $btn5="";
    $btn5_name="Logout";
    $btn5_get="content/logout.php";

    $btn6="";
    $btn6_name="Daftar";
    $btn6_get="?6";

      // MEMPROSES AGAR MENGAKTIVKAN BUTTON ONCLICK
  if(isset($_GET['1'])){
    $btn1=$active;
    $btn_name=$btn1_name;
    $btn_get=$btn1_get;
    $content="content/event.php";
    // $content="content/result.php";
  }
  if(isset($_GET['2'])){
    $btn2=$active;
    $btn_name=$btn2_name;
    $btn_get=$btn2_get;
    $content="content/jadwal.php";
  }
  if(isset($_GET['3'])){
    $btn3=$active;
    $btn_name=$btn3_name;
    $btn_get=$btn3_get;
    $content="content/result.php";
  }
  if(isset($_GET['4'])){
    $btn4=$active;
    $btn_name=$btn4_name;
    $btn_get=$btn4_get;
    $content="content/login.php";
  }
  if(isset($_GET['5'])){
    $btn5=$active;
    $btn_name=$btn5_name;
    $btn_get=$btn5_get;
    $content="content/logout.php";
  }
  if(isset($_GET['event'])){
    $btn6=$active;
    $btn_name=$btn6_name;
    $btn_get=$btn6_get;
    $content="content/daftar.php";
  }
  ?>

  <!-- ======================================================================================================================================== -->
  
<!-- ======================================================================================================================================== -->
<div class="row mt-4">
    <!-- row -->
    <h4>ADD EVENTS </h4>
    <form class="" action="add_.php" method="post" enctype="multipart/form-data"><!-- card -->
      <div class="card z-index-2 ">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
            <input type="file" class="btn bg-gradient-primary mt-4 w-100 py-5" name="foto" type="button">


        </div>
        <div class="card-body">

            <!-- title -->
            <input class="mb-0 up  per" type="text" value="" name="event_name"><br><br>
            
            <!-- title -->
            <input class="text-sm upper" type="text" value="" name="event_description"><br><br>
            
            
            <!-- juknis -->
            <div style="display:flex; ">
                <i class="material-icons opacity-10">computer</i>
                <input type="date" class="mb-0 text-sm " style="margin-left:10px;" value="" name="event_date"><br>
            </div><br>
            
            <!-- start - end -->
            <hr class="dark horizontal">
            <label for="start">start time</label>
            <input class="mb-0 text-sm" type="time" value="" id='start' name="waktu_mulai"><br>
            
            
            <label for="end">end time</label>
            <input class="mb-0 text-sm" type="time" value="" id='end' name="waktu_selesai"><br>
            
            <!-- hidden -->
            <input type="hidden" name="event_id" value="">
              
              
            

          <div class="d-flex ">
              

          <div class="sidenav-footer d-flex justify-content-end">
            
              <a  class="btn bg-gradient-warning mt-4  mx-3" href="../index.php" type="button">
                kembali</a>
            

            
              <button class="btn bg-gradient-primary mt-4  mx-3 px-3" type="submit" name="submit">
                Edit</button>
            

          </div>
          <!-- <a class="text-sm " href="">Syarat & Ketentuan</a> -->

        </div>
      </div>
      </form><!-- end card -->

  
<!-- ======================================================================================================================================== -->
</div>
</main>

<!--   Core JS Files   -->
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="assets/js/plugins/chartjs.min.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/material-dashboard.min.js?v=3.0.5"></script>
</body>

</html>

