<?php

use yii\bootstrap\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>
<div class="row blog-entries">
    <div class="col-md-12 col-lg-8 main-content">
        <h1 class="mb-4"><?= $article->title; ?></h1>
        <div class="post-meta">
            <span class="category"><?= $article->category->title; ?></span>
            <span class="mr-2"><?= $article->getDate(); ?></span> &bullet;
            <span class="ml-2"><span class="fa fa-eye"> <?= (int) $article->viewed; ?></span></span>
        </div>
        <div class="post-content-body">
     <div class="row mb-5">
                <div class="col-md-12 mb-4 element-animate">
                    <img src="<?= $article->getImage(); ?>" alt="Image placeholder" class="img-fluid">
                </div>

            </div>
            <?= $article->content; ?>
       </div>

        <div class="pt-5">
            <p>Categories: <a href="<?= Url::toRoute(['/site/category', 'id' =>$article->category->id]); ?>"><?= $article->category->title; ?></a>
                Tags: <span style="color:#007bff;">
                    <?php foreach ($tagTitle as $item) { echo $item->title . ' '; } ?></span>
            </p>
        </div>

        <div class="pt-5">

            <ul class="comment-list">

                <?php if (!empty($comments)): ?>

                    <?php foreach ($comments as $comment): ?>
                        <li class="comment">
                            <div class="vcard">
                                <img src="/frontend/web/sourse/images/avatar.png" alt="Image Avatar">
                            </div>
                            <div class="comment-body">
                                <h3><?= $comment->user->username; ?></h3>
                                <div class="meta"><?= $comment->getDate(); ?></div>
                                <p><?= $comment->text; ?></p>
                            </div>
                        </li>
                    <?php endforeach; ?>

                <?php endif; ?>
            </ul>
            <!-- END comment-list -->

            <?php if (!Yii::$app->user->isGuest): ?>
                <div class="comment-form-wrap pt-5">
                    <h3 class="mb-5">Leave a comment</h3>

                    <?php if (Yii::$app->session->getFlash('comment')): ?>
                        <div class="alert alert-success">
                            <?= Yii::$app->session->getFlash('comment'); ?>
                        </div>
                    <?php endif;?>
                    <?php $form = ActiveForm::begin([
                            'action' => ['site/comment', 'id' => $article->id],
                            'options' => ['class' => 'p-5 bg-light']]); ?>
                        <div class="form-group">
                            <?= $form->field($commentForm, 'comment')->textarea(['class' => 'form-control', 'cols' => '30', 'rows'=>'6' ])->label('Message'); ?>
                        </div>
                        <div class="form-group">
                                <?= Html::submitButton('Post Comment', ['class' => 'btn btn-primary']) ?>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            <?php endif;?>
        </div>

    </div>

    <!-- END main-content -->
    <?= $this->render('/partials/sidebar', [
        'popular' => $popular,
        'recent' => $recent,
        'categories' => $categories,
        'tags' => $tags,
    ]); ?>
    <!-- END sidebar -->

</div>