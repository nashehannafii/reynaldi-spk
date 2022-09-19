<?php

use app\models\Weight;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\WeightSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bobot';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="weight-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
        if (!isset($result) || empty($result)) {
            echo Html::a('Input Bobot', ['create'], ['class' => 'btn btn-success']) ;
        } 
        ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <table class="table">
        <thead>
            <tr>
                <th class="text-center" scope="col">Kebersihan</th>
                <th class="text-center" scope="col">Fasilitas</th>
                <th class="text-center" scope="col">Kenyamanan</th>
                <th class="text-center" scope="col">Suasana</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center"><?= $result->kebersihan ?></td>
                <td class="text-center"><?= $result->fasilitas ?></td>
                <td class="text-center"><?= $result->kenyamanan ?></td>
                <td class="text-center"><?= $result->suasana ?></td>
                <td class="text-center"><a href="update?id=<?= $result->id ?>"><i class="fas fa-wrench"></i></a></td>
            </tr>


        </tbody>
    </table>


</div>