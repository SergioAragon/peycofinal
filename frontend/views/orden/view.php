<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Orden */

$this->title = $model->order_id;
$this->params['breadcrumbs'][] = ['label' => 'Ordens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orden-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->order_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->order_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'order_id',
            'user_id',
            'nombre',
            'email:email',
            'celular',
            'address',
            'user_envio',
            'email_envio:email',
            'celular_envio',
            'address_envio',
            'solicitud:ntext',
            'total',
        ],
    ]) ?>

</div>
