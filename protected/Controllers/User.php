<?php

namespace App\Controllers;

use App\Components\Auth\Identity;
use App\Components\Auth\MultiException;
use T4\Mvc\Controller;

class User extends Controller
{
    public function actionLogin($login = null)
    {
        if (null !== $login) {
            try {
                $auth = new Identity();
                $auth->login($login);
                if ($login->email == 'admin@t4.local') {
                    // перенаправляем на админ-панель
                    $this->redirect('/admin/default.html');
                } else {
                    // иначе на главную
                    $this->redirect('/');
                }

            } catch (MultiException $e) {
                $this->data->errors = $e;
            }
        }
    }

    public function actionLogout()
    {
        $auth = new Identity();
        $auth->logout();
        $this->redirect('/');
    }

    public function actionRegister($register = null)
    {
        if (null !== $register) {
            try {
                $auth = new Identity();
                $auth->register($register);
                $this->redirect('/');
            } catch (MultiException $e) {
                $this->data->errors = $e;
                $this->data->register = $register;
            }
        }
    }
} 