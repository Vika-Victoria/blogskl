<?php
/**
 * Created by PhpStorm.
 * User: Viktoriya
 * Date: 21.06.2018
 * Time: 13:19
 */

namespace app\modules\main\controllers;


use yii\web\Controller;

class MainController extends Controller
{

    public $layout = "inner";

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionContact()
    {
        return $this->render('contact');
    }

    public function actionSingle()
    {
        return $this->render('single');
    }

    public function actionCategory()
    {
        return $this->render('category');
    }
}