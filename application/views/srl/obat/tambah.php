<div class="card p-3 mt-3">
    <form action="" method="post">
        <div class="row">

            <div class="col-lg-6">
                <label for="id_kelas">Kelas Terapi <i class="text-danger">*</i></label>
                <select name="id_kelas" id="id_kelas" class='form-control mb-3'>
                    <option value="">--pilih--</option>
                    <?php foreach ($kelas as $k) : ?>
                        <?php if(set_value('id_kelas') == $k['id_kelas']) : ?>
                            <option selected value="<?= $k['id_kelas'];?>"><?= $k['nama_kelas']; ?></option>
                        <?php else : ?>
                            <option value="<?= $k['id_kelas'];?>"><?= $k['nama_kelas']; ?></option>
                        <?php endif ; ?>
                    <?php endforeach ; ?>
                </select>
                <small id="emailHelp" class="form-text text-danger"><?= form_error('id_kelas'); ?></small>
            </div>

            <div class="col-lg-6">
                <label for="zat_aktif">Zat Aktif<i class="text-danger">*</i></label>
                <input type="text" name="zat_aktif" id="zat_aktif" class='form-control mb-3' value="<?= set_value("zat_aktif") ;?>">
                <small id="emailHelp" class="form-text text-danger"><?= form_error('zat_aktif'); ?></small>
            </div>

            <div class="col-lg-6">
                <label for="jenis_sedian">Jenis Sedian<i class="text-danger">*</i></label>
                <input type="text" name="jenis_sedian" id="jenis_sedian" class='form-control mb-3' value="<?= set_value("jenis_sedian") ;?>">
                <small id="emailHelp" class="form-text text-danger"><?= form_error('jenis_sedian'); ?></small>
            </div>

            <div class="col-lg-6">
                <label for="bentuk_sedian">Bentuk Sedian<i class="text-danger">*</i></label>
                <input type="text" name="bentuk_sedian" id="bentuk_sedian" class='form-control mb-3' value="<?= set_value("bentuk_sedian") ;?>">
                <small id="emailHelp" class="form-text text-danger"><?= form_error('bentuk_sedian'); ?></small>
            </div>

            <div class="col-lg-6">
                <label for="pustaka">Pustaka Acuan<i class="text-danger">*</i></label>
                <input type="text" name="pustaka" id="pustaka" class='form-control mb-3' value="<?= set_value("pustaka") ;?>">
                <small id="emailHelp" class="form-text text-danger"><?= form_error('pustaka'); ?></small>
            </div>

            <div class="col-lg-6">
                <label for="parameter">Parameter Uji<i class="text-danger">*</i></label>
                <input type="text" name="parameter" id="parameter" class='form-control mb-3' value="<?= set_value("parameter") ;?>">
                <small id="emailHelp" class="form-text text-danger"><?= form_error('parameter'); ?></small>
            </div>

            <div class="col-lg-12">
                <button class="btn btn-primary" type="submit">
                    Simpan
                </button>
            </div>

        </div>
    </form>
</div>