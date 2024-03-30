<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Smartphone Samsung</title>
    <style>
        th, td {
            border: 2px solid;
            text-align: left;
            padding: 2px;
        }
        th {
            background-color: red;
        }
    </style>
</head>
<body>
    <table border ="2">
        <tr>
            <th><h2>Daftar Smartphone Samsung</h2></th>
        </tr>
        <?php
        $smartphones = array(
            "Samsung Galaxy S22" => "2022",
            "Samsung Galaxy S22+" => "2022",
            "Samsung Galaxy A03" => "2021",
            "Samsung Galaxy Xcover 5" => "2021"
        );
        
        foreach ($smartphones as $phone => $year) 
        {
            echo "<tr>";
            echo "<td>$phone</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
