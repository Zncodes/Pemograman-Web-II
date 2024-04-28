<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK303</title>
</head>

<body>
    <form action="" method="post">
        Batas Bawah <br> <input type="text" name="bawah"><br>
        Batas Atas <br> <input type="text" name="atas"><br>
        <input type="submit" value="cetak" name="hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {

        $bawah = $_POST['bawah'];
        $atas = $_POST['atas'];
        do {
            if (($bawah + 7) % 5 == 0) {
                echo "<img src='star.png' alt='*' width='20px'> ";
            } else {
                echo "$bawah ";
            }
            $bawah++;
        } while ($bawah <= $atas);
    }

    ?>
</body>

</html>