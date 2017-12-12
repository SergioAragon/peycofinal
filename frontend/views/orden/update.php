<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Orden */

$this->title = 'Update Orden: ' . $model->order_id;
$this->params['breadcrumbs'][] = ['label' => 'Ordens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->order_id, 'url' => ['view', 'id' => $model->order_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="orden-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
