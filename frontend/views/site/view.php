<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Clientes */

$this->title = 'Perfil: ' . $model->nombres .' '. $model->apellidos;
$this->params['breadcrumbs'][] = ['label' => 'Cliente', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clientes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p> </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',

            'nombres',
            'apellidos',
            //'cedula',
            'telefono',
            'username',
            'email:email',
            //'password',
            //'auth_key',
            //'access_token',
            //'activate',
            //'status',
            'created_at',
            //'updated_at',
            //'role',
        ],
    ]) ?>

    <p><?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-success']) ?></p>

</div>
