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
    <?= $this->render('/partials/sidebar', [
        'popular' => $popular,
        'recent' => $recent,
        'categories' => $categories,
        'tags' => $tags,
    ]); ?>
    <!-- END sidebar -->

</div>