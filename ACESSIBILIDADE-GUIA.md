# Sistema de Acessibilidade Visual

Este documento explica como funciona o sistema de acessibilidade visual implementado no site da Acioli Climatização.

## Funcionalidades

O sistema oferece três principais recursos de acessibilidade:

### 1. Modos de Contraste
- **Normal**: Estilo padrão do site
- **Alto Contraste**: Cores com maior diferença de luminosidade para melhor legibilidade
- **Modo Escuro**: Fundo escuro com texto claro para reduzir fadiga visual

### 2. Tamanho da Fonte
- **A-**: Fonte menor (text-sm)
- **A**: Tamanho padrão (text-base)
- **A+**: Fonte maior (text-lg)
- **A++**: Fonte ainda maior (text-xl)
- **A+++**: Fonte muito grande (text-2xl)

### 3. Tons de Cor
- **Quente**: Filtros que aumentam tons quentes (vermelhos, amarelos)
- **Frio**: Filtros que aumentam tons frios (azuis, verdes)
- **Neutro**: Cores padrão sem filtros

## Como Funciona

### Estrutura de Arquivos
- `js/accessibility.js`: Contém toda a lógica do sistema de acessibilidade
- `css/accessibility.css`: Estilos para o painel de acessibilidade e modos especiais
- Integração no `includes/header.php`: Botão flutuante de acessibilidade

### Funcionamento Técnico
1. O sistema salva as preferências do usuário no `localStorage` do navegador
2. Ao carregar a página, as preferências são aplicadas automaticamente
3. As classes CSS são adicionadas/removidas dinamicamente ao elemento `<body>`
4. O painel de acessibilidade é criado dinamicamente via JavaScript

### Classes CSS Aplicadas
- **Contraste**: `contrast-normal`, `contrast-high-contrast`, `contrast-dark`
- **Tamanho da Fonte**: `text-sm`, `text-base`, `text-lg`, `text-xl`, `text-2xl`
- **Tons de Cor**: `tone-warm`, `tone-cool`, `tone-neutral`

## Integração com o Site

### Arquivos Modificados
- `includes/header.php`: Adicionado botão flutuante de acessibilidade
- `index.php`: Incluídos CSS e JS de acessibilidade
- `contato.php`: Incluídos CSS e JS de acessibilidade
- `servicos.php`: Incluídos CSS e JS de acessibilidade
- `sobre.php`: Incluídos CSS e JS de acessibilidade
- `privacidade.php`: Incluídos CSS e JS de acessibilidade

### Como Adicionar a Novas Páginas
1. Incluir o CSS no `<head>`:
```html
<link rel="stylesheet" href="css/accessibility.css">
```

2. Incluir o JavaScript antes do fechamento de `</body>`:
```html
<script src="js/accessibility.js"></script>
```

## Personalização

### Adicionar Novos Modos de Contraste
1. Adicione o nome do novo modo ao array `CONTRAST_MODES` em `accessibility.js`
2. Crie as classes CSS correspondentes em `accessibility.css`
3. Adicione o botão no HTML do painel de acessibilidade

### Adicionar Novos Tamanhos de Fonte
1. Adicione o nome da nova classe ao array `FONT_SIZES` em `accessibility.js`
2. Certifique-se de que a classe existe no TailwindCSS
3. Adicione o botão no HTML do painel de acessibilidade

## Testes

Para testar o sistema:
1. Abra qualquer página do site
2. Clique no botão de acessibilidade (♿) no canto inferior direito
3. Experimente as diferentes opções
4. Verifique se as mudanças persistem após recarregar a página

## Compatibilidade

O sistema é compatível com:
- Todos os navegadores modernos (Chrome, Firefox, Safari, Edge)
- Dispositivos móveis e desktop
- Leitores de tela (devido à semântica adequada)

## Manutenção

Para manter o sistema:
1. Mantenha os arquivos `accessibility.js` e `accessibility.css` atualizados
2. Verifique se as classes CSS estão consistentes com as definidas no JavaScript
3. Teste regularmente as funcionalidades após atualizações do site