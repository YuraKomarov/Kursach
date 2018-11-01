<?php
Yii::setAlias('@frontendUrl', 'http://yii/');
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@uploadPath' => '@frontend/web/upload',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\PhpManager',
        ],
        'fileStorage'=>[
            'class' => 'trntv\filekit\Storage',
            'baseUrl' => '@frontendUrl/upload',
            'filesystemComponent'=> 'fs'
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];