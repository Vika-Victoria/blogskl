<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title='Login';
?>

<div class="row mb-4">
    <div class="col-md-6">
        <h1>Login</h1>
    </div>
</div>
<div class="row blog-entries">
    <div class="col-md-12 col-lg-8 main-content">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <div class="row">
                <div class="col-md-6 form-group">
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                </div>
                <div class="col-md-6 form-group">
                    <?= $form->field($model, 'password')->passwordInput() ?>
                </div>
                <div class="col-md-6 form-group">
                    <?= $form->field($model, 'rememberMe')->checkbox() ?>
                </div>


                <div class="col-md-6 form-group">
                     <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
    </div>
</div>




