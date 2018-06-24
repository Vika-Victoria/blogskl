<?php
    use yii\helpers\Url;
?>

<div class="row blog-entries">
<div class="col-md-12 col-lg-8 main-content">

                <div class="row">
                    <div class="col-md-12">
                        <h2 class="mb-4">Hi There! I'm Meagan Smith</h2>
                        <p class="mb-5"><img src="/frontend/web/sourse/images/img_6.jpg" alt="Image placeholder" class="img-fluid"></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum minima eveniet recusandae suscipit eum laboriosam fugit amet deleniti iste et. Ad dolores, necessitatibus non saepe tenetur impedit commodi quibusdam natus repellat, exercitationem accusantium perferendis officiis. Laboriosam impedit quia minus pariatur!</p>
                    </div>
                </div>

                <div class="row mb-5 mt-5">
                    <div class="col-md-12 mb-5">
                        <h2>My Latest Posts</h2>
                    </div>

                    <div class="col-md-12">

                        <?php foreach ($recent as $article): ?>
                            <div class="post-entry-horzontal">
                                <a href="<?= Url::toRoute(['default/single', 'id'=>$article->id]); ?>">
                                    <div class="image" style="background-image: url(<?= $article->getImage(); ?>);"></div>
                                    <span class="text">
                                          <div class="post-meta">
                                            <span class="category"><?= $article->category->title; ?></span>
                                            <span class="mr-2"><?= $article->getDate(); ?></span> &bullet;
                                            <span class="ml-2"><span class="fa fa-eye"></span> <?= (int)$article->viewed; ?></span>
                                          </div>
                                        <h2><?= $article->title; ?></h2>
                                    </span>
                                </a>
                            </div>
                        <?php endforeach;?>

                        <!-- END post -->
                    </div>
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

