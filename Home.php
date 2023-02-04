



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="shortcut icon" href="./img/Cartwright_Promotions_logo.png" type="image/x-icon">
    <title>Home | Cartwright Promotions Agency</title>
</head>
<body>
<div class="container">
    <div class="popup" id="popup">
        <div class="popup-box">
                <form class="popup-content" method="post">
                    <h1 id="close">Close</h1>
                    <h2>Create a New Post</h2>
                    <hr>
                    <span><img src="./img/cartwright (3).jpg" alt="" height="50" width="50">
                     <select name="location">
                        <option value="location1"><h2>America</h2></option>
                        <option value="location1"><h2>America</h2></option>
                        <option value="location1"><h2>America</h2></option>
                        <option value="location1"><h2>America</h2></option>
                        <option value="location1"><h2>America</h2></option>
                        <option value="location1"><h2>America</h2></option>
                        <option value="location1"><h2>America</h2></option>
                        <option value="location1"><h2>America</h2></option>
                        <option value="location1"><h2>America</h2></option>
                     </select></span>

                     <textarea name="message" placeholder="what do you want to talk about?" id="message"></textarea><br>
                     <a href="">Add hastag</a>
                     <span><a href=""><h2>image</h2></a><a href=""><h2>Video</h2></a>
                    <a href=""><h2>Article</h2></a> <button id="post" name="submit">Post</button></span>
                    <?php
                   if (isset($_POST['submit'])) {
                   require "db.php";
                  $message = $_POST['message'];
                  $sql = "INSERT INTO posts(body ) VALUES ('$message')";

                   ///perform query
                  $result = mysqli_query($con, $sql);
                  if($result){
                            header('location:Home.php');
                  }
                }

                ?>
               </form>
        </div>
    </div>
    <div class="navbar">
        <div class="navbar-left">
            <img src="./img/Cartwright_Promotions_logo.png" alt="" height="40px" width="40px">
            <h2>Cartwright Promotions</h2>
            <input type="search" name="search" placeholder="Search" class="search">
        </div>

        <div class="navbar-right">
            <img src="./img/cartwright (3).jpg" alt="" height="50" width="50">
            <select>
                <option></option>
                <option><a href=""><h1>Profile</h1></a></option>
                <option><h1>logout</h1></option>
            </select>
        </div>
    </div>

    <div class="b-container">
        <div class="b-left">
            <!-- <div class="b-left-top">
                <img src="./img/Cartwright_Promotions_logo.png" alt="" height="40" width="40">
                <h3>Home</h3>
            </div> -->
            <button class="product">Register Product</button><br>
            <div class="links">
                <a href="https://www.portfolione.ml" id="links" ><img src="./img/pngkey.com-globe-icons-png-3470107.png" alt="" height="20" width="20"><h1>Portfolio</h1></a><br>
                <a href="Landing.php" id="links"><img src="./img/pngkey.com-globe-icons-png-3470107.png" alt="" height="20" width="20"><h1>Overview</h1></a><br>
                <a href="library.php" id="links"><img src="./img/pngkey.com-globe-icons-png-3470107.png" alt="" height="20" width="20"><h1>Library</h1></a> <br>
                <a href="services.php" id="links"><img src="./img/pngkey.com-globe-icons-png-3470107.png" alt="" height="20" width="20"><h1>Services</h1></a> <br>
                <a href="display2.php" id="links"><img src="./img/pngkey.com-globe-icons-png-3470107.png" alt="" height="20" width="20"><h1>Posts</h1></a>
                <br>
                <a href="Settings"id="links"><img src="./img/pngkey.com-globe-icons-png-3470107.png" alt="" height="20" width="20"><h1>Settings</h1></a><br>
            </div>
        </div>

        <div class="b-right" id="b-right">
            <div class="display">
               <img src="./img/cartwright (3).jpg" id="author" alt="" height="50" width="50">
               <button class="postbutton" onclick="show()">Start a post</button><br>
               <a href=""><h2>Photo</h2></a>
               <a href=""><h2>Video</h2></a>
               <a href=""><h2>Job</h2></a>
               <a href=""><h2>Write Article</h2></a> 
            </div>
            
            <?php
            // Retrieve the posts from the database
            require "db.php";
            $sql = "SELECT * FROM posts";
            $result = mysqli_query($con, $sql);

            // Display the posts
            while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='message'>";
            echo  '<span><img src="./img/Cartwright_Promotions_logo.png" alt="" height="50" width="50" >
            <h2>Cartwright Promotions</h2></span>';
            echo "<h2>";
            echo $row['body'];
            echo "</h2>";
            echo "</div>";
            }
            ?>
        </div>
    </div>

 </div>

<script src="home.js"></script>       
</body>
</html>