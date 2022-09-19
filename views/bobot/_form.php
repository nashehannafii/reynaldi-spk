<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Bobot $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bobot-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jenis_bobot')->dropDownList(['Kebersihan'=>'kebersihan','Fasilitas'=>'fasilitas','Kenyamanan'=>'kenyamanan', 'Suasana'=> 'suasana'],['class'=>'form-control','maxlength' => true,'required'=>'required', 'prompt' => '- Pilih Jenis Bobot -','disabled'=>'disabled']) ?>

    <?= $form->field($model, 'bobot')->dropDownList(['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'],['class'=>'form-control','maxlength' => true,'required'=>'required', 'prompt' => '- Pilih Bobot -','disabled'=>'disabled']) ?>

    <?= $form->field($model, 'keterangan_bobot')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
