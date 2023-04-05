<?php

include "../controller/controller.php";

  session_start();
  if(!isset($_SESSION['login'])){
    header("Location: login/login.html");
    exit;
  }

  // +=======================(deklarasi variabel)===========================+
  $input=$_SESSION['user'];
  var_dump($input);
  $user=mysqli_query($conn,"select* from users where user_id= '$input' or user_email= '$input'");////////( DATA USER )
  $data=mysqli_fetch_assoc($user);
  $userId=$data['user_id'];


  $event=select("SELECT * FROM events ");/////////( DATA EVENT )

  $registers=select("SELECT event_id FROM register where register.user_id=$userId order by register_id DESC");////// ( DATA JADWAL )
  
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
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    DANA CBT
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
  <style>.tengah{display: flex; justify-content: center;} .upper{text-transform: uppercase; } .capt{text-transform: capitalize; }</style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">


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
    $btn6_name="Sign Up ";
    $btn6_get="login/signup.html";

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
  if(isset($_GET['6'])){
    $btn6=$active;
    $btn_name=$btn6_name;
    $btn_get=$btn6_get;
    $content="login/signup.html";
  }
  ?>

  <!-- ======================================================================================================================================== -->
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#" target="_blank">
        <img src="assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">DANA CBT</span>
      </a>
    </div>


    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link text-white <?= $btn1; ?>" href="<?= $btn1_get; ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1"><?= $btn1_name; ?></span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white  <?= $btn3; ?>" href="<?= $btn3_get; ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1"><?= $btn3_name; ?></span>
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link text-white <?= $btn2; ?>" href="<?= $btn2_get; ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1"><?= $btn2_name; ?></span>
          </a>
        </li>



        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>

        
        <li class="nav-item">
          <a class="nav-link text-white <?= $btn4; ?>" href="<?= $btn4_get; ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1"><?= $btn4_name; ?></span>
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link text-white <?= $btn5; ?>" href="<?= $btn5_get; ?>" >
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1"><?= $btn5_name; ?></span>
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link text-white <?= $btn6; ?>" href="<?= $btn6_get; ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1"><?= $btn6_name; ?></span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
      </div>
    </div>
  </aside>
  <!-- ======================================================================================================================================== -->
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- ======================================================================================================================================== -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="<?= $btn_get; ?>"><?= $btn_name; ?></a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Dashboard</h6>
      </nav>

      <ul class="navbar-nav  justify-content-end">
        <li class="nav-item d-flex align-items-center">
          <a href="?4" class="nav-link text-body font-weight-bold px-0">
            <i class="fa fa-user me-sm-1"></i>
            <span class="d-sm-inline d-none"><?= $data['user_name']; ?></span>
          </a>
        </li>
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a  class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid py-4">
<!-- ======================================================================================================================================== -->
<?php
// var_dump($input);
// $data=query("select* from users where user_id= '$input' or user_email= '$user_email'");
// var_dump($data);
include "$content";
?>
<!-- ======================================================================================================================================== -->
</div>
<footer class="footer py-4  ">
  <div class="container-fluid">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="copyright text-center text-sm text-muted text-lg-start">
          © <script>
            document.write(new Date().getFullYear())
            </script>
          made with <i class="fa fa-heart"></i> by
          <a href="" class="font-weight-bold" target="_blank">QUEEN & ENJEL</a>
          for a better web.
        </div>
      </div>
    </div>
  </div>
</footer>
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