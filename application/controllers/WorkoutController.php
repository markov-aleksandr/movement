<?php


namespace Application\Controllers;


use Core\Controller;


class WorkoutController extends Controller
{
    public function actionIndex()
    {
            $this->view->generate('gym-view.php', 'template-view.php', $_POST['name']);
    }
}