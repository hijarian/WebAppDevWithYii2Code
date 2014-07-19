<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__ . '/../../vendor/yiisoft/yii2/Yii.php');

passthru('mysql -u root -pmysqlroot -e "drop database if exists crmapp_test; create database crmapp_test default character set utf8 default collate utf8_unicode_ci"');
passthru('mysqldump -u root -pmysqlroot -d crmapp > tests/_data/dump.sql');

new yii\web\Application(
    require(__DIR__ . '/../../config/test.php')
);
