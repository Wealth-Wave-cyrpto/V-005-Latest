<?php
include "../Database/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="index.php" method="post">

        <input type="text" name="username"><br>
        <input type="text" name="age"><br>
        <input type="text" name="email"><br>
        <button name="login">Login</button>
</form>


</body>
</html>

<?php

// $sql = "SELECT * FROM users";

// $feed = mysqli_query($conn,$sql);

// $row = mysqli_num_rows($feed);

// $user = mysqli_fetch_assoc($feed);

//  foreach($user as $key =>  $value){
//     echo "{$key} = {$value} <br>";
//  }





if(isset($_POST['login'])){
    
    // Filters in PHP  (SANITIZE)

      /*
            $username = filter_input(INPUT_POST, "username",FILTER_SANITIZE_SPECIAL_CHARS);
            echo "Hello {$username}<br>";


            $age = filter_input(INPUT_POST, "age",FILTER_SANITIZE_NUMBER_INT);
            echo "You are {$age} years old <br>";


            $email = filter_input(INPUT_POST, "email",FILTER_SANITIZE_EMAIL);
            echo "Your email is {$email}";

         */


    // VALIDATE User's input

              // 1. Numbers
    $age = filter_input(INPUT_POST, "age",FILTER_VALIDATE_INT);

    if(empty($age)){
        echo "The age is invalid <br>";
    }else{
         echo "You are {$age} years old ";
    }

             //2. Email

        $email = filter_input(INPUT_POST, "email",FILTER_VALIDATE_EMAIL);

        if(empty($email)){
            echo "The Email is invalid <br>";
        }else{
            echo "Your Email is:  {$email} ";
        }



}



?>

