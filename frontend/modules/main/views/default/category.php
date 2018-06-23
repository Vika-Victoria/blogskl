<?php
    use yii\helpers\Url;
use yii\widgets\LinkPager;

?>
<div class="row mb-4">
    <div class="col-md-6">
        <h2 class="mb-4">Category: <?= $categories->title ?></h2>
    </div>
</div>
<div class="row blog-entries">
    <div class="col-md-12 col-lg-8 main-content">
        <div class="row mb-5 mt-5">

            <div class="col-md-12">

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
                <!-- END post -->
            </div>
        </div>

        <?php

        echo LinkPager::widget([
            'pagination' => $pagination,
        ]);
        ?>



    </div>

    <!-- END main-content -->
    <div class="col-md-12 col-lg-4 sidebar">
        <div class="sidebar-box search-form-wrap">
            <form action="#" class="search-form">
                <div class="form-group">
                    <span class="icon fa fa-search"></span>
                    <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                </div>
            </form>
        </div>
        <!-- END sidebar-box -->

        <div class="sidebar-box">
            <h3 class="heading">Popular Posts</h3>
            <div class="post-entry-sidebar">
                <ul>
                    <?php foreach ($popular as $article): ?>
                        <li>
                            <a href="<?= Url::toRoute(['default/single', 'id'=>$article->id]); ?>">
                                <img src="<?= $article->getImage(); ?>" alt="Image placeholder" class="mr-4">
                                <div class="text">
                                    <h4><?= $article->title; ?></h4>
                                    <div class="post-meta">
                                        <span class="mr-2"><?= $article->getDate(); ?></span> &bullet;
                                        <span class="ml-2"><span class="fa fa-eye"></span> <?= (int) $article->viewed; ?></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
        <!-- END sidebar-box -->

        <div class="sidebar-box">
            <h3 class="heading">Categories</h3>
            <ul class="categories">
                <?php foreach ($categories as $category): ?>
                    <li><a href="<?= Url::toRoute(['default/category', 'id'=>$category->id]); ?>"><?= $category->title?> <span>(<?= $category->getArticlesCount(); ?>)</span></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- END sidebar-box -->

        <div class="sidebar-box">
            <h3 class="heading">Tags</h3>
            <ul class="tags">
                <?php foreach ($tags as $tag): ?>
                    <li><a href="#"><?= $tag->title; ?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
    <!-- END sidebar -->

</div>