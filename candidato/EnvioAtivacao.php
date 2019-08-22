<?php

include_once "../DAO/conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);


$sql = "INSERT INTO ativacao (nome,email,senha,perfilUsuario) 
VALUES ('$nome','$email','$senhaSegura',0)";


// incluindo a classe PHPMailer
include_once '../PHPMailer-master/PHPMailerAutoload.php';


// enviando o e-mail utilizando a classe PHPMail

$idAtivacao = "SELECT LAST_INSERT_ID from Ativacao";
$id= md5($idAtivacao);


$Mailer = new PHPMailer(true);
$Mailer->CharSet="utf-8";
$Mailer->SMTPDebug=3;
$Mailer->isSMTP();
$Mailer->Host='smtp@gmail.com';
$Mailer->SMTPAuth=true;
$Mailer->Username ="processo.seletivouemgfrutal@gmail.com";
$Mailer->Password = "uemg123456";
$Mailer->SMTPSecure = 'tls';                               
$Mailer->Port = 587;     


$Mailer->FromName = "{$nome}";                                 
$Mailer->From ="processo.seletivouemgfrutal@gmail.com";
$Mailer->addAddress("{$email}");     
$Mailer->isHTML(true);
$Mailer->Subject = 'Ative o seu cadastro'.$nome.'!';
$Mailer->Body    = 'Clique aqui para ativar sua conta';
$Mailer->AltBody = "http://localhost/processoseletivo/ProcessoSeletivo/EnvioCadastro.php?h=".$id;

$Mailer->send();


if ($con->query($sql) === TRUE){
	echo "<script>alert('Cadastro realizado com sucesso!');window.location='../loguin.php'</script>";
} else {
	echo "Erro para inserir: " . $con->error; 
}


$con->close();
?>
