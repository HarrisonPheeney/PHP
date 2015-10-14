<?php

function connectToDB()
{
    $db = mysqli_connect("localhost","root", "inet2005","employees");
    if (!$db)
    {
        die('Could not connect to the Employees Database: ' .
            mysqli_error($db));
    }
    return $db;
}

function closeDb()
{
    $db = mysqli_connect("localhost","root", "inet2005","employees");
    mysqli_close($db);
}
?>