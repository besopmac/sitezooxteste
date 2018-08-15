<?php
header('Content-Type: application/json');
if (isset($_POST) && count($_POST) > 0) {

    require 'class.phpmailer.php';
    $nome = $_POST['nome'];
    $empresa = $_POST['empresa'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    $regex = '/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

    if (!preg_match($regex, $email)) {
        echo json_encode(array('type' => 'error', 'mensagem' => 'Preencha um email válido!'));
    }

    try {
        $mail = new PHPMailer();

        $mail->IsSMTP();
        $mail->Host = "ssl://smtp.gmail.com";
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username = "site@zooxcloud.com";
        $mail->Password = "tecnologia";

        //Email de origem
        $mail->From = "site@zoox.com";
        $mail->FromName = "ZooxWiFi";

        //email de destino
        $mail->AddAddress("contato@zooxcloud.com");
        $mail->AddAddress("isabella.pereira@zooxcloud.com");
        $mail->AddAddress("carolina.guima@zooxcloud.com");
        //$mail->AddAddress("leandro.silva@zoox.com.br");
        $mail->addReplyTo($email);

        $mail->WordWrap = 50;
        $mail->IsHTML(true);

        $mail->Subject = "Novo email do site - ZooxWiFi";
        $mail->Body = "Nome: $nome<br>Empresa: $empresa<br>Telefone: $telefone<br>Email: $email<br>Assunto: $assunto<br>Msg: $mensagem<br>";
        if ($mail->Send()) {
            echo json_encode(array('type' => 'success', 'mensagem' => 'Sua mensagem foi enviada com sucesso.'));
        } else {
            echo json_encode(array('type' => 'error', 'mensagem' => 'Error ao enviar email, tente novamente mais tarde.'));
        }
    } catch (phpmailerException $e) {
        echo json_encode(array('type' => 'error', 'mensagem' => 'Error ao enviar email, tente novamente mais tarde.', 'debug' => $e->getMessage()));
    }
}
