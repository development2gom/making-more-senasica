<?php

namespace app\controllers;

use Yii;

use yii\web\Controller;
use app\models\Email;
use yii\web\HttpException;
use app\models\WrkActasRetencion;


class TestController extends Controller
{
    public function actionEmail($folio=null)
    {
        $acta = WrkActasRetencion::find()->
        where(['txt_folio'=>$folio])->one();

        if(!$acta){
            throw new HttpException(404,'no existe el acta');
        }
        $html='@app/mail/sinasica';
        $params['acta']=$acta;
        $to='alfonso@2gom.com.mx';
        $subject='Email prueba';
        $envio= Email::sendEmail($html,$params,$to,$subject);
        echo $envio;


    }
}