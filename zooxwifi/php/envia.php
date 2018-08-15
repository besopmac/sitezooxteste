<?php
if (isset($_POST) && count($_POST) > 0) {
    
    require 'class.phpmailer.php';

    $nome = $_POST['nome'];
    $empresa = $_POST['empresa'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $assunto = 'Contato pelo site';
    $mensagem = $_POST['mensagem'];

    $mail = new PHPMailer();
		
		$mail->IsSMTP();
        $mail->Host = "ssl://smtp.gmail.com";
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username = "site@zoox.com.br";
        $mail->Password = "tecnologia";

        //Email de origem
        $mail->From = "site@zoox.com.br";
        $mail->FromName = "ZooxWiFi";
                
        //email de destino
        $mail->AddAddress("contato@zoox.com.br");
        $mail->AddAddress("financeiro@zoox.com.br");
        $mail->AddAddress("kayse.silva@zoox.com.br");
        //$mail->AddAddress("leandro.silva@zoox.com.br");
        $mail->addReplyTo($email);
		
		$mail->WordWrap = 50;
		$mail->IsHTML(true);
		
		$mail->Subject = "Novo email do site";
		$mail->Body = "Nome: $nome<br>Empresa: $empresa<br>Telefone: $telefone<br>Email: $email<br>Assunto: $assunto<br>Msg: $mensagem<br>";
		
		if ($mail->Send()) {
			echo 'OK';
		} else {
			echo 'ERRO';
		}
}

