<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data KRS Mahasiswa</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
        th, td {
            text-align: center;
            vertical-align: top;
        }
        .green {
            background-color: green;
            color: white;
        }
        .red {
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>
    <?php
    $krs = [
        [
            "No" => 1,
            "Nama" => "Ridho",
            "MataKuliah" => [
                ["MataKuliah" => "Pemrograman I", "SKS" => 2],
                ["MataKuliah" => "Praktikum Pemrograman I", "SKS" => 1],
                ["MataKuliah" => "Pengantar Lingkungan Lahan Basah", "SKS" => 2],
                ["MataKuliah" => "Arsitektur Komputer", "SKS" => 3]
            ]
        ],
        [
            "No" => 2,
            "Nama" => "Ratna",
            "MataKuliah" => [
                ["MataKuliah" => "Basis Data I", "SKS" => 2],
                ["MataKuliah" => "Praktikum Basis Data I", "SKS" => 1],
                ["MataKuliah" => "Kalkulus", "SKS" => 3]
            ]
        ],
        [
            "No" => 3,
            "Nama" => "Tono",
            "MataKuliah" => [
                ["MataKuliah" => "Rekayasa Perangkat Lunak", "SKS" => 3],
                ["MataKuliah" => "Analisis dan Perancangan Sistem", "SKS" => 3],
                ["MataKuliah" => "Komputasi Awan", "SKS" => 3],
                ["MataKuliah" => "Kecerdasan Bisnis", "SKS" => 3]
            ]
        ]
    ];

    foreach ($krs as &$data) {
        $totalSKS = 0;
        foreach ($data["MataKuliah"] as $mk) {
            $totalSKS += $mk["SKS"];
        }
        $data["TotalSKS"] = $totalSKS;
        $data["Keterangan"] = $totalSKS < 7 ? "Revisi KRS" : "Tidak Revisi";
    }
    unset($data); 

    echo "<table>";
    echo "<tr><th>No</th><th>Nama</th><th>Mata Kuliah diambil</th><th>SKS</th><th>Total SKS</th><th>Keterangan</th></tr>";
    foreach ($krs as $data) {
        $rowCount = count($data["MataKuliah"]);
        echo "<tr>";
        echo "<td rowspan='$rowCount'>{$data['No']}</td>";
        echo "<td rowspan='$rowCount'>{$data['Nama']}</td>";

        $first = true;
        foreach ($data["MataKuliah"] as $mk) {
            if (!$first) echo "<tr>";
            echo "<td>{$mk['MataKuliah']}</td>";
            echo "<td>{$mk['SKS']}</td>";
            if ($first) {
                echo "<td rowspan='$rowCount'>{$data['TotalSKS']}</td>";
                $keteranganClass = $data['Keterangan'] == 'Revisi KRS' ? 'red' : 'green';
                echo "<td rowspan='$rowCount' class='$keteranganClass'>{$data['Keterangan']}</td>";
                $first = false;
            }
            echo "</tr>";
        }
    }
    echo "</table>";
    ?>
</body>
</html>