<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;


/**
 * Signup form
 */
class SignupForm extends Model
{
      public $nombres;
    public $apellidos;
   // public $cedula;
    public $telefono;
    public $username;
    public $email;
    public $password;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['nombres', 'trim'],
            ['nombres', 'required'],
            ['nombres', 'match','pattern'=>"/^[a-z]+$/i",'message'=> 'Solo se aceptan letras'],

            
            ['nombres', 'string', 'min' => 2, 'max' => 20],

            ['apellidos', 'trim'],
            ['apellidos', 'required'],
            ['apellidos', 'string', 'min' => 2, 'max' => 20],
            ['apellidos', 'match','pattern'=>"/^[a-z]+$/i",'message'=> 'Solo se aceptan letras'],

           /* ['cedula', 'trim'],
            ['cedula', 'required'],
            ['cedula', 'unique', 'targetClass' => '\common\models\User', 'message' => 'La cedula ha sido registrada en otro registro.'],
            ['cedula', 'integer'],*/

            ['telefono', 'trim'],
            ['telefono', 'required'],
            ['telefono', 'string', 'min' => 7, 'max' => 7],            
            //['telefono', 'integer'],
            ['telefono', 'match','pattern'=>"/^[0-9]+$/i",'message'=> 'Solo se aceptan números, sin espacio entre estos.'],

            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['username', 'match', 'pattern' => "/^[0-9a-z]+$/i", 'message' => 'Solo se aceptan números y letras, sin espacio entre estos.'],


            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Este email ha sido registrado previamente.'],
            
            // ['email', 'match', 'pattern' => '/^[a-zA-Z0-9!#$%&\'*+\\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&\'*+\\/=?^_`{|}~-]+)*@yahoo.com$/', 'message' => 'Dirección de correo no válida.'],
            
            ['email', 'match', 'pattern' => '/^[a-zA-Z0-9!#$%&\'*+\\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&\'*+\\/=?^_`{|}~-]+)*@(?:[a-z](?:[a-z-]*[a-z])?\.)+[a-z](?:[a-z-]*[a-z])?$/', 'message' => 'Dirección de correo no válida.'],
            
            //['password', 'required'],
            //['password', 'string', 'min' => 6],
        ];
    }

    public function attributeLabels()
    {
        return [
            'nombres' => 'Nombre',
            'apellidos' => 'Apellido',
            //'cedula' => 'Cedula',
            'telefono' => 'Teléfono',
            'email' => 'Email',
            'username' => 'Usuario',
            'password' => 'Contraseña',
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->nombres = $this->nombres;
        $user->apellidos = $this->apellidos;
       // $user->cedula = $this->cedula;
        $user->telefono = $this->telefono;
        $user->username = $this->username;
        $user->email = $this->email;        
        $user->setPassword($this->apellidos.$this->telefono);        
        $user->generateAuthKey();
                
        return $user->save() ? $user : null;
    }

    public function sendEmail($email)
    {
        $id = Yii::$app->user->identity->id;
        $apellidos = Yii::$app->user->identity->apellidos;
        $telefono = Yii::$app->user->identity->telefono;

        $subject = "Contraseña";
        $body = "Contraseña de ingreso en el login: ";
        $body .= $apellidos . $telefono;
        
        return Yii::$app->mailer->compose()
             ->setTo($email)
             ->setFrom([\Yii::$app->params['adminEmail']])
            ->setSubject($subject)
            ->setTextBody($body)
            ->send();
    }
           

     

}
