# Acioli Climatização - Website Completo

Este é um website completo para uma empresa de instalação e manutenção de ar condicionado, desenvolvido em PHP com HTML, CSS, JavaScript e MySQL. O site é totalmente responsivo e utiliza TailwindCSS para estilização.

## Estrutura do Projeto

```
├── includes/                 # Componentes e configurações reutilizáveis
│   ├── db.php               # Configuração e conexão com o banco de dados
│   ├── footer.php           # Componente de rodapé reutilizável
│   ├── header.php           # Componente de cabeçalho reutilizável
│   ├── schema.sql           # Script SQL para criação do banco de dados
├── images/                  # Pasta com todas as imagens do site
├── ADMIN-GUIDE.md           # Guia detalhado da área administrativa
├── README-PHP.md            # Documentação técnica da conversão para PHP
├── admin.php                # Painel administrativo para gerenciamento de contatos
├── contato.php              # Página de contato com formulário de solicitação
├── index.php                # Página inicial do website
├── login.php                # Página de autenticação da área administrativa
├── privacidade.php          # Página de política de privacidade e cookies (LGPD)
├── servicos.php             # Página com detalhamento dos serviços oferecidos
└── sobre.php                # Página sobre a empresa e equipe
```

## Descrição dos Arquivos e Pastas

### Pasta `includes/`

#### `db.php`
- Configuração da conexão com o banco de dados MySQL
- Define constantes para host, usuário, senha e nome do banco
- Utiliza PDO para conexão segura com o banco de dados
- Contém tratamento de erros para falhas na conexão

#### `footer.php`
- Componente reutilizável que renderiza o rodapé do site
- Contém informações de contato, links rápidos, serviços e redes sociais
- Inclui seção de direitos autorais com ano dinâmico
- Função `renderFooter()` para fácil inclusão em todas as páginas
- Link para Política de Privacidade

#### `header.php`
- Componente reutilizável que renderiza o cabeçalho do site
- Contém navegação principal com links para todas as páginas
- Implementa menu responsivo com toggle para dispositivos móveis
- Inclui logo da empresa e script JavaScript para funcionalidade do menu mobile
- Função `renderHeader()` para fácil inclusão em todas as páginas
- Banner de consentimento de cookies para conformidade com LGPD

#### `schema.sql`
- Script SQL para criação do banco de dados e tabelas
- Cria o banco de dados `acioli_climatizacao`
- Cria a tabela `contact_submissions` para armazenar solicitações de contato
- Inclui campos para nome, serviço, telefone, observações e data de criação

### Pasta `images/`
- Contém todas as imagens utilizadas no website
- Inclui logo da empresa, imagens dos serviços, marcas credenciadas e ilustrações
- Formatos suportados: JPG, PNG

### Arquivos Principais

#### `index.php` (Página Inicial)
- Página principal do website
- Contém seções: Hero, Serviços, Marcas Credenciadas, Por que nos escolher e Call-to-Action
- Apresenta os principais serviços com links para detalhamento
- Inclui carrossel de marcas credenciadas
- Botões de call-to-action para orçamentos e serviços

#### `servicos.php` (Página de Serviços)
- Detalhamento completo dos serviços oferecidos
- Seções para: Instalação, Manutenção, Limpeza, Reparo e Diagnóstico
- Cada serviço inclui descrição e lista de características específicas
- Imagens ilustrativas para cada tipo de serviço
- Botões para solicitação de orçamento em cada seção

#### `sobre.php` (Página Sobre Nós)
- Informações sobre a história da empresa
- Seções: Nossa História, Missão, Visão e Valores
- Apresentação da equipe e profissionais
- Informações sobre compromisso e qualidade dos serviços
- Links para serviços e contato

#### `contato.php` (Página de Contato)
- Formulário de contato com validação de campos
- Informações de contato: telefone, e-mail e endereço
- Horário de atendimento da empresa
- Integração com banco de dados para armazenar solicitações
- Mensagens de sucesso após envio do formulário
- Validação de campos obrigatórios (nome, telefone, serviço)

