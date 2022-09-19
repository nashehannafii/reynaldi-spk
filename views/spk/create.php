<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Spk $model */

$this->title = 'Create Spk';
$this->params['breadcrumbs'][] = ['label' => 'Spks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
