<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\WrkActasRetencion;
use app\models\WrkActasRetencionSearch;
use app\components\AccessControlExtend;
use app\models\Calendario;


class ReportesController extends Controller{
/**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControlExtend::className(),
                'only' => ['exportar','index'],
                'rules' => [
                    [
                        'actions' => ['exportar','index'],
                        'allow' => true,
                        'roles' => ['admin','oficial','super-admin','TEA', 'responsable', 'jefe'],
                    ],
                   
                ],
            ],
            
        ];
    }
    public function actionIndex(){
        $searchModel = new WrkActasRetencionSearch();
        
        return $this->render("index", ["searchModel"=>$searchModel]);
    }

    public function actionExportar(){

        $fileName = "Reporte.csv";

        $searchModel = new WrkActasRetencionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $data = [];
        $data[0] = $this->setHeaders();
        
        foreach($dataProvider->getModels() as $model){
            $oficial = $model->oficial;
            $data[$model->id_acta_retencion] = [
                $model->txt_oficina,
                $model->txt_nombre." ".$model->txt_apellido_paterno." ".$model->txt_apellido_materno,
                $model->txt_nacionalidad,
                $model->txt_calle." ".$model->txt_numero ." ".$model->txt_municipio ." ".$model->txt_estado,
                $model->txt_tipo_mercancia,
                $model->txt_cantidad,
                $model->txt_unidad_medida,
                $model->txt_pais_origen,
                $model->txt_pais_procedencia,
                Calendario::getDateComplete($model->txt_fecha),
                Calendario::getYearLastDigit($model->txt_fecha),
                Calendario::getMonthNumber($model->txt_fecha),
                Calendario::getNumberWeek($model->txt_fecha),
                Calendario::getDayNumber($model->txt_fecha),
                $model->txt_tipo_acta,
                $model->txt_detectado_por,
                $model->txt_dictamen,
                $model->txt_nombre_completo_oficial,
                $oficial->nombreCompleto,
                $model->txt_folio,
               
            ];


        }

        header('Content-Type: application/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename="' . $fileName . '"');
    
            //Open up a PHP output stream using the function fopen.
        $fp = fopen('php://output', 'w');
        //add BOM to fix UTF-8 in Excel
        fputs($fp, $bom = (chr(0xEF) . chr(0xBB) . chr(0xBF)));
        
            //Loop through the array containing our CSV data.
        foreach ($data as $row) {
            //fputcsv formats the array into a CSV format.
            //It then writes the result to our output stream.
            fputcsv($fp, $row);
        }
    
            //Close the file handle.
        fclose($fp);
        exit;
    }

    public function setHeaders(){
        return ["Oficina de inspección", "Nombre pasajero", "Nacionalidad", "Domicilio", "Tipo producto", "Cantidad", "Unidad medida",
                "País origen", "País procedencia", "Fecha", "Año", "Mes", "Semana", "Día", "Ámbito", "Detectado por", "Dictamen", "Oficial",
                "Tercero", "Folio documento"];
       
    }
}