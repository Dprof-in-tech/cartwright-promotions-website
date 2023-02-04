<?php
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    include 'db.php';
    $sql = "DELETE FROM posts WHERE id =$id";
    $result = mysqli_query($con, $sql);
    if($result){
        header('location:display2.php');
    }
}
?>