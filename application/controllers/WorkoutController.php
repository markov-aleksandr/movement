<?php


namespace Application\Controllers;


use Core\Controller;


class WorkoutController extends Controller
{
    public function actionIndex()
    {
        $this->view->generate('gym-view.php', 'template-view.php');
        if (isset($_POST["name"]) && isset($_POST["age"])) {

            // Формируем массив для JSON ответа
            $result = array(
                'name' => $_POST["name"],
                'age' => $_POST["age"]
            );
            var_dump($result);

            // Переводим массив в JSON
//            echo json_encode($result);
            }
    }
}