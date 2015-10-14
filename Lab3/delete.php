<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 10/6/15
 * Time: 2:30 PM
 * some stuff to say it was changed
 */

include("DBCreator.php");
$db = connectToDB();



$deleteID = mysqli_query($db,"DELETE FROM actor WHERE actor_id = ' " .$_POST['deleteid'] ." ';");




if(!$deleteID)
{
    die("Invalid ID" . mysqli_error($db));
}

else{

    echo "<p> Successfully deleted "  . mysqli_affected_rows($db). " record(s)</p>";

    echo " <a href='Lab3_PartB.php'>Return to actor list</a>";

}

?>