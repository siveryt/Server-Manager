<?php if(file_exists("firstrun.php")){
    header("Location: firstrun.php");
} ?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login to your Webinterface</title>
</head>

<body>
    <div class="login">
        <form action=login.php?next=main method="POST">
            <section class=title>
                <p>LOGIN</p>
            </section>
            <table>
                <tr>
                    <td>Username: </td>
                    <td><input type=text id=username name=username></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type=Password id=password name=password></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type=submit value=Login></td>
                </tr>
            </table>

        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>

</html>