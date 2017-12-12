<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\User;
//use frontend\controllers\SiteController;
use backend\models\FormUpload;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class SiteController extends Controller
{

    public function actionUser()
    {
        return $this->render("user");
    }

    public function actionAdmin()
    {
        return $this->render("admin");
    }
    
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'user', 'admin'],
                'rules' => [
                    [
                        //El administrador tiene permisos sobre las siguientes acciones
                        'actions' => ['logout', 'admin'],
                        //Esta propiedad establece que tiene permisos
                        'allow' => true,
                        //Usuarios autenticados, el signo ? es para invitados
                        'roles' => ['@'],
                        //Este método nos permite crear un filtro sobre la identidad del usuario
                        //y así establecer si tiene permisos o no
                        'matchCallback' => function ($rule, $action) {
                            //Llamada al método que comprueba si es un administrador
                            return User::isUserAdmin(Yii::$app->user->identity->id);
                        },
                    ],
                    [
                       //Los usuarios simples tienen permisos sobre las siguientes acciones
                       'actions' => ['logout', 'user'],
                       //Esta propiedad establece que tiene permisos
                       'allow' => true,
                       //Usuarios autenticados, el signo ? es para invitados
                       'roles' => ['@'],
                       //Este método nos permite crear un filtro sobre la identidad del usuario
                       //y así establecer si tiene permisos o no
                       'matchCallback' => function ($rule, $action) {
                          //Llamada al método que comprueba si es un usuario simple
                          return User::isUserSimple(Yii::$app->user->identity->id);
                      },
                   ],
                ],
            ],
     //Controla el modo en que se accede a las acciones, en este ejemplo a la acción logout
     //sólo se puede acceder a través del método post
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }


    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
   
   if (User::isUserAdmin(Yii::$app->user->identity->id))
   {
     
    return $this->redirect(["site/index"]);
   }
   else
   {
    Yii::$app->user->logout();
    return $this->redirect(["../../frontend/web/site/login"]);
   }
        }
 
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
   
            if (User::isUserAdmin(Yii::$app->user->identity->id))
   {

    return $this->redirect(["site/index"]);
   }
   else
   {
    Yii::$app->user->logout();
    return $this->redirect(["../../frontend/web/site/login"]);
   }
   
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
          // ['label' => 'Frontend', 'url' => ['../../frontend/web/site/index']],
         // return $this->redirect(["../../frontend/web/site/index"]);
        return $this->redirect(['../../frontend/web/site/index']);
    }


    public function actionUpload()
         {
          
          $model = new FormUpload;
          $msg = null;
          
          if ($model->load(Yii::$app->request->post()))
          {
           $model->file = UploadedFile::getInstances($model, 'file');

           if ($model->file && $model->validate()) {
            foreach ($model->file as $file) {
             $file->saveAs('archivos/' . $file->baseName . '.' . $file->extension);
             $msg = "<p><strong class='label label-info'>Enhorabuena, subida realizada con éxito</strong></p>";
            }
           }
          }
          return $this->render("upload", ["model" => $model, "msg" => $msg]);
         }


    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionReporteColor()
    {
          //       $query = new Query;
          // // compose the query
          // $query->select('id_dpc, color_id')
          //     ->from('detalle_producto_color')
          //     ->limit(10);
          // // build and execute the query
          // $rows = $query->all();
          // // alternatively, you can create DB command and execute it
          // $command = $query->createCommand();
          // // $command->sql returns the actual SQL
          // $rows = $command->queryAll();

        return $this->render('reporte-color');
    }

    public function actionReportePedidos()
    {
        return $this->render('reporte-pedidos');
    }

}
