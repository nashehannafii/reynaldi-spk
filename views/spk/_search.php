<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\SpkSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="spk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama_asrama') ?>

    <?= $form->field($model, 'kebersihan') ?>

    <?= $form->field($model, 'fasilitas') ?>

    <?= $form->field($model, 'kenyamanan') ?>

    <?php // echo $form->field($model, 'suasana') ?>

    <?php // echo $form->field($model, 'nilai_hasil') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
