<?php
require './PHPMailer/PHPMailerAutoload.php';

class Mail{
	public $mail_conf = [
		'uni' => [
			'host' => 'smtp.gmail.com',
			'port' => '465',
			'SMTPSecure' => 'ssl',
			'user' => 'unimr.13@gmail.com',
			'pass' => 'vvcr9595',
			'from' => 'unimr.13@gmail.com',
			'from_name' => 'uni'
		]
	];
	function __construct(){
		mb_language("japanese");
		mb_internal_encoding("UTF-8");
	}
	/**
	* sendmail メールを送信するメソッド
	*
	* @param  array   data    メールの内容 [to,subject,text]
	* @param  string  config  設定情報の配列名（Mail->mail_confの配列名）
	* @return bool    return 　送信できたかどうか
	*/
	public function sendmail($data,$config = 'uni'){
		//nullチェック
		if(empty($data)){
			//データがなければ中断
			return false;
		}
		$mail_conf = $this->mail_conf[$config];
		$PHPMailer = new PHPMailer();
		$PHPMailer->CharSet = "iso-2022-jp";
		$PHPMailer->Encoding = "7bit";

		$PHPMailer->IsSMTP(); 
		$PHPMailer->SMTPOptions = [
			'ssl' => [
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
			]
		];
		$PHPMailer->SMTPAuth = true; 
		$PHPMailer->Host = $mail_conf['host']; 
		$PHPMailer->Username = $mail_conf['user'];
		$PHPMailer->Password = $mail_conf['pass'];
		$PHPMailer->Port = $mail_conf['port'];
		$PHPMailer->SMTPSecure = $mail_conf['SMTPSecure'];

		$PHPMailer->AddAddress($data['to']);
		$PHPMailer->From = $mail_conf['from'];
		$PHPMailer->FromName = mb_encode_mimeheader(mb_convert_encoding($mail_conf['from_name'],"JIS","UTF-8"));
		$PHPMailer->Subject = mb_encode_mimeheader(mb_convert_encoding($data['subject'],"JIS","UTF-8"));
		$PHPMailer->Body  = mb_convert_encoding($data['text'],"JIS","UTF-8");
		if($PHPMailer->Send()){
			return true;
		}else {
			// echo 'Mailer Error: ' . $PHPMailer->ErrorInfo;
			return false;
		}
	}
}
?>
