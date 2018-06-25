<?php
    use yii\helpers\Url;

?>
<nav class="navbar navbar-expand-md  navbar-light bg-light">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= Url::to(['/']); ?>">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown05">
                        <?php foreach ($items as $item): ?>
                            <a class="dropdown-item" href="<?= Url::toRoute(['/site/category', 'id' =>$item->id]); ?>">
                                <?= $item->title; ?>
                            </a>
                        <?php endforeach;?>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= Url::to(['site/about']); ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= Url::to(['site/contact']); ?>">Contact</a>
                </li>
            </ul>

        </div>

    </div
</nav>