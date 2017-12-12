<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ClientesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clientes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Clientes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function($model){

            if ($model->activate=='0') {
                return['class'=>'danger'];

            }elseif ($model->activate=='1') {
                return['class'=>'success'];
            }
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombres',
            'apellidos',
            //'cedula',
            //'telefono',
            'username',
            'email:email',
             //'password',
             //'authKey',
            // 'password_reset_token',
             'activate',
             //'status',
             'created_at',
             //'updated_at',
             //'role',

            // ['class' => 'yii\grid\ActionColumn', 'template' => '{view},{update}'],
            [
                'class' => 'yii\grid\ActionColumn',               
                'template' => '{view} {update} {desactiv}',
                'buttons' => [
                    'desactiv' => function ($url, $model) {
                        if ($model->activate == 1){
                            return Html::a('<span class="glyphicon glyphicon-thumbs-down"></span>', $url,
                                [
                                    'title' => Yii::t('app', 'Desactivar'),
                                    'data-confirm' => Yii::t('yii', 'Esta seguro que quiere Desactivar este Usuario?'),
                                ]);
                        } else {
                            return Html::a('<span class="glyphicon glyphicon-thumbs-up"></span>', $url,
                                [
                                    'title' => Yii::t('app', 'Activar'),
                                    'data-confirm' => Yii::t('yii', 'Esta seguro que quiere Activar este Usuario?'),
                                ]);
                        }
                    }
                ]
            ],
        ],
    ]); ?>
</div>
