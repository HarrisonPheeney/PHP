<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <style type="text/css">

    </style>


</head>

<body>

<?php

        echo "Your first name is ". $_POST['fName']."<br />";
        echo "Your last name is: ".$_POST['lName']."<br />";
        echo "Your height in metres is: ".round((($_POST[feet]*12) + ($_POST[inches] *0.025))*0.025);

?>



</body>

</body>
</html>