<?php

use app\models\Spk;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\SpkSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Input Asrama';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spk-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Spk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nama_asrama',
            'kebersihan',
            'fasilitas',
            'kenyamanan',
            //'suasana',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Spk $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
