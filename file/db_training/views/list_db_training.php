<div class="card">
    <div class="card-header">
        <h4>Training</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        // buat header table
        echo "<a class='btn btn-primary btn-sm' href='admin.php?target=db_training&action=form'>Tambah</a><br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
            <th>ID_TRAINING</th>
            <th>ID_ATRIBUT</th>
            <th>JENIS_IZIN</th>
            <th>JARAK_IZIN</th>
            <th>LAMA_IZIN</th>
            <th>JUMLAH_IZIN</th>
            <th>JUMLAH_IZIN</th>
            <th>STATUS_SANTRI</th>
            <th>STATUS_SANTRI</th>
            <th>ACTION</th>
            </tr>
            </thead>
            <tbody>";
        // ambil data dari database
        $q = __ambil($db, "db_training");
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
                <td>" . $no . "</td>
                <td>" . $r['ID_TRAINING'] . "</td>
                <td>" . $r['ID_ATRIBUT'] . "</td>
                <td>" . $r['JENIS_IZIN'] . "</td>
                <td>" . $r['JARAK_IZIN'] . "</td>
                <td>" . $r['LAMA_IZIN'] . "</td>
                <td>" . $r['JUMLAH_IZIN'] . "</td>
                <td>" . $r['STATUS_SANTRI'] . "</td>
                <td>" . $r['BERI_IZIN'] . "</td>
                <td>
                    <a class='btn btn-success btn-sm' href='admin.php? target=db_training&action=edit&id=" . $r['ID_TRAINING'] . "'>edit</a>
                    <a class='btn btn-danger btn-sm' href='admin.php? target=db_training&action=delete&id=" . $r['ID_TRAINING'] . "'>hapus</a>
                </td>
            </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>
</div>