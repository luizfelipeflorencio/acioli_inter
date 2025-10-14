<?php
require_once 'includes/header.php';
require_once 'includes/footer.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - Acioli Climatização</title>
    <meta name="description" content="Conheça a história, missão, visão e valores da Acioli Climatização, especialista em instalação e manutenção de ar condicionado.">
    
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
        .team-icon {
            font-size: 2.5rem;
        }
    </style>
</head>
<body class="min-h-screen bg-white font-sans antialiased">
    <div class="relative flex min-h-screen flex-col">
        <?php renderHeader(); ?>
        
        <main class="flex-1">
            <!-- Seção de Banner -->
            <section class="w-full py-12 md:py-24 bg-gradient-to-b from-sky-50 to-white">
                <div class="container px-4 md:px-6 mx-auto text-center">
                    <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-sky-700">
                        Sobre a Acioli Climatização
                    </h1>
                    <p class="mt-4 max-w-[700px] mx-auto text-gray-500 md:text-xl">
                        Especialistas em soluções de climatização residencial e comercial com qualidade e confiança
                    </p>
                </div>
            </section>

            <!-- Historia -->
            <section class="w-full py-12 md:py-24 bg-white">
                <div class="container px-4 md:px-6 mx-auto">
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-12 items-center">
                        <div class="flex justify-center">
                            <img src="images/logo.jpg" alt="Nossa equipe trabalhando" width="550" height="550" class="rounded-lg object-cover" draggable="false" />
                        </div>
                        <div class="space-y-4">
                            <h2 class="text-3xl font-bold tracking-tighter text-sky-700">
                                Nossa História
                            </h2>
                            <p class="text-gray-500 md:text-lg">
                                A Acioli Climatização foi fundada com o objetivo de oferecer soluções de climatização de alta qualidade para residências e empresas. Desde o início, nosso compromisso tem sido com a excelência no atendimento e na execução dos serviços.
                            </p>
                            <p class="text-gray-500 md:text-lg">
                                Com anos de experiência no mercado, nos tornamos referência na instalação e manutenção de ar condicionado, atendendo clientes em todo o estado de Pernambuco. Nossa equipe é composta por técnicos especializados e certificados, sempre atualizados com as últimas tecnologias do setor.
                            </p>
                            <p class="text-gray-500 md:text-lg">
                                Ao longo dos anos, conquistamos a confiança de nossos clientes através de um trabalho pautado pela ética, profissionalismo e comprometimento com a satisfação do cliente.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Misssão, Visão, Valores -->
            <section class="w-full py-12 md:py-24 bg-sky-50">
                <div class="container px-4 md:px-6 mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold tracking-tighter text-sky-700">
                            Missão, Visão e Valores
                        </h2>
                        <p class="mt-4 max-w-[700px] mx-auto text-gray-500 md:text-xl">
                            Os princípios que guiam nosso trabalho e relacionamento com clientes
                        </p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Missão -->
                        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                            <div class="w-12 h-12 rounded-full bg-sky-100 flex items-center justify-center mb-4">
                                <i class="fas fa-bullseye text-sky-600"></i>
                            </div>
                            <h3 class="text-xl font-bold text-sky-700 mb-2">Missão</h3>
                            <p class="text-gray-500">
                                Oferecer soluções de climatização de excelência, com qualidade, segurança e eficiência, superando as expectativas dos nossos clientes e contribuindo para o seu conforto e bem-estar.
                            </p>
                        </div>
                        
                        <!-- Visão -->
                        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                            <div class="w-12 h-12 rounded-full bg-sky-100 flex items-center justify-center mb-4">
                                <i class="fas fa-eye text-sky-600"></i>
                            </div>
                            <h3 class="text-xl font-bold text-sky-700 mb-2">Visão</h3>
                            <p class="text-gray-500">
                                Ser reconhecida como referência em soluções de climatização no Nordeste, pela qualidade dos serviços prestados, inovação e compromisso com a satisfação do cliente.
                            </p>
                        </div>
                        
                        <!-- Valores -->
                        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                            <div class="w-12 h-12 rounded-full bg-sky-100 flex items-center justify-center mb-4">
                                <i class="fas fa-heart text-sky-600"></i>
                            </div>
                            <h3 class="text-xl font-bold text-sky-700 mb-2">Valores</h3>
                            <ul class="text-gray-500 space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle mr-2 h-5 w-5 text-sky-600 flex-shrink-0 mt-1"></i>
                                    <span>Comprometimento</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle mr-2 h-5 w-5 text-sky-600 flex-shrink-0 mt-1"></i>
                                    <span>Qualidade</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle mr-2 h-5 w-5 text-sky-600 flex-shrink-0 mt-1"></i>
                                    <span>Ética</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle mr-2 h-5 w-5 text-sky-600 flex-shrink-0 mt-1"></i>
                                    <span>Inovação</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Seção de Nossa Equipe -->
            <section class="w-full py-12 md:py-24 bg-white">
                <div class="container px-4 md:px-6 mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold tracking-tighter text-sky-700">
                            Nossa Equipe
                        </h2>
                        <p class="mt-4 max-w-[700px] mx-auto text-gray-500 md:text-xl">
                            Profissionais especializados e certificados prontos para atender você
                        </p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Equipe 1 -->
                        <div class="flex flex-col items-center text-center p-6 border rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-24 h-24 rounded-full bg-sky-100 flex items-center justify-center mb-4">
                                <i class="fas fa-user-tie text-sky-600 team-icon"></i>
                            </div>
                            <h3 class="text-xl font-bold text-sky-700">Jarbas Acioli</h3>
                            <p class="text-gray-500 mb-2">Fundador e Técnico Chefe</p>
                            <p class="text-gray-500 text-sm">
                                Com mais de 15 anos de experiência na área, lidera a equipe com expertise técnica e comprometimento com a qualidade.
                            </p>
                        </div>
                        
                        <!-- Equipe 2 -->
                        <div class="flex flex-col items-center text-center p-6 border rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-24 h-24 rounded-full bg-sky-100 flex items-center justify-center mb-4">
                                <i class="fas fa-users text-sky-600 team-icon"></i>
                            </div>
                            <h3 class="text-xl font-bold text-sky-700">Equipe Técnica</h3>
                            <p class="text-gray-500 mb-2">Técnicos Especializados</p>
                            <p class="text-gray-500 text-sm">
                                Profissionais certificados e treinados para oferecer o melhor serviço em instalação e manutenção.
                            </p>
                        </div>
                        
                        <!-- Equipe 3 -->
                        <div class="flex flex-col items-center text-center p-6 border rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-24 h-24 rounded-full bg-sky-100 flex items-center justify-center mb-4">
                                <i class="fas fa-headset text-sky-600 team-icon"></i>
                            </div>
                            <h3 class="text-xl font-bold text-sky-700">Atendimento</h3>
                            <p class="text-gray-500 mb-2">Suporte ao Cliente</p>
                            <p class="text-gray-500 text-sm">
                                Equipe dedicada a garantir o melhor atendimento e acompanhamento pós-venda para nossos clientes.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Seção de contato breve -->
            <section class="w-full py-12 md:py-24 bg-sky-700 text-white">
                <div class="container px-4 md:px-6 mx-auto">
                    <div class="flex flex-col items-center justify-center space-y-4 text-center">
                        <div class="space-y-2">
                            <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">
                                Conheça Nossos Serviços
                            </h2>
                            <p class="max-w-[900px] md:text-xl">
                                Oferecemos soluções completas para sua climatização
                            </p>
                        </div>
                        <div class="flex flex-col gap-2 min-[400px]:flex-row justify-center">
                            <a href="servicos.php" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-secondary text-secondary-foreground shadow-xs hover:bg-secondary/80 h-10 px-6 py-2 cursor-pointer border border-white bg-blue-600">
                                Ver Serviços
                            </a>
                            <a href="contato.php" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground h-10 px-6 py-2 border-white text-white bg-blue-600">
                                Entrar em Contato
                            </a>
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