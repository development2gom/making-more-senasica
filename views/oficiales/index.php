<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EntOficialesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Oficiales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-oficiales-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            //'id_oficial',
            //'uddi',
            'txt_nombre_usuario',
            'txt_contrasena',
            'fch_creacion',
            'txt_oisa',
            'txt_nombre',
            'txt_apellido_paterno',
            'txt_apellido_materno',
            'txt_rol',
            'txt_clave_tea',
            'txt_curp',
            'txt_rfc',
            'b_habilitado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
