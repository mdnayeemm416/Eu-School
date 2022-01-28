<?php
session_start();
unset($_SESSION['uid']);
session_destroy();

header("Location: ../C:\xampp\htdocs\Main-project\login.php");
exit;
