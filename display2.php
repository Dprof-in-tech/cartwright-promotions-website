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
    <a href="Home.php"><h1 class="btn btn-primary mt-3 ">Create Post</h1></a>
    <a href="display1.php"><h1 class="btn btn-primary mt-3 ">Users</h1></a>
    <a href="display.php"><h1 class="btn btn-primary mt-3 ">Leads</h1></a>
    <a href="truncate1.php? truncate-table=' . $id . '"><button class="btn btn-danger">Truncate</button></a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Body</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
  include "db.php";
  $sql = "SELECT * FROM posts";
  $result = mysqli_query($con, $sql);
  $rowcount = mysqli_num_rows($result);
  if ($rowcount > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $body = $row['body'];

          echo '
    <tr>
      <th scope="row">' . $id . '</th>
      <td>' . $body . '</td>
      <td> <a href="delete2.php? deleteid=' . $id . '"><button class="btn btn-danger">delete</button></a></td>
      </tr>';
      }
  }
  ?>
     
  </tbody>
</table>
</body>
</html>