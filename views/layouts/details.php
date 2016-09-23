<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<link href="./web/dist/css/lightgallery.css" rel="stylesheet">
 <meta charset="<?= Yii::$app->charset ?>">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <?= Html::csrfMetaTags() ?>
 <title><?= Html::encode($this->title) ?></title>
 <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => 'Fine-Art',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
            ],
            ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
            /*['label' => 'Заказать', 'url' => ['/site/order']],*/
            ['label' => 'О нас', 'url' => ['/site/about']],
            ['label' => 'Контакты', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Авторизация', 'url' => ['/site/login']]
                ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Выход (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                    )
                . Html::endForm()
                . '</li>'
                )
                ],
                ]);
        NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="text-center">&copy; Fine-Art <?= date('Y') ?></p>


            </div>
        </footer>

        <?php $this->endBody() ?>
<script type="text/javascript">
        $(document).ready(function(){
            $('#lightgallery').lightGallery({
                 selector: 'li'});
        });

        </script>
        <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
        <script src="./web/dist/js/lightgallery.js"></script>
        <script src="./web/dist/js/lg-fullscreen.js"></script>
        <script src="./web/dist/js/lg-thumbnail.js"></script>
        <script src="./web/dist/js/lg-video.js"></script>
        <script src="./web/dist/js/lg-autoplay.js"></script>
        <script src="./web/dist/js/lg-zoom.js"></script>
        <script src="./web/dist/js/lg-hash.js"></script>
        <script src="./web/dist/js/lg-pager.js"></script>
        <script src="./web/dist/js/jquery.mousewheel.min.js"></script>
</body>
</html>
<?php $this->endPage() ?>
