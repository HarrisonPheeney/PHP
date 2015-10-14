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
        <th>Title</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
<body>

    <?php

    include("DBCreator.php");
    $db = connectToDB();

    if (!$db)
    {
        die('Could not connect to the Sakila Database: ' . mysqli_error($db));
    }

    $serach = $_POST['qdescription'];
    $result = mysqli_query($db, "SELECT * FROM film WHERE description LIKE '%$serach%';" );
    //$result = mysqli_query($db, "SELECT * FROM film WHERE description LIKE '%boring%' LIMIT 0,10");

    if(!$result)
    {
        die('Could not retrieve records from the Sakila Database: ' . mysqli_error($db));
    }
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        //echo $row['title'] . " " . $row['description'];
        echo "</tr>";
    }

   $db = closeDb();
    
    ?>

    </tbody>
</table>


</body>
</html>