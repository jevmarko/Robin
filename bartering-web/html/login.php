<?php
include("../php/psignin.php");

?>

<!DOCTYPE html>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <title>Login Form</title>
</head>
<body>
<?php include('header.php'); ?>

    <form action="login.php" method="post">
    <?php include('../php/errors.php')?>
        <label>Email or Username:</label><br>
        <input type="text" name="email_or_username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Log In">
    </form>

</body>
</html>
