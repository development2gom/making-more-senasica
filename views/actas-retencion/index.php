<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WrkActasRetencionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Actas de retención';
$this->params['breadcrumbs'][] = $this->title;

$this->params['classBody'] = "site-navbar-small actas-retencion-list";


?>

<div class="list-head">

    <h2 class="title"><?=$this->title?></h2>

    <div class="list-actions">
        <?= Html::a('<span><i class="icon wb-plus" aria-hidden="true"></i>Crear</span>', ['create'], ['class' => 'btn btn-primary btn-animate btn-animate-vertical']) ?>
    </div>

    </div>


<div class="list-panel">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pjax'=>true,
        'pjaxSettings'=>[
            'options'=>[
                'linkSelector'=>"a:not(.no-pjax)",
                'id'=>'pjax-actas'
            ]
            ],
        'layout' => '{items}{summary}{pager}',
        'columns' => [
            'id_oficial',
            'txt_folio',
            'txt_fecha',
            'txt_oficina',
            'txt_tipo_identificacion',
            'txt_numero_identificacion',
            'txt_nombre',
            'txt_apellido_paterno',
            'txt_apellido_materno',
            'txt_nacionalidad',
            'txt_correo',
            'txt_estado',
            'txt_municipio',
            'txt_calle',
            'txt_numero',
            'txt_tipo_acta',
            'txt_pais_origen',
            'txt_pais_procedencia',
            'txt_tipo_mercancia',
            'txt_cantidad',
            'txt_unidad_medida',
            'txt_descripcion_hechos',
            'txt_detectado_por',
            'txt_dictamen',
            'txt_nombre_verificador_tea',
            'txt_clave_verificador_tea',
            'txt_nombre_completo_oficial',
            'data',

            [
                'headerOptions' => ['class' => 'text-center'],
                'contentOptions' => [
                    'class'=>"td-actions td-actions-i1 text-center"
                ],
                'class' => 'yii\grid\ActionColumn',
                'template' => '{ver}',

                'buttons' => [
                    'ver' => function($url, $model) {
                        
                        $a = Html::a("<i class='icon wb-pencil' aria-hidden='true'></i>", 
                        ["actas-retencion/view", 'token'=>$model->txt_folio], 
                        [
                            "class"=>"btn btn-primary btn-edit no-pjax",
                            "data-token"=>$model->txt_folio,
                        ]);

                        $contenedor = '<div class="td-actions-tooltip" data-toggle="tooltip" data-original-title="Editar" data-template="<div class=\'tooltip tooltip-2 tooltip-primary\' role=\'tooltip\'><div class=\'arrow\'></div><div class=\'tooltip-inner\'></div></div>">
                           '.$a.' 
                        </div>';

                        return $contenedor;
                    }
                ],
            ],
        ],
        'panelTemplate' => "{panelHeading}\n{items}\n{summary}\n{pager}",
        'responsive'=>true,
        'striped'=>false,
        'hover'=>false,
        'bordered'=>false,
        'pager'=>[
            'linkOptions' => [
                'class' => 'page-link'
            ],
            'pageCssClass'=>'page-item',
            'prevPageCssClass' => 'page-item',
            'nextPageCssClass' => 'page-item',
            'firstPageCssClass' => 'page-item',
            'lastPageCssClass' => 'page-item',
            'maxButtonCount' => '5',
        ],
    ]); ?>
</div>
