<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Clasificacion */

$this->title = 'Registrar Clasificación';
$this->params['breadcrumbs'][] = ['label' => 'Clasificación', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clasificacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
