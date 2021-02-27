<?php

namespace app\controllers;

use Yii;
use app\models\User;
use app\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class MainController extends Controller 
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}