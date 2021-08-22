<?php
    require_once('../database/database.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        register($_POST);
        header('Location:http://localhost/vun-php-project/?page=login_view');
    }