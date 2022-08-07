<?php

if (!isset($_GET['target'])) {
?>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>halaman utama</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_conten">
                Selamat Datang Di Sistem Pembantu Keputusan Perizinan Santri
                Ponpes Salafiyah Syafiiyah Sukorejo
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <img src="" alt="">
                ip adress anda: <?php echo $_SERVER['REMOTE_ADDR']; ?>
                <br>
                tanggal: <?php echo date("d/m/y"); ?>
            </div>
        </div>
    </div>
    <?php
} else {
    $target = $_GET['target'];
    if (empty($target)) {
    ?>
        <script>
            window.location.href = 'admin.php';
        </script>
<?php
    }

    if (!isset($_GET['action'])) {
        getcontentadmin(base_url(), $target);
    } else {
        getcontentadmin(base_url(), $target, $_GET['action']);
    }
}
?>