<?php


namespace Application\Controllers;


use Core\Controller;


class WorkoutController extends Controller
{
    public function actionSelect()
    {
        $this->view->generate('workout-view.php', 'template-view.php');
        $_SESSION['name'] = $_POST['name'];
    }

    public function actionTrain()
    {
        $id = explode('/', $_SERVER['REQUEST_URI']);
        $setId = $id['3'];
        if ($setId) {
            $this->view->generate("$setId-view.php", 'template-view.php');
        }
    }
}