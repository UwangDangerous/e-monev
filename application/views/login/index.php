<link rel="stylesheet" href="<?= base_url() ;?>/assets/vendor/css/pages/page-auth.css" />
<div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                  <img width="50"
                      viewBox="0 0 37 50"
                      src="<?= base_url() ;?>/assets/img/icons/LogoBPOM.png" width="5%" height="5%">
                   </span>

                  <span class="app-brand-text-demo-menu-text-fw-bolder-ms-2">
                   e-Monev SKL</span>
                </a>
              </div>
              <!-- /Logo -->
              
              <p class="mb-4">Selamat datang di E-Monev SKL<br>Silahkan Masuk!</p>
              <?php if($this->session->flashdata('pesan')) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('pesan'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              <?php endif ; ?>

              <form action="" method="POST">
                <div class="mb-3">
                  <label for="username" class="form-label">Username <i class="text-danger">*</i></label>
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="username"
                    placeholder="masukkan username"
                    autofocus
                    autocomplete="off"
                  />
                  <small id="emailHelp" class="form-text text-danger"><?= form_error('username'); ?></small>
                </div>
                <div class="mb-3 form-password-toggle">
                    <div class="d-flex justify-content-between">
                        <label class="form-label" for="pass">Kata Sandi <i class="text-danger">*</i></label>
                        <a href="auth-forgot-password-basic.html">
                        <!-- <small>Lupa kata sandi?</small> -->
                        </a>
                    </div>
                    <div class="input-group input-group-merge">
                        <input
                        type="password"
                        id="password"
                        class="form-control"
                        name="password"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        
                        />
                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                <small id="emailHelp" class="form-text text-danger"><?= form_error('password'); ?></small>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <!-- <input class="form-check-input" type="checkbox" id="remember-me" /> -->
                    <!-- <label class="form-check-label" for="remember-me"> Ingat saya </label> -->
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Masuk</button>
                </div>
              </form>

              <p class="text-center">
                <span>Lihat panduan penggunaan aplikasi</span>
                <a href="">
                  <span>Disini!</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>
    </div>