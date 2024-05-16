<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PRAK402</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
        th, td {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    $mahasiswa = [
        [
            "Nama" => "Andi",
            "NIM" => "2101001",
            "Nilai UTS" => 87,
            "Nilai UAS" => 65
        ],
        [
            "Nama" => "Budi",
            "NIM" => "2101002",
            "Nilai UTS" => 76,
            "Nilai UAS" => 79
        ],
        [
            "Nama" => "Tono",
            "NIM" => "2101003",
            "Nilai UTS" => 50,
            "Nilai UAS" => 41
        ],
        [
            "Nama" => "Jessica",
            "NIM" => "2101004",
            "Nilai UTS" => 60,
            "Nilai UAS" => 75
        ]
    ];

    function hitungNilaiAkhir($nilaiUTS, $nilaiUAS) {
        return ($nilaiUTS * 0.4) + ($nilaiUAS * 0.6);
    }

    function getHuruf($nilaiAkhir) {
        if ($nilaiAkhir >= 80) {
            return 'A';
        } elseif ($nilaiAkhir >= 70) {
            return 'B';
        } elseif ($nilaiAkhir >= 60) {
            return 'C';
        } elseif ($nilaiAkhir >= 50) {
            return 'D';
        } else {
            return 'E';
        }
    }

    foreach ($mahasiswa as &$data) {
        $nilaiAkhir = hitungNilaiAkhir($data["Nilai UTS"], $data["Nilai UAS"]);
        $data["Nilai Akhir"] = $nilaiAkhir;
        $data["Huruf"] = getHuruf($nilaiAkhir);
    }
    unset($data); 

    echo "<table>";
    echo "<tr><th>Nama</th><th>NIM</th><th>Nilai UTS</th><th>Nilai UAS</th><th>Nilai Akhir</th><th>Huruf</th></tr>";
    foreach ($mahasiswa as $data) {
        echo "<tr>";
        echo "<td>{$data['Nama']}</td>";
        echo "<td>{$data['NIM']}</td>";
        echo "<td>{$data['Nilai UTS']}</td>";
        echo "<td>{$data['Nilai UAS']}</td>";
        $nilaiAkhirFormatted = rtrim(rtrim(number_format($data['Nilai Akhir'], 1), '0'), '.');
        echo "<td>{$nilaiAkhirFormatted}</td>";
        echo "<td>{$data['Huruf']}</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>