<?php
session_start();
include_once 'db.php';
if(isset($_POST["email"], $_POST["password"])) 
    {     

        $email = $_POST["email"]; 
        $password = $_POST["password"]; 

        $result1 = mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password ='$password'");
        $id_get = mysqli_query($conn,"SELECT id FROM users WHERE email='$email' AND password ='$password'");
        $id = mysqli_fetch_array($id_get);
        echo $id['id'];   


        $rows = mysqli_num_rows($result1);


        if($rows > 0 )
        { 
            echo "Logged In";
            $_SESSION['id'] = $id['id'];
            header('Location: content.php');
        }
        else
        {
            echo 'The username or password are incorrect!';
        }
}
?>