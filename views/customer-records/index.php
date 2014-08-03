<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\customer\CustomerRecordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customer Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-record-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customer Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            [
                'attribute' => 'birth_date',
                'format' => ['date', 'jS M, Y'],
            ],
            ['class' => 'app\utilities\AuditColumn'],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
