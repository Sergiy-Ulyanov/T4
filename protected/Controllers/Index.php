<?php

namespace App\Controllers;

use T4\Mvc\Controller;

class Index
    extends Controller
{
    public function actionDefault()
    {
        // публикация ресурсов
        $this->app->assets->publish('/Layouts/assets/');
    }

}