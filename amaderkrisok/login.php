<?php
    session_start();
    if (isset( $_SESSION["user"])){
        header("Location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - AmaderKrisok</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div class="form-container">
  <?php
     
      if (isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        require_once "database.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn,$sql);
        $user = mysqli_fetch_array($result,MYSQLI_ASSOC);

        if ($user) {
            if(password_verify($password,$user["password"])) {
                session_start();
                $_SESSION["user"] = "yes";
                header("Location:index.php");
                die();
            }else{
                echo "<div>wrong password </div>";
            }
        }else{
            echo "<div>email does not match</div>";
        }
      }
        
    ?>
    <h2>Login to AmaderKrisok</h2>
    <form action="login.php" method="POST">
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit" name="login">Login</button>
    </form>
    <p>Don't have an account? <a href="registration.php">Register</a></p>
  </div>
</body>
</html>
