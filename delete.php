<?php
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    include 'db.php';
    $sql = "DELETE FROM users WHERE id =$id";
    $result = mysqli_query($con, $sql);
    if($result){
        header('location:display1.php');
    }
}
?>