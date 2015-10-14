<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 10/6/15
 * Time: 2:30 PM
 */

include("DBCreator.php");
$db = connectToDB();

$UpdateID = mysqli_query($db,"UPDATE actor SET first_name = ' ".$_POST['NewFirstName']." ', last_name = '".$_POST['NewLastName']." '
WHERE actor_id = ' " .$_POST['passedID'] ." ';");




if(!$UpdateID)
{
    die("Invalid ID" . mysqli_error($db));
}

else{

    echo "<p> Successfully Updated "  . mysqli_affected_rows($db). " record(s)</p>";

    echo " <a href='Lab3_PartB.php'>Return to actor list</a>";

}

?>