<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
?>
        <div class="row mb-4">
            <div class="col-md-6">
                <h1>Contact</h1>
            </div>
        </div>
        <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
            <?php $form = ActiveForm::begin(); ?>
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <?= $form->field($model, 'name')->textInput(['class' => 'form-control'])->label('Name'); ?>
                        </div>
                        <div class="col-md-4 form-group">
                            <?= $form->field($model, 'phone')->textInput(['class' => 'form-control'])->label('Phone'); ?>
                        </div>
                        <div class="col-md-4 form-group">
                            <?= $form->field($model, 'email')->textInput(['class' => 'form-control'])->label('Email'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <?= $form->field($model, 'email')->textarea(['rows' => 6, 'class' => 'form-control'])->label('Write Message'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary">
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

