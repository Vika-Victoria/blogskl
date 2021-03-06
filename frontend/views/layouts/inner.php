<?php

use frontend\assets\AppAsset;

use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!doctype html>
    <html lang="en">
    <head>
        <title><?=$this->title ?></title>
        <meta charset="<?= Yii::$app->charset; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?=Html::csrfMetaTags() ?>
        <?php $this->head() ?>
    </head>
    <body>
    <?= $this->render('//common/header'); ?>

    <?php if(Yii::$app->session->hasFlash('success')): ?>
    <div style="font-size: 20px; text-align: center">
        <?php
        $success = Yii::$app->session->getFlash('success');
        echo \yii\bootstrap\Alert::widget([
            'options' => [
                'class' => 'alert-success',
            ],
            'body' => $success,
        ])
        ?>
        <?php endif; ?>
    </div>



    <section class="site-section">
        <div class="container">

             <?= $content ?>

        </div>
    </section>


    <?= $this->render('//common/footer') ?>

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>


    <?php $this->endBody(); ?>
    </body>
    </html>
<?php $this->endPage() ?>