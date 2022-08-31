<div class="card p-3 mt-3">
    <form action="" method="post">
        <div class="row">

            <div class="col-lg-6">
                <label for="nama_lab">Laboratorium <i class="text-danger">*</i></label>
                <input type="text" name="nama_lab" id="nama_lab" class='form-control mb-3' value="<?= set_value("nama_lab") ;?>">
                <small id="emailHelp" class="form-text text-danger"><?= form_error('nama_lab'); ?></small>
            </div>

            <div class="col-lg-6">
                <label for="nama_lain">Nama Lain<i class="text-danger">*</i></label>
                <input type="text" name="nama_lain" id="nama_lain" class='form-control mb-3' value="<?= set_value("nama_lain") ;?>">
                <small id="emailHelp" class="form-text text-danger"><?= form_error('nama_lain'); ?></small>
            </div>

            <div class="col-lg-12">
                <button class="btn btn-primary" type="submit">
                    Simpan
                </button>
            </div>

        </div>
    </form>
</div>