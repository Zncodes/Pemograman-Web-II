<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PRAK401</title>
</head>
<body>
    <form method="POST">
        <label for="panjang">Panjang: </label>
        <input type="text" id="panjang" name="panjang" required><br>
        <label for="lebar">Lebar: </label>
        <input type="text" id="lebar" name="lebar" required><br>
        <label for="nilai">Nilai: </label>
        <input type="text" id="nilai" name="nilai" required><br>
        <button type="submit">Cetak</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $panjang = intval($_POST['panjang']);
        $lebar = intval($_POST['lebar']);
        $nilai = explode(" ", trim($_POST['nilai']));

        $expectedCount = $panjang * $lebar;
        if (count($nilai) !== $expectedCount) {
            echo "<p>Panjang nilai tidak sesuai dengan ukuran matriks</p>";
        } else {
            echo "<table border='1'>";
            for ($i = 0; $i < $panjang; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $lebar; $j++) {
                    $index = $i * $lebar + $j;
                    echo "<td>" . htmlspecialchars($nilai[$index]) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>
</body>
</html>