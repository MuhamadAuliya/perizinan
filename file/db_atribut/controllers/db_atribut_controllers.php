<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'id_atribut' => $_POST['id_atribut'],
        'nama_atribut' => $_POST['nama_atribut'],
        'nilai_atribut' => $_POST['nilai_atribut']
    ];
    $simpan = __simpan($db, "db_atribut", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=db_atribut';
        </script>
    <?php
    } else {
        echo "gagal simpan" . $db->error;
    }
}
//end kondisi input
//start kondisi delete
elseif ($opsi == "delete") {
    $where = [
        'id_atribut' => $_GET['id']
    ];
    $delete = __delete($db, "db_atribut", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=db_atribut';
        </script>
    <?php
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
<?php
    } else {
        echo "gagal update" . $db->error;
    }
}
//end kondisi update
?>