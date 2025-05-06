# Aplicação de Mensagens Seguras em PHP

## Funcionalidades

- Criptografia AES-128-CBC de mensagens usando OpenSSL
- Proteção contra CSRF usando token de sessão
- Armazenamento simples em arquivo de texto

## Como Rodar

1. Copie os arquivos para um servidor local com suporte a PHP (ex: XAMPP, Laragon).
2. Acesse `http://localhost/mensagens-seguras-php/index.php`.

## Testes

- Verifique que a mensagem é armazenada criptografada e descriptografada corretamente.
- Se o token CSRF estiver ausente ou inválido, a mensagem não será processada.