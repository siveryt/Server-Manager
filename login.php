<?php
session_start();
$username = isset($_POST["username"]) ? $_POST["username"] : "N/A";
$password = isset($_POST["password"]) ? $_POST["password"] : "N/A";
$next = isset($_GET["next"]) ? $_GET["next"] : "N/A";
?>
<?php if ($username != "N/A" || $password != "N/A"){
    if(file_exists("./user/$username.php")) {
        include("./user/$username.php");
        if ($password == $usr_password){
            $_SESSION["login"] = true;
            header("location: $next.php");
        }else echo ("The User doesn't exist or the password is wrong! <a href=index.php>Back</a> 2");
    }else echo ("The User doesn't exist or the password is wrong! <a href=index.php>Back</a> 1");
    echo("$username : $password");

}else echo("Please enter Username and Password! <a href=index.php>Back</a>") ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Checking Login...</title>
</head>
<body>

<p>Checking Login data...</p>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>