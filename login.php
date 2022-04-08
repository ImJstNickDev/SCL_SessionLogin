<?php

    session_start();

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = md5($_POST['password']);
    $_SESSION['sid'] = session_id();
    echo '<h1><center>LOGIN EFFETTUATO, REDIRECT IN 5 SECONDI...</center></h1>';
    header('Refresh: 5; URL=dashboard.php');
?>