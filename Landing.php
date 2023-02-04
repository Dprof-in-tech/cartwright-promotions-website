<?php
if (isset($_POST['submit'])) {
    require "db.php";
    $name = $_POST['name'];
    $email = $_POST['email'];


    $sql = "INSERT INTO leads(name, email ) VALUES ('$name', '$email')";

    ///perform query
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo header('location:Register.php');
    }

}

       
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="shortcut icon" href="./img/Cartwright_Promotions_logo.png" type="image/x-icon">
    <title>Home</title>
</head>
<body>
    <div class="n-wrapper">
        <div class="n-left">
            <img src="./img/Cartwright_Promotions_logo.png" height="80px" width="80px" alt="Cartwright Promotions logo">
            <a href="Register.php"><h3>Home</h3></a>
            <a href="Register.php"><h2 class="home">Home</h2></a>
        </div>
        <div class="n-right">
            <a href="Login.php"><h3>Login</h3></a>
            <a href="https://www.portfolione.ml"><h3>Portfolio</h3></a>
            <a href="courses.php"><h3>Courses</h3></a>
        </div>
    </div>
        <!-- <h2>Certified</h2> -->
        <h2 class="experts">-- Experts in --</h2>
        <h1>DIGITAL MARKETING</h1>
        <p>Bring your business online with US. <br>
 We offer marketing services to help you bring your business to the internet
  and improve its visibility <br><br>
  Subscribe to our Newsletter for a chance at Free Exclusive 
Education on Digital marketing</p>
  
    <form method="post" >
        <input class="input" type="text" name="name" placeholder="Your Name" autocomplete="off" required="required"><br>
        <input class="input" type="email" name="email" placeholder="Input Email" autocomplete="off" required="required"><br>
        <input class="submit" type="submit" value="Submit" name="submit">
    </form>
</body>
</html>