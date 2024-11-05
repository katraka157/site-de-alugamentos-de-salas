<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    // Verifica se as senhas coincidem
    if ($senha === $confirmar_senha) {
        // (Opcional) Criptografa a senha para armazenamento seguro
        $senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);

        // Exemplo: salvando os dados em um banco de dados fictício (não implementado)
        // No lugar disso, mostramos uma mensagem de sucesso
        echo "Usuário cadastrado com sucesso!";
        echo "<br>Nome: $nome";
        echo "<br>Email: $email";
        echo "<br>Telefone: $telefone";
    } else {
        echo "Erro: as senhas não coincidem. Tente novamente.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
