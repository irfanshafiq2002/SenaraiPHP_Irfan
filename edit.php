<?php
$istilah = $_GET['istilah'];
$filename = "istilah/$istilah";
$f = fopen($filename, 'r');
$saiz = filesize($filename);
$keterangan = fread($f, $saiz);
fclose($f);
?>

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
<h1>
    Edit Istilah:
    <span class="biru">
        <?php echo substr($istilah, 0, -4); ?>
    </span>
</h1>

<form action="edit-simpan.php" method="post">
    <input type="hidden" name="istilah" value="<?php echo $istilah; ?>">
    <table>
        <tr class="atas">
            <td><label for="keterangan">Keterangan</label></td>
            <td><textarea name="keterangan" id="keterangan" class="textarea" required><?php echo $keterangan; ?></textarea>
            </td>
        </tr>
    </table>
    <button type="submit" class="btn">Simpan</button>
    <a href="index.php" class="btn">Batal</a>
</form>
</body>
</html>
