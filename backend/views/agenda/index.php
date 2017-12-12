<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\yii2fullcalendar\yii2fullcalendar;
use yii\jui\JuiAsset;
use yii\db\Query;
use kartik\growl\Growl;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AgendaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Agendas';
$this->params['breadcrumbs'][] = $this->title;
?>

     <script>
            $(document).ready(function() {
           // page is now ready, initialize the calendar...

                $('#calendar').fullCalendar({
                        // put your options and callbacks here

                
                        })

                     });
            </script>
<div class="agenda-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Agenda', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
     <div id="calendar">
<!--      <?php  
//      $cont=0;
//       $connection = \Yii::$app->db;
//             $query = new Query;
//     $query->select('fase_id')
//     ->from('agenda');
// $command = $query->createCommand();
// $data = $command->queryAll();
// print_r($data);
// foreach ($data as $key => $value) {
//     $fase=$data[$cont]["fase_id"];
//     $cont++;
//     echo $fase;

//     if ($fase==1) {
//         $color="red";
//     }elseif ($fase==2) {
//         $color="blue";
//     }elseif ($fase==3) {
//          $color="black";
//     }elseif ($fase==4) {
//         $color="white";
//     }

// }
 ?> -->

     <?php
    $cont=0;
            $connection = \Yii::$app->db;
            $query = new Query;
    $query->select('id_agenda, fecha_fin')
    ->from('agenda');
$command = $query->createCommand();
$data = $command->queryAll();
foreach ($data as $key => $value) {
                $timeActual = time();   // Obtenemos el timestamp del momento actual
    $timeVencimiento = strtotime($data[$cont]["fecha_fin"]); // Obtenemos timestamp de la fecha de vencimiento
    // 'model' = $this->findModel($id);
    // Calculamos el número de segundos que tienen esos 3 días
    $segundos = 3 * 24 * 60 * 60;
    $dia=87000;
    $id=$data[$cont]["id_agenda"];
    $cont++;

    // Condición: Si la diferencia entre la fecha de vencimiento y la fecha actual es menor de 3 días
     if( $timeVencimiento-$timeActual  < $segundos && $timeVencimiento-$timeActual > $dia ) {
          // Va a expirar en menos de 3 días
         // echo $a='<script>alert("el pedido '.$id.' esta proximo a vencerse")</script>';
//          echo Alert::widget([
//     'type' => Alert::TYPE_WARNING,
//     'title' => 'Alerta!',
//     'icon' => 'glyphicon glyphicon-exclamation-sign',
//     'body' => 'el pedido '.$id.' esta proximo a vencerse',
//     'showSeparator' => true,
//     'delay' => 6000
// ]);
    //     echo Growl::widget([
    // 'type' => Growl::TYPE_WARNING,
    // 'icon' => 'glyphicon glyphicon-ok-sign',
    // 'title' => 'Alerta',
    // 'showSeparator' => true,
    // 'body' => 'el pedido '.$id.' esta proximo a vencerse.',
    //   'showSeparator' => true,
    // 'delay' => 0,
        echo Growl::widget([
    'type' => Growl::TYPE_WARNING,
    'title' => 'Alerta!',
    'icon' => 'glyphicon glyphicon-exclamation-sign',
    'body' => 'el pedido '.$id.' esta proximo a vencerse.',
    'showSeparator' => true,
    'delay' => 0,
    'pluginOptions' => [
        'showProgressbar' => true,
        'placement' => [
            'from' => 'top',
            'align' => 'right',
        ]
    ]
// ]);echo '<label>Check Issue Date</label>';
// echo DatePicker::widget([
//     'name' => 'check_issue_date', 
//     'value' => date('yyyy-M-d', strtotime('+2 days')),
//     'options' => ['placeholder' => 'Select issue date ...'],
//     'pluginOptions' => [
//         'format' => 'yyyy-M-dd',
//         'todayHighlight' => true
//     ]
]);

        // Yourclass::showMsg('warning info','a test2 only',['delay'=>5000]);
    }elseif ($timeVencimiento-$timeActual  < $dia && $timeVencimiento-$timeActual >= 1) {
  
        echo Growl::widget([
    'type' => Growl::TYPE_DANGER,
    'title' => 'Alerta!',
    'icon' => 'glyphicon glyphicon-exclamation-sign',
    'body' => 'el pedido '.$id.' esta proximo a vencerse.',
    'showSeparator' => true,
    'delay' => 0,
    'pluginOptions' => [
        'showProgressbar' => true,
        'placement' => [
            'from' => 'top',
            'align' => 'right',
        ]
    ]

]);

    }elseif($timeVencimiento-$timeActual  <= 0){

              echo Growl::widget([
    'type' => Growl::TYPE_INFO,
    'title' => 'Alerta!',
    'icon' => 'glyphicon glyphicon-exclamation-sign',
    'body' => 'el pedido '.$id.' se le ha vencido el tiempo y ha sido eliminado de la agenda.',
    'showSeparator' => true,
    'delay' => 0,
    'pluginOptions' => [
        'showProgressbar' => true,
        'placement' => [
            'from' => 'top',
            'align' => 'right',
        ]
    ]

]);
      $connection->createCommand("delete from agenda where id_agenda=$id")->execute();
    }
}
   
    
    

      ?>
      <?= \yii2fullcalendar\yii2fullcalendar::widget(array(
      'events' => $events, 
      ));
      ?>
      </div>
  
</div>
