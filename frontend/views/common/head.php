<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;

?>
<header role="banner">
    <div class="top-banner">
        <div class="container">
    <?php
    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/admin/default/index']],
        ['label' => 'Comments', 'url' => ['/admin/comment/index']],
        ['label' => 'Articles', 'url' => ['/admin/article']],
        ['label' => 'Categories', 'url' => ['/admin/category']],
        ['label' => 'Tag', 'url' => ['/admin/tag']],
    ];

    echo Nav::widget([
        'options' => ['class' => 'nav nav-pills'],
        'items' => $menuItems,

    ]);
    NavBar::end();
    ?>
    </div>
    </div>
    <div class="container logo-wrap">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <h1 class="site-logo"><a href="<?= Url::to(['/']); ?>">Balita</a></h1>
            </div>
        </div>
    </div>
    <br>

</header>
<!-- END header -->