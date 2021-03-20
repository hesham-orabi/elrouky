<?php
    include 'connect.php';
    $templete = 'include/templetes/';

    include $templete . 'head.php' ;
    if(!isset($NoNavbar)){include $templete . 'navbar.php'; };

?>