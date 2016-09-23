<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Работа';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about">
	<div class="col-xs-12 col-sm-8">
		<h1 class="text-center">Название</h1>
	</div>
	
	<div class="row">
		<div class="col-xs-12 col-sm-8" id="lightgallery">
			<?php 
			echo '<ul  class="list-unstyled"><li data-src="http://placehold.it/800x400"><a href= "';
			echo Yii::$app->urlManager->createUrl(['site/detail']);
			echo '"><img class="img-responsive img-thumbnail" src="http://placehold.it/800x400" alt=""></a></li></ul>';
			?>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 pull-sm-left">
					<ul class="list-unstyled">
						<li class="col-xs-6 col-sm-6 col-md-3 col-lg-3 mp"  data-src="http://placehold.it/400x300" >
							<a href="">
								<img class="img-responsive img-thumbnail" src="http://placehold.it/400x300" alt="">
							</a>
						</li>
						<li class="col-xs-6 col-sm-6 col-md-3 col-lg-3 mp "  data-src="http://placehold.it/400x300" >
							<a href="">
								<img class="img-responsive img-thumbnail" src="http://placehold.it/400x300" alt="">
							</a>
						</li>
						<li class="col-xs-6 col-sm-6 col-md-3 col-lg-3 mp "  data-src="http://placehold.it/400x300" >
							<a href="">
								<img class="img-responsive img-thumbnail" src="http://placehold.it/400x300" alt="">
							</a>
						</li>
						<li class="col-xs-6 col-sm-6 col-md-3 col-lg-3 mp "  data-src="http://placehold.it/400x300" >
							<a href="">
								<img class="img-responsive img-thumbnail" src="http://placehold.it/400x300" alt="">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-4">

			<h2 class="text-center">Описание</h2>
			<p>Вже давно відомо, що читабельний зміст буде заважати зосередитись людині, яка оцінює композицію сторінки. Сенс використання Lorem Ipsum полягає в тому, що цей текст має більш-менш нормальне розподілення літер на відміну від, наприклад, "Тут іде текст. Тут іде текст." Це робить текст схожим на оповідний. Багато програм верстування та веб-дизайну використовують Lorem Ipsum як зразок і пошук за терміном "lorem ipsum" відкриє багато веб-сайтів, які знаходяться ще в зародковому стані. Різні версії Lorem Ipsum з'явились за минулі роки, деякі випадково, деякі було створено зумисно (зокрема, жартівливі).
			</p>			
			<h3><span class="label label-info pull-left price">150грн.</span></h3>
			<button type="button" class="btn btn-success btn-md pull-right">Заказать</button>

		</div>

	</div>
	
</div>

				<!-- <div class="col-xs-12 col-sm-8">
			<?php 
			echo '<ul id="lightgallery_main" class="list-unstyled"><li data-src="http://placehold.it/800x400"><a href= "';
			echo Yii::$app->urlManager->createUrl(['site/detail']);
			echo '"><img class="img-responsive img-thumbnail" src="http://placehold.it/800x400" alt=""></a></li></ul>';
			?>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 pull-sm-left">
					<ul id="lightgallery" class="list-unstyled">
						<li class="col-xs-6 col-sm-6 col-md-3 col-lg-3 mp "  data-src="http://placehold.it/400x300" >
							<a href="">
								<img class="img-responsive img-thumbnail" src="http://placehold.it/400x300" alt="">
							</a>
						</li>
						<li class="col-xs-6 col-sm-6 col-md-3 col-lg-3 mp "  data-src="http://placehold.it/400x300" >
							<a href="">
								<img class="img-responsive img-thumbnail" src="http://placehold.it/400x300" alt="">
							</a>
						</li>
						<li class="col-xs-6 col-sm-6 col-md-3 col-lg-3 mp "  data-src="http://placehold.it/400x300" >
							<a href="">
								<img class="img-responsive img-thumbnail" src="http://placehold.it/400x300" alt="">
							</a>
						</li>
						<li class="col-xs-6 col-sm-6 col-md-3 col-lg-3 mp "  data-src="http://placehold.it/400x300" >
							<a href="">
								<img class="img-responsive img-thumbnail" src="http://placehold.it/400x300" alt="">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div> -->