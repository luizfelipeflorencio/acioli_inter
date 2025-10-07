# Acioli Climatização - Versão PHP

Criação do site feito em PHP puro com HTML, CSS, MySQL e TailwindCSS.

## Estrutura do Projeto

```
├── includes/
│   ├── db.php              # Configuração do banco de dados
│   ├── header.php          # Cabeçalho do site
│   ├── footer.php          # Rodapé do site
│   └── schema.sql          # Script SQL do banco
├── vercel.json             # Configuração para deploy no Vercel
├── index.php               # Página inicial
├── servicos.php            # Página de serviços
├── contato.php             # Formulário de contato
├── login.php               # Login do admin
├── admin.php               # Painel administrativo
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
   - Coloque as imagens na pasta `images/`:
     - `logo.jpg` (logo principal)
     - `gree.png`, `hitachi.png`, `lg.png`, `midea.png`, `samsung.png`, `tcl.png`

4. **Deploy no Vercel:**
   - O arquivo `vercel.json` já está configurado para deploy no Vercel
   - Configure as variáveis de ambiente no painel do Vercel:
     - `DB_HOST` - Host do banco de dados
     - `DB_USER` - Usuário do banco de dados
     - `DB_PASS` - Senha do banco de dados
     - `DB_NAME` - Nome do banco de dados

5. **Acesso:**
   - Localmente: `http://localhost/seu_diretorio/index.php`
   - No Vercel: após deploy, use o domínio fornecido pelo Vercel

## Funcionalidades

- **Home:** Apresentação da empresa
- **Serviços:** Detalhamento dos serviços
- **Contato:** Formulário com validação e salvamento no banco
- **Admin:** Painel pra ver as solicitações
- **WhatsApp:** Botão pra enviar mensagem direto pro cliente
- **Responsivo:** Funciona em celular e desktop
- **Navegação:** Menu que se adapta ao tamanho da tela

## Área Administrativa

- Acesse pelo menu ou diretamente em `login.php`
- Credenciais padrão:
  - Usuário: `admin`
  - Senha: `admin123`
- No painel você consegue:
  - Ver todas as solicitações de contato
  - Enviar mensagem pelo WhatsApp com um clique
  - Fazer logout

## Tecnologias

- **PHP:** Backend
- **HTML5:** Estrutura
- **TailwindCSS:** Estilos (via CDN)
- **MySQL:** Banco de dados
- **JavaScript:** Coisas interativas (menu mobile)