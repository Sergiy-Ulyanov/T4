<?php

namespace App\Controllers;

use App\Models\Article;
use T4\Mvc\Controller;

class News extends Controller
{
    public function actionDefault()
    {
        $this->data->news = Article::findAll();
    }
    
    public function actionAll()
    {
        $this->data->news = Article::findAll();
    }

    public function actionOne($id)
    {
        $this->data->article = Article::findByPK($id);
    }

    public function actionLast()
    {
        $this->data->article = Article::find(['order' => '__id DESC']);
    }
} 