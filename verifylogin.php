<?php
session_start();

$password = "powerade123" . $_POST['password'] . "powerade123";
$email = $_POST['email']

$filename = "pass.txt";
$content = file_get_contents($filename);
$hashed_password = substr_replace($content, '', -1);

$filename = "email.txt";
$content = file_get_contents($filename);
$real_email = substr_replace($content, '', -1);

if ($email == $real_email) {

    if (password_verify($password, $hashed_password)) {

        $_SESSION["admin"] = "true";
        header('Location: https://34.216.220.94/admin.php');
        exit();
    
    } else {
    
        header('Location: https://34.216.220.94/admin.php?login=false');
        exit();
    
    }

} else {

    header('Location: https://34.216.220.94/admin.php?login=false');
    exit();

}

?>