<!-- Country and capital mini project -->

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Form</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country" /> <br>
        <input type="submit" />
    </form>
</body>

</html> -->

<!-- <?php
        $countries = array(
            "Saudi Arabia" => "Riyadh",
            "Pakistan" => "Islamabad",
            "USA" => "Washington DC",
            "Japan" => "Kyoto",
            "South Korea" => "Seoul",
            "Portugal" => "Lisbon",
            "India" => "Delhi",
        );
        echo "The capital of {$_POST["country"]} is " . "<b> {$countries[$_POST["country"]]}</b>";
        ?> -->



<!-- Object oriented programming practice -->
<!-- 
<?php

class class1
{
    public $x;
    function class1Func()
    {
        echo "This is class 1 string <br>";
    }


    // function __construct()
    // {
    //     echo $this->x = 20 . "<br>";
    // }


    // function __destruct()
    // {
    //     echo "Destructor has been called";
    // }
}

class class2
{
    function class2Func()
    {
        echo "This is class 2 string <br>";
    }
}

interface MyInterface
{
    function class3Func();
}
interface MyInterface2
{
    function class4Func();
}

class class3 implements MyInterface, MyInterface2
{

    function class3Func()
    {
        echo "This is interface 3 string <br>";
    }
    function class4Func()
    {
        echo "This is interface 4 string <br>";
    }
}


$obj3 = new class3();
$obj3->class4Func();
$obj3->class3Func();

?> -->




<!-- Login fields check using empty and isset -->

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Form</title>
</head>

<body>
   
</body>

</html> -->

<!-- <?php

        if (isset($_POST["login"])) {
            if (empty($_POST["username"]) || empty($_POST["password"])) {
                echo "Please provide all fields";
            } else {
                echo "Welcome {$_POST["username"]}";
            }
        }
        ?> -->




<?php


$server = "localhost";
$user = "root";
$password = "";
$name = "mydatabas";

try {
    $conn = mysqli_connect($server, $user, $password, $name);
    if ($conn) {
        echo "Connected successfully";
    }
} catch (mysqli_sql_exception) {
    echo "Couldn't connect";
}



// $password = "piza";
// $hash = password_hash($password, PASSWORD_DEFAULT);
// if (password_verify("piza", $hash)) {

//     echo "Welcome, paswords matched";
// } else {
//     echo "Passwords do not match. Please try again";
// }


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (!empty($_POST["username"])) {
//         echo "The request method is post";
//     } else {
//     }
// }



// foreach ($_SERVER as $key => $value) {
//     echo "{$key}={$value}" . "<br>";
// }



// session_start();

// if (isset($_POST["submit"])) {
//     if (empty($_POST["username"]) || empty($_POST["password"])) {
//         echo "Please provide both username and password";
//     } else {
//         $_SESSION["username"] = $_POST["username"];
//         $_SESSION["password"] = $_POST["password"];
//         header("Location: about.php");
//     }
// }



// if (isset($_POST["submit"])) {
//     if (empty($_POST["username"])) {
//         echo "Please fill input field";
//     } else {

//         // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

//         $u = filter_input(INPUT_POST, "username", FILTER_VALIDATE_INT);

//         if (empty($u)) {

//             echo "Please add a number";
//         } else {
//             echo "Welcomee";
//         }
//     }
// }



// setcookie("key1", "pizza", time() + 86400, "/");
// setcookie("key2", "juice", time() + 86400, "/");

// foreach ($_COOKIE as $key => $value) {
//     echo "{$key}={$value}" . "<br>";
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
</head>

<body>
    <!-- <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])  ?>" method="post">
        Username <input type="text" name="username"><br>
        Passoword <input type="password" name="password"><br>

        <input type="submit" name="submit" value="Submit">

    </form> -->

</body>

</html>