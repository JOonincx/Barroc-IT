<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Barroc-it</title>
</head>
<body>
<div class="container">
    <div class="wrapper">
        <div class="title">
            <h1>BARROC IT.</h1>
        </div>
        <div class="loginbox">
            <form action="#" id="loginbox" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="button" id="login" class="login" value="Login">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include_once ("../templates/footer.php");
?>