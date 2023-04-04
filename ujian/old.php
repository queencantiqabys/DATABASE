<?php


include "../controller/controller.php";

// ======================= DEKLARASI VARIABEL ==========================
$_GET['pil']=(isset($_GET['pil']))? $_GET['pil'] : "";;


$soal=(isset($_GET['soal']))? $_GET['soal'] : 1;
$pilihan=(isset($_GET['pilihan']))? $_GET['pilihan'] : "0";

$totalHalaman=count(select("SELECT * FROM questions")); // varibel untuk menampilkan halaman
$awalHalaman=(isset($_GET['soal']))? $_GET['soal'] : 1; //
$active=$awalHalaman-1;

      $hal=$active+1;
      $btn_name="";
      $style="active bg-gradient-primary";
      $default_get="";


      $btn['a']="";
      $btna_name="a";
      $get['a']="?soal=$hal&pil=a";

      $btn['b']="";
      $btnb_name="b";
      $get['b']="?soal=$hal&pil=b";
  
      $btn['c']="";
      $btnc_name="c";
      $get['c']="?soal=$hal&pil=c";
  
      $btn['d']="";
      $btnd_name="d";
      $get['d']="?soal=$hal&pil=d";
  
      $btn['e']="";
      $btne_name="e";
      $get['e']="?soal=$hal& pil=e";
      // ===============================================================
      //kalau pilihan di klik maka akan membuat cookie dengan index [soal] dan value $pilihan 
      // ===============================================================

      $result=select("SELECT * FROM questions");  // varibel untuk menampilkan soal dan pilihan
      
      $prev=(isset($_GET['soal']))? $_GET['soal']-1 : 1;  //varibel untuk mengolah data button prev
      $prev=($prev==0)? 1 : $prev;                        //
      
      $next=(isset($_GET['soal']))? $_GET['soal']+1 : 1;  //variabel untuk mengolah data button next
      $next=($next>$totalHalaman)? $totalHalaman : $next; //
      
      // ============================================================================================================================================= -->
      if($_GET['pil']=='a'){
        $btn['a']=$style;
      }
      
      if($_GET['pil']=='b'){
        $btn['b']=$style;
      }

      if($_GET['pil']=='c'){
        $btn['c']=$style;
        
      }
      
      if($_GET['pil']=='d'){
        $btn['d']=$style;
      }
      
      if($_GET['pil']=='e'){
        $btn['e']=$style;
      }
      // ============================================================================================================================================= -->
      
      
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
    DANA CBT
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.0.5" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end ms-3 mx-5  bg-gradient-dark"
    style="min-width: 24vw; display:flex; align-content :flex-start; justify-content:center; ">

    <!-- ==================================================================================================================== -->
    <?php
for ($i=1; $i <=$totalHalaman; $i++) :

?>
    <!-- ==================================================================================================================== -->
    <a class="btn bg-gradient-info mx-1 my-1 " type="button" href="?soal=<?= $i; ?>"><?= $i; ?></a>
    <!-- ==================================================================================================================== -->
    <?php

endfor;
?>
    <!-- ==================================================================================================================== -->

  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    
<!-- ==================================================================================================================== -->
<?php
foreach($result as $row) :
?>
<!-- ==================================================================================================================== -->
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <div class="card mt-4">


        <div class="card-header p-3">
          <h5 class="mb-0">SOAL <?= $row['question_num']; ?></h5>
        </div>
        <div action="nilai.php" class="card-body p-3 pb-0">
          <p class="text-lg">
                <?= $row['question']; ?>
          </p>


        <a href="<?= $get['a']; ?>">
        <div class="alert card  <?= $btn['a']; ?>">
          <span class="text-sm">
                    A. <?= $row['a']; ?>
          </span>
        </div>
        </a>


      </div>
    </div>
  </div>
</div>

<!-- ==================================================================================================================== -->
<?php 
endforeach;
?>
<!-- ==================================================================================================================== -->
  </main>


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