#### `privacidade.php` (Política de Privacidade)
- Página com a política de privacidade e uso de cookies
- Informações sobre conformidade com a LGPD
- Detalhamento dos tipos de cookies utilizados
- Direitos do titular dos dados
- Informações de contato para questões de privacidade

#### `login.php` (Área Administrativa - Login)
- Página de autenticação para acesso à área administrativa
- Formulário com campos de usuário e senha
- Validação de credenciais (usuário: admin, senha: admin123)
- Mensagens de erro para credenciais inválidas
- Link para voltar ao site principal

#### `admin.php` (Painel Administrativo)
- Painel para gerenciamento das solicitações de contato
- Exibição de todas as solicitações em formato de tabela
- Colunas: ID, Nome, Serviço, Telefone, Data, Observações e Ações
- Botão de WhatsApp para contato direto com clientes
- Funcionalidade de logout
- Contador de solicitações recebidas

### Documentação

#### `README-PHP.md`
- Documentação técnica da conversão do site de Next.js para PHP
- Instruções de instalação e configuração
- Requisitos do sistema
- Descrição das funcionalidades
- Guia de testes

#### `ADMIN-GUIDE.md`
- Guia completo para uso da área administrativa
- Instruções de acesso e credenciais
- Detalhamento das funcionalidades do painel
- Explicação da integração com WhatsApp
- Considerações de segurança e personalização

## Tecnologias Utilizadas

- **PHP**: Linguagem de programação do lado do servidor
- **HTML5**: Estruturação das páginas
- **TailwindCSS**: Framework CSS para estilização (via CDN)
- **JavaScript**: Funcionalidades interativas (menu mobile, cookies)
- **MySQL**: Banco de dados para armazenar solicitações de contato
- **Font Awesome**: Ícones e elementos visuais
- **Google Fonts**: Tipografia personalizada (fonte Inter)

## Funcionalidades Principais

1. **Site Institucional Completo**:
   - Página inicial atrativa
   - Detalhamento de serviços
   - Sobre a empresa
   - Formulário de contato

2. **Sistema de Contato**:
   - Formulário com validação
   - Armazenamento em banco de dados
   - Mensagens de sucesso/erro

3. **Área Administrativa**:
   - Autenticação de usuários
   - Visualização de solicitações
   - Integração com WhatsApp
   - Logout seguro

4. **Design Responsivo**:
   - Layout adaptável para dispositivos móveis
   - Menu mobile com toggle
   - Experiência consistente em diferentes telas

5. **Integração com WhatsApp**:
   - Links diretos para clientes
   - Mensagens pré-preenchidas
   - Facilita o atendimento pós-formulário

6. **Conformidade com LGPD**:
   - Banner de consentimento de cookies
   - Política de privacidade detalhada
   - Armazenamento de preferências do usuário
   - Respeito aos direitos do titular dos dados

## Instalação e Configuração

1. **Requisitos**:
   - Servidor web (Apache/Nginx)
   - PHP 7.4 ou superior
   - MySQL 5.7 ou superior

2. **Configuração do Banco de Dados**:
   - Criar banco de dados `acioli_climatizacao`
   - Executar o script `includes/schema.sql`
   - Configurar credenciais em `includes/db.php`

3. **Configuração das Imagens**:
   - Adicionar logo e imagens dos serviços na pasta `images/`

4. **Acesso**:
   - Acessar `index.php` para visualizar o site
   - Acessar `login.php` para área administrativa

## Segurança

> **Importante**: As credenciais padrão (admin/admin123) devem ser alteradas em ambiente de produção. A implementação atual é para demonstração e não inclui recursos avançados de segurança.

## Conformidade com LGPD

O site agora está em conformidade com a Lei Geral de Proteção de Dados (LGPD):
- Implementação de banner de consentimento de cookies
- Página de política de privacidade detalhada
- Respeito aos direitos do titular dos dados
- Uso de localStorage para armazenar preferências de cookies

## Suporte

Para dúvidas ou problemas com a implementação, consulte os arquivos de documentação:
- [PHP-GUIA.md](PHP-GUIA.md)
- [ADMIN-GUIA.md](ADMIN-GUIA.md)
- [GUIA-COMPLETO.md](GUIA-COMPLETO.md)