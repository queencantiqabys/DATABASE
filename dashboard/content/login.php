
<div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1 upper">
                <?= $data['user_name']; ?>
              </h5>
              <p class="mb-0 font-weight-normal text-sm">
                
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="row">
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <h6 class="mb-0">User profile_image</h6>
                </div>
                <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6>
                  <ul class="list-group">

                  <li class="list-group-item border-0 px-0"></li>
                      <div class="form-check form-switch ps-0">
                        <label class="form-text-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault3">Nama : <?= $data['user_name']; ?></label>
                      </div>
                    </li>

                    <li class="list-group-item border-0 px-0">
                      <div class="form-check form-switch ps-0">
                        <label class="form-text-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault3">Email : <?= $data['user_email']; ?></label>
                      </div>
                    </li>

                    <li class="list-group-item border-0 px-0">
                      <div class="form-check form-switch ps-0">
                        <label class="form-text-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault3">Contac : <?= $data['user_num']; ?></label>
                     </div>
                    </li>

                  </ul>

                  <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">School</h6>

                  <ul class="list-group">

                    <li class="list-group-item border-0 px-0">
                      <div class="form-check form-switch ps-0">
                        <label class="form-text-label text-body ms-3 text-truncate w-80 mb-0 upper" for="flexSwitchCheckDefault3">Sekolah :  <?= $data['user_school']; ?></label>
                      </div>
                    </li>
                    
                  </ul>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>