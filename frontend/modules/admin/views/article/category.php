<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Article */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Set Category';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="blogs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= Html::dropDownList('category', $selectedCategory, $categories, ['class'=>'form-control']) ?>

    <br>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>