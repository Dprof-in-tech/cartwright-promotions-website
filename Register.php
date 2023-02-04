<?php 
if(isset($_POST['submit'])){
    require "db.php";
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <link rel="shortcut icon" href="./img/Cartwright_Promotions_logo.png" type="image/x-icon">
    <title>Register | Cartwright Promotions</title>
</head>
<body>
    <form  method="post">
        <br>
        <h1><a href="Landing.php">Home</a></h1>
        <h2>Create Your account for free</h2>
        <h1>No Credit Card Needed!!</h1>
    <input class="input" type="email" name="email" placeholder="Your Email" autocomplete="off"><br>
    <?php
    if (isset($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      echo '<p class="error">Invalid email</p>';
    }
  ?>
    <input class="input" type="text" name="username" placeholder="Create Username" autocomplete="off"><br>
    <input class="input" type="password" name="password" placeholder="Create Password" autocomplete="off" required="required"><br>
    <input class="input" type="password" name="confirmpassword" placeholder="Confirm Password" autocomplete="off" required="required"><br>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $password = $_POST['password'];
      $confirmpassword = $_POST['confirmpassword'];

      if ($password != $confirmpassword) {
        echo '<p class="error">Passwords dont match!! Please try again.</p>';
      } else {

        // continue with the rest of the form processing
        // Connect to the database
        $db = new PDO('mysql:host=localhost;dbname=cartwright', 'root', '');
        // Prepare a SQL statement to check if the email already exists in the database
        $stmt = $db->prepare('SELECT * FROM users WHERE email = :email');
        $stmt->bindParam(':email', $_POST['email']);
        // Execute the SQL statement
        $stmt->execute();
        // If a record is found, display an error message
        if ($stmt->rowCount() > 0) {
          echo '<p class="error">This email is already registered. Please Login!!</p>';
        } elseif ($password == $confirmpassword) {
          $sql = "INSERT INTO users(username, email, password ) VALUES ('$username', '$email', '$hashed_password')";
          $result = mysqli_query($con, $sql);

          if ($result) {
            header('location:Home.php');
          }else{

          }
        }

      }
     
    }
?>
    <input class="submit" type="submit" value="Submit" name="submit"><br>
    <br>
    <h1>You have an account with us,<a href="login.php">Login</a></h1>
    <h1>By Clicking submit, you consent to our company and customer's <a href="">Privacy Policies</a></h1>
    </form>
</body>
</html>