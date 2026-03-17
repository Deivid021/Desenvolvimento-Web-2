<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>

    <style>
        body {
            width: 100vh;
            font-family: Arial;
            background-color: #f2f2f2;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .container{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }

        form {
            background-color: white;
            padding: 20px;
            width: 200px;
            margin: 0;
        }

        input, textarea {
            width: 100%;
            margin-top: 5px;
            margin-bottom: 10px;
        }

        button {
            width: 100%;
            background-color: #80f183;
            color: white;
            border: none;
            padding: 10px;
        }

        a {
            display: block;
            text-align: left;
            margin-top: 20px;
        }
    </style>

</head>
<body>
<div class="container">
    <form action="destino.php" method="POST">
        Nome: <input type="text" name="nome"><br><br>
        Telefone: <input type="number" name="telefone"><br><br>
        Email: <input type="text" name="email"><br><br>
        Mensagem:<br>
        <textarea name="mensagem"></textarea><br><br>

        <button type="submit">Enviar</button>
    </form>

    <a href="destino.php?nome=Deivid&telefone=123456&email=teste@email.com&mensagem=Oi">
        Enviar via GET
    </a>
</div>

</body>
</html>