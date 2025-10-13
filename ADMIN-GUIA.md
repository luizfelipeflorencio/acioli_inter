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

## Segurança

> **Atenção:** Mude as credenciais padrão em produção. 
> - Hoje usa só sessões do PHP, mas falta:
> - Senhas criptografadas
> - Proteção contra ataques
> - Limite de tentativas
> - Recuperação de senha

## Personalização

Pra mudar o login, edite `login.php`:

```php
if ($username === "admin" && $password === "admin123")
```

Pra algo mais seguro:
1. Crie tabela de usuários no banco
2. Use `password_hash()` e `password_verify()`
3. Adicione campos como e-mail, nome completo

## Conformidade com LGPD

O site agora inclui um banner de consentimento de cookies para conformidade com a Lei Geral de Proteção de Dados (LGPD):
- Banner fixo na parte inferior do site
- Opções para aceitar ou rejeitar cookies
- Armazena preferências do usuário usando localStorage
- Link para a Política de Privacidade

## Suporte

Qualquer problema, fala com o desenvolvedor.