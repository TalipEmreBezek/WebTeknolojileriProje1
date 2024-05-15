<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "b231210052@sakarya.edu.tr" && $password == "b231210052") {
    echo "Hoşgeldiniz b231210052";
} else {
    header("Location: login.html");
    exit();
}
?>
