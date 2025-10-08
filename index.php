<?php
require_once 'includes/header.php';
require_once 'includes/footer.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acioli - Instalação e Manutenção de Ar Condicionado</title>
    <meta name="description" content="Serviços profissionais de instalação e manutenção de ar condicionado para residências e empresas.">
    
    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Fonte dos Icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
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
        .service-icon {
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body class="min-h-screen bg-white font-sans antialiased">
    <div class="relative flex min-h-screen flex-col">
        <?php renderHeader(); ?>
        
        <main class="flex-1">
            <!-- Seção de Apresentação -->
            <section class="w-full py-12 md:py-24 lg:py-32 bg-gradient-to-b from-sky-50 to-white">
                <div class="container px-4 md:px-6 mx-auto">
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-12 items-center justify-center">
                        <div class="flex flex-col justify-center space-y-4 text-center lg:text-left">
                            <div class="space-y-2">
                                <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl lg:text-6xl text-sky-700">
                                    Instalação e Manutenção de Ar Condicionado
                                </h1>
                                <p class="max-w-[600px] text-gray-500 md:text-xl mx-auto lg:mx-0">
                                    Serviços profissionais de instalação, manutenção e reparo de ar condicionado para residências e empresas.
                                </p>
                            </div>
                            <div class="flex flex-col gap-2 min-[400px]:flex-row justify-center lg:justify-start">
                                <a href="contato.php" class="text-white inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 h-10 px-6 py-2 bg-sky-600 hover:bg-sky-700">
                                    Solicitar Orçamento
                                </a>
                                <a href="servicos.php" class="bg-sky-50 inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground h-10 px-6 py-2 border-sky-600 text-sky-600">
                                    Nossos Serviços
                                </a>
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <img src="images/logo.jpg" alt="Técnico instalando ar condicionado" width="550" height="550" class="rounded-lg object-cover" draggable="false" />
                        </div>
                    </div>
                </div>
            </section>

            <!-- Seção de Serviços -->
            <section class="w-full py-12 md:py-24 bg-white">
                <div class="container px-4 md:px-6 mx-auto">
                    <div class="flex flex-col items-center justify-center space-y-4 text-center">
                        <div class="space-y-2">
                            <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-sky-700">
                                Nossos Serviços
                            </h2>
                            <p class="max-w-[900px] text-gray-500 md:text-xl">
                                Oferecemos soluções completas para seu sistema de ar condicionado
                            </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12 justify-items-center">
                        <div class="flex flex-col items-center space-y-4 p-6 border rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 rounded-full bg-sky-100 flex items-center justify-center">
                                <i class="fas fa-wind text-sky-600 service-icon"></i>
                            </div>
                            <h3 class="text-xl font-bold text-sky-700">Instalação</h3>
                            <p class="text-gray-500 text-center">
                                Instalação profissional de ar condicionado residencial e comercial de todas as marcas.
                            </p>
                            <div class="mt-auto">
                                <a href="servicos.php#instalacao" class="text-sky-600 hover:underline inline-flex items-center">
                                    Saiba mais <i class="fas fa-arrow-right ml-1 h-4 w-4"></i>
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-col items-center space-y-4 p-6 border rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 rounded-full bg-sky-100 flex items-center justify-center">
                                <i class="fas fa-tools text-sky-600 service-icon"></i>
                            </div>
                            <h3 class="text-xl font-bold text-sky-700">Manutenção</h3>
                            <p class="text-gray-500 text-center">
                                Manutenção preventiva e corretiva para garantir o funcionamento eficiente do seu equipamento.
                            </p>
                            <div class="mt-auto">
                                <a href="servicos.php#manutencao" class="text-sky-600 hover:underline inline-flex items-center">
                                    Saiba mais <i class="fas fa-arrow-right ml-1 h-4 w-4"></i>
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-col items-center space-y-4 p-6 border rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 rounded-full bg-sky-100 flex items-center justify-center">
                                <i class="fas fa-search text-sky-600 service-icon"></i>
                            </div>
                            <h3 class="text-xl font-bold text-sky-700">Diagnóstico</h3>
                            <p class="text-gray-500 text-center">
                                Identificação precisa de problemas e soluções para seu sistema de ar condicionado.
                            </p>
                            <div class="mt-auto">
                                <a href="servicos.php#diagnostico" class="text-sky-600 hover:underline inline-flex items-center">
                                    Saiba mais <i class="fas fa-arrow-right ml-1 h-4 w-4"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Seção das Marcas -->
            <section class="w-full py-12 md:py-24 bg-sky-50">
                <div class="container px-4 md:px-6 mx-auto">
                    <div class="flex flex-col items-center justify-center space-y-4 text-center">
                        <div class="space-y-2">
                            <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl text-sky-700">
                                Marcas Credenciadas
                            </h2>
                            <p class="max-w-[900px] text-gray-500 md:text-xl">
                                Somos técnicos autorizados e credenciados pelas principais marcas do mercado
                            </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 justify-items-center mt-12">
                        <?php
                        $brands = [
                            ["name" => "GREE", "image" => "images/gree.png"],
                            ["name" => "Midea", "image" => "images/midea.png"],
                            ["name" => "Hitachi", "image" => "images/hitachi.png"],
                            ["name" => "TCL", "image" => "images/tcl.png"],
                            ["name" => "Samsung", "image" => "images/samsung.png"],
                            ["name" => "LG", "image" => "images/lg.png"]
                        ];
                        foreach ($brands as $brand) {
                            echo '
                            <div class="flex flex-col items-center justify-center p-4">
                                <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center shadow-sm">
                                    <img src="' . $brand['image'] . '" alt="' . $brand['name'] . '" class="max-w-[70%] max-h-[70%] object-contain" />
                                </div>
                                <span class="mt-2 text-sm text-gray-500">Autorizado</span>
                            </div>';
                        }
                        ?>
                    </div>
                </div>
            </section>

            <!-- Por Que Nos Escolher -->
            <section class="w-full py-12 md:py-24 bg-white">
                <div class="container px-4 md:px-6 mx-auto">
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-12 items-center justify-center">
                        <div class="flex justify-center">
                            <img src="images/duvida.png" alt="Técnico trabalhando em ar condicionado" width="550" height="550" class="rounded-lg object-cover" draggable="false" />
                        </div>
                        <div class="flex flex-col justify-center space-y-4 text-center md:text-left">
                            <div class="space-y-2">
                                <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl text-sky-700">
                                    Por que nos escolher?
                                </h2>
                                <p class="text-gray-500 md:text-xl">
                                    Oferecemos serviços de qualidade com profissionais experientes e certificados
                                </p>
                            </div>
                            <ul class="space-y-4">
                                <?php
                                $features = [
                                    "Técnicos certificados e experientes",
                                    "Atendimento rápido e eficiente",
                                    "Garantia em todos os serviços",
                                    "Peças originais de fábrica",
                                    "Preços competitivos",
                                    "Suporte pós-venda"
                                ];
                                foreach ($features as $feature) {
                                    echo '
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle mr-2 h-6 w-6 text-sky-600 flex-shrink-0 mt-1"></i>
                                        <span class="text-gray-600">' . $feature . '</span>
                                    </li>';
                                }
                                ?>
                            </ul>
                            <div class="flex flex-col gap-2 min-[400px]:flex-row pt-4 justify-center md:justify-start">
                                <a href="contato.php" class="text-white inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 h-10 px-6 py-2 bg-sky-600 hover:bg-sky-700">
                                    Entre em Contato
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Seção Contato Breve -->
            <section class="w-full py-12 md:py-24 bg-sky-700 text-white">
                <div class="container px-4 md:px-6 mx-auto">
                    <div class="flex flex-col items-center justify-center space-y-4 text-center">
                        <div class="space-y-2">
                            <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">
                                Precisa de serviços de ar condicionado?
                            </h2>
                            <p class="max-w-[900px] md:text-xl">
                                Entre em contato hoje mesmo para um orçamento gratuito
                            </p>
                        </div>
                        <div class="flex flex-col gap-2 min-[400px]:flex-row justify-center">
                            <a href="contato.php" class="border bg-blue-600 inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-secondary text-secondary-foreground shadow-xs hover:bg-secondary/80 h-10 px-6 py-2 cursor-pointer">
                                Solicitar Orçamento
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <?php renderFooter(); ?>
    </div>
</body>
</html>