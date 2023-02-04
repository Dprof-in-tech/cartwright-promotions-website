
<?php
// Start the session
session_start();

//connect to the database
$db = mysqli_connect("localhost", "root", "", "cartwright");

//initialize variables
$email = "";
$password = "";
$errors = array();

//form submission


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
        <h2>Login to your Account</h2>
        <h1>Quick and Easy</h1>
    <input class="input" type="email" name="email" placeholder="Your Email" autocomplete="off"><br>

    <input class="input" type="password" name="password" placeholder="Create Password" autocomplete="off" required="required"><br>
    <?php
    if (isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
    
        //form validation
        if (empty($email)) {
            echo "<p class='error'>Email is required</p>";
        }else{

        }
        if (empty($password)) {
            echo "<p class= 'error'>Password is required</p>";
        }else{

        }
    
        //check for errors
        if (!empty($password)) {
            $query = "SELECT * FROM users WHERE email='$email'";
            $results = mysqli_query($db, $query);
            if(!$results){
                die(mysqli_error($db));
            }
            if (mysqli_num_rows($results) == 1) {
                $user = mysqli_fetch_assoc($results);
                if (password_verify($password, $user['password'])) {
                    //log user in
                    $_SESSION['email'] = $email;
                    $_SESSION['success'] = "You are now logged in";
                    header('location: Home.php');
                } else {
                    echo "<p class='error'>Wrong email/password combination</p>";
                }
            }else{
                echo "<p class='error'>No such user exists</p>";
            }
        }
    }
    ?>
    <input class="submit" type="submit" value="login" name="submit"><br>
    <br>
     <h1>Login with</h1>
     <a href=""><img src="./img/google.png" alt="" height="30" width="30"></a><br><br>
    <h1>or <a href="Register.php">create an account with us!</a></h1><br>
    </form>
</body>
</html>
