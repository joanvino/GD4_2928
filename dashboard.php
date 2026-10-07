<?php
    session_start();
    if (!isset($_SESSION["admin"])) {
        header("Location: login.php");
        exit;
    }
    if (!isset($_SESSION["daftarWar"])) {
        $_SESSION["daftarWar"] = [];
    }
?>
<!DOCTYPE html>
<html>
<body>
    <h1>Dashboard Admin - Halo, <?php echo $_SESSION["admin"]["username"]; ?></h1>
    <p><a href="tambahTiket.php">+ Tambah Tiket War</a> | <a
    href="prosesLogout.php">Logout</a></p>
    <?php foreach ($_SESSION["daftarWar"] as $i => $tiket) { ?>
    <div>
    <h3><?php echo $tiket["nama"]; ?></h3>
    <p><?php echo $tiket["kategori"]; ?> - Rp<?php echo
    number_format($tiket["harga"], 0, ",", "."); ?></p>
    <img src="<?php echo $tiket["bukti"]; ?>" width="100">
    <form action="prosesHapus.php" method="post">
    <input type="hidden" name="hapus" value="<?php echo $i; ?>">
    <button type="submit">Hapus</button>
    </form>
    </div>
    <?php } ?>
</body>
</html>