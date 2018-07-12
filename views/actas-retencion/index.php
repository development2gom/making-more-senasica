<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WrkActasRetencionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Actas de retención';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrk-actas-retencion-index">


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
                'contentOptions' => [
                    'class'=>"td-actions td-actions-i1"
                ],
                'class' => 'yii\grid\ActionColumn',
                'template' => '{ver}',

                'buttons' => [
                    'ver' => function($url, $model) {
                        
                        $a = Html::a("<i class='icon wb-pencil' aria-hidden='true'></i>", 
                        ["actas-retencion/view", 'token'=>$model->uddi], 
                        [
                            "class"=>"btn btn-success btn-edit no-pjax",
                            "data-token"=>$model->uddi,
                        ]);

                        $contenedor = '<div class="td-actions-tooltip" data-toggle="tooltip" data-original-title="Ver" data-template="<div class=\'tooltip tooltip-2 tooltip-success\' role=\'tooltip\'><div class=\'arrow\'></div><div class=\'tooltip-inner\'></div></div>">
                           '.$a.' 
                        </div>';

                        return $contenedor;
                    }
                ],
            ],
        ],
    ]); ?>
</div>
