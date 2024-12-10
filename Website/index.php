<!--Signin page. Not account creation.-->
<?php
session_start();
if(isset($_SESSION['uid'])){
  header("Location: /campaigns.php");
  exit;
}

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
        echo"service wased1";
        $stmt->store_result();

        if($stmt->num_rows ==1){
          echo"service wased2";
          $stmt->bind_result($username, $email, $hashed_password);
          if($stmt->fetch()){
            if($password == $hashed_password){
              $_SESSION['uid'] = $username;
              header("Location= http://localhost/campaigns.php");
            }else{
              $login_err = "Invalid username or password.";
            }
          }
        }else{
          $login_err = "Invalid username or password.";
        }
       } else {
        echo "Oops! Something went wrong.";
      }

        $stmt->close();
    }
  }
    $conn->close();
}
?>
<!DOCTYPE html>

<html lang ="en">
  <head>
    <link rel="manifest" href="manifest.json" />
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
	  <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <meta name="apple-mobile-web-app-status-bar" content="#db4938" />
    <meta name="theme-color" content="#db4938" />

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Catacombs Login</title>
  </head>
  <body>
    <main>
      <nav>
      </nav>

        <div id="refresh-bar" className="refresh_bar" display="">
                 <Button id="refresh_btn" className="refresh_bar_class" onClick="refreshPWA()">
                     New Content available. Press here to refresh!
                 </Button>
         </div>

      <h1>This is the Login Page Properly with update</h1>

      <h2> <a href="campaigns.php">Goto campaigns</a></h2>
      <?php
       if(!empty($login_err)){
           echo '<div class="alert alert-danger">' . $login_err . '</div>';
       }
       ?>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>"><br>
        <span class="invalid-feedback"><?php echo $username_err; ?></span>

        <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
        <span class="invalid-feedback"><?php echo $password_err; ?></span>

        <input type="submit" value='Login'>
        </form>

    </main>
    <script src="js/app.js"></script>
  </body>
</html>
