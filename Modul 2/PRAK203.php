<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK203</title>
</head>
<body>
    <form action=" " method="POST">
        <label >Nilai :</label>
        <input type="text" name="nilai">
        <br>
        <label >Dari :</label><br>
        <input type="radio" name="Suhu" value="celcius">Celcius
        <br>
        <input type="radio" name="Suhu" value="fahrenheit">Fahrenheit
        <br>
        <input type="radio" name="Suhu" value="reamur">Reamur
        <br>
        <input type="radio" name="Suhu" value="kelvin">Kelvin
        <br>
        <label >Ke :</label><br>
        <input type="radio" name="SuhuKonversi" value="celcius">Celcius
        <br>
        <input type="radio" name="SuhuKonversi" value="fahrenheit">Fahrenheit
        <br>
        <input type="radio" name="SuhuKonversi" value="reamur">Reamur
        <br>
        <input type="radio" name="SuhuKonversi" value="kelvin">Kelvin
        <br>
        <button type="submit" name="submit">Konversi</button>
        <br>
        <br>
    </form 
    <?php
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];
        $Suhu = $_POST['Suhu'];
        $SuhuKonversi = $_POST['SuhuKonversi'];
        $hasil = 0;
        if (
            $Suhu == "celcius" && $SuhuKonversi
            == "kelvin"
        ) {
            $hasil = $nilai + 273.15;
            echo "<b> Hasil Konversi: $hasil &#176K </b>";
        } else if (
            $Suhu == "celcius" &&
            $SuhuKonversi == "celcius"
        ) {
            $hasil = $nilai;
            echo "<b> Hasil Konversi: $hasil &#176C </b>";
        } else if (
            $Suhu == "celcius" &&
            $SuhuKonversi == "fahrenheit"
        ) {
            $hasil = $nilai * (9 / 5) + 32;
            echo "<b> Hasil Konversi: $hasil &#176F </b>";
        } else if (
            $Suhu == "celcius" &&
            $SuhuKonversi == "reamur"
        ) {
            $hasil = (4 / 5) * $nilai;
            echo "<b> Hasil Konversi: $hasil &#176R </b>";
        } else if (
            $Suhu == "fahrenheit" &&
            $SuhuKonversi == "celcius"
        ) {
            $hasil = ($nilai - 32) * 5 / 9;
            echo "<b> Hasil Konversi : $hasil &#176C </b>";
        } else if (
            $Suhu == "fahrenheit" &&
            $SuhuKonversi == "fahrenheit"
        ) {
            $hasil = $nilai;
            echo "<b> Hasil Konversi: $hasil &#176F </b>";
        } else if (
            $Suhu == "fahrenheit" &&
            $SuhuKonversi == "raemur"
        ) {
            $hasil = 4 / 9 * ($nilai - 32);
            echo "<b> Hasil Konversi: $hasil &#176R </b>";
        } else if (
            $Suhu == "fahrenheit" &&
            $SuhuKonversi == "kelvin"
        ) {
            $hasil = ($nilai + 459.67) * 5 / 9;
            echo "<b> Hasil Konversi: $hasil &#176K </b>";
        } else if (
            $Suhu == "reamur" &&
            $SuhuKonversi == "celcius"
        ) {
            $hasil = $nilai / 0.8;
            echo "<b> Hasil Konversi: $hasil &#176C </b>";
        } else if (
            $Suhu == "reamur" &&
            $SuhuKonversi == "fahrenheit"
        ) {
            $hasil = ($nilai * 2.25) + 32;
            echo "<b> Hasil Konversi: $hasil &#176F </b>";
        } else if (
            $Suhu == "reamur" &&
            $SuhuKonversi == "reamur"
        ) {
            $hasil = $nilai;
            echo "<b> Hasil Konversi: $hasil &#176R </b>";
        } else if (
            $Suhu == "reamur" &&
            $SuhuKonversi == "kelvin"
        ) {
            $hasil = ($nilai / 0.8) + 273.15;
            echo "<b> Hasil Konversi: $hasil &#176K </b>";
        } else if (
            $Suhu == "kelvin" &&
            $SuhuKonversi == "celcius"
        ) {
            $hasil = $nilai - 273.15;
            echo "<b> Hasil Konversi: $hasil &#176C </b>";
        } else if (
            $Suhu == "kelvin" &&
            $SuhuKonversi == "fahrenheit"
        ) {
            $hasil = ($nilai * 9 / 5) - 459.67;
            echo "<b> Hasil Konversi: $hasil &#176F </b>";
        } else if (
            $Suhu == "kelvin" &&
            $SuhuKonversi == "reamur"
        ) {
            $hasil = 4 / 5 * ($nilai - 273);
            echo "<b> Hasil Konversi: $hasil &#176R </b>";
        } else if (
            $Suhu == "kelvin" &&
            $SuhuKonversi == "kelvin"
        ) {
            $hasil = $nilai;
            echo "<b> Hasil Konversi: $hasil &#176K </b>";
        }
    }
    ?>     
</body>
</html>