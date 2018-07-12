<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\WrkActasRetencion */

$this->title = 'Create Wrk Actas Retencion';
$this->params['breadcrumbs'][] = ['label' => 'Wrk Actas Retencions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrk-actas-retencion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
