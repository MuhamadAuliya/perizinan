<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'ID_ATRIBUT' => $_POST['ID_ATRIBUT'],
        'ID_NILAI' => $_POST['ID_NILAI'],
        'NAMA_ATRIBUT' => $_POST['kd_semester'],
        'kd_prodi' => $_POST['kd_prodi'],
        'password' => sha1($_POST['password'])
    ];
    $simpan = __simpan($db, "db_atribut", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=atribut';
        </script>
    <?
    } else {
        echo "gagal simpan" . $db->error;
    }
}
//end kondisi input
//start kondisi delete
elseif ($opsi == "delete") {
    $where = [
        'ID_ATRIBUT' => $_GET['id']
    ];
    $delete = __delete($db, "atribut", $where);
    if ($delete) {
    ?>
        <script>
            w
            window.location.href = 'admin.php?target=atribut';
        </script>
    <?
    }
}
//end kondisi delete
//start kondisi update
elseif ($opsi == "update") {
    if (!empty($_POST['password'])) {
        $data = [
            'ID_ATRIBUT' => $_POST['ID_ATRIBUT'],
            'ID_NILAI' => $_POST['ID_NILAI'],
            'NAMA_ATRIBUT' => $_POST['NAMA_ATRIBUT']
        ];
    }
    $where = [
        'ID_ATRIBUT' => $_POST['id']
    ];
    $update = __update($db, "atribut", $data, $where);
    if ($update) {
    ?>
        <script>
            window.location.href = 'admin.php?target=atribut';
        </script>
<?
    } else {
        echo "gagal update" . $db->error;
    }
}
//end kondisi update
?>