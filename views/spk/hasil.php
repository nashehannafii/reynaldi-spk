<?php

use app\models\Spk;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\SpkSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Asrama terbaik';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spk-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <div class="table-responsive">

        <table class="table mb-0 text-left">
            <thead>
                <tr>
                    <th class="cell text-center">Rank</th>
                    <th class="cell text-center">Asrama</th>
                    <th class="cell text-center">Nilai Akhir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $spk = Spk::find()->all();
                // echo '<pre>';print_r($spk);exit;
                $i = 1;
                if ($spk == null) :
                ?>
                    <tr>
                        <td class="text-center">-</td>
                        <td class="text-center">-</td>
                        <td class="text-center">-</td>
                    </tr>
                <?php
                endif;
                foreach ($spk as $key) :
                ?>

                    <tr>
                        <td class="text-center"><?= $i ?></td>
                        <td class="text-center"><?= $key->nama_asrama ?></td>
                        <td class="text-center"><?= $key->nilai_hasil ?></td>
                    </tr>

                <?php
                    $i++;
                endforeach; ?>

            </tbody>
        </table>
    </div>


</div>