<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Работы';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about">
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Работы</h1>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb" >
               
                <?php 
			 echo '<a class="thumbnail" href= "';
			 echo Yii::$app->urlManager->createUrl(['site/detail']);
			 echo '">';
			?>
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>

        </div>

        <hr>
</div>
</div>
