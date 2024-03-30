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
    </style>
</head>
<body>
    <table border="2" >
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <?php
        $smartphones = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");
        
        foreach ($smartphones as $phone) 
        {
            echo "<tr>";
            echo "<td>$phone</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
