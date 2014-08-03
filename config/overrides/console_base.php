<?php
return [
    'id' => 'crmapp-console',
    'controllerNamespace' => 'app\commands',
    'components' => [
        'authManager' => [
            'class' => '\yii\rbac\DbManager'
        ]
    ],
];
