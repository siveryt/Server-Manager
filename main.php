<?php session_start(); if ($_SESSION["login"]){ ?>
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
    <a class="active" href="#home">Servers</a>
    <a href="#news">Console</a>
    <a href="#contact">Server Configs</a>
    <a href="#about">Players</a>
    <a href="#about">Worlds</a>
    <a href="#about">Files</a>
    <a href="#about">General Settings</a>
    
  </nav>
</div>

<p>TESST</p>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>
</html><?php }else{echo("Log-In before accesing the page! <a href=index.php>Start</a>");} ?>