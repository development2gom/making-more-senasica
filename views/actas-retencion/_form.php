<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WrkActasRetencion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wrk-actas-retencion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_oficial')->textInput() ?>

    <?= $form->field($model, 'uddi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_folio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_fecha')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_oficina')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_tipo_identificacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_numero_identificacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_apellido_paterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_apellido_materno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_nacionalidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_correo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_estado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_municipio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_calle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_numero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_tipo_acta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_pais_origen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_pais_procedencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_tipo_mercancia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_cantidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_unidad_medida')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_descripcion_hechos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_detectado_por')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_dictamen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_nombre_verificador_tea')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_clave_verificador_tea')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_nombre_completo_oficial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
