<?php

namespace App\Controllers;

use App\Models\User;
use T4\Mvc\Controller;

class Admin extends Controller
{
    // проверка прав доступа
    protected function access($action, $params = [])
    {
        return (!empty($this->app->user) && (1 == $this->app->user->__id));
    }

    public function actionDefault()
    {
        $this->data->users = User::findAll();
    }

    public function actionOne($id)
    {
        $user = User::findByPK($id);
        $this->data->user = $user;
    }
} 