<?php

// 1) Faz conexão com banco de dados e configurações
require('conn.php');

// 2) Escrever a query
$sql = <<<SQL

SELECT * FROM contatos;

SQL;

// Executar a query e retorna dados na variável
$res = $conn->query($sql);

$out = <<<HTML

<table>
<tr>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Assunto</th>
    <th>Mensagem</th>
</tr>

HTML;

while ($user = $res->fetch_assoc()) :

    $out .= <<<HTML
    
<tr>
    <td>{$user['nome']}</td>
    <td>{$user['email']}</td>
    <td>{$user['assunto']}</td>
    <td>{$user['mensagem']}</td>
</tr>
    
HTML;

endwhile;

$out .= '</table>';

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Faça Contato - Todos os contatos</title>
</head>

<body>

    <h2>Faça contato</h2>
    <p>Todos os contatos (somente para o ADM).</p>

    <?= $out ?>

</body>

</html>