<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $empresa = $_POST['empresa'];
    $mensagem = $_POST['mensagem'];

    $destinatario = "contato@marvixbrasil.com.br";

    $assunto = "Novo contato recebido pelo site";

    $corpo = "
Nome: $nome

E-mail: $email

Telefone: $telefone

Empresa: $empresa

Mensagem:
$mensagem
";

    $headers = "From: contato@marvixbrasil.com.br\r\n";
    $headers .= "Reply-To: $email\r\n";

    if(mail($destinatario, $assunto, $corpo, $headers)){
        header("Location: obrigado.html");
        exit();
    } else {
        echo "Erro ao enviar mensagem.";
    }
}

?>