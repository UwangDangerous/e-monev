
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
    <!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  <div class="app-brand demo">
    <a href="<?= MYURL ;?>" class="app-brand-link">
      <span class="app-brand-logo demo">
        <img width="50"
        viewBox="0 0 37 60"
        src="<?= base_url() ;?>assets/img/icons/LogoBPOM.png" width="5%" height="5%">
      </span> <br>

      <span class="app-brand-text-demo-menu-text-fw-bolder-ms-2">e-Monev SKL</span>
    </a> <br><br>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item">
      <a href="<?= MYURL ;?>" class="menu-link">
        <div data-i18n="Dashboard">Dashboard</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="user-rekapitulasi-skl.html" class="menu-link">
        <div data-i18n="Dashboard">Rekapitulasi-SKL</div>
      </a>
    </li>

    <!-- Layouts -->

    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Input Data SKL</span>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <div data-i18n="Standard Ruang lingkup">Standar Ruang Lingkup</div>
      </a>

      <ul class="menu-sub">
      <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
      <div data-i18n="SRL-Obat">SRL-Input Rencana</div>
      </a>
      <ul class="menu-sub">
      <li class="menu-item">
      <a href="user-input-srl-rencana-obat.html" class="menu-link">
        <div data-i18n="SRL-Obat">SRL-Obat</div>
      </a>
    </li>
  <li class="menu-item">
    <a href="user-input-srl-rencana-otsk.html" class="menu-link">
      <div data-i18n="SRL-OTSK">SRL-OTSK</div>
    </a>
  </li>
  <li class="menu-item">
    <a href="user-input-srl-rencana-kosmetik.html" class="menu-link">
      <div data-i18n="SRL-Kosmetik">SRL-Kosmetik</div>
    </a>
  </li>
  <li class="menu-item">
    <a href="user-input-srl-rencana-pangan.html" class="menu-link">
      <div data-i18n="SRL-Pangan">SRL-Pangan</div>
    </a>
  </li>
  <li class="menu-item">
    <a href="user-input-srl-rencana-MBM.html" class="menu-link">
      <div data-i18n="SRL-MBM">SRL-MBM</div>
    </a>
  </li>
  </ul>
  </li>
  </ul>
  <ul class="menu-sub active">
  <li class="menu-item active">
  <a href="javascript:void(0);" class="menu-link menu-toggle">
  <div data-i18n="SRL-Obat">SRL-Input Realisasi</div>
  </a>
  <ul class="menu-sub">
  <li class="menu-item">
  <a href="user-input-srl-realisasi-obat.html" class="menu-link">
    <div data-i18n="SRL-Obat">SRL-Obat</div>
  </a>
  </li>
  <li class="menu-item">
    <a href="user-input-srl-realisasi-otsk.html" class="menu-link">
      <div data-i18n="SRL-Obat Tradisional">SRL-OTSK</div>
    </a>
  </li>
  <li class="menu-item active">
    <a href="user-input-srl-realisasi-kosmetik.html" class="menu-link">
      <div data-i18n="SRL-Kosmetik">SRL-Kosmetik</div>
    </a>
  </li>
  <li class="menu-item">
    <a href="user-input-srl-realisasi-pangan.html" class="menu-link">
      <div data-i18n="SRL-Pangan">SRL-Pangan</div>
    </a>
  </li>
  <li class="menu-item">
    <a href="user-input-srl-realisasi-MBM.html" class="menu-link">
      <div data-i18n="SRL-MBM">SRL-MBM</div>
    </a>
  </li>
  </ul>
  </li>
  </ul>
  </li>
  <li class="menu-item">
  <a href="javascript:void(0);" class="menu-link menu-toggle">
  <div data-i18n="Pemenuhan Peralatan">Pemenuhan Peralatan</div>
  </a>
  <ul class="menu-sub">
  <li class="menu-item">
  <a href="user-input-alat-kimia.html" class="menu-link">
  <div data-i18n="Alat-Obat">Peralatan-Kimia</div>
  </a>
  </li>
  <li class="menu-item">
  <a href="user-input-alat-mbm.html" class="menu-link">
  <div data-i18n="Alat-Obat Tradisional">Peralatan-mbm</div>
  </a>
  </li>
  </ul>
  </li>
  <li class="menu-item">
  <a href="user-input-kompetensi.html" class="menu-link">
  <div data-i18n="Pemenuhan Kompetensi">Pemenuhan Kompetensi</div>
  </a>
  </li>
  <!-- Lihat Data SKL -->
  <li class="menu-header small text-uppercase"><span class="menu-header-text">Lihat Data SKL</span></li>
  <li class="menu-item">
  <a href="javascript:void(0);" class="menu-link menu-toggle">
  <div data-i18n="Standar Ruang Lingkup">Standar Ruang Lingkup</div>
  </a>
  <ul class="menu-sub">
  <li class="menu-item">
  <a href="user-lihat-srl-obat.html" class="menu-link">
  <div data-i18n="SRL-Obat">SRL-Obat</div>
  </a>
  </li>
  <li class="menu-item">
  <a href="user-lihat-srl-otsk.html" class="menu-link">
  <div data-i18n="SRL-Obat Tradisional">SRL-OTSK</div>
  </a>
  </li>
  <li class="menu-item">
  <a href="user-lihat-srl-kosmetik.html" class="menu-link">
  <div data-i18n="SRL-Kosmetik">SRL-Kosmetik</div>
  </a>
  </li>
  <li class="menu-item">
  <a href="user-lihat-srl-pangan.html" class="menu-link">
  <div data-i18n="SRL-Pangan">SRL-Pangan</div>
  </a>
  </li>
  <li class="menu-item">
  <a href="user-lihat-srl-MBM.html" class="menu-link">
  <div data-i18n="SRL-MBM">SRL-MBM</div>
  </a>
  </li>
  </ul>
  </li>

  <li class="menu-item">
  <a href="javascript:void(0);" class="menu-link menu-toggle">
  <div data-i18n="Pemenuhan Peralatan">Pemenuhan Peralatan</div>
  </a>
  <ul class="menu-sub">
  <li class="menu-item">
  <a href="user-lihat-alat-kimia.html" class="menu-link">
  <div data-i18n="Alat-Obat">Peralatan-Kimia</div>
  </a>
  </li>
  <li class="menu-item">
  <a href="user-lihat-alat-mbm.html" class="menu-link">
  <div data-i18n="Alat-Obat Tradisional">Peralatan-mbm</div>
  </a>
  </li>
  </ul>
  </li>
  <li class="menu-item">
  <a href="user-lihat-kompetensi.html" class="menu-link">
  <div data-i18n="Pemenuhan Kompetensi">Pemenuhan Kompetensi</div>
  </a>
  <!-- Lihat Data SKL -->
  <li class="menu-header small text-uppercase"><span class="menu-header-text">Master Data</span></li>
  <li class="menu-item">
  <a href="pemenuhan-baku-pembanding.html" class="menu-link">
  <div data-i18n="Standar Ruang Lingkup">Pemenuhan Baku Pembanding</div>
  </a>
  </li>
  <li class="menu-item">
  <a href="pemenuhan-baku-pembanding.html" class="menu-link">
  <div data-i18n="Standar Ruang Lingkup">Pembagian Kelas Terapi SRL Obat</div>
  </a>
  </li>
  </li>

