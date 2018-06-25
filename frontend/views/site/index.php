<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use yii\helpers\Url;
use yii\widgets\LinkPager;
?>

<section class="site-section pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="owl-carousel owl-theme home-slider">

                    <?php foreach ($popular as $article): ?>
                        <div>
                            <a href="<?= Url::toRoute(['site/single', 'id'=>$article->id]); ?>" class="a-block d-flex align-items-center height-lg" style="background-image: url('<?= $article->getImage(); ?>'); ">
                                <div class="text half-to-full">
                                    <div class="post-meta">
                                        <span class="category"><?= $article->category->title; ?></span>
                                        <span class="mr-2"><?= $article->getDate();?></span> &bullet;
                                        <span class="ml-2"><span class="fa fa-eye"></span> <?= (int) $article->viewed; ?></span>
                                    </div>
                                    <h3><?= $article->title; ?></h3>
                                    <p><?= $article->description; ?></p>
                                </div>
                            </a>
                        </div>
                    <?php endforeach;?>
                </div>

            </div>
        </div>
        <div class="row">

            <?php foreach ($recent as $article): ?>
                <div class="col-md-6 col-lg-4">
                    <a href="<?= Url::toRoute(['site/single', 'id'=>$article->id]); ?>" class="a-block d-flex align-items-center height-md" style="background-image: url('<?= $article->getImage(); ?>'); ">
                        <div class="text">
                            <div class="post-meta">
                                <span class="category"><?= $article->category->title; ?></span>
                                <span class="mr-2"><?= $article->getDate(); ?> </span> &bullet;
                                <span class="ml-2"><span class="fa fa-eye"></span> <?= (int) $article->viewed; ?></span>
                            </div>
                            <h3><?= $article->title; ?></h3>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


</section>
<!-- END section -->

<section class="site-section py-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-4">Lifestyle Category</h2>
            </div>
        </div>
        <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
                <div class="row">

                    <?php foreach ($articles as $article): ?>
                        <div class="col-md-6">
                            <a href="<?= Url::toRoute(['site/single', 'id'=>$article->id]); ?>" class="blog-entry element-animate" data-animate-effect="fadeIn">
                                <img src="<?= $article->getImage(); ?>" alt="Image placeholder">
                                <div class="blog-content-body">
                                    <div class="post-meta">
                                        <span class="category"><?= $article->category->title; ?></span>
                                        <span class="mr-2"><?= $article->getDate(); ?></span> &bullet;
                                        <span class="ml-2"><span class="fa fa-eye"></span> <?= (int) $article->viewed; ?></span>
                                    </div>
                                    <h2><?= $article->title; ?></h2>
                                </div>
                            </a>
                        </div>
                    <?php endforeach;?>

                </div>

                <?php

                echo LinkPager::widget([
                    'pagination' => $pagination,
                ]);
                ?>

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
    </div>
</section>