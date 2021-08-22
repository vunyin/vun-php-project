<?php
    require_once('../database/database.php');
    if(isset($_FILES['file'])){
        $imageName = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $folder = '../assets/images/';
        move_uploaded_file($tmp_name, $folder.$imageName);
        createPlaces($_POST, $imageName);
        header('Location:http://localhost/vun-php-project/?page=places');

    }else{
        echo "Fail";
    }