<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MaterialesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Materiales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materiales-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar Material', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' =>function($model){

            if ($model->estado == '2') {
                return['class'=>'danger'];

            }elseif ($model->estado == '1') {
                return['class'=>'success'];
                }
            },

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_mate',
            'nombre',
            'estado',

            ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',               
                'template' => '{desactiv}',
                'buttons' => [
                    'desactiv' => function ($url, $model) {
                        if ($model->estado == '1'){
                            return Html::a('<span class="glyphicon glyphicon-thumbs-down"></span>', $url,
                                [
                                    'title' => Yii::t('app', 'Desactivar'),
                                    'data-confirm' => Yii::t('yii', 'Esta seguro que desea Desactivar este Material?'),
                                ]);
                        } else {
                            return Html::a('<span class="glyphicon glyphicon-thumbs-up"></span>', $url,
                                [
                                    'title' => Yii::t('app', 'Activar'),
                                    'data-confirm' => Yii::t('yii', 'Esta seguro que desea Activar este Material?'),
                                ]);
                        }
                    }
                ]
            ],
        ],
    ]); ?>
</div>
