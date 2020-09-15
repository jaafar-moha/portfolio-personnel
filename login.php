<?php
include 'conxtion.php';


if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from youcode where email='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['email'] = $uname;
            header('Location: dashbord.php');
        }else{
            echo "Invalid email and password";
        }

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sass/login.scss">
    <script src="https://kit.fontawesome.com/5e67adc73a.js" crossorigin="anonymous"></script>

    <title>login</title>
</head>
<body>
    <!-- <?php include 'navbar.php'; ?> -->


    <a href="index.php"><i class="fas fa-arrow-alt-circle-left arrow" ></i></a>

    <div class="container">
    <form method="post" action="">
        <div id="div_login">
            <h1>Login</h1>
            <div>
                <input type="email" class="textbox" id="txt_uname" name="txt_uname" placeholder="Email" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <input type="submit" value="Submit" name="but_submit" id="but_submit" />
            </div>
        </div>
    </form>
</div>
    
</body>
</html>