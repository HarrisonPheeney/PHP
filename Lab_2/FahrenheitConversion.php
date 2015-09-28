<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Demo Dynamic Tables</title>
    <style type="text/css">
        table, td, th {
            border: 1px solid black;
        }
    </style>
</head>

<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 9/25/15
 * Time: 12:52 PM
 */


/*for ($x = 0; $x < 100; $x++) {

    $Celsius = Math.round(($x - 32) * .56);

    echo $x." degree(s) fahrenheit equals ".$Celsius." degree(s) Celsius"."<br \>";;

}*/


?>

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
            <td><?php echo $Celsius; ?></td>
        </tr>
    <?php
    endfor;
    ?>
    </tbody>
</table>
</body>
</html>