<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Lab 2</title>
    <style type="text/css">
        table, td, th, tr {
            border: 1px solid black;

        }

        tr:nth-child(even) {
            background-color: gray;
        }

        th{
            background-color: gray;
        }

    </style>



</head>

<body>

<a href="CelsiusConversion.php">Click here to go to Celsius Conversions</a>


</body>

<table>
    <thead>
    <tr>
        <th>Fahrenheit</th>
        <th>Celsius</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for ($x =0; $x <= 100; $x++):
        $Celsius = ($x - 32) * .56;
        ?>
        <tr>
            <td><?php echo $x; ?></td>
            <td><?php echo round($Celsius); ?></td>
        </tr>
    <?php
    endfor;
    ?>
    </tbody>
</table>
</body>
</html>