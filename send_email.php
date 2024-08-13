<?php
$to = 'gustavomonteiro0610@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = 'Mensagem de Contato do Site';
$body = "Nome: $name\nEmail: $email\nMensagem:\n$message\n";
$headers = "From: $email";

if (mail($to, $subject, $body, $headers)) {
    echo 'Mensagem enviada com sucesso!';
} else {
    echo 'Houve um erro ao enviar a mensagem. Tente novamente mais tarde.';
}
?>
