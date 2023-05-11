<?php
$folder = 'istilah/';
$files = scandir($folder);
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
<table class="table0">
    <tr>
        <td>
            <h1>Senarai Istilah</h1>
        </td>
        <td class="kanan"><a href="daftar.php" class="btn">Daftar Istilah Baru</a></td>
    </tr>
</table>

<table class="table">
    <tr class="kiri">
        <th>BIL</th>
        <th>ISTILAH</th>
        <th>TINDAKAN</th>
    </tr>

    <?php
    $bil = 1;
    foreach ($files as $filename) {
        if ($filename != '.' and $filename != '..') {
            ?>
            <tr>
                <td><?php echo $bil++; ?></td>
                <td><?php echo substr($filename, 0, -4); ?></td>
                <td>
                    <a href="papar.php?istilah=<?php echo $filename; ?>" class="btn">Papar</a>
                    <a href="edit.php?istilah=<?php echo $filename; ?>" class="btn">Edit</a>
                    <a href="padam.php?istilah=<?php echo $filename; ?>" class="btn" onclick="return sahkan()">Padam</a>
                </td>
            </tr>
            <?php
        }
    }
    ?>
</table>

<script>
    function sahkan() {
        return confirm('Anda pasti?');
    }
</script>
</body>
</html>
