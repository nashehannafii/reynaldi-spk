<?php

use app\models\Bobot;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Spk $model */
/** @var yii\widgets\ActiveForm $form */

$list_kebersihan = Bobot::find()->where([
    'jenis_bobot' => 'kebersihan',
])->orderBy(['bobot' => SORT_ASC])->all();

$list_fasilitas = Bobot::find()->where([
    'jenis_bobot' => 'fasilitas',
])->orderBy(['bobot' => SORT_ASC])->all();

$list_kenyamanan = Bobot::find()->where([
    'jenis_bobot' => 'kenyamanan',
])->orderBy(['bobot' => SORT_ASC])->all();

$list_suasana = Bobot::find()->where([
    'jenis_bobot' => 'suasana',
])->orderBy(['bobot' => SORT_ASC])->all();

$list_kebersihan = ArrayHelper::map($list_kebersihan, 'bobot', 'keterangan_bobot');
$list_fasilitas = ArrayHelper::map($list_fasilitas, 'bobot', 'keterangan_bobot');
$list_kenyamanan = ArrayHelper::map($list_kenyamanan, 'bobot', 'keterangan_bobot');
$list_suasana = ArrayHelper::map($list_suasana, 'bobot', 'keterangan_bobot');
?>

<div class="spk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_asrama')->textInput(['maxlength' => true,'required'=>'required']) ?>

    <?= $form->field($model, 'kebersihan')->dropDownList($list_kebersihan, ['class' => 'form-control', 'prompt' => '- Pilih Bobot kebersihan -','required'=>'required']) ?>

    <?= $form->field($model, 'fasilitas')->dropDownList($list_fasilitas, ['class' => 'form-control', 'prompt' => '- Pilih Bobot fasilitas -','required'=>'required']) ?>

    <?= $form->field($model, 'kenyamanan')->dropDownList($list_kenyamanan, ['class' => 'form-control', 'prompt' => '- Pilih Bobot kenyamanan -','required'=>'required']) ?>

    <?= $form->field($model, 'suasana')->dropDownList($list_suasana, ['class' => 'form-control', 'prompt' => '- Pilih Bobot Suasana -','required'=>'required']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
