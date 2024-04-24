<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK204</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Nilai :</label>
        <input type="text" name="nilai" value="<?= isset($_POST['nilai']) ? $_POST['nilai'] : '' ?>"><br>
        <button type="submit" name="submit">Konversi</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];
        $hasil;
        $i = strlen($nilai);
        if (isset($_POST['submit'])) {
            if ($nilai == 0) 
            {
                echo "<h2><b>Hasil: Nol<b></h2>";
            } 
            else if ($nilai > 0 && $nilai < 10) 
            {
                echo "<h2><b>Hasil : Satuan</h2><b>";
            } 
            else if ($nilai > 10 && $nilai < 20) 
            {
                echo "<h2><b>Hasil : Belasan</h2><b>";
            } 
            else if ($nilai == 10 || $nilai > 19 && $nilai < 100 ) 
            {
                echo "<h2><b>Hasil : Puluhan</h2><b>";
            } 
            else if ($i == 3) 
            {
                echo "<h2><b>Hasil : Ratusan</h2><b>";
            } 
            else if ($nilai == 1000) 
            {
                echo "<h2><b>Hasil : Anda Menginput Melebihi Limit Bilangan</h2><b>";
            }
        }
    }
    ?>
</body>
</html>