<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CatOisas */

$this->title = 'Editar oisa: ' . $model->txt_nombre;
$this->params['breadcrumbs'][] = ['label' => 'Oisas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_oisas, 'url' => ['view', 'id' => $model->id_oisas]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="cat-oisas-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
