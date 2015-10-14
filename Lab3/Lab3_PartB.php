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
        <th>Actor ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Last Update</th>

    </tr>
    </thead>
    <tbody>


    <?php
    include ("DBCreator.php");
    $db = connectToDB();



    if(isset($_POST['fName']) && isset($_POST['lName']))

    {
        $newActor = mysqli_query($db,"INSERT INTO actor (first_name, last_name) VALUES
    (' " . $_POST['fName'] . " ',' " . $_POST['lName'] . " ');");



        if(!$newActor)
        {
            die("Couldn't inset actor".mysqli_error($db));
        }

    }


        $result = mysqli_query($db, "SELECT * FROM actor ORDER by actor_id DESC Limit 0,10 ");


        while ($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>" . $row['actor_id'] . "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['last_update'] . "</td>";
            //echo $row['title'] . " " . $row['description'];
            echo "</tr>";


         }

    closeDb();
    
    ?>

    </body>


    </tbody>
</table>

<form action="delete.php" method="post">

    <p>ID to Delete:<input type="text" name="deleteid" />

    <input type="submit" name="Submit" value="Delete"/></p>

</form>



<form action="UpdatePostForm.php"  method="post">

         <p>ID to Update:<input type="text" name="pickedID" />
        <input type="submit" name="Submit" value="Update"/></p>

</form>







</body>
</html>