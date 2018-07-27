<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\assets\AppAsset;

/* @var $this yii\web\View */
/* @var $model app\models\CatOisas */
/* @var $form yii\widgets\ActiveForm */

$this->registerJsFile(
    '@web/webAssets/js/oisas/form.js',
    ['depends' => [AppAsset::className()]]
);
?>

<div class="cat-oisas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'txt_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_extension')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_descripcion')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
