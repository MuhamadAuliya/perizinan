<?php
$db = __database();
$opsi = $_GET['action'];
// start input
if ($opsi == "input") {
    $data = [
        'id_izin' => $_POST['id_izin'],
        'tanggal_izin' => $_POST['tanggal_izin'],
        'keterangan_izin' => $_POST['keterangan_izin'],
        'lama' => $_POST['lama'],
        'tujuan' => $_POST['tujuan'],
        'tanggal_kembali' => $_POST['tanggal_kembali']
    ];
    $simpan = __simpan($db, "tbs_daftar_izin_santri", $data);
    if ($simpan) {
        ?>
        <script>
            window.location.href = 'admin.php?target=tbs_daftar_izin_santri';
        </script>
    <?php
    } else {
        echo "gagal simpan " . $db->error;
    }
}
// end kondisi input
// start  kondisi delete
elseif ($opsi == "delete") {
    $where = [
        'id_izin' => $_GET['id']
    ];
    $delete = __delete($db, "tbs_daftar_izin_santri", $where);
    if ($delete) {
        ?>
        <script>
            window.location.href ='admin.php?target=tbs_daftar_izin_santri';
        </script>
    <?php
    } else {
        echo "gagal hapus" . $db->error;
    }
}
// end kondisi delete
// start kondisi update
elseif ($opsi == "update") {
    $data = [
        'tanggal_izin' => $_POST['tanggal_izin'],
        'keterangan_izin' => $_POST['keterangan_izin'],
        'lama' => $_POST['lama'],
        'tujuan' => $_POST['tujuan'],
        'tanggal_kembali' => $_POST['tanggal_kembali']
    ];
    $where = [
        'id_izin' => $_POST['id']
    ];
    $update = __update($db, "tbs_daftar_izin_santri", $data, $where);
    if ($update) {
        ?>
        <script>
            window.location.href = 'admin.php?target=tbs_daftar_izin_santri';
        </script>
    <?php
    } else {
        echo "gagal update" . $db->error;
    }
}
// end kondisi update
?>