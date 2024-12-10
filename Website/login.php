<?php
session_start();
include 'databaseconnection.php';

$email = $password = '';
$email_err = $password_err = $login_err = '';

if($_SERVER["REQUEST_METHOD"] == "POST"){

  if(empty(trim($_POST["email"]))){
    $email_err = "Please enter email.";
  }else{
    $email = trim($_POST["email"]);
  }

  if(empty(trim($_POST["password"]))){
    $password_err = "Please enter your password.";
  }else{
    $password = trim($_POST["password"]);
  }

  if(empty($email_err) && empty($password_err)){
    $sql = "SELECT UserName, Email, Password FROM Users WHERE Email = ?";

    if($stmt = $conn->prepare($sql)){
      $stmt -> bind_param('s', $email);

      if($stmt->execute()){
        $stmt->store_result();

        if($stmt->num_rows == 1){
          $stmt->bind_result($username, $email, $hashed_password);

          if($stmt->fetch()){
            if($password == $hashed_password){
              $_SESSION['uid'] = $username;
              header("Location: /campaigns.php");
            }else{
              header("Location: index.php");
            }
           }
         }else{
           header("Location: index.php");
         }
         }
        }
        $stmt->close();
      }else{
        header("Location: index.php");
      }
           $conn->close();
      }else{
        header("Location: index.php");
      }
echo"<script src=js/app.js></script>";
?>
