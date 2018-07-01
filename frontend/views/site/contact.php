<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
    use yii\bootstrap\Alert;
?>
        <div class="row mb-4">
            <div class="col-md-6">
                <h1>Contact</h1>
            </div>
        </div>

   <?php if(Yii::$app->session->hasFlash('success1')){
    $success = Yii::$app->session->getFlash('success1');
    echo Alert::widget([
        'options' => [
            'class' => 'alert-success',
        ],
        'body' => $success,
    ]);
   } elseif (Yii::$app->session->hasFlash('error')) {
        $success = Yii::$app->session->getFlash('error');
        echo \yii\bootstrap\Alert::widget([
            'options' => [
               'class' => 'alert-success',
            ],
            'body' => $success,
        ]);
   } ?>

        <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
            <?php $form = ActiveForm::begin(); ?>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <?= $form->field($model, 'name')->textInput(['class' => 'form-control'])->label('Name*'); ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <?= $form->field($model, 'email')->textInput(['class' => 'form-control'])->label('Email*'); ?>
                        </div>
                        <div class="col-md-12 form-group">
                            <?= $form->field($model, 'subject')->textInput(['class' => 'form-control'])->label('Subject*'); ?>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <?= $form->field($model, 'body')->textarea(['rows' => 6, 'class' => 'form-control'])->label('Write Message*'); ?>
                        </div>
                    </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                    <?= Html::submitButton('Send Message', ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>

                <?php ActiveForm::end() ?>
            </div>

            <?= $this->render('/partials/sidebar', [
                'popular' => $popular,
                'recent' => $recent,
                'categories' => $categories,
                'tags' => $tags,
            ]); ?>
            <!-- END sidebar -->

        </div>

