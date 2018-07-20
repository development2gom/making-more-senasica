<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\assets\AppAsset;

/* @var $this yii\web\View */
/* @var $model app\models\CatOisas */

$this->registerJsFile(
    '@web/webAssets/js/oisas/eliminar.js',
    ['depends' => [AppAsset::className()]]
);

$this->title = $model->txt_nombre;
$this->params['breadcrumbs'][] = ['label' => 'Cat Oisas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-oisas-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->id_oisas], ['class' => 'btn btn-primary']) ?>
        <?= Html::button('Eliminar', [
            'class' => 'btn btn-danger js-eliminar-oisa'
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_oisas',
            'txt_nombre',
            'txt_email:email',
            'txt_telefono',
            'txt_extension',
            'txt_descripcion:ntext',
            //'b_habilitado',
        ],
    ]) ?>

</div>
