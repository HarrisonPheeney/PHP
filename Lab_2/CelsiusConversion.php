<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Lab 2</title>
    <style type="text/css">
        table, td, th {
            border: 1px solid black;
        }

        tr:nth-child(even) {
            background-color: blue;
        }

        th{
            background-color: gray;
        }
    </style>


</head>

<body>

<a href="FahrenheitConversion.php"> Click here to go see Fahrenheit conversions</a>


</body>

<table>
    <thead>
    <tr>
        <th>Celsius</th>
        <th>Fahrenheit</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for ($x =0; $x <= 100; $x++):
        $Fahrenheit = ($x * 1.8) +32;
        $Fahrenheit = round($Fahrenheit);
        ?>
        <tr>
            <td><?php echo $x; ?></td>
            <td><?php echo $Fahrenheit; ?></td>
        </tr>
    <?php
    endfor;
    ?>
    </tbody>
</table>
</body>
</html>