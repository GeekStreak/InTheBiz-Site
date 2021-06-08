<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $sql = "INSERT INTO users (name,email,password)
     VALUES ('$name','$email','$password')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>