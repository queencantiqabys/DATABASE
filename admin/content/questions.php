
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row">
      <!-- ===========================================================( FORM )========================================================= -->
      
      <form action="action/add_question.php" method="post" class="col-lg-8 col-md-10 mx-auto" >

          <!-- ===========================================================( card )========================================================= -->


          <div class="card mt-4" id="">
            <div class="card-header p-3">
                <div class="input-group mb-3">
                <div class="input-group-prepend">

                <?php
                    $events=select("select * from events");
                ?>
                <label class="input-group-text" for="inputGroupSelect01">SELECT EVENT</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" required name="event_id">
                <?php
                    foreach($events as $event):
                ?>
                <option value="<?= $event['event_id']; ?>" selected><?= $event['event_name']; ?></option>
                <?php
                    endforeach;
                ?>

                </select>
                </div>


                <h5 class="mb-0" >NOMOR </h5>
                <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="soal" name="question" required>
                </div>
            </div>
            
            
            <!-- ===========================================================( pilihan )========================================================= -->


            <label id="a" class="card-body  pb-0">
              <div class="btn bg-gradient-primary  w-100 mb-0 toast-btn py-3"    style="display: flex; justify-content: flex-start; align-items:center">
                <span class="text-sm">A</span>
                <input  name="answer" id="a" class="mx-3" type="radio" value="a" required>
                <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="pilihan a" name="a"  autocomplete="off">
                </div>
              </div>
            </label>

            <label id="b" class="card-body  pb-0">
              <div class="btn bg-gradient-primary  w-100 mb-0 toast-btn py-3"    style="display: flex; justify-content: flex-start; align-items:center">
                <span class="text-sm">B</span>
                <input  name="answer" id="b" class="mx-3" type="radio" value="b" required>
                <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="pilihan b" name="b"  autocomplete="off">
                </div>
              </div>
            </label>

            <label id="c" class="card-body  pb-0">
              <div class="btn bg-gradient-primary  w-100 mb-0 toast-btn py-3"    style="display: flex; justify-content: flex-start; align-items:center">
                <span class="text-sm">C</span>
                <input  name="answer" id="c" class="mx-3" type="radio" value="c" required>
                <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="pilihan c" name="c"  autocomplete="off">
                </div>
              </div>
            </label>

            <label id="d" class="card-body  pb-0">
              <div class="btn bg-gradient-primary  w-100 mb-0 toast-btn py-3"    style="display: flex; justify-content: flex-start; align-items:center">
                <span class="text-sm">D</span>
                <input  name="answer" id="d" class="mx-3" type="radio" value="d" required>
                <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="pilihan d" name="d" autocomplete="off">
                </div>
              </div>
            </label>

            <label id="e" class="card-body  pb-0">
              <div class="btn bg-gradient-primary  w-100 mb-0 toast-btn py-3"    style="display: flex; justify-content: flex-start; align-items:center">
                <span class="text-sm">E</span>
                <input  name="answer" id="e" class="mx-3" type="radio" value="e" required>
                <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="pilihan d" name="e"  autocomplete="off">
                </div>
              </div>
            </label>

            <input type="hidden" value="    ">

            <!-- ===========================================================( pilihan )========================================================= -->
          </div>
          <!-- ===========================================================( card )========================================================= -->


          <div class="card mt-4 ">
            <div class="card-body p-3">
              <div class="row">

                <div class="col-lg-3 col-sm-6 col-12 mt-sm-0 mt-2">
                  <button class="btn bg-gradient-info w-100 mb-0 toast-btn" type="submit" id="finish" name="submit">TAMBAHKAN SOAL</button>
                </div>


              </div>
            </div>
          </div>


        </form>
        <!-- ===========================================================( FORM )========================================================= -->
      </div>
    </div>
  </main>
