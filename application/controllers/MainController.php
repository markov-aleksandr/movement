<?php

namespace Application\Controllers;


use Core\Controller;

class MainController extends Controller
{
//    public function __construct()
//    {
//        parent::__construct();
//        $this->model = new MainModel();
//    }

    public function actionIndex()
    {
        $this->view->generate('main-view.php', 'template-view.php');
    }



}