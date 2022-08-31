<?php 

  $menu = [
    false , //INPUT DATA SKL
    false , //LIHAT DATA SKL
    false , //MASTER DATA
  ];
  
  $level = $this->session->userdata('monev_level_id') ;

  if($level == 1){ //admin
    $menu = [false, false, true] ;
  }elseif($level == 2){ //user balai
    $menu = [true, true , false] ;
  }elseif($level == 3){ //verifikator
    $menu = [false, false, false] ;
  }

?>

<?php if($menu[0] == true) : ?>
            
<!-- input data skl judul -->
    <li class="menu-header small text-uppercase">
    <span class="menu-header-text">Data SKL</span>
    </li>
<!-- input data skl judul -->

<!-- Standar Ruang Lingkup -->
    <li class="menu-item">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
        <div data-i18n="Standard Ruang lingkup">Standar Ruang Lingkup</div>
    </a>

    <ul class="menu-sub">
        <!-- SRL-Input Rencana -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div data-i18n="SRL-Obat">SRL-Input Rencana</div>
            </a>

            <ul class="menu-sub">
            <li class="menu-item">
                <a href="<?= MYURL ;?>standar/obat" class="menu-link">
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
        <!-- tutup SRL-Input Rencana -->
    </ul>

    <ul class="menu-sub">
        <!-- SRL-Input Realisasi -->
        <li class="menu-item">
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

            <li class="menu-item">
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
        <!-- tutup SRL-Input Realisasi -->
    </ul>
    </li>
<!-- Tutup Standar Ruang Lingkup -->

<!-- Pemenuhan Peralatan -->
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
<!-- tutup Pemenuhan Peralatan -->

<!-- Pemenuhan Kompetensi -->
    <li class="menu-item">
    <a href="user-input-kompetensi.html" class="menu-link">
        <div data-i18n="Pemenuhan Kompetensi">Pemenuhan Kompetensi</div>
    </a>
    </li>
<!-- tutup Pemenuhan Kompetensi -->

<?php endif ; ?>




<?php if($menu[1] == true) : ?>

<!-- Lihat Data SKL Judul -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Lihat Data SKL</span></li>
<!-- tutup Lihat Data SKL Judul -->

<!-- Standar Ruang Lingkup  -->
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
<!-- tutup Standar Ruang Lingkup  -->

<!-- Pemenuhan Peralatan -->
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
<!-- tutup Pemenuhan Peralatan -->

<!-- Pemenuhan Kompetensi -->
    <li class="menu-item">
    <a href="user-lihat-kompetensi.html" class="menu-link">
        <div data-i18n="Pemenuhan Kompetensi">Pemenuhan Kompetensi</div>
    </a>

    </li>
<!-- Pemenuhan Kompetensi -->

<?php endif ; ?>




<?php if($menu[2] == true) : ?>

<!-- Master data -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Master Data</span></li>
    <!-- <li class="menu-item">
    <a href="pemenuhan-baku-pembanding.html" class="menu-link">
        <div data-i18n="Standar Ruang Lingkup">Pemenuhan Baku Pembanding</div>
    </a>
    </li>
    <li class="menu-item">
    <a href="pemenuhan-baku-pembanding.html" class="menu-link">
        <div data-i18n="Standar Ruang Lingkup">Pembagian Kelas Terapi SRL Obat</div>
    </a>
    </li> -->

    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div data-i18n="Pemenuhan Peralatan">Master Data</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="<?= MYURL ;?>master/user" class="menu-link">
                    <div data-i18n="">User</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?= MYURL ;?>master/lab" class="menu-link">
                    <div data-i18n="">Laboratorium</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?= MYURL ;?>master/tahun" class="menu-link">
                    <div data-i18n="">Tahun</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?= MYURL ;?>master/kelas" class="menu-link">
                    <div data-i18n="">Kelas Terapi</div>
                </a>
            </li>
        </ul>
    </li>
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <div data-i18n="Pemenuhan Peralatan">Form</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="<?= MYURL ;?>srl/obat" class="menu-link">
                    <div data-i18n="">SRL-Obat</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?= MYURL ;?>srl/otsk" class="menu-link">
                    <div data-i18n="">SRL-OTSK</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?= MYURL ;?>srl/kosmetik" class="menu-link">
                    <div data-i18n="">SRL-Kosmetik</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?= MYURL ;?>srl/pangan" class="menu-link">
                    <div data-i18n="">SRL-Pangan</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?= MYURL ;?>srl/mbm" class="menu-link">
                    <div data-i18n="">SRL-MBM</div>
                </a>
            </li>
        </ul>
    </li>
<!-- tutup Master data -->

<?php endif ; ?>