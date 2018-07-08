<?php

    use frontend\widgets\MenuHeader;
    use yii\helpers\Url;
    use yii\helpers\Html;
?>
<header role="banner">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-4 social">
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-instagram"></span></a>
                    <a href="#"><span class="fa fa-youtube-play"></span></a>
                </div>
                <div class="col-4 social">
                    <?php if(Yii::$app->user->isGuest):?>
                    <div style="text-align: right;">
                        <a href="<?= Url::toRoute(['auth/login'])?>">Login</a>
                        <a href="<?= Url::toRoute(['auth/register'])?>">Register</a>
                    </div>
                    <?php else: ?>
                        <?= Html::beginForm(['/auth/logout'], 'post')
                        . Html::submitButton(
                            'Logout (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'btn btn-link logout']
                        )
                        . Html::endForm() ?>
                    <?php endif;?>
                </div>
                <div class="col-4 search-top">
                    <form action="<?= Url::to(['site/search']); ?>" class="search-top-form" method="get" role="search">
                        <span class="icon fa fa-search"></span>
                        <input type="text" name="q" id="s" placeholder="Type keyword to search...">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container logo-wrap">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
                <h1 class="site-logo"><a href="<?= Url::to(['/']); ?>">Balita</a></h1>
            </div>
        </div>
    </div>

    <?php echo MenuHeader::widget(); ?>

</header>
<!-- END header -->