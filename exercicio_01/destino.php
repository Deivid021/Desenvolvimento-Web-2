<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Destino</title>

    <style>
        body {
            font-family: Arial;
            background-color: #fe9797;
        }

        .box {
            background-color: white;
            padding: 20px;
            border: 1px solid #f77b7b;
            width: 600px;
            margin: 0;
        }

        h2 {
            color: #333;
        }
    </style>

</head>
<body>

<div class="box">

<h2>Dados Recebidos</h2>

<?php
echo "Nome: " . $_REQUEST['nome'] . "<br>";
echo "Telefone: " . $_REQUEST['telefone'] . "<br>";
echo "Email: " . $_REQUEST['email'] . "<br>";
echo "Mensagem: " . $_REQUEST['mensagem'] . "<br>";
?>

<br>

<h2>Método HTTP</h2>
<?php
echo $_SERVER['REQUEST_METHOD'];
?>

<br><br>

<h2>Headers</h2>
<?php
$headers = apache_request_headers();

foreach ($headers as $chave => $valor) {
    echo $chave . ": " . $valor . "<br>";
}
?>

</div>

</body>
</html>