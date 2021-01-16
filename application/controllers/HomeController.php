<?php


namespace Application\Controllers;


use Core\Controller;

class HomeController extends Controller
{

    function actionIndex()
    {
        $this->view->generate('Home-view.php', 'template-view.php');
    }
}