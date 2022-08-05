<?php
$db = __database();
$opsi = $_GET['action'];
// start input
if ($opsi == "input") {
    $data = [
        'id_training' => $_POST['id_training'],
        'id_atribut' => $_POST['id_atribut'],
        'jenis_izin' => $_POST['jenis_izin'],
        'jarak_izin' => $_POST['jarak_izin'],
        'jumlah_izin' => $_POST['jumlah_izin'],
        'status_santri' => $_POST['status_santri'],
        'beri_izin' => $_POST['beri_izin']
    ];
    $simpan = __simpan($db, "db_training", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=db_training';
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
        'id_training' => $_GET['id']
    ];
    $delete = __delete($db, "db_training", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=db_training';
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
        'id_training' => $_POST['id_training'],
        'id_atribut' => $_POST['id_atribut'],
        'jenis_izin' => $_POST['jenis_izin'],
        'jarak_izin' => $_POST['jarak_izin'],
        'lama_izin' => $_POST['lama_izin'],
        'jumlah_izin' => $_POST['jumlah_izin'],
        'status_santri' => $_POST['status_santri'],
        'beri_izin' => $_POST['beri_izin']
    ];
    $where = [
        'id_training' => $_POST['id']
    ];
    $update = __update($db, "db_training", $data, $where);
    if ($update) {
    ?>
        <script>
            window.location.href = 'admin.php?target=db_training';
        </script>
<?php
    } else {
        echo "gagal update" . $db->error;
    }
}
// end kondisi update
?>