<?php
require_once 'includes/header.php';
require_once 'includes/footer.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Política de Privacidade - Acioli Climatização</title>
    <meta name="description" content="Política de privacidade e uso de cookies da Acioli Climatização em conformidade com a LGPD.">
    
    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Fonte dos ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Accessibility CSS -->
    <link rel="stylesheet" href="css/accessibility.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .fa-icon {
            width: 1.5rem;
            height: 1.5rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body class="min-h-screen bg-white font-sans antialiased">
    <div class="relative flex min-h-screen flex-col">
        <?php renderHeader(); ?>
        
        <main class="flex-1">
            <!-- seção de banner -->
            <section class="w-full py-12 md:py-24 bg-gradient-to-b from-sky-50 to-white">
                <div class="container px-4 md:px-6 mx-auto">
                    <div class="max-w-3xl mx-auto text-center">
                        <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-sky-700">
                            Política de Privacidade
                        </h1>
                        <p class="mt-4 text-gray-500 md:text-xl">
                            Conformidade com a Lei Geral de Proteção de Dados (LGPD)
                        </p>
                    </div>
                </div>
            </section>

            <!-- Conteúdo da Política de Privacidade -->
            <section class="w-full py-12 md:py-24 bg-white">
                <div class="container px-4 md:px-6 mx-auto">
                    <div class="max-w-4xl mx-auto prose prose-sky">
                        <div class="bg-sky-50 p-6 rounded-lg mb-8">
                            <p class="text-gray-700">
                                A Acioli Climatização respeita a privacidade dos seus clientes e usuários do site. Esta Política de Privacidade descreve como coletamos, usamos, armazenamos e protegemos as suas informações pessoais em conformidade com a Lei Geral de Proteção de Dados (LGPD - Lei nº 13.709/2018).
                            </p>
                        </div>

                        <div class="space-y-8">
                            <div>
                                <h2 class="text-2xl font-bold text-sky-700 mb-4">1. Informações Coletadas</h2>
                                <p class="text-gray-600 mb-3">
                                    Coletamos informações pessoais fornecidas diretamente por você quando:
                                </p>
                                <ul class="list-disc pl-6 text-gray-600 space-y-2">
                                    <li>Preenche formulários de contato ou orçamento em nosso site</li>
                                    <li>Interage conosco por telefone, e-mail ou outros canais de comunicação</li>
                                    <li>Navega em nosso site (através de cookies e tecnologias similares)</li>
                                </ul>
                            </div>

                            <div>
                                <h2 class="text-2xl font-bold text-sky-700 mb-4">2. Uso de Cookies</h2>
                                <p class="text-gray-600 mb-3">
                                    Nosso site utiliza cookies para melhorar a experiência do usuário. Cookies são pequenos arquivos de texto armazenados no seu dispositivo que nos ajudam a:
                                </p>
                                <ul class="list-disc pl-6 text-gray-600 space-y-2">
                                    <li>Reconhecer seu dispositivo em visitas repetidas</li>
                                    <li>Lembrar suas preferências de navegação</li>
                                    <li>Analisar o tráfego e padrões de uso do site</li>
                                    <li>Melhorar o desempenho e a funcionalidade do site</li>
                                </ul>
                                
                                <div class="mt-4 p-4 bg-gray-100 rounded">
                                    <h3 class="font-bold text-gray-800 mb-2">Tipos de Cookies Utilizados:</h3>
                                    <ul class="list-disc pl-6 text-gray-600 space-y-1">
                                        <li><strong>Cookies Necessários:</strong> Essenciais para o funcionamento do site</li>
                                        <li><strong>Cookies de Preferência:</strong> Lembram suas escolhas (como idioma)</li>
                                        <li><strong>Cookies de Análise:</strong> Coletam informações sobre como você utiliza o site</li>
                                    </ul>
                                </div>
                                
                                <p class="text-gray-600 mt-3">
                                    Você pode gerenciar ou desativar os cookies nas configurações do seu navegador, mas isso pode afetar a funcionalidade do site.
                                </p>
                            </div>

                            <div>
                                <h2 class="text-2xl font-bold text-sky-700 mb-4">3. Finalidade do Tratamento</h2>
                                <p class="text-gray-600 mb-3">
                                    As informações coletadas são utilizadas para:
                                </p>
                                <ul class="list-disc pl-6 text-gray-600 space-y-2">
                                    <li>Fornecer e melhorar nossos serviços</li>
                                    <li>Processar solicitações de orçamento e atendimento</li>
                                    <li>Entrar em contato com você sobre nossos serviços</li>
                                    <li>Personalizar sua experiência no site</li>
                                    <li>Cumprir obrigações legais e regulatórias</li>
                                </ul>
                            </div>

                            <div>
                                <h2 class="text-2xl font-bold text-sky-700 mb-4">4. Compartilhamento de Informações</h2>
                                <p class="text-gray-600">
                                    Não vendemos, alugamos ou compartilhamos suas informações pessoais com terceiros, exceto quando necessário para:
                                </p>
                                <ul class="list-disc pl-6 text-gray-600 space-y-2 mt-3">
                                    <li>Prestação dos serviços solicitados</li>
                                    <li>Cumprimento de obrigações legais</li>
                                    <li>Proteção de direitos da Acioli Climatização</li>
                                </ul>
                            </div>

                            <div>
                                <h2 class="text-2xl font-bold text-sky-700 mb-4">5. Direitos do Titular</h2>
                                <p class="text-gray-600 mb-3">
                                    De acordo com a LGPD, você tem os seguintes direitos:
                                </p>
                                <ul class="list-disc pl-6 text-gray-600 space-y-2">
                                    <li>Confirmar a existência de tratamento de seus dados</li>
                                    <li>Acessar seus dados pessoais</li>
                                    <li>Corrigir dados incompletos, inexatos ou desatualizados</li>
                                    <li>Eliminar dados pessoais tratados com seu consentimento</li>
                                    <li>Revogar seu consentimento a qualquer momento</li>
                                    <li>Portabilidade dos dados a outro fornecedor de serviço</li>
                                    <li>Informar sobre entidades públicas e privadas com as quais compartilhamos dados</li>
                                    <li>Eliminar dados pessoais tratados com seu consentimento</li>
                                    <li>Obter a revisão de decisões tomadas unicamente com base em automação</li>
                                </ul>
                            </div>

                            <div>
                                <h2 class="text-2xl font-bold text-sky-700 mb-4">6. Segurança dos Dados</h2>
                                <p class="text-gray-600">
                                    Adotamos medidas de segurança técnicas e administrativas para proteger suas informações pessoais contra acesso não autorizado, alteração, divulgação ou destruição.
                                </p>
                            </div>

                            <div>
                                <h2 class="text-2xl font-bold text-sky-700 mb-4">7. Retenção de Dados</h2>
                                <p class="text-gray-600">
                                    Mantemos suas informações pessoais apenas pelo tempo necessário para cumprir as finalidades descritas nesta política, salvo quando um período de retenção mais longo for exigido por lei.
                                </p>
                            </div>

                            <div>
                                <h2 class="text-2xl font-bold text-sky-700 mb-4">8. Alterações nesta Política</h2>
                                <p class="text-gray-600">
                                    Podemos atualizar esta Política de Privacidade periodicamente. As alterações serão publicadas nesta página com a data de revisão atualizada.
                                </p>
                            </div>

                            <div>
                                <h2 class="text-2xl font-bold text-sky-700 mb-4">9. Contato</h2>
                                <p class="text-gray-600 mb-3">
                                    Se você tiver dúvidas sobre esta Política de Privacidade ou quiser exercer seus direitos, entre em contato conosco:
                                </p>
                                <div class="bg-gray-50 p-4 rounded">
                                    <p class="text-gray-700">
                                        <i class="fas fa-envelope mr-2 text-sky-600"></i>
                                        <strong>E-mail:</strong> jarbasf.acioli@gmail.com
                                    </p>
                                    <p class="text-gray-700 mt-2">
                                        <i class="fas fa-phone mr-2 text-sky-600"></i>
                                        <strong>Telefone:</strong> (81) 99753-4160
                                    </p>
                                    <p class="text-gray-700 mt-2">
                                        <i class="fas fa-map-marker-alt mr-2 text-sky-600"></i>
                                        <strong>Endereço:</strong> Rua Tuparetama, 210 loja B
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <?php renderFooter(); ?>
    </div>
    
    <!-- Accessibility JavaScript -->
    <script src="js/accessibility.js"></script>
</body>
</html>