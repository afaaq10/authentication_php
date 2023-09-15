<?php
// session_start();
echo " Welcome {$_SESSION["username"]}";

if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: index.php");
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
    <form action="about.php" method="post">
        <h1>I am an about page</h1> <br>
        <input type="submit" name="logout" value="Logout">
    </form>

</body>

</html>
