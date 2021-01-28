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
        if ($_POST['workout'] == "set1") {
            $this->view->generate("set1-view.php", 'template-view.php', $_SESSION['name']);
        } elseif ($_POST['workout'] == "set2") {
            $this->view->generate("set2-view.php", 'template-view.php', $_SESSION['name']);
        } elseif ($_POST['workout'] == "set3") {
            $this->view->generate("set3-view.php", 'template-view.php', $_SESSION['name']);
        } elseif ($_POST['workout'] == "set4") {
            $this->view->generate("set4-view.php", 'template-view.php', $_SESSION['name']);
        }

    }


}