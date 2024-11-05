<?php

$cor_de_fundo = "#f0f0f0";


echo "<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Cadastro de Usuário</title>
    <style>
        /* Estilos CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: $cor_de_fundo;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-size: 14px;
            margin-bottom: 5px;
            display: block;
        }
        input[type='text'],
        input[type='email'],
        input[type='tel'],
        input[type='password'] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class='form-container'>
    <h2>Cadastro de Usuário</h2>
    <form action='processa_cadastro.php' method='POST'>
        <label for='nome'>Nome:</label>
        <input type='text' id='nome' name='nome' required>

        <label for='email'>Email:</label>
        <input type='email' id='email' name='email' required>

        <label for='telefone'>Telefone:</label>
        <input type='tel' id='telefone' name='telefone' required>

        <label for='senha'>Senha:</label>
        <input type='password' id='senha' name='senha' required>

        <label for='confirmar_senha'>Confirmar Senha:</label>
        <input type='password' id='confirmar_senha' name='confirmar_senha' required>

        <button type='submit'>Cadastrar</button>
    </form>
</div>

</body>
</html>";
?>
