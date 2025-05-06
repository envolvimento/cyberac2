## Questão 2: Criptografia Simétrica vs Assimétrica

- **Simétrica** usa a mesma chave para criptografar e descriptografar. Ex: AES.
- **Assimétrica** usa par de chaves pública/privada. Ex: RSA.
- **AES** é ideal para dados em trânsito em sessões curtas, como mensagens.
- **RSA** é melhor para troca de chaves, autenticação e certificados.

## Questão 3: Ataques Comuns e Mitigação

1. **CSRF**: envio de requisições forjadas. Mitigação: token CSRF.
2. **XSS**: injeção de scripts maliciosos. Mitigação: validação e escaping.
3. **SQL Injection**: injeção de comandos SQL. Mitigação: uso de ORM e prepared statements.