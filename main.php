<?php session_start(); if ($_SESSION["login"]){
$content = isset($_POST["content"]) ? $_POST["content"] : "servers";
$user = isset($_SESSION["user"]) ? $_SESSION["user"] : "N/A";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Main Page</title>
</head>
<body>

<div class="topnav">
  <nav>
    <form action="main.php" method=POST><input type=hidden name=content value="servers"><input <?php if($content == "servers") echo("class=active") ?> type=submit value="Servers"></form>
    <form action="main.php" method=POST><input type=hidden name=content value="console"><input <?php if($content == "console") echo("class=active") ?> type=submit value="Console"></form>
    <form action="main.php" method=POST><input type=hidden name=content value="configs"><input <?php if($content == "configs") echo("class=active") ?> type=submit value="Server Configs"></form>
    <form action="main.php" method=POST><input type=hidden name=content value="player"><input <?php if($content == "player") echo("class=active") ?> type=submit value="Player"></form>
    <form action="main.php" method=POST><input type=hidden name=content value="worlds"><input <?php if($content == "worlds") echo("class=active") ?> type=submit value="Worlds"></form>
    <form action="main.php" method=POST><input type=hidden name=content value="files"><input <?php if($content == "files") echo("class=active") ?> type=submit value="Files"></form>
    <form action="main.php" method=POST><input type=hidden name=content value="settings"><input <?php if($content == "settings") echo("class=active") ?> type=submit value="General Settings "></form>
    
  </nav>
  <section id=account>
    Logged in as <b><?php echo $user ?></b> - <a href=logout.php>Logout</a>
  </section>
</div>

<?php echo $content ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>
</html><?php }else{echo("Log-In before accesing the page! <a href=index.php>Start</a>");} ?>