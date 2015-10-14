<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <style = "text/css">
    table,td,th{
        border: 1px solid black;
    }
    </style>
</head>


<table>
    <thead>
    <tr>
        <th>Employee Num</th>
        <th>Birth Date</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender </th>
        <th>Hire Date</th>
    </tr>
    </thead>
    <tbody>
    <body>

    <?php

    include("DBCreator.php");
    $db = connectToDB();

    if (!$db)
    {
        die('Could not connect to the Employees Database: ' . mysqli_error($db));
    }

    $serach = $_POST['sTerm'];
    $result = mysqli_query($db, "SELECT * FROM employees;" );
    //$result = mysqli_query($db, "SELECT * FROM film WHERE description LIKE '%boring%' LIMIT 0,10");

    if(!$result)
    {
        die('Could not retrieve records from the Employees Database: ' . mysqli_error($db));
    }
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>" . $row['emp_no'] . "</td>";
        echo "<td>" . $row['birth_date'] . "</td>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['hire_date'] . "</td>";
        //echo $row['title'] . " " . $row['description'];
        echo "</tr>";
    }

    $db = closeDb();

    ?>

    </tbody>
</table>


</body>
</html>