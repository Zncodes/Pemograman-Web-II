<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK302</title>
    <style>
        .tab {
            width: 20px;
            height: 20px;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        Tinggi :<input type="text" name="tinggi"> <br>
        Alamat Gambar : <input type="text" name="url" value="https://cdn0.iconfinder.com/data/icons/web-and-mobile-icons-volume-2/128/52-512.png" required> <br>
        <input type="submit" value="cetak">

    </form>
    <?php
    error_reporting(0);
    $tinggi = $_POST['tinggi'];
    $url = $_POST['url'];

    $a = 1;
    while ($a <= $tinggi) {
        $b = 1;
        while ($b < $a) {
            echo "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;";
            $b++;
        }
        $c = $tinggi;
        while ($c >= $a) {
            echo "<img src='$url'class='tab'>";
            $c--;
        }
        echo '<br>';
        $a++;
    }
    ?>
</body>

</html>