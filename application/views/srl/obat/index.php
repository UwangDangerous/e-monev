<div class="card p-3 mt-3">
    <div class="row">
        <div class="col">

            <?php if($this->session->flashdata('pesan')) : ?>
                <div class="alert alert-<?= $this->session->flashdata('warna'); ?> alert-dismissible fade show mb-3" role="alert">
                    <?= $this->session->flashdata('pesan'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              <?php endif ; ?>

            <a href="<?= MYURL; ?>srl/obat/tambah" class="btn btn-primary">Tambah Data</a>

            <div class="table-responsive text-nowrap mt-3">
                <table class="table table-sm table-borders table-small-text text-center" id="tabel">
                    <thead>
                        <tr class="table-primary">
                            <th>No</th>
                            <th>KELAS TERAPI</th>
                            <th>ZAT AKTIF</th>
                            <th>JENIS SEDIAAN</th>
                            <th>BENTUK SEDIAAN</th>
                            <th>PUSTAKA ACUAN</th>
                            <th>PARAMETER UJI</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ; ?>
                        <?php foreach ($data as $row) : ?>
                            <tr>
                                <td class="align-middle"><?= $no++; ?></td>
                                <td class="align-middle"><?= $row['nama_kelas']; ?></td>
                                <td class="align-middle"><?= $row['zat_aktif']; ?></td>
                                <td class="align-middle"><?= $row['jenis_sedian']; ?></td>
                                <td class="align-middle"><?= $row['bentuk_sedian']; ?></td>
                                <td class="align-middle"><?= $row['pustaka']; ?></td>
                                <td class="align-middle">
                                    <?php 
                                        $param = rtrim($row['parameter'], ';');
                                        $param = explode(';', $row['parameter']); 
                                        $i = 0 ;
                                        $parameter = '' ;
                                        if(count($param) == 1) {
                                            $parameter = $row['parameter'] ;
                                        }
                                        foreach($param as $uji){
                                            // if($i > 0){
                                                if($i % 2 == 1){
                                                    $parameter .= $param[$i].';<br>' ;
                                                }else{
                                                    $parameter .= $param[$i].';' ;
                                                }
                                            // }

                                            $i++ ;
                                        }

                                        echo $parameter ;
                                    ?>
                                </td>
                                <td class="align-middle">
                                    <a href="<?= MYURL ;?>srl/obat/ubah/<?= $row['id_srl'] ;?>" class="badge badge-success" data-toggle="tooltip" title="Ubah Data"><i class="fa fa-edit"></i></a>
                                    <a href="<?= MYURL ;?>srl/obat/hapus/<?= $row['id_srl'] ;?>" class="badge badge-danger" onclick="return confirm('yakin?')" data-toggle="tooltip" title="Ubah Data"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>