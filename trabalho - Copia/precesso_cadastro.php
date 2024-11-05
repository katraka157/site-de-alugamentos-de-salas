<?php
// Configurações de conexão com o banco de dados
$host = 'localhost';
$dbname = 'cadastro';
$user = 'root';
$password = '';

try {
    // Conexão com o banco de dados usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Recebendo dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografa a senha
    
    // Prepara a query de inserção
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
    $stmt = $pdo->prepare($sql);
    
    // Executa a query com os dados
    $stmt->execute([
        ':nome' => $nome,
        ':email' => $email,
        ':senha' => $senha,
    ]);
    
    echo "Usuário cadastrado com sucesso!";
    
} catch (PDOException $e) {
    echo "Erro ao cadastrar usuário: " . $e->getMessage();
}
?>
