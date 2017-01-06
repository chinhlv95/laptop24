<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Lienhe */

$this->title = 'Thêm Liên hệ';
$this->params['breadcrumbs'][] = ['label' => 'Liên hệ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lienhe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
