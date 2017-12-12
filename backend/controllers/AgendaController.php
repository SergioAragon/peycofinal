<?php

namespace backend\controllers;

use Yii;
use backend\models\Agenda;
use backend\models\AgendaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\web\AssetBundle;
use yii\jui\JuiAsset;
use yii\db\Query;

/**
 * AgendaController implements the CRUD actions for Agenda model.
 */
class AgendaController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Agenda models.
     * @return mixed
     */
    public function actionIndex()
    {

     $cont=0;
      $connection = \Yii::$app->db;
            $query = new Query;
    $query->select('fase_id,fecha_registro')
    ->from('agenda')
    ->orderBy(['fecha_registro'=>SORT_ASC]);
$command = $query->createCommand();
$data = $command->queryAll();
// // print_r($data);
// foreach ($data as $key => $value) {
//     $fase=$data[$cont]["fase_id"];
//     $cont++;
//     // echo $fase;

//     if ($fase==1) {
//         $color="red";
//     }elseif ($fase==2) {
//         $color="blue";
//     }elseif ($fase==3) {
//          $color="black";
//     }elseif ($fase==4) {
//         $color="red";
//     }

// }
        $agendas = Agenda::find()->all();

        $tasks = [];
        foreach ($agendas as $age)
        {
foreach ($data as $key => $value) {
    $fase=$data[$cont]["fase_id"];
    $cont++;
     // echo $fase;

    if ($fase==1) {
        $color="red";
         $agenda = new \yii2fullcalendar\models\Event();
             // $event = new Event();
           $agenda->id = $age->id_agenda;
          $agenda->title = $age->descripcion;          
          // $agenda->empleado_id = $age->empleado_id;
           // $agenda->color = $age->fase_id; 
          // $agenda->pedido_id = $age->pedido_id;  
           $agenda->color = $color;  
          $agenda->start = $age->fecha_inicio;    
          $agenda->end = $age->fecha_fin;
          $tasks[] = $agenda;
break;
    }elseif ($fase==2) {
        $color="blue";
                     $agenda = new \yii2fullcalendar\models\Event();
             // $event = new Event();
           $agenda->id = $age->id_agenda;
          $agenda->title = $age->descripcion;          
          // $agenda->empleado_id = $age->empleado_id;
           // $agenda->color = $age->fase_id; 
          // $agenda->pedido_id = $age->pedido_id;  
           $agenda->color = $color;  
          $agenda->start = $age->fecha_inicio;    
          $agenda->end = $age->fecha_fin;
          $tasks[] = $agenda;
break;
    }elseif ($fase==3) {
         $color="black";
                      $agenda = new \yii2fullcalendar\models\Event();
             // $event = new Event();
           $agenda->id = $age->id_agenda;
          $agenda->title = $age->descripcion;          
          // $agenda->empleado_id = $age->empleado_id;
           // $agenda->color = $age->fase_id; 
          // $agenda->pedido_id = $age->pedido_id;  
           $agenda->color = $color;  
          $agenda->start = $age->fecha_inicio;    
          $agenda->end = $age->fecha_fin;
          $tasks[] = $agenda;
break;
    }elseif ($fase==4) {
        $color="yellow";
                $agenda = new \yii2fullcalendar\models\Event();
             // $event = new Event();
           $agenda->id = $age->id_agenda;
          $agenda->title = $age->descripcion;          
          // $agenda->empleado_id = $age->empleado_id;
           // $agenda->color = $age->fase_id; 
          // $agenda->pedido_id = $age->pedido_id;  
           $agenda->color = $color;  
          $agenda->start = $age->fecha_inicio;    
          $agenda->end = $age->fecha_fin;
          $tasks[] = $agenda;
break;
    }

}
          // $agenda = new \yii2fullcalendar\models\Event();
          //    // $event = new Event();
          //  $agenda->id = $age->id_agenda;
          // $agenda->title = $age->descripcion;          
          // // $agenda->empleado_id = $age->empleado_id;
          //  $agenda->color = $age->fase_id; 
          // // $agenda->pedido_id = $age->pedido_id;  
          //  // $agenda->color = "red";  
          // $agenda->start = $age->fecha_inicio;    
          // $agenda->end = $age->fecha_fin;
          // $tasks[] = $agenda;
      }
         
        

        return $this->render('index', [
           
            'events' => $tasks,
        ]);
    }

    /**
     * Displays a single Agenda model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Agenda model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Agenda();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_agenda]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Agenda model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_agenda]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Agenda model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Agenda model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Agenda the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Agenda::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
