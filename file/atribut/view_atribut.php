<?php
$db = __database();
$where = [
    'ID_ATRIBUT' => $_GET['id']
];
$query = __ambil($db, "atribut", "*", $where);
//menampilkan hasil query dalam bentuk object
//anda juga bisa menggunakan mysqli_fetch_assoc atau mysqli_fetch_array dll

$rows = $query->fetch_object();
//print_r($rows);
?> <div class="card">
    <div class="card-header">
        <h4>Atribut</h4>
    </div>
    <div class="card-body">
        <form action="admin.php?target=mahasiswa&action=input" data-parsley-validate class="form-horizontal form-label-left" method="post">
            <div class="mb-3">
                <label for="first-name" class="control-label col-md-3 col-sm-3 col-lg-12">
                    ID_ATRIBUT
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="npm" class="form-control" value="<? echo $rows->npm; ?>" />

                </div>
            </div>
            <div class="mb-3">
                <label for="first-name" class="control-label col-md-3 col-sm-3 col-lg-12">
                    ID_NILAI
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="npm" class="form-control" value="<? echo $rows->nama; ?>" />

                </div>
            </div>
            <div class="mb-3">
                <label for="first-name" class="control-label col-md-3 col-sm-3 col-lg-12">
                    NAMA_ATRIBUT
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="kd_semester" id="kd_semester" class="form-select">
                        <option value="">Pilih semester</option>
                        <?
                        $where_smt = [
                            'kd_prodi' => $_SESSION['id']
                        ];
                        $semester_data = __ambil($db, "semester", "*", $where_smt);
                        while ($s = $semester_data->fetch_array()) {
                        ?>
                            <option value="<?php echo $s['kd_semester']; ?>" <?php echo
                                                                                $s['kd_semester'] == $rows->kd_semester ? "selected" : "" ?>>
                                <?php echo $s['semester']; ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>

                </div>
            </div>
            <div class="mb-3">
                <label for="first-name" class="control-label col-md-3 col-sm-3 col-lg-12">
                    Prodi
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="kd_prodi" id="kd_prodi" class="form-select">
                        <option value="">Pilih prodi</option>
                        <?
                        $where_prodi = [
                            'kd_prodi' => $_SESSION['id']
                        ];
                        $prodi_data = __ambil($db, "prodi", "*", $where_prodi);
                        while ($r = $prodi_data->fetch_array()) {
                        ?>
                            <option value="<?php echo $s['kd_prodi']; ?>" <?php echo
                                                                            $r['kd_prodi'] == $rows->kd_prodi ? "selected" : "" ?>>
                                <?php echo $r['nama_prodi']; ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="first-name" class="control-label col-md-3 col-sm-3 col-lg-12">
                    Password
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="submit" name="npm" class="form-control" value="<? echo $rows->npm; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="submit" class="btn btn-success btn-sm" value="Simpan">
                    <a href="admin.php?target=mahasiswa" class="btn btn-danger btn-sm">kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>