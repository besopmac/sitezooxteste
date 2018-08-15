<?php

$nome            = $_POST["nome"];
$email           = $_POST["email"];
$mensagem        = $_POST["mensagem"];
$plano           = $_POST["plano"];
$detalhes        = $_POST["detalhes"];

$para = "rafael.albuquerque@zoox.com.br";
// $para = "tiago@skidun.com.br";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html;charset=iso-8859-1\r\n";
$headers .= "From: Zoox <contato@zoox.com.br>\r\n";

$templateHtml =  "<h3>Formulário de Contato</h3>";
$templateHtml .= "<p><strong>Nome:</strong> $nome</p>";
$templateHtml .= "<p><strong>E-mail:</strong> $email</p>";
$templateHtml .= "<p><strong>Plano:</strong> $plano</p>";
if ($detalhes != "") {
	$templateHtml .= "<p><strong>Quantidade de conexões:</strong> $detalhes</p>";	
}
$templateHtml .= "<p><strong>Mensagem:</strong> $mensagem</p>";

// manda o email
if(mail($para, "Formulário de Contato", $templateHtml,  $headers )){	
	echo "E-mail enviado com sucesso!";
	// header("Location: index.php?status=sucesso");
}else{
	echo "E-mail não enviado!";
	// header("Location: index.php?status=erro");
}

?>