<?php
namespace app\models;

use Yii;
class Email{
  
	public $emailHtml;
	public $emailText;
	public $from;
	public $to;
	public $subject;
	public $params;
	

	function __construct() {
		$this->from = Yii::$app->params ['modUsuarios'] ['email'] ['emailActivacion']; 
	}

	/**
	 * Envia mensaje de correo electronico
	 *   	
	 * @return boolean
	 */
	public static function sendEmail($html,$params,$to,$subject) {
		return Yii::$app->mailer->compose ( [
				// 'html' => '@app/mail/layouts/example',
				// 'text' => '@app/mail/layouts/text'
				'html' => $html,
				//'text' => $templateText 
		], $params )->setFrom ( Yii::$app->params ['modUsuarios'] ['email'] ['emailActivacion']  )->setTo ( $to )->setSubject ( $subject )->send ();
	}
}