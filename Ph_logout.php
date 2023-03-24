<?php

    session_start();
    session_destroy();
    header('location: Ph_login.php');
?>