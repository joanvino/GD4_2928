<?php
session_start();

$nama = $_POST["namaPembeli"];
$konser = $_POST["pilihKonser"];
$jumlah = $_POST["jumlahTiket"];

$folderTujuan = "bukti_bayar/";
$namaFile = basename($_FILES["buktiBayar"]["name"]);
$alamatFile = $folderTujuan . $namaFile;

if (move_uploaded_file($_FILES["buktiBayar"]["tmp_name"], $alamatFile)) {
    $pesanUpload = "Bukti pembayaran berhasil diupload.";
} else {
    $pesanUpload = "Gagal upload bukti pembayaran.";
}

$dataTiket = [
    "namaPembeli" => $nama,
    "konser" => $konser,
    "jumlahTiket" => $jumlah,
    "buktiBayar" => $alamatFile
];

$_SESSION["daftarWar"][] = $dataTiket;
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Tiket Berhasil Ditambahkan!</h1>

    <p>Nama Pembeli: <?php echo $nama; ?></p>
    <p>Konser: <?php echo $konser; ?></p>
    <p>Jumlah tiket: <?php echo $jumlah; ?></p>
    <p><?php echo $pesanUpload; ?></p>
</body>
</html>