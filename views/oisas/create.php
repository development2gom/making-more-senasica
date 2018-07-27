<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CatOisas */

$this->title = 'Crear oisas';
$this->params['breadcrumbs'][] = ['label' => 'Cat Oisas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-oisas-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
