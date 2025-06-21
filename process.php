<?php 
include 'dbcon.php';

session_start();
if(isset($_POST['login'])){
    //echo "Successfully";
    $email = $_POST['email'];
    $pw = $_POST['password'];

    $query = "SELECT * FROM user WHERE email='$email' AND password='$pw'";
    $result = mysqli_query($conn,$query);
    
    if(mysqli_num_rows($result) > 0){
        $_SESSION['email'] = $email;
        header('Location: home.php');
        
    } else {
        // User does not exist
        echo "Invalid email or password";
    }
}

?>