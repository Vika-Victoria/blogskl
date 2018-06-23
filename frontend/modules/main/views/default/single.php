<?php
    use yii\helpers\Url;
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
            <p>Categories: <a href="<?= Url::toRoute(['/main/default/category', 'id' =>$article->category->id]); ?>"><?= $article->category->title; ?></a>
                Tags: <span style="color:#007bff;"> </span>
            </p>
        </div>


        <div class="pt-5">
            <h3 class="mb-5">6 Comments</h3>
            <ul class="comment-list">
                <li class="comment">
                    <div class="vcard">
                        <img src="/frontend/web/sourse/images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                        <h3>Jean Doe</h3>
                        <div class="meta">January 9, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Reply</a></p>
                    </div>
                </li>

                <li class="comment">
                    <div class="vcard">
                        <img src="/frontend/web/sourse/images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                        <h3>Jean Doe</h3>
                        <div class="meta">January 9, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Reply</a></p>
                    </div>

                    <ul class="children">
                        <li class="comment">
                            <div class="vcard">
                                <img src="/frontend/web/sourse/images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>Jean Doe</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply">Reply</a></p>
                            </div>


                            <ul class="children">
                                <li class="comment">
                                    <div class="vcard">
                                        <img src="/frontend/web/sourse/images/person_1.jpg" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>Jean Doe</h3>
                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                        <p><a href="#" class="reply">Reply</a></p>
                                    </div>

                                    <ul class="children">
                                        <li class="comment">
                                            <div class="vcard">
                                                <img src="/frontend/web/sourse/images/person_1.jpg" alt="Image placeholder">
                                            </div>
                                            <div class="comment-body">
                                                <h3>Jean Doe</h3>
                                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                                <p><a href="#" class="reply">Reply</a></p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="comment">
                    <div class="vcard">
                        <img src="/frontend/web/sourse/images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                        <h3>Jean Doe</h3>
                        <div class="meta">January 9, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Reply</a></p>
                    </div>
                </li>
            </ul>
            <!-- END comment-list -->

            <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="#" class="p-5 bg-light">
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="url" class="form-control" id="website">
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Post Comment" class="btn btn-primary">
                    </div>

                </form>
            </div>
        </div>

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