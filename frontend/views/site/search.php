<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = 'Search';
?>
<div class="row mb-4">
    <div class="col-md-8">
        <?php if ($q == '') {?>
            <h2>You specified an empty search query.</h2>
        <?php } else { ?>
        <h2 class="mb-4">You were looking for : <?= $q;?></h2>

    </div>
</div>
<div class="row blog-entries">
    <div class="col-md-12 col-lg-8 main-content">
        <div class="row mb-5 mt-5">
            <div class="col-md-12">

                <?php if (!$articles) { ?>
                    <h3>Nothing found!</h3>
                <?php } else {?>

                <?php foreach ($articles as $article): ?>
                    <div class="post-entry-horzontal">
                        <a href="<?= Url::toRoute(['/main/default/single', 'id' =>$article->id]); ?>">
                            <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url(<?= $article->getImage(); ?>);"></div>
                           <span class="text">
                                <div class="post-meta">
                                   <span class="category"><?= $article->category->title; ?></span>
                                    <span class="mr-2"><?= $article->getDate(); ?></span> &bullet;
                                    <span class="ml-2"><span class="fa fa-eye"></span> <?= (int) $article->viewed; ?></span>
                                 </div>
                                <h2><?= $article->title; ?></h2>
                            </span>
                        </a>
                    </div>
                <?php endforeach; ?>
                <?php }?>

                <!-- END post -->
            </div>
        </div>

        <?php

        echo LinkPager::widget([
            'pagination' => $pagination,
        ]);
        ?>
        <?php } ?>
    </div>

    <?= $this->render('/partials/sidebar', [
        'popular' => $popular,
        'recent' => $recent,
        'categories' => $categories,
        'tags' => $tags,

    ]); ?>

</div>
