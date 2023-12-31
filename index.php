<?php

    // conectarea la db

        $db_host='localhost';
        $db_user='root';
        $db_password='';
        $db_name='MVC';

        $dsn="mysql:host=$db_host;dbname=$db_name;charset=utf8";
        $db= new PDO($dsn,$db_user,$db_password);

    // includerea claselor

        require 'model.php';
        require 'view.php';
        require 'controller.php';


        //initiere


    $userModel = new UserModel($db);

    $userView = new UserView();
    $userController = new UserController($userModel,$userView);

    // actiuni

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $userController->addUser($_POST['username'],$_POST['email']);
    } else {
        $userController->displayUsers();
        $userView->renderForm();
    }
