<?php
    require_once('partial/header.php');
    require_once('partial/navbar.php');
    if(isset($_GET['page'])) {
        $hasPage = file_exists('pages/' . $_GET['page'] . '.php');
        $page = "pages/". $_GET['page'] . ".php";
        if($hasPage) {
            require_once($page);
        }else {
            require_once('pages/login_html.php');
        }
    }else {
        require_once('pages/login_html.php');
    }

    require_once('partial/footer.php');