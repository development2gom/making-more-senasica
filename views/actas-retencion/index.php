<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use app\models\EntOficiales;
use yii\helpers\ArrayHelper;
use app\models\Calendario;
use app\models\CatTiposIdentificacion;
use app\models\CatDetectadosPor;
use app\models\CatDictamen;
use app\models\CatEstados;
use app\models\CatTiposActas;
use app\models\CatTiposMercancias;
use app\models\CatPaises;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WrkActasRetencionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Actas de retención';
$this->params['breadcrumbs'][] = $this->title;
$oficiales = EntOficiales::find()->orderBy("txt_nombre")->all();
$identificaciones = CatTiposIdentificacion::find()->where(["b_habilitado"=>1])->orderBy("txt_nombre")->all();
$detectados = CatDetectadosPor::find()->where(["b_habilitado"=>1])->orderBy("txt_nombre")->all();
$dictamenes = CatDictamen::find()->where(["b_habilitado"=>1])->orderBy("txt_nombre")->all();
$estados = CatEstados::find()->where(["b_habilitado"=>1])->orderBy("txt_nombre")->all();
$tiposActas = CatTiposActas::find()->where(["b_habilitado"=>1])->orderBy("txt_nombre")->all();
$mercancias = CatTiposMercancias::find()->where(["b_habilitado"=>1])->orderBy("txt_nombre")->all();
$paises = CatPaises::find()->where(["b_habilitado"=>1])->orderBy("txt_nombre")->all();


$this->registerJsFile(
    '@web/webAssets/js/actas-retencion/index.js',
    ['depends' => [\app\assets\AppAsset::className()]]
  );

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
            
            [
                'attribute'=>'id_oficial',
                'filter'=>ArrayHelper::map($oficiales, 'id_oficial', 'nombreCompleto'),
                'filterInputOptions'=>[
                    'class'=>'form-control',
                    'prompt'=>"Ver todos"
                ],
                "format"=>"raw",
                "value"=>function($data){
                    return $data->oficial->nombreCompleto;
                }
            ],
            'txt_folio',
            [
                'filter'=>DatePicker::widget([
                    'model'=>$searchModel,
                    'attribute'=>'txt_fecha',
                    'pickerButton'=>false,
                    'removeButton'=>false,
                    'type' => DatePicker::TYPE_INPUT,
                    'pluginOptions' => [
                        'autoclose'=>true,
                        'format' => 'dd-mm-yyyy',
                        'clearBtn'=>true,
                    ]
                ]),
                "attribute"=>"txt_fecha",
                "format"=>"raw",
                "value"=>function($data){
                    return Calendario::getDateComplete($data->txt_fecha);
                }
            ],
            
            'txt_oficina',
            [
                'attribute'=>'txt_tipo_identificacion',
                'filter'=>ArrayHelper::map($identificaciones, 'txt_nombre', 'txt_nombre'),
                'filterInputOptions'=>[
                    'class'=>'form-control',
                    'prompt'=>"Ver todos"
                ],
               
            ],
            'txt_numero_identificacion',
            'txt_nombre',
            'txt_apellido_paterno',
            'txt_apellido_materno',
            'txt_nacionalidad',
            'txt_correo',
            [
                'attribute'=>'txt_estado',
                'filter'=>ArrayHelper::map($estados, 'txt_nombre', 'txt_nombre'),
                'filterInputOptions'=>[
                    'class'=>'form-control',
                    'prompt'=>"Ver todos"
                ],
               
            ],
            'txt_municipio',
            'txt_calle',
            'txt_numero',
            [
                'attribute'=>'txt_tipo_acta',
                'filter'=>ArrayHelper::map($tiposActas, 'txt_nombre', 'txt_nombre'),
                'filterInputOptions'=>[
                    'class'=>'form-control',
                    'prompt'=>"Ver todos"
                ],
               
            ],
            [
                'attribute'=>'txt_pais_origen',
                'filter'=>ArrayHelper::map($paises, 'txt_nombre', 'txt_nombre'),
                'filterInputOptions'=>[
                    'class'=>'form-control',
                    'prompt'=>"Ver todos"
                ],
               
            ],
            [
                'attribute'=>'txt_pais_procedencia',
                'filter'=>ArrayHelper::map($paises, 'txt_nombre', 'txt_nombre'),
                'filterInputOptions'=>[
                    'class'=>'form-control',
                    'prompt'=>"Ver todos"
                ],
               
            ],
            [
                'attribute'=>'txt_tipo_mercancia',
                'filter'=>ArrayHelper::map($mercancias, 'txt_nombre', 'txt_nombre'),
                'filterInputOptions'=>[
                    'class'=>'form-control',
                    'prompt'=>"Ver todos"
                ],
               
            ],
            'txt_cantidad',
            'txt_unidad_medida',
            'txt_descripcion_hechos',
            [
                'attribute'=>'txt_detectado_por',
                'filter'=>ArrayHelper::map($detectados, 'txt_nombre', 'txt_nombre'),
                'filterInputOptions'=>[
                    'class'=>'form-control',
                    'prompt'=>"Ver todos"
                ],
               
            ],
            [
                'attribute'=>'txt_dictamen',
                'filter'=>ArrayHelper::map($dictamenes, 'txt_nombre', 'txt_nombre'),
                'filterInputOptions'=>[
                    'class'=>'form-control',
                    'prompt'=>"Ver todos"
                ],
               
            ],
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
                        ["actas-retencion/view", 'token'=>$model->txt_folio], 
                        [
                            "class"=>"btn btn-success btn-edit no-pjax",
                            "data-token"=>$model->txt_folio,
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


