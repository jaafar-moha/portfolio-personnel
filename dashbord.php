<?php

    // logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>WELCOM IN DASHBORD</h2>
    <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
</body>
</html>