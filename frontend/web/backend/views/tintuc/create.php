<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Tintuc */

$this->title = 'Thêm Tin Tức';
$this->params['breadcrumbs'][] = ['label' => 'Tin tức', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tintuc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
