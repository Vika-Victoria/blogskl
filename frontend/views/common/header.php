<?php

    use frontend\widgets\MenuHeader;
    use yii\helpers\Url;
?>
<header role="banner">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-9 social">
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-instagram"></span></a>
                    <a href="#"><span class="fa fa-youtube-play"></span></a>
                </div>
                <div class="col-3 search-top">
                    <!-- <a href="#"><span class="fa fa-search"></span></a> -->
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