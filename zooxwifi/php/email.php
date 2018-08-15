<?php
if (isset($_POST) && count($_POST) > 0) {
    
    require 'class.phpmailer.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['msg'];

    $mail = new PHPMailer();
		
		$mail->IsSMTP();
		$mail->Host = "mail.zoox.com.br";
                $mail->Port = 587;
		$mail->SMTPAuth = true;
		$mail->Username = "site@zoox.com.br";
		$mail->Password = "tecnologia123";

                //Email de origem
		$mail->From = "kayse.silva@zoox.com.br";
                
                //email de destino
		$mail->AddAddress("kayse.silva@zoox.com.br");
		
		$mail->WordWrap = 50;
		$mail->IsHTML(true);
		
		$mail->Subject = "Novo email do site";
		$mail->Body = "Nome: $nome<br>Email: $email<br>Assunto: $assunto<br>Msg: $mensagem<br>";
		
		if ($mail->Send()) {
			echo '<p style="color: green;font-weight: bold;">Email enviado com sucesso!</p>';
                        echo '<script>alert("Email enviado com sucesso");</script>';
		} else {
			echo '<p>Erro ao enviar o email.</p>';
		}
}

