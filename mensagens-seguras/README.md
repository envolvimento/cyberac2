# Aplicação de Mensagens Seguras com AES e Proteção CSRF

## Como rodar

1. Compile e rode com:
```bash
./mvnw spring-boot:run
```

2. Acesse `http://localhost:8080` para utilizar a aplicação.

## Funcionalidades

- Criptografia AES das mensagens
- Proteção CSRF via Spring Security
- Interface simples HTML

## Testes de Segurança

- A criptografia impossibilita a leitura sem a chave AES.
- O CSRF token impede submissões forjadas de outro site.