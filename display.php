<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>My Database</title>
</head>
<body>
    <a href="register.php"><h1 class="btn btn-primary mt-3 ">Register User</h1></a>
    <a href="Home.php"><h1 class="btn btn-primary mt-3 ">Create Post</h1></a>
    <a href="display1.php"><h1 class="btn btn-primary mt-3 ">Users</h1></a>
    <a href="display2.php"><h1 class="btn btn-primary mt-3 ">Posts</h1></a>
    <a href="truncate.php? truncate-table=' . $id . '"><button class="btn btn-danger">Truncate</button></a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
  include "db.php";
  $sql = "SELECT * FROM leads";
  $result = mysqli_query($con, $sql);
  $rowcount = mysqli_num_rows($result);
  if ($rowcount > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $name = $row['name'];
          $email = $row['email'];

          echo '
    <tr>
      <th scope="row">' . $id . '</th>
      <td>' . $name . '</td>
      <td>' . $email . '</td>
      </tr>';
      }
  }
  ?>
     
  </tbody>
</table>
</body>
</html>