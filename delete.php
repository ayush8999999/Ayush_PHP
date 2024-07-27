<?php 
include('config.php');


$id = $_GET["id"];

$sql = "DELETE FROM `users` WHERE `users`.`id` = $id";

if (mysqli_query($conn,$sql)) {
     header("Location:usermanage.php");
} else {
    echo "Something went wrong". mysqli_error($conn);
}
mysqli_close($conn);



?>