</aside>
        <!-- / Menu -->
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
             

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3" style="text-transform: uppercase">
                  <?= $this->session->userdata('monev_name'); ?>
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="<?= base_url() ;?>assets/img/icons/logoBPOM.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="<?= base_url() ;?>assets/img/icons/logoBPOM.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">
                              <?= $this->session->userdata('monev_name'); ?>
                            </span>
                            <small class="text-muted">
                              <?= $this->session->userdata('monev_level'); ?>
                            </small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Profil</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Pengaturan</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?= MYURL ;?>login/logout">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Keluar</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->


        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <!-- Form -->
                <div class="col-xxl">
                    <div class="card">
                        <div class="card-header">
                            <h4><?= $sub; ?></h4>
                            <nav aria-label="breadcrumb" id="mybread">
                                <ol class="breadcrumb">
                                    <?php foreach ($bread as $b) : ?>
                                        <?php if($b[0] == 'active') : ?>
                                            <li class="breadcrumb-item active" aria-current="page"><?= $b[2]; ?></li>
                                        <?php else : ?>
                                            <li class="breadcrumb-item"><a href="<?= MYURL.''.$b[1]; ?>"><?= $b[2]; ?></a></li>
                                        <?php endif ; ?>
                                    <?php endforeach ; ?>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            <!-- </div>
        </div> -->


            


    