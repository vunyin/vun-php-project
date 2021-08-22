<?php
    
    /**
     * Connect to database
     */
    function db() {
        return new mysqli('localhost','root','','travel_management');
    }
    /**
    * Get all data from table travels
    */
    function getAlldata(){
        return db()->query("SELECT * FROM categories INNER JOIN travels ON categories.categoryID = travels.categoryID");
    }
    /**
    * Get all data from table travels
    */
    function getAllcate(){
        return db()->query("SELECT * FROM categories");
    }
    /**
    * Get only one on record by id 
    */
    function getOnedata($id){
        return db()->query("SELECT * FROM travels WHERE travelID = $id");
    }
    /**
    * create new record
    */
    function createPlaces($value ,$img){
        $places = $value['places'];
        $desc = $value['description'];
        $date=$value['date'];
        $categoryID = "1";
        if ($places !="" && $desc && $img !="" && $date !=""){
            db()->query("INSERT INTO travels(places,description,image,categoryID,date) VALUE('$places','$desc','$img','$categoryID','$date')");
            header("Location:http://localhost/vun-php-project/?page=places");
        }else{
            header("Location:http://localhost/vun-php-project/?page=home");
        }
       
    }
    /**
    * delete record
    */
    function deletePlaces($id){
        db()->query("DELETE FROM travels WHERE travelID = $id");
        header('Location:http://localhost/vun-php-project/?page=places');
        
    }
    /**
     * Update places
     */
    function updatePlaces($value) {
        $places = $value['places'];
        $desc = $value['description'];
        $img = $value['image'];
        $date=$value['date'];
        $id = $value['placeID'];
        db()->query("UPDATE travels SET places = '$places' ,description = '$desc',  image = '$img', date='$date'  WHERE travelID = $id");
        header('Location:http://localhost/vun-php-project/?page=places');
    }
    /**
     * search places
     */
    function searchByPlaces($places){
        $places = $places['search'];
        return db()->query("SELECT*FROM travels INNER JOIN categories ON travels.categoryID = categories.categoryID AND places LIKE '%$places%'");
    }
    /**
     * read more
     */
    function readMore($text,$number){
        return substr($text,0,$number);
    }
    /**
     * get user
     */
    function getUser() {
        return db()->query("SELECT * FROM users");
    }
    /**
     * login user
     */
    function login($value) {
        session_start();
        $username = trim($value['username']);
        $password = trim($value['password']);
        $users = getUser();
        $islogin = false;
        foreach ($users as $user) {
        //    echo (password_verify($password,trim($user['password'])));
        //    if(password_verify($password,trim($user['password'])) && $username === $user['username']) {
            if($password === $user['password'] && $username === $user['username'] && !$islogin){
                $_SESSION['username'] = $username;
                echo ('$username');
                $_SESSION['role'] = $user['role'];
                $_SESSION['message'] = "Login successful";
                $islogin = true;
                
           }
        }
        if ($islogin){
            header('Location:http://localhost/vun-php-project/?page=home');
        }else{
            $_SESSION['message'] = "Login failed";
            header('Location:http://localhost/vun-php-project/?page=login_view');
        }
    }
    /**
     * logout user
     */
    function logout() {
        session_start();
        session_destroy();
        header('Location:http://localhost/vun-php-project/?page=login_view');
    }
    /**
     * register user
     */
    function register($value) {
        $username = trim($value['username']);
        // $password = password_hash(trim($value['password']), PASSWORD_DEFAULT);
        $password = trim($value['password']);
        $role = $value['role'];
        return db()->query("INSERT INTO users(username, password, role) VALUES('$username', '$password','$role')");   
      }