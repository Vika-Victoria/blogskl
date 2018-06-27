<?php
    use yii\bootstrap\ActiveForm;
    use yii\helpers\Html;

?>
<div class="row mb-4">
    <div class="col-md-6">
        <h1>Register</h1>
    </div>
</div>

<div class="row blog-entries">
    <div class="col-md-12 col-lg-8 main-content">

        <?php $form = ActiveForm::begin([
                'enableAjaxValidation' => true,
        ]); ?>
            <div class="row">
                <div class="col-md-6 form-group">
                    <?= $form->field($model, 'username')->textInput(['class' => 'form-control'])->label('Name'); ?>
                </div>
                <div class="col-md-6 form-group">
                    <?= $form->field($model, 'email')->textInput([ 'class' => 'form-control'])->label('Email'); ?>
                </div>
                <div class="col-md-6 form-group">
                    <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control'])->label('Password'); ?>
                </div>
                <div class="col-md-6 form-group">
                    <?= $form->field($model, 'repassword')->passwordInput(['class' => 'form-control'])->label('Confirm Password'); ?>
                </div>
                <div class="col-md-6 form-group">
                <?= Html::a('Upload Avatar', ['set-image'], ['class' => 'btn btn-primary']) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    <?php
                    echo Html::submitButton('Register', ['class' => 'btn btn-primary']);
                    ?>
                </div>
            </div>
        <?php ActiveForm::end(); ?>

    </div>
</div>




