<?php
    session_start();
    if(!$_SESSION['useremail']) {
        header('location: index.php');
    }

    $_SESSION['useremail']=null;
    session_destroy();
    header('location: index.php');
?>