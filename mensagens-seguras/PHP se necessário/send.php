<?php
session_start();

function encryptAES($data, $key) {
    $iv = openssl_random_pseudo_bytes(16);
    $ciphertext = openssl_encrypt($data, 'AES-128-CBC', $key, 0, $iv);
    return base64_encode($iv . $ciphertext);
}

function decryptAES($data, $key) {
    $decoded = base64_decode($data);
    $iv = substr($decoded, 0, 16);
    $ciphertext = substr($decoded, 16);
    return openssl_decrypt($ciphertext, 'AES-128-CBC', $key, 0, $iv);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        die("CSRF token inválido.");
    }

    $mensagem = $_POST['mensagem'];
    $chave = "1234567890123456"; // chave AES de 128 bits

    $criptografada = encryptAES($mensagem, $chave);
    $descriptografada = decryptAES($criptografada, $chave);

    $linha = "Criptografada: $criptografada | Descriptografada: $descriptografada" . PHP_EOL;
    file_put_contents("mensagens.txt", $linha, FILE_APPEND);

    header("Location: index.php");
    exit();
}