<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>TiketWar</title>
    </head>
    <body>
        <h2>Daftar Konser War Tiket Minggu Ini</h2>
        <?php
           $daftarKonser = [
                [
                "nama" => "Coldplay - Music of the Spheres",
                "tanggal" => "2026-03-15",
                "kategori" => "Festival",
                "harga" => 1500000
                ],
                [
                "nama" => "Dewa 19 Reunion Show",
                "tanggal" => "2026-04-02",
                "kategori" => "VIP",
                "harga" => 2500000
                ],
                [
                "nama" => "NCT Dream World Tour",
                "tanggal" => "2026-05-20",
                "kategori" => "Reguler",
                "harga" => 900000
                ],
           ];

            $hargaAsli = $daftarKonser[0]["harga"];
            $persenDiskon = 20;
            $hargaSetelahDiskon = $hargaAsli - ($hargaAsli * $persenDiskon / 100);
            $tiketMasihAda = $daftarKonser[0]["harga"] > 0;

            $sisaTiket = $daftarKonser[0]["harga"] > 0 ? 15 : 0; // contoh sederhana
            if ($sisaTiket > 10) {
                $statusTiket = "Masih Banyak";
            } elseif ($sisaTiket > 0) {
                $statusTiket = "Sisa Dikit, Buruan!";
            } else {
                $statusTiket = "Sold Out";
            }

            $kategori = $daftarKonser[0]["kategori"];
            switch ($kategori) {
                case "Festival": $badge = "Festival Pass"; break;
                case "VIP": $badge = "VIP Access"; break;
                case "Reguler": $badge = "Reguler"; break;
                default: $badge = "Kategori tidak dikenali";
            }
            echo "Selamat datang di TiketWar - war tiket konser paling gercep sekali!";
        ?>
         <?php foreach ($daftarKonser as $konser) { ?>
            <div style="border: 1px solid #ccc; padding: 12px; margin-bottom: 8px;">
            <h3><?php echo $konser["nama"]; ?></h3>
            <p>Tanggal: <?php echo $konser["tanggal"]; ?></p>
            <p>Kategori: <?php echo $konser["kategori"]; ?></p>
            <p>Harga: Rp<?php echo number_format($konser["harga"], 0, ",", "."); ?></p>
        </div>
        <?php } ?>
        <p>Konser terdekat: <?php echo $daftarKonser[0]["nama"]; ?></p>
        <p>Tanggal: <?php echo $daftarKonser[0]["tanggal"]; ?></p>
        <p>Harga asli: Rp<?php echo $hargaAsli; ?></p>
        <p>Setelah diskon <?php echo $persenDiskon; ?>%: Rp<?php echo $hargaSetelahDiskon;?></p>
        <p>Status: <?php echo $statusTiket; ?></p>
        <p>Kategori: <?php echo $badge; ?></p>
    </body>
</html>