<?php

class UserController
{
    private $model;
    private $view;

    public function __construct(UserModel $model,UserView  $view)
    {
        $this->model=$model;
        $this->view = $view;
    }

    public function displayUsers()
    {
        $users = $this->model->getUsers();
        $this->view->renderUsers($users);
    }

    public function addUser($username,$email)
    {
        $this->model->addUser($username,$email);
        $this->displayUsers();
    }
}