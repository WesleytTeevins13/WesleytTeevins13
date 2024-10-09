<?php
session_start();
$_SESSION['username'] = 'JohnDoe';
echo "User: " . $_SESSION['username'];
$_SESSION['password'] = 'password123';
echo "<br>Password: " . $_SESSION['password'];