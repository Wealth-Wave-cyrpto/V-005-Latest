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
    



</body>
</html>

<?php

$sql = "SELECT * FROM users";

$feed = mysqli_query($conn,$sql);

$row = mysqli_num_rows($feed);

$user = mysqli_fetch_assoc($feed);

 foreach($user as $key =>  $value){
    echo "{$key} = {$value} <br>";
 }


?>

