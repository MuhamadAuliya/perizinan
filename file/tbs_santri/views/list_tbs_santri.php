<div class="card">
    <div class="card-header">
        <h4>Tbs Santri</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        // buat header table
        echo "<a class='btn btn-primary btn-sm' href='admin.php?target=tbs_santri&action=form'>Tambah</a><br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
            <th>NO</th><th>NIS</th><th>NAMA</th><th>JENIS_KELAMIN</th><th>TANGGAL_LAHIR</th><th>ASRAMA</th><th>ACTION</th>
            </tr>
            </thead>
            <tbody>";
        // ambil data dari database
        $q = __ambil($db, "tbs_santri");
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
                <td>" . $no . "</td>
                <td>" . $r['NIS'] . "</td>
                <td>" . $r['NAMA'] . "</td>
                <td>" . $r['JENIS_KELAMIN'] . "</td>
                <td>" . $r['TANGGAL_LAHIR'] . "</td>
                <td>" . $r['ASRAMA'] . "</td>
                <td>
                    <a class='btn btn-success btn-sm' href='admin.php? target=tbs_santri&action=edit&id=" . $r['NIS'] . "'>edit</a>
                    <a class='btn btn-danger btn-sm' href='admin.php? target=tbs_santri&action=delete&id=" . $r['NIS'] . "'>hapus</a>
                </td>
            </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>
</div>