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
  <title>Register - AmaderKrisok</title>
  <link rel="stylesheet" href="css/register.css">
</head>
<body>
  <div class="form-container">
    <?php
      // print_r($_POST)
      if (isset($_POST["submit"])) {
        $fullname = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        $password_hash = password_hash($password,PASSWORD_DEFAULT);

        $errors = array();
        if (empty($fullname) or empty($email) or empty($password) or empty($confirm_password)) {
          array_push($errors,"all fields are required");
        }
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
          array_push($errors,"email is not valid");
        }
        if(strlen($password)<8){
          array_push($errors,"password must be at least 8 char long");
        }
        require_once "database.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn,$sql);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount > 0) {
          array_push( $errors,"Email already exists");
        }
        if($password!=$confirm_password){
          array_push($errors,"Pasword does not match");
        }
        if(count($errors)>0){
          foreach ($errors as $error) {
            echo "<div class='aleart aleart-danger'>$error</div>";
          }
        }else{
          
          $sql = "INSERT INTO users (full_name,email,password) values(?,?,?)";
          $stmt = mysqli_stmt_init($conn);
          $preparestmt = mysqli_stmt_prepare($stmt,$sql);
          if($preparestmt){
            mysqli_stmt_bind_param($stmt,"sss",$fullname,$email,$password_hash);
            mysqli_stmt_execute($stmt);
            echo "<div>
              <h1>Registration Successfully </h1>
            </div>";
          }else{
            die("something wrong");
          }
        }
      }
    ?>
    <h2>Create an Account</h2>
    <form action="registration.php" method="post">
      <input type="text" name="name" placeholder="Full Name" >
      <input type="email" name="email" placeholder="Email Address" >
      <input type="password" name="password" placeholder="Password" >
      <input type="password" name="confirm_password" placeholder="Confirm Password" >
      <button type="submit" name="submit">Register</button>
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
  </div>
</body>
</html>
