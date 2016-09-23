<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Вход';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-signin centr'],
        'fieldConfig' => [
        'template' => "{label}\n{input}",
        'labelOptions' => ['class' => 'sr-only'],
        ],
        ]); ?>
        <h2 class="form-signin-heading text-center">Авторизируйтесь</h2>
        <label for="inputEmail" class="sr-only">Логин</label>
        <?= $form->field($model, 'username')->textInput(['type'=> 'text','id'=>'inputEmail', 'class'=>'form-control', 'placeholder'=>'Логин', 'required'=>true,'autofocus' => true]) ?>
        <label for="inputPassword" class="sr-only">Пароль</label>
        <?= $form->field($model, 'password')->passwordInput(['type'=> 'password','id'=>'inputPassword', 'class'=>'form-control', 'placeholder'=>'Пароль', 'required'=>true]) ?>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Запомнить меня
        </label>
    </div>
    <?= Html::submitButton('Войти', ['class' => 'btn btn-lg btn-primary btn-block', 'name' => 'login-button']) ?>


    <?php ActiveForm::end(); ?>

</div>
