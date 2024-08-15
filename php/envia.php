<?php

    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "yumijapa2@gmail.com";
    $assunto = "Coleta de dados - Karina Yumi"

    $corpo = "Nome: ".$nome. "\n"."Telefone: ".$telefone."\n"."E-mail: ".$email."\n"."Mensagem: ".$mensagem;

    $cabecalho = "From: yumijapa2@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabecalho)){
        echo("Mensagem enviada com sucesso!");
    }else{
        echo("Houve um erro ao enviar mensagem!");
    }
?>