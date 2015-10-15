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


<body>
<table>
    <thead>
    <tr>
        <th>Employee Num</th>
        <th>Birth Date</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Hire Date</th>

    </tr>
    </thead>
    <tbody>


    <?php
    include ("ConnectToDB.php");
    $db = connectToDB();



    if(!isset($_POST['currIndex'])) {
        $_POST['currIndex'] = 0;

        $currentIndex = 0;
        /*if (!$newActor) {
            die("Couldn't inset actor" . mysqli_error($db));
        }*/

    }

    $currentIndex = $_POST['currIndex'];

    $result = mysqli_query($db, "SELECT * FROM employees  Limit $currentIndex,25 ");


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


    closeDb();

    $currentIndex += 25;
    ?>





</tbody>
</table>

<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">

    <input type="hidden" name="currIndex" value="<?php echo $currentIndex; ?>"
    <input type="submit" value="<">
    <input type="submit" value=">">
</form>







</body>
</html>