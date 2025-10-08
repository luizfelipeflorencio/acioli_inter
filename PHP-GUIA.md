# Acioli Climatização - Versão PHP

Criação do site feito em PHP puro com HTML, CSS, MySQL e TailwindCSS.

## Estrutura do Projeto

```
├── includes/
│   ├── db.php              # Configuração do banco de dados
│   ├── header.php          # Cabeçalho do site
│   ├── footer.php          # Rodapé do site
│   └── schema.sql          # Script SQL do banco
├── index.php               # Página inicial
├── servicos.php            # Página de serviços
├── contato.php             # Formulário de contato
├── login.php               # Login do admin
├── admin.php               # Painel administrativo
├── privacidade.php         # Política de privacidade e cookies (LGPD)
├── logo.jpg                # Logo da empresa
└── ...                     # Outras imagens
```

## Requisitos

- Servidor Apache ou Nginx
- PHP 7.4+
- MySQL 5.7+

## Instalação

1. **Banco de Dados:**
   - Crie um banco no MySQL chamado `acioli_climatizacao`
   - Rode o script `includes/schema.sql` pra criar a tabela

2. **Configuração:**
   - Ajuste as credenciais no `includes/db.php`:
     ```php
     define('DB_HOST', 'localhost');
     define('DB_USER', 'seu_usuario');
     define('DB_PASS', 'sua_senha');
     define('DB_NAME', 'acioli_climatizacao');
     ```

3. **Imagens:**
   - Coloque as imagens na pasta raiz:
     - `logo.jpg` (logo principal)
     - `gree.png`, `hitachi.png`, `lg.png`, `midea.png`, `samsung.png`, `tcl.png`

4. **Acesso:**
   - Acesse pelo navegador:
     - `http://localhost/seu_diretorio/index.php`

## Funcionalidades

- **Home:** Apresentação da empresa
- **Serviços:** Detalhamento dos serviços
- **Contato:** Formulário com validação e salvamento no banco
- **Admin:** Painel pra ver as solicitações
- **WhatsApp:** Botão pra enviar mensagem direto pro cliente
- **Responsivo:** Funciona em celular e desktop
- **Navegação:** Menu que se adapta ao tamanho da tela
- **LGPD:** Conformidade com a Lei Geral de Proteção de Dados
  - Banner de consentimento de cookies
  - Política de privacidade

## Área Administrativa

- Acesse pelo menu ou diretamente em `login.php`
- Credenciais padrão:
  - Usuário: `admin`
  - Senha: `admin123`
- No painel você consegue:
  - Ver todas as solicitações de contato
  - Enviar mensagem pelo WhatsApp com um clique
  - Fazer logout

## Conformidade com LGPD

O site agora está em conformidade com a Lei Geral de Proteção de Dados (LGPD):
- Banner de consentimento de cookies adicionado ao cabeçalho
- Página de política de privacidade ([privacidade.php](file:///c%3A/xampp/htdocs/acioli/privacidade.php))
- Armazenamento de preferências de cookies usando localStorage
- Informações claras sobre coleta e uso de dados

## Tecnologias

- **PHP:** Backend
- **HTML5:** Estrutura
- **TailwindCSS:** Estilos (via CDN)
- **MySQL:** Banco de dados
- **JavaScript:** Coisas interativas (menu mobile, cookies)