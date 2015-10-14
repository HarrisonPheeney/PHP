<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<form action="update.php" method="post">
    <input type="hidden" name="passedID" value="<?php echo $_POST['pickedID']; ?>">
    <p>First Name:<input type="text" name="NewFirstName" /></p>
    <p>Last Name:<input type="text" name="NewLastName" /></p>

    <p><input type="submit" name="Submit" value="Send Form"/></p>
</form>

</body>
</html>