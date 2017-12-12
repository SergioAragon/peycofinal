<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'language'=> 'es',
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
    'gridview'  => [ 'class' => 'kartik\grid\Module'],
    'user' => [
        // following line will restrict access to profile, recovery, registration and settings controllers from backend
        'as backend' => 'dektrium\user\filters\BackendFilter',
    ],
],
    'components' => [
     'view' => [
         'theme' => [
             'pathMap' => [
                '@app/views' => '@backend/views'
             ],
         ],
    ],
    'assetManager' => [
        'bundles' => [
            'dmstr\web\AdminLteAsset' => [
                'skin' => 'skin-yellow',
            ],
        ],
    ],
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
       // 'user' => [
       //      'identityClass' => 'common\models\User',
       //      'enableAutoLogin' => true,
       //      'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
       //  ],
        'user' => [
        'identityCookie' => [
            'name'     => '_backendIdentity',
            'path'     => '/',
            'httpOnly' => true,
        ],
    ],
    'session' => [
        'name' => 'BACKENDSESSID',
        'cookieParams' => [
            'httpOnly' => true,
            'path'     => '/',
        ],
    ],  
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        
    ],
    'params' => $params,
];

?>
<?php Yourclass::showFlashes();?>