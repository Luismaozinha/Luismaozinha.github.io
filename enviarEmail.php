<?php
//1 – Definimos Para quem vai ser enviado o email
$para = "luismaozinha@hotmail.com";
//2 - resgatar o nome digitado no formulário e  grava na variavel $nome
$nome = $_POST['name'];
// 3 - resgatar o email digitado no formulário e  grava na variavel
//$email
$email = $_POST['email'];
// 4 - resgatar o Telefone digitado no formulário e  grava na variavel
//$phone
$phone = $_POST['phone'];
// 5 - Assunto a ser gravado na variavel
//$assunto
$assunto = $_POST['Formulário de Portfólio do GitHub'];
 //6 – Agora definimos a  mensagem que vai ser enviado no e-mail
$mensagem = "<strong>Nome:  </strong>".$nome;
$mensagem .= "<br>  <strong>Mensagem: </strong>"
.$_POST['message'];

//7 – agora inserimos as codificações corretas e  tudo mais.
$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  $nome<$email>\n";
//Vai ser //mostrado que  o email partiu deste email e seguido do nome
$headers .= "X-Sender:  <$email>\n";
//email do servidor //que enviou
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <$email>\n";
//caso a msg //seja respondida vai para  este email.
$headers .= "MIME-Version: 1.0\n";
