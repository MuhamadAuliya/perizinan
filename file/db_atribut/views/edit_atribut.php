<div class="card">
    <div class="card-header">
        <h4>Form User</h4>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>edit training</h4>
        </div>
        <div class="card-body">
            <form method="post" action="admin.php?target=db_training&action=update" data-parsley-validate class="form-horizontal form-label-left">
                <input type="hidden" name="id" value="<?php echo $rows->ID_TRAINING; ?>">
                <div class="mb-3">
                    <label class="control=label col-md-3 col-sm-3 col-lg-12" for="first-name">
                        ID TRAINING
                    </label>
                    <div class="col-md-6 col-sm-6 col-lg-12">
                        <input type="text" name="id_training" id="id_training" class="form-control" value="<?php echo $rows->ID_TRAINING; ?>" readonly />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="control=label col-md-3 col-sm-3 col-lg-12" for="first-name">
                        ID_ATRIBUT
                    </label>
                    <div class="col-md-6 col-sm-6 col-lg-12">
                        <input type="text" name="id_atribut" id="id_atribut" class="form-control" value="<?php echo $rows->ID_ATRIBUT; ?>" />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="control=label col-md-3 col-sm-3 col-lg-12" for="first-name">
                        JENIS_IZIN
                    </label>
                    <div class="col-md-6 col-sm-6 col-lg-12">
                        <input type="text" name="jenis_izin" id="jenis_izin" class="control-label col-md-3 col-sm-3 col-lg-12" value="<?php echo $rows->JENIS_IZIN; ?>" />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="control=label col-md-3 col-sm-3 col-lg-12" for="first-name">
                        JARAK_IZIN
                    </label>
                    <div class="col-md-6 col-sm-6 col-lg-12">
                        <input type="text" name="jarak_izin" id="jarak_izin" class="control-label col-md-3 col-sm-3 col-lg-12" value="<?php echo $rows->JARAK_IZIN; ?>" />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="control=label col-md-3 col-sm-3 col-lg-12" for="first-name">
                        LAMA_IZIN
                    </label>
                    <div class="col-md-6 col-sm-6 col-lg-12">
                        <input type="text" name="lama_izin" id="lama_izin" class="control-label col-md-3 col-sm-3 col-lg-12" value="<?php echo $rows->LAMA_IZIN; ?>" />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="control=label col-md-3 col-sm-3 col-lg-12" for="first-name">
                        JUMLAH_IZIN
                    </label>
                    <div class="col-md-6 col-sm-6 col-lg-12">
                        <input type="text" name="jumlah_izin" id="jumlah_izin" class="control-label col-md-3 col-sm-3 col-lg-12" value="<?php echo $rows->JUMLAH_IZIN; ?>" />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="control=label col-md-3 col-sm-3 col-lg-12" for="first-name">
                        STATUS_SANTRI
                    </label>
                    <div class="col-md-6 col-sm-6 col-lg-12">
                        <input type="text" name="status_santri" id="status_santri" class="control-label col-md-3 col-sm-3 col-lg-12" value="<?php echo $rows->STATUS_SANTRI; ?>" />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="control=label col-md-3 col-sm-3 col-lg-12" for="first-name">
                        BERI_IZIN
                    </label>
                    <div class="col-md-6 col-sm-6 col-lg-12">
                        <input type="text" name="beri_izin" id="beri_izin" class="control-label col-md-3 col-sm-3 col-lg-12" value="<?php echo $rows->BERI_IZIN; ?>" />
                    </div>
                </div>
                <div class="mb-3">
                    <div class="col-md-6 col-sm-6 col-lg-12">
                        <input type="submit" class="btn btn-success btn-sm" value="simpan">
                        <a class="btn  btn-danger btn-sm" href="admin.php?taarget=prodi">kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>