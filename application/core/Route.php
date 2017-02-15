<?php

class Route
{
    static public function start()
    {
        //Контроллер и действие по умолчанию
        $controller_name = 'main';
        $action_name = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        //Получаем имя контроллера
        if (!empty($routes[1])) {
            $controller_name = $routes[1];
        }
        //Получаем имя экшна
        if (!empty($routes[2])) {
            $action_name = $routes[2];
        }

        //Добавим префиксы
        $model_name = 'Model_' . $controller_name;
        $controller_name = 'Controller_' . $controller_name;
        $action_name = 'action_' . $action_name;

        //Подключим файл с классом модели
        $model_file = strtolower($model_name) . '.php';
        $model_path = "application/models/" . $model_file;
        if (file_exists($model_path)) {
            include $model_path;
        }
        //подключим файл с классом контроллера
        $controller_file = strtolower($controller_name). '.php';
        $controller_path = "application/controllers/" . $controller_file;
        if (file_exists($controller_path)) {
            include $controller_path;
        } else {
            Route::ErrorPage404();
        }
        //Создаем контроллер
        $controller = new $controller_name;
        $action = $action_name;
        //Проверим наличие параметра
        $parameter=null;
        if(!empty($routes[3])){
            $parameter=$routes[3];
    }

        if (method_exists($controller, $action)) {
            $controller->$action($parameter);
        } else {
            Route::ErrorPage404();
        }
    }

    public static function ErrorPage404()
    {
        $host = 'http://' . $_SERVER['SERVER_NAME'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header("Location:" . $host.'404');
        //lesson19/404
    }
}