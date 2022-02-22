<?php
$conn = new mysqli("localhost", "root", "", "landingpage");
$username = $_POST['username'];
$comment = $_POST['comment'];
if($conn->connect_errno){
    echo "Не удалось подключиться к MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
    exit;
} else{
    $sql = "INSERT INTO `registiration` (`id`, `Username`, `Comment`) VALUES (NULL, '$username', '$comment');";
    mysqli_query($conn, $sql);
    echo "<script>alert('Comment was successfully')</script>";
}