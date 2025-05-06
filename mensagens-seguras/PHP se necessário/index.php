<?php
session_start();

// Gera token CSRF se não existir
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Mensagens Seguras - PHP</title>
</head>
<body>
    <h1>Enviar Mensagem</h1>
    <form method="POST" action="send.php">
        <input type="text" name="mensagem" required placeholder="Digite sua mensagem">
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
        <button type="submit">Enviar</button>
    </form>
    <h2>Mensagens Recebidas</h2>
    <div>
        <?php
        if (file_exists("mensagens.txt")) {
            $linhas = file("mensagens.txt");
            foreach ($linhas as $linha) {
                echo "<p>$linha</p>";
            }
        }
        ?>
    </div>
</body>
</html>