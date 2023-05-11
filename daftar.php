<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Senarai Istilah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Daftar Istilah Baru</h1>

<form action="daftar-simpan.php" method="post">
    <table>
        <tr>
            <td><label for="istilah">Istilah</label></td>
            <td><input type="text" name="istilah" id="istilah" class="input_teks" required></td>
        </tr>
        <tr class="atas">
            <td><label for="keterangan">Keterangan</label></td>
            <td><textarea name="keterangan" id="keterangan" class="textarea" required></textarea>
            </td>
        </tr>
    </table>
    <button type="submit" class="btn">Simpan</button>
    <a href="index.php" class="btn">Batal</a>
</form>
</body>
</html>
