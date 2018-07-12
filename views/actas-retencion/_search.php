<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WrkActasRetencionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wrk-actas-retencion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_acta_retencion') ?>

    <?= $form->field($model, 'id_oficial') ?>

    <?= $form->field($model, 'uddi') ?>

    <?= $form->field($model, 'txt_folio') ?>

    <?= $form->field($model, 'txt_fecha') ?>

    <?php // echo $form->field($model, 'txt_oficina') ?>

    <?php // echo $form->field($model, 'txt_tipo_identificacion') ?>

    <?php // echo $form->field($model, 'txt_numero_identificacion') ?>

    <?php // echo $form->field($model, 'txt_nombre') ?>

    <?php // echo $form->field($model, 'txt_apellido_paterno') ?>

    <?php // echo $form->field($model, 'txt_apellido_materno') ?>

    <?php // echo $form->field($model, 'txt_nacionalidad') ?>

    <?php // echo $form->field($model, 'txt_correo') ?>

    <?php // echo $form->field($model, 'txt_estado') ?>

    <?php // echo $form->field($model, 'txt_municipio') ?>

    <?php // echo $form->field($model, 'txt_calle') ?>

    <?php // echo $form->field($model, 'txt_numero') ?>

    <?php // echo $form->field($model, 'txt_tipo_acta') ?>

    <?php // echo $form->field($model, 'txt_pais_origen') ?>

    <?php // echo $form->field($model, 'txt_pais_procedencia') ?>

    <?php // echo $form->field($model, 'txt_tipo_mercancia') ?>

    <?php // echo $form->field($model, 'txt_cantidad') ?>

    <?php // echo $form->field($model, 'txt_unidad_medida') ?>

    <?php // echo $form->field($model, 'txt_descripcion_hechos') ?>

    <?php // echo $form->field($model, 'txt_detectado_por') ?>

    <?php // echo $form->field($model, 'txt_dictamen') ?>

    <?php // echo $form->field($model, 'txt_nombre_verificador_tea') ?>

    <?php // echo $form->field($model, 'txt_clave_verificador_tea') ?>

    <?php // echo $form->field($model, 'txt_nombre_completo_oficial') ?>

    <?php // echo $form->field($model, 'data') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
