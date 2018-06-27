<?php
/**
 * Created by PhpStorm.
 * User: Viktoriya
 * Date: 26.06.2018
 * Time: 12:37
 */

namespace frontend\controllers;

use frontend\models\SignupForm;
use frontend\models\User;
use Yii;
use yii\bootstrap\ActiveForm;
use yii\web\Controller;
use common\models\LoginForm;
use yii\web\Response;

class AuthController extends Controller
{
    public $layout = 'inner';

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionRegister()
    {
        $model = new SignupForm();

        if (Yii::$app->request->isAjax && Yii::$app->request->isPost)
        {
            if ($model->load(Yii::$app->request->post()))
            {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ActiveForm::validate($model);
            }
        }
        if ($model->load(Yii::$app->request->post()) && $model->signup())
        {
            Yii::$app->session->setFlash('success', 'Registration completed successfully');
        }

        return $this->render('register', [
            'model' => $model,
        ]);
    }

    public function actionLoginData()
    {
        print \Yii::$app->user->identity->email;
    }


}