<?php
session_start();
require_once "../database.php";
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
   $query ="SELECT * FROM admin_login WHERE username = '$username' AND admin_password = '$password'";
  $login = mysqli_query($conn,$query); 
    
  if($login){ 
    foreach($login as $user){
     $_SESSION['user'] = $user['username'];
    }
    // echo "success";
    header('Location:all-posts.php');
  }
  else{
    // echo "err";
    header('Location:admin-login.php');
  } 
}
?>