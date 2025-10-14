<?php
require_once 'includes/header.php';
require_once 'includes/footer.php';

// Dados de Serviços
$servicos = [
    [
        "id" => "instalacao",
        "title" => "Instalação",
        "description" => "Instalação profissional de ar condicionado para residências e empresas.",
        "features" => [
            "Instalação de ar condicionado split",
            "Instalação de ar condicionado janela",
            "Instalação de ar condicionado cassete",
            "Instalação de ar condicionado piso-teto",
            "Instalação de ar condicionado multi-split",
            "Instalação de ar condicionado VRF/VRV"
        ],
        "image" => "./images/instalacao.png"
    ],
    [
        "id" => "manutencao",
        "title" => "Manutenção",
        "description" => "Manutenção preventiva e corretiva para garantir o funcionamento eficiente do seu equipamento.",
        "features" => [
            "Limpeza de filtros",
            "Verificação de gás refrigerante",
            "Limpeza de serpentinas",
            "Verificação de componentes elétricos",
            "Verificação de drenagem",
            "Verificação de ruídos e vibrações"
        ],
        "image" => "./images/manutencao.png"
    ],
    [
        "id" => "limpeza",
        "title" => "Limpeza",
        "description" => "Limpeza completa do seu ar condicionado para melhorar a qualidade do ar e a eficiência do equipamento.",
        "features" => [
            "Limpeza de filtros",
            "Limpeza de serpentinas",
            "Limpeza de turbinas",
            "Limpeza de bandejas",
            "Limpeza de gabinetes",
            "Aplicação de bactericida"
        ],
        "image" => "./images/limpeza.png"
    ],
    [
        "id" => "reparo",
        "title" => "Reparo",
        "description" => "Reparo de problemas em seu ar condicionado com rapidez e eficiência.",
        "features" => [
            "Reparo de vazamentos",
            "Reparo de componentes elétricos",
            "Reparo de compressores",
            "Reparo de placas eletrônicas",
            "Reparo de motores",
            "Substituição de peças"
        ],
        "image" => "./images/reparo.png"
    ],
    [
        "id" => "diagnostico",
        "title" => "Diagnóstico",
        "description" => "Identificação precisa de problemas em seu ar condicionado.",
        "features" => [
            "Diagnóstico de problemas elétricos",
            "Diagnóstico de problemas mecânicos",
            "Diagnóstico de vazamentos",
            "Diagnóstico de eficiência",
            "Diagnóstico de ruídos",
            "Diagnóstico de capacidade"
        ],
        "image" => "./images/diagnostico.png"
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços - Acioli Climatização</title>
    <meta name="description" content="Conheça todos os nossos serviços de instalação e manutenção de ar condicionado.">
    
    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Fonte de Icones -->
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
        .feature-icon {
            font-size: 1.25rem;
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
            <!-- Seção de serviços -->
            <section class="w-full py-12 md:py-24 bg-gradient-to-b from-sky-50 to-white">
                <div class="container px-4 md:px-6 mx-auto">
                    <div class="flex items-center justify-center text-center">
                        <div>
                            <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-sky-700">
                                Nossos Serviços
                            </h1>
                            <p class="mt-4 max-w-[700px] mx-auto text-gray-500 md:text-xl">
                                Oferecemos uma ampla gama de serviços para atender todas as suas necessidades de ar condicionado
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Detalhes dos serviços -->
            <section class="w-full py-12 md:py-24 bg-white">
                <div class="container px-4 md:px-6">
                    <div class="space-y-24">
                        <?php foreach ($servicos as $index => $servico): ?>
                            <div id="<?php echo $servico['id']; ?>" class="grid gap-6 lg:grid-cols-2 lg:gap-12 items-center <?php echo $index % 2 === 1 ? 'lg:flex-row-reverse' : ''; ?>">
                                <div class="flex justify-center">
                                    <?php if (file_exists($servico['image'])): ?>
                                        <img src="<?php echo $servico['image']; ?>" alt="<?php echo $servico['title']; ?>" width="600" height="400" class="rounded-lg object-cover" draggable="false" />
                                    <?php else: ?>
                                        <img src="images/logo.jpg" alt="<?php echo $servico['title']; ?>" width="600" height="400" class="rounded-lg object-cover" draggable="false" />
                                    <?php endif; ?>
                                </div>
                                <div class="flex flex-col justify-center items-center space-y-4 text-center">
                                    <h2 class="text-3xl font-bold tracking-tighter text-sky-700">
                                        <?php echo $servico['title']; ?>
                                    </h2>
                                    <p class="text-gray-500 md:text-lg"><?php echo $servico['description']; ?></p>
                                    <ul class="space-y-2 mt-4">
                                        <?php foreach ($servico['features'] as $feature): ?>
                                            <li class="flex items-center justify-start">
                                                <i class="fas fa-check-circle mr-2 h-5 w-5 text-sky-600 flex-shrink-0 feature-icon"></i>
                                                <span class="text-gray-600"><?php echo $feature; ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <div class="pt-4">
                                        <a href="contato.php" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 h-10 px-6 py-2 bg-sky-600 hover:bg-sky-700">
                                            Solicitar Orçamento
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <!-- Seção de contato breve -->
            <section class="w-full py-12 md:py-24 bg-sky-700 text-white">
                <div class="container px-4 md:px-6 mx-auto">
                    <div class="flex flex-col items-center justify-center space-y-4 text-center">
                        <div class="space-y-2">
                            <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">
                                Pronto para melhorar o seu conforto?
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
    
    <!-- Accessibility JavaScript -->
    <script src="js/accessibility.js"></script>
</body>
</html>