<?php
    use yii\helpers\Url;
    use yii\widgets\Menu;
?>
<footer class="site-footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <h3>Paragraph</h3>
<!--                <p>-->
<!--                    <img src="/frontend/web/sourse/images/img_1.jpg" alt="Image placeholder" class="img-fluid">-->
<!--                </p>-->

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, accusantium optio unde perferendis eum illum voluptatibus dolore tempora.</p>
            </div>
            <div class="col-md-6 ml-auto">
                <div class="row">
                    <div class="col-md-7">
<!--                        <h3>Latest Post</h3>-->
                        <div class="mb-5">
                            <h3>Quick Links</h3>
                            <?php
                                $menuItems =[
                                    ['label' => 'Home', 'url' => ['/main']],
                                    ['label' => 'About Us', 'url' => ['/main/default/about']],
                                    ['label' => 'Contact', 'url' => ['/main/default/contact']],
                                ];
                                echo Menu::widget([
                                    'options' => ['class' => 'list-unstyled'],
                                    'items' => $menuItems,
                                ]);
                            ?>

                        </div>
                    </div>
                    <div class="col-md-1"></div>

                    <div class="col-md-4">
                        <div class="mb-5">
                            <h3>Social</h3>
                            <ul class="list-unstyled footer-social">
                                <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                                <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                                <li><a href="#"><span class="fa fa-instagram"></span> Instagram</a></li>
                                <li><a href="#"><span class="fa fa-youtube-play"></span> Youtube</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
            </div>
        </div>
    </div>
</footer>
<!-- END footer -->