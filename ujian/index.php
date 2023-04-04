<?php


include "../controller/controller.php";

      // ======================= DEKLARASI VARIABEL ==========================
      $btn_name="";
      $active="active bg-gradient-primary";
      $content="";
      // alert-primary
      $btn['a']="";
      $btna_name="a";
      $btna_get="?pilihan=a";
  
      $btn['b']="";
      $btnb_name="b";
      $btnb_get="?pilihan=b";
  
      $btn['c']="";
      $btnc_name="c";
      $btnc_get="?pilihan=c";
  
      $btn['d']="";
      $btnd_name="d";
      $btnd_get="?pilihan=d";
  
      $btn['e']="";
      $btne_name="e";
      $btne_get="?pilihan=e";
      // ===============================================================

      if(isset($_GET['soal']) && isset($_GET['pilihan']))
      {
        $soal=$_GET['soal'];
        $pilihan=$_GET['pilihan'];
        $btn["$pilihan"]=$active;
      }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
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
</head>

<!-- ==================================================================================================================== -->
<?php
              $totalHalaman=count(select("SELECT * FROM questions"));
              $awalHalaman=(isset($_GET['soal']))? $_GET['soal'] : 1;
              $active=$awalHalaman-1;
              var_dump($active);
?>
<!-- ==================================================================================================================== -->
<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end ms-3 mx-5  bg-gradient-dark" style="min-width: 24vw; display:flex; align-content :flex-start; justify-content:center; " >
<!-- ==================================================================================================================== -->
          <?php
            for ($i=1; $i <=$totalHalaman; $i++) :
              if($i==($active+1)) :
          ?>

<!-- ==================================================================================================================== -->
<a class="btn bg-gradient-danger mx-1 my-1 " type="button" href="?soal=<?= $i; ?>"><?= $i; ?></a>
<!-- ==================================================================================================================== -->
          <?php
              else :
          ?>
<!-- ==================================================================================================================== -->
<a class="btn bg-gradient-info mx-1 my-1 " type="button" href="?soal=<?= $i; ?>" ><?= $i; ?></a>
<!-- ==================================================================================================================== -->
          <?php
              endif;
            endfor;
          ?>
<!-- ==================================================================================================================== -->

  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="card mt-4">
            
<!-- ==================================================================================================================== -->
            <?php
            $result=select("SELECT * FROM questions LIMIT $active,1");
            foreach($result as $row) :
            ?>
<!-- ==================================================================================================================== -->

            <div class="card-header p-3">
              <h5 class="mb-0">SOAL <?= $row['question_num']; ?></h5>
            </div>
            <div class="card-body p-3 pb-0">
              <p class="text-lg"  >
                <?= $row['question']; ?>
              </p>


              <a href="?soal=<?= $active+1; ?>&pilihan=a">
                <div class="alert card  <?= $btn['a']; ?>" >
                  <span class="text-sm">
                      A. <?= $row['a']; ?>
                  </span>
                </div>
              </a>
              <a href="?soal=<?= $active+1; ?>&pilihan=b">
                <div class="alert card  <?= $btn['b']; ?>" >
                  <span class="text-sm">
                      B. <?= $row['b']; ?>
                  </span>
                </div>
              </a>
              <a href="?soal=<?= $active+1; ?>&pilihan=c">
                <div class="alert card  <?= $btn['c']; ?>" >
                  <span class="text-sm">
                      C. <?= $row['c']; ?>
                  </span>
                </div>
              </a>
              <a href="?soal=<?= $active+1; ?>&pilihan=d">
                <div class="alert card  <?= $btn['d']; ?>" >
                  <span class="text-sm">
                      D. <?= $row['d']; ?>
                  </span>
                </div>
              </a>
              <a href="?soal=<?= $active+1; ?>&pilihan=e">
                <div class="alert card  <?= $btn['e']; ?>" >
                  <span class="text-sm">
                      E. <?= $row['e']; ?>
                  </span>
                </div>
              </a>

<!-- ==================================================================================================================== -->
            <?php endforeach; ?>
<!-- ==================================================================================================================== -->

            </div>
          </div>
          <div class="card mt-4">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-3 col-sm-6 col-12 mt-sm-0 mt-2">

<!-- ==================================================================================================================== -->
<?php
    $prev=(isset($_GET['soal']))? $_GET['soal']-1 : 1;
    $prev=($prev==0)? 1 : $prev;
?>
<!-- ==================================================================================================================== -->
<a class="btn bg-gradient-info w-100 mb-0 toast-btn" type="button" href="?soal=<?= $prev; ?>" >sebelumnya</a>
<!-- ==================================================================================================================== -->
                  </div>
                <div class="col-lg-3 col-sm-6 col-12  mt-lg-0 mt-2">

<!-- ==================================================================================================================== -->
<?php
    $next=(isset($_GET['soal']))? $_GET['soal']+1 : 1;
    $next=($next>$totalHalaman)? $totalHalaman : $next;
?>
<!-- ==================================================================================================================== -->
<a class="btn bg-gradient-success w-100 mb-0 toast-btn" type="button" href="?soal=<?= $next; ?>">lanjutkan</a>
<!-- ==================================================================================================================== -->

                </div>
                <div class="col-lg-3 col-sm-6 col-12 mt-lg-0 mt-2">
                  <div class="btn bg-gradient-danger w-100 mb-0 toast-btn">11:45</div>
                </div>
              </div>
      
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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