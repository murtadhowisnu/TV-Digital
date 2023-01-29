<div id="layoutSidenav_content">
<main>
    <div class="container-fluid">
        <h1 class="mt-4 mb-4">Dashboard</h1>
        <div class="row">
            <div class="col-lg-4 ml-3">
                <?= $this->session->flashdata('message'); ?>
            </div>
        </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?= base_url('assets/img/profile/') . $user['image']; ?>"
                       alt="<?= $user['name'];?>">
                </div>
                <h3 class="profile-username text-center"><b><?= $user['name'];?></b></h3>
                <p class="text-muted text-center"><?=$user['email'];?> <br> <?=$user['nip'];?> </p>   
              </div>
            </div>

        </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link profil active" href="#profile" data-toggle="tab">Edit</a></li>
                  <li class="nav-item"><a class="nav-link akun " href="#akun" data-toggle="tab">Ganti Password</a></li>
                  <li class="nav-item"><a class="nav-link logout btn btn-danger btn-sm text-white font-weight-bold" href="<?=base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">Log Out</a></li>
                </ul>
              </div>

              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="profile">
                    <?= form_open_multipart('user/edit'); ?>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'];?>" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputHP" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'];?>" readonly>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputHP" class="col-sm-2 col-form-label">NIP</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="nip" name="nip" value="<?= $user['nip'];?>" readonly>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Edit Profil</button>
                        </div>
                      </div>
                    </form>
                  </div>

                  <!-- Ganti Password -->
                <div class="tab-pane" id="akun">
                <form action="<?=base_url('user/changepassword')?>" autocomplete="off" method="post" accept-charset="utf-8">
                    <div class="form-group row">
                        <label for="inputUserName" class="col-sm-4 col-form-label">Old Passoword</label>
                        <div class="col-sm-7">
                          <input type="password" class="form-control" id="current_password" name="current_password"  required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">New Password</label>
                        <div class="col-sm-7">
                          <input type="password" class="form-control" id="new_password" name="new_password" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">New Password</label>
                        <div class="col-sm-7">
                          <input type="password" class="form-control" id="new_password2" name="new_password2" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="offset-sm-8 col-sm-10">
                          <button type="submit" class="btn btn-danger">Perbarui</button>
                        </div>
                      </div>
                      </form>                  
                    </div>
 
                </div>
                
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

</div>
</main>

<script>
    var password = document.getElementById("new_password"),
    confirm_password = document.getElementById("new_password2");

    function validatePassword() {
      if (password.value != confirm_password.value) {
          confirm_password.setCustomValidity("Passwords Don't Match");
      } else {
          confirm_password.setCustomValidity('');
      }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>