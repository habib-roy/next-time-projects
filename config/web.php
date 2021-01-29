<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'name' => 'Next Time',
    'version' => 'v0.1.0',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'timeZone' => 'Asia/Jakarta',
    'layout' => '@app/views/layouts/adminlte/main',
    'modules' => [
        'admin' => [
            'class' => 'mdm\admin\Module',
            'controllerMap' => [
                'assignment' => [
                    'class' => 'mdm\admin\controllers\AssignmentController',
                    'userClassName' => 'app\models\user\User',
                    // 'searchClass' => 'app\models\user\UserSearch',
                    'idField' => 'id',
                    'usernameField' => 'username',
                ]
            ],
            'layout' => '@app/views/layouts/adminlte/main'
        ],
        'user' => [
            'class' => 'dektrium\user\Module',
            'modelMap' => [
                'User'              => 'app\models\user\User',
                'UserSearch'        => 'app\models\user\UserSearch',
                'RegistrationForm'  => 'app\models\user\RegistrationForm',
                'RecoveryForm'      => 'app\models\user\RecoveryForm',
                'LoginForm'         => 'app\models\user\LoginForm',
            ],
            'controllerMap' => [
                'admin' => 'app\controllers\user\AdminController',
                'security' => 'app\controllers\user\SecurityController',
                'registration' => 'app\controllers\user\RegistrationController',
                'recovery' => 'app\controllers\user\RecoveryController',
            ],
            'enableConfirmation' => false,
            'enableRegistration'=> false,
            'confirmWithin' => 21600,
            'cost' => 12,
            'admins' => ['god'],
            'mailer' => [
                'sender'                => ['habib.sickh@gmail.com' => 'Next Timer'], // or ['no-reply@myhost.com' => 'Sender name']
                'welcomeSubject'        => 'Next Timer - Selamat Datang',
                'confirmationSubject'   => 'Next Timer - Konfirmasi Pengguna',
                'reconfirmationSubject' => 'Next Timer - Konfirmasi Ulang',
                'recoverySubject'       => 'Next Timer - Pemulihan Password',
            ],
            'layout' => '@app/views/layouts/adminlte/main'
        ]
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'JdtvLx-q5tBD2bTVTNi9uczdnboQb4GG',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\user\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'session' => [
            'name' => 'NEXTTIMER',
            'class' => 'app\components\Session',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<controller:\w+>/<id:\d+>'=>'<controller>/read/<id:\d+>',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>'
            ],
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\PhpManager'
            'defaultRoles' => ['R_Guest'],
        ],
        'assetManager' => [
            'linkAssets' => true,
            'appendTimestamp' => true,
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'js' => [YII_ENV_DEV ? 'jquery.js' : 'jquery.min.js']
                ],
                'yii\bootstrap\BootstrapAsset' => [
                    'css' => [YII_ENV_DEV ? 'css/bootstrap.css' : 'css/bootstrap.min.css']
                ],
                'yii\bootstrap\BootstrapPluginAsset' => [
                    'js' => [YII_ENV_DEV ? 'js/bootstrap.js' : 'js/bootstrap.min.js']
                ]
            ],
        ],
    ],
    'params' => $params,
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            // '*',
            'user/*',
            'site/*',
            // 'admin/*'
            // 'gridviewKrajee/export/download'
        ]
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    // $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
