<?php
$db = __database();
$where = [
    'id_izin' => $_GET['id']
];
$query  = __ambil($db, "tbs_daftar_izin_santri", "*", $where);
// menampilkan hasil query dalam bentuk object
// anda bisa juga menggunakan mysql_fetch_assoc atau mysql_fetch_array dll

$rows  = $query->fetch_object();
// print_r($rows);
?>
<div class="card">
    <div class="card-header">
        <h4>edit  member</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=tbs_daftar_izin_santri&action=update" data-parsley-validate class="form-horizontal form-label-left">
            <input type="hidden" name="id" value="<?php echo $rows->ID_IZIN; ?>">
            <div class="mb-3">
            <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    NIS
                </label>
                <div class="col=md-6 col-sm-6 col-lg-12">
                    <input type="text" name="nis" value="<?php echo $rows->NIS; ?>"/>
                </div>
            </div>
                <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    ID TIM
                </label>
                <div class="col=md-6 col-sm-6 col-lg-12">
                    <input type="text" name="id_tim" value="<?php echo $rows->ID_TIM; ?>"/>
                </div>
            </div>
                <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    TANGGAL IZIN
                </label>
                <div class="col=md-6 col-sm-6 col-lg-12">
                    <input type="date" name="tanggal_izin" value="<?php echo $rows->TANGGAL_IZIN; ?>"/>
                </div>
            </div>
                <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    KETERANGAN IZIN
                </label>
                <div class="col=md-6 col-sm-6 col-lg-12">
                    <input type="text" name="keterangan_izin" value="<?php echo $rows->KETERANGAN_IZIN; ?>"/>
                </div>
            </div>
            <div class="mb-3">
            <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    LAMA
                </label>
                <div class="col=md-6 col-sm-6 col-lg-12">
                    <input type="text" name="lama" value="<?php echo $rows->LAMA; ?>"/>
                </div>
            </div>
            <div class="mb-3">
            <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    TUJUAN
                </label>
                <div class="col=md-6 col-sm-6 col-lg-12">
                    <input type="text" name="tujuan" value="<?php echo $rows->TUJUAN; ?>"/>
                </div>
            </div>
            <div class="mb-3">
            <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    TANGGAL KEMBALI
                </label>
                <div class="col=md-6 col-sm-6 col-lg-12">
                    <input type="date" name="tanggal_kembali" value="<?php echo $rows->TANGGAL_KEMBALI; ?>"/>
                </div>
            </div>
            <div class="mb-3">
            <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    TIM PERIZINAN
                </label>
                <div class="col=md-6 col-sm-6 col-lg-12">
                    <input type="text" name="tim_perizinan" value="<?php echo $rows->TIM_PERIZINAN; ?>"/>
                </div>
            </div>
                    <div class="col-md-6 col-sm-6 col-lg-12">
                        <input type="submit" class="btn btn-success btn-sm" value="simpan">
                        <a class="btn  btn-danger btn-sm" href="admin.php?taarget=tbs_daftar_izin_santri">kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>