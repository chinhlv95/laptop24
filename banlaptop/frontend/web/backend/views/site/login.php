<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
  


    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
         
        <div id="login-backend">
         <h1><img  src="../img/login.png" alt="" id="img-login"></h1>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="form-group">
                <p id="btn-login">
                    <?= Html::submitButton('Đăng Nhập', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </p>
                    
                </div>

            <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
