<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;

?>
<div class="row mb-4">
    <div class="col-md-6">
        <h2 class="mb-4">Tag: <?= $tagOne->title; ?> </h2>
    </div>
</div>
<div class="row blog-entries">
    <div class="col-md-12 col-lg-8 main-content">
        <div class="row mb-5 mt-5">

            <div class="col-md-12">


                <div class="post-entry-horzontal">
                    <a href="#">
                        <div class="image element-animate fadeIn element-animated" data-animate-effect="fadeIn" style="background-image: url(/frontend/web/sourse/images/img_10.jpg);"></div>
                        <span class="text">
                      <div class="post-meta">
                        <span class="category">category</span>
                        <span class="mr-2">March 15, 2018 </span> •
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                    </span>
                    </a>
                </div>

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