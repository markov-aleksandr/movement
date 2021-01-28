<?php


namespace Application\Controllers;


use Core\Controller;


class WorkoutController extends Controller
{
    public function actionSelect()
    {
        $this->view->generate('workout-view.php', 'template-view.php');
    }

    public function actionTrain()
    {
        $this->view->generate('workout-view.php', 'template-view.php', $_POST['name']);
    }
}