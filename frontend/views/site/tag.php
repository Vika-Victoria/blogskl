<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;

?>
<div class="row mb-4">
    <div class="col-md-6">
        <h2 class="mb-4">Tag: <?= $queryTag->title; ?> </h2>
    </div>
</div>
<div class="row blog-entries">
    <div class="col-md-12 col-lg-8 main-content">
        <div class="row mb-5 mt-5">

            <div class="col-md-12">
                <?php if ($tagArt):?>
                    <?php foreach ($tagArt as $item): ?>
                        <div class="post-entry-horzontal">
                            <a href="<?= Url::toRoute(['/site/single', 'id' =>$item->article_id]); ?>">
                                <div class="image element-animate fadeIn element-animated" data-animate-effect="fadeIn" style="background-image: url(<?= $item->idArticle->getImage(); ?>);"></div>
                                <span class="text">
                              <div class="post-meta">
                                <span class="category"><?= $item->idArticle->category->title; ?></span>
                                <span class="mr-2"><?= $item->idArticle->getDate(); ?></span> •
                                <span class="ml-2"><span class="fa fa-eye"></span> <?= (int) $item->idArticle->viewed; ?></span>
                              </div>
                              <h2><?= $item->idArticle->title; ?></h2>
                            </span>
                            </a>
                        </div>
                    <?php endforeach;?>
                <?php else:?>
                    <h3>There are no articles on this tag</h3>
                <?php endif;?>
                <!-- END post -->
            </div>
        </div>

        <?php

        echo LinkPager::widget([
            'pagination' => $pagination,
        ]);
        ?>

    </div>

    <?= $this->render('/partials/sidebar', [
        'popular' => $popular,
        'recent' => $recent,
        'categories' => $categories,
        'tags' => $tags,
    ]); ?>

</div>