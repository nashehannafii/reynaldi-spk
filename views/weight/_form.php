<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Weight $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="weight-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'kebersihan')->textInput() ?>

    <?= $form->field($model, 'fasilitas')->textInput() ?>

    <?= $form->field($model, 'kenyamanan')->textInput() ?>

    <?= $form->field($model, 'suasana')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
