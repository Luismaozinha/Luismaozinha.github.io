<?php
   //define o cabeçalho como padrao para caracteres especiais
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Additional headers
	$headers .= 'From: nome <contato@dominio.com.br>' . "\r\n";


   //destinatário do email
   $para = "luismaozinha@hotmail.com";

   //recebe os dados do formulário
   $nome = $_POST["name"];
   $fone = $_POST["phone"];
   $email  = $_POST["email"];
   $assunto = "TESTE MAIL PHP";
   $mensagem  = $_POST["message"];

 		//validando o campo e-mail nome
    if (($name == "")) {
    	echo "<script>alert('Preencha o campo nome.');</script>";
    	echo "<script>history.go(-1);</script>";
    }

		//validando o campo fone
    if (($phone == "")) {
    	echo "<script>alert('Preencha o campo fone.');</script>";
    	echo "<script>history.go(-1);</script>";
    }

 		//validando o campo e-mail
    if (substr_count($email,"@") == 0 || substr_count($email,".") == 0) {
    	echo "<script>alert('Por favor, utilize um e-mail vaido');</script>";
    	echo "<script>history.go(-1);</script>";
    }

   //composição do corpo do e-mail para o destinatário
   $corpo   = "<h3>De:</h3> ";
   $corpo  .= $name;
   $corpo  .= "<br>";
   $corpo  .= $phone;
   $corpo  .= "<br>";
   $corpo  .= $email;
   $corpo  .= "<br>";
   $corpo  .= "<h3>Mensagem</h3>";
   $corpo  .= "<p>";
   $corpo .= $message;
   $corpo  .= "</p>";

   //enviar e-mail  para o destinatário
   mail($para,$assunto,$corpo,$headers);

   //mensagem de confirmação
   echo "<script>alert('Sua mensagem foi enviada com sucesso');</script>";

   //redireciona devolta para a página de contato.
   echo "<meta http-equiv='refresh' content='1;URL=index.html'>";