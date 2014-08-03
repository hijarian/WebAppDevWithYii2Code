<?php
namespace app\commands;

use yii\console\Controller;
use yii\helpers\Console;
use Yii;

class HashController extends Controller
{
    public function actionIndex($string)
    {
        Console::output(Yii::$app->security->generatePasswordHash($string));
    }
}
