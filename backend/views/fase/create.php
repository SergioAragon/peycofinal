<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Fase */

$this->title = 'Registrar Fase';
$this->params['breadcrumbs'][] = ['label' => 'Fases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fase-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
