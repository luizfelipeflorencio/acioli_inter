# Guia da Área Administrativa - Acioli Climatização

## Acesso

1. Use o link "Área Administrativa" no menu ou rodapé
2. Ou acesse diretamente: `http://seu-dominio/login.php`

## Credenciais

Para testar, use:
- **Usuário:** admin
- **Senha:** admin123

## O que tem na área admin

### Login
- Validação de usuário e senha
- Mostra erro se as credenciais estiverem erradas
- Link pra voltar pro site

### Painel Principal
- Tabela com todas as solicitações de contato
- Mostra: ID, nome, serviço, telefone, data e observações
- Botão verde do WhatsApp pra falar direto com o cliente
- Contador com total de solicitações
- Botão de sair no canto superior

## Funcionamento do WhatsApp

Quando clica no ícone:
1. Abre nova aba no navegador
2. Carrega o WhatsApp Web com conversa pro cliente
3. Já vem com mensagem: "Olá [nome], vi que você solicitou [serviço]"
4. É só enviar ou editar antes de enviar

Exemplo:
```
Olá João Silva, vi que você solicitou Instalação
```

O sistema:
- Pega o telefone da solicitação
- Limpa caracteres especiais
- Adiciona código do país (55) se necessário
- Monta o link certo pro WhatsApp

## Deploy no Vercel

O site agora suporta deploy no Vercel graças ao arquivo `vercel.json` que:
- Configura o runtime `vercel-php@0.6.0` (não é um pacote npm)
- Define rotas apropriadas
- Previne o download de arquivos ao invés de executá-los

Para deploy:
1. Conecte seu repositório ao Vercel
2. Configure as variáveis de ambiente:
   - `DB_HOST` - Host do banco de dados
   - `DB_USER` - Usuário do banco de dados
   - `DB_PASS` - Senha do banco de dados
   - `DB_NAME` - Nome do banco de dados

## Segurança

> **Atenção:** Mude as credenciais padrão em produção. 
> Hoje usa só sessões do PHP, mas falta:
> - Senhas criptografadas
> - Proteção contra ataques
> - Limite de tentativas
> - Recuperação de senha

## Personalização

Pra mudar o login, edite `login.php`:

```php
if ($username === "admin" && $password === "admin123") {
```

Pra algo mais seguro:
1. Crie tabela de usuários no banco
2. Use `password_hash()` e `password_verify()`
3. Adicione campos como e-mail, nome completo

## Suporte

Qualquer problema, fala com o desenvolvedor.