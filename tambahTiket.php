<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tambah Tiket - TiketWar</title>
</head>
<body>
    <h1>Form Tambah Tiket</h1>

    <form action="prosesTambah.php" method="post" enctype="multipart/form-data">

        <p>
            <label>Nama Konser:</label><br>
            <input type="text" name="namaKonser" required>
        </p>

        <p>
            <label>Harga Tiket:</label><br>
            <input type="number" name="harga" min="1" required>
        </p>

        <p>
            <label>Jumlah Tiket:</label><br>
            <input type="number" name="jumlahTiket" min="1" required>
        </p>

        <p>
            <label>Bukti:</label><br>
            <input type="file" name="bukti" accept=".jpg,.jpeg,.png" required>
        </p>

        <button type="submit">Tambah Tiket</button>

    </form>
</body>
</html>