<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CatOisasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Oisas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-oisas-index">

    <p>
        <?= Html::a('Crear oisas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_oisas',
            [
                'attribute' => 'txt_nombre',
                'format' => 'raw',
                'value'=>function($data){
                    
                    return '<a href="'.Url::base().'/oisas/view/'.$data->id_oisas.'">'.$data->txt_nombre.'</a>';
                }
            ],
            'txt_email:email',
            'txt_telefono',
            'txt_extension',
            //'txt_descripcion:ntext',
            //'b_habilitado',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
