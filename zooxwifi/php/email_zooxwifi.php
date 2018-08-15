<?php
require 'class.phpmailer.php';

header('Content-Type: application/json');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$empresa = $_POST['empresa'];

if (!$nome || !$sobrenome || !$telefone || !$email || !$empresa) {
	echo json_encode(array(
		'status' => 404,
		'mensagem' => 'Campo obrigatório não preenchido.'
	));
} else {
	try {
	    $mail = new PHPMailer();

		$mail->IsSMTP();
		$mail->Host = "mail.zoox.com.br";
	    $mail->Port = 587;
		$mail->SMTPAuth = true;
		$mail->Username = "site@zoox.com.br";
		$mail->Password = "tecnologia123";

	    //Email de origem
		$mail->From = "contato@zoox.com.br";        
	    //email de destino
		$mail->AddAddress("contato@zoox.com.br");
		$mail->WordWrap = 50;
		$mail->IsHTML(true);
		$mail->Subject = "Novo email do site";
		$mail->Body = "Nome: $nome<br>Email: $email<br>Assunto: $assunto<br>Msg: $mensagem<br>";
		
		if ($mail->Send()) {
			echo json_encode(array(
				'status' => 200,
				'mensagem' => 'E-mail enviado com sucesso'
			));
		} else {
			echo json_encode(array(
				'status' => 500,
				'mensagem' => 'Falha ao enviar-email'
			));
		}
	} catch (\Exception $e) {
		echo json_encode(array(
			'status' => 500,
			'mensagem' => 'Falha ao enviar-email'
		));
	}
}
