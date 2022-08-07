<div class="card">
    <div class="card-header">
        <h4>Atribut</h4>
    </div>
    <div class="card-body">
        <form action="admin.php?target=db_atribut&action=input" data-parsley-validate class="form-horizontal form-label-left" method="post">
            <div class="mb-3">
                <label for="first-name" class="control-label col-md-3 col-sm-3 col-lg-12">
                    ID_ATRIBUT
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="id_atribut" class="form-control" />

                </div>
            </div>
            <div class="mb-3">
                <label for="first-name" class="control-label col-md-3 col-sm-3 col-lg-12">
                    NAMA_ATRIBUT
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="nama_atribut" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label for="first-name" class="control-label col-md-3 col-sm-3 col-lg-12">
                    NILAI_ATRIBUT
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="nilai_atribut" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="submit" class="btn btn-success btn-sm" value="Simpan">
                    <a href="admin.php?target=db_atribut" class="btn btn-danger btn-sm">kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>