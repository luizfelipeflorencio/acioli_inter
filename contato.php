<?php
require_once 'includes/header.php';
require_once 'includes/footer.php';
require_once 'includes/db.php';

// Initialize variables
$name = $service = $phone = $observation = "";
$nameErr = $serviceErr = $phoneErr = "";
$formSubmitted = false;

// Check if we're redirecting after a successful submission
if (isset($_GET['success']) && $_GET['success'] == '1') {
    $formSubmitted = true;
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty($_POST["name"])) {
        $nameErr = "Nome é obrigatório";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Apenas letras e espaços são permitidos";
        }
    }
    
    // Validate service
    if (empty($_POST["service"])) {
        $serviceErr = "Serviço é obrigatório";
    } else {
        $service = test_input($_POST["service"]);
    }
    
    // Validate phone
    if (empty($_POST["phone"])) {
        $phoneErr = "Telefone é obrigatório";
    } else {
        $phone = test_input($_POST["phone"]);
    }
    
    // Observation is optional, so just sanitize it
    $observation = test_input($_POST["observation"]);
    
    // If no errors, insert into database
    if (empty($nameErr) && empty($serviceErr) && empty($phoneErr)) {
        try {
            $stmt = $pdo->prepare("INSERT INTO contact_submissions (name, service, phone, observation) VALUES (?, ?, ?, ?)");
            $stmt->execute([$name, $service, $phone, $observation]);
            
            // Redirect to prevent form resubmission on refresh
            header("Location: contato.php?success=1");
            exit();
        } catch(PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Acioli Climatização</title>
    <meta name="description" content="Entre em contato conosco para solicitar orçamentos e serviços de ar condicionado.">
    
    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Fonte icons -->
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
    </style>
</head>
<body class="min-h-screen bg-white font-sans antialiased">
    <div class="relative flex min-h-screen flex-col">
        <?php renderHeader(); ?>
        
        <main class="flex-1">
            <!-- Hero Section -->
            <section class="w-full py-12 md:py-24 bg-gradient-to-b from-sky-50 to-white">
                <div class="container px-4 md:px-6 mx-auto text-center">
                    <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-sky-700">
                        Entre em Contato
                    </h1>
                    <p class="mt-4 max-w-[700px] mx-auto text-gray-500 md:text-xl">
                        Estamos prontos para atender suas necessidades de ar condicionado
                    </p>
                </div>
            </section>

            <!-- Mensagem de Sucesso -->
            <?php if ($formSubmitted): ?>
            <section class="w-full py-6 bg-green-100 border-b border-green-200">
                <div class="container px-4 md:px-6 mx-auto">
                    <div class="max-w-4xl mx-auto text-center">
                        <p class="text-green-700 font-medium">
                            <i class="fas fa-check-circle mr-2"></i>
                            Mensagem enviada com sucesso! Entraremos em contato em breve.
                        </p>
                    </div>
                </div>
            </section>
            <?php endif; ?>

            <!-- Contato -->
            <section class="w-full py-12 md:py-24 bg-white">
                <div class="container px-4 md:px-6 mx-auto">
                    <div class="max-w-6xl mx-auto">
                        <div class="flex flex-col items-center justify-center space-y-8 text-center">
                            <div class="grid md:grid-cols-2 gap-8 w-full">
                                <!-- Contato Informações -->
                                <div class="space-y-6">
                                    <h3 class="text-xl font-bold text-sky-700 mb-4 text-center">Informações de Contato</h3>
                                    <div class="space-y-6 bg-sky-50 p-6 rounded-lg shadow-sm">
                                        <div class="flex items-start">
                                            <i class="fas fa-phone-alt fa-icon text-sky-600 flex-shrink-0 mr-4 mt-1"></i>
                                            <div>
                                                <h3 class="font-bold">Telefone</h3>
                                                <p class="text-gray-500">(81) 99753-4160</p>
                                                <p class="text-gray-500">(81) 98755-5202</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <i class="fas fa-envelope fa-icon text-sky-600 flex-shrink-0 mr-4 mt-1"></i>
                                            <div>
                                                <h3 class="font-bold">E-mail</h3>
                                                <p class="text-gray-500">jarbasf.acioli@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <i class="fas fa-map-marker-alt fa-icon text-sky-600 flex-shrink-0 mr-4 mt-1"></i>
                                            <div>
                                                <h3 class="font-bold">Endereço</h3>
                                                <p class="text-gray-500">Rua tuparetama 210 loja B</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Card de Atendimento -->
                                <div class="flex flex-col h-full">
                                    <h3 class="text-xl font-bold text-sky-700 mb-4 text-center">Horário de Atendimento</h3>
                                    <div class="bg-sky-50 p-6 rounded-lg shadow-sm flex-grow flex flex-col">
                                        <div class="space-y-4 flex-grow">
                                            <div class="flex justify-between items-center pb-2 border-b border-sky-100">
                                                <span class="font-medium">Segunda-feira</span>
                                                <span class="text-gray-500">08:00 - 18:00</span>
                                            </div>
                                            <div class="flex justify-between items-center pb-2 border-b border-sky-100">
                                                <span class="font-medium">Terça-feira</span>
                                                <span class="text-gray-500">08:00 - 18:00</span>
                                            </div>
                                            <div class="flex justify-between items-center pb-2 border-b border-sky-100">
                                                <span class="font-medium">Quarta-feira</span>
                                                <span class="text-gray-500">08:00 - 18:00</span>
                                            </div>
                                            <div class="flex justify-between items-center pb-2 border-b border-sky-100">
                                                <span class="font-medium">Quinta-feira</span>
                                                <span class="text-gray-500">08:00 - 18:00</span>
                                            </div>
                                            <div class="flex justify-between items-center pb-2 border-b border-sky-100">
                                                <span class="font-medium">Sexta-feira</span>
                                                <span class="text-gray-500">08:00 - 18:00</span>
                                            </div>
                                            <div class="flex justify-between items-center pb-2 border-b border-sky-100">
                                                <span class="font-medium">Sábado</span>
                                                <span class="text-gray-500">08:00 - 12:00</span>
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <span class="font-medium">Domingo</span>
                                                <span class="text-gray-500">Fechado</span>
                                            </div>
                                        </div>
                                        <div class="mt-6 text-center pt-4">
                                            <p class="text-gray-600 font-medium">Agende seu atendimento!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contato Formulário -->
            <section class="w-full py-12 md:py-24 bg-white">
                <div class="container px-4 md:px-6 mx-auto">
                    <div class="max-w-4xl mx-auto">
                        <div class="flex flex-col items-center justify-center space-y-8 text-center mb-12">
                            <div>
                                <h2 class="text-2xl font-bold tracking-tighter text-sky-700 mb-4">Solicite um Orçamento</h2>
                                <p class="text-gray-500 max-w-xl mx-auto">
                                    Preencha o formulário abaixo e entraremos em contato o mais breve possível.
                                </p>
                            </div>
                        </div>
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="space-y-6 bg-sky-50 p-8 rounded-lg shadow-sm">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label for="name" class="text-sky-700 block text-sm font-medium">Nome *</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-user text-gray-400"></i>
                                        </div>
                                        <input 
                                            type="text" 
                                            id="name" 
                                            name="name" 
                                            placeholder="Seu nome completo" 
                                            value="<?php echo $name; ?>"
                                            required
                                            class="flex h-9 w-full rounded-md border border-input bg-transparent pl-10 px-3 py-1 text-sm shadow-xs transition-colors file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 border-sky-200 focus-visible:ring-sky-500 w-full <?php echo (!empty($nameErr)) ? 'border-red-500' : ''; ?>">
                                    </div>
                                    <?php if (!empty($nameErr)): ?>
                                        <p class="text-red-500 text-xs mt-1"><?php echo $nameErr; ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="space-y-2">
                                    <label for="phone" class="text-sky-700 block text-sm font-medium">Telefone *</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-phone text-gray-400"></i>
                                        </div>
                                        <input 
                                            type="text" 
                                            id="phone" 
                                            name="phone" 
                                            placeholder="(00) 00000-0000" 
                                            value="<?php echo $phone; ?>"
                                            required
                                            class="flex h-9 w-full rounded-md border border-input bg-transparent pl-10 px-3 py-1 text-sm shadow-xs transition-colors file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 border-sky-200 focus-visible:ring-sky-500 w-full <?php echo (!empty($phoneErr)) ? 'border-red-500' : ''; ?>">
                                    </div>
                                    <?php if (!empty($phoneErr)): ?>
                                        <p class="text-red-500 text-xs mt-1"><?php echo $phoneErr; ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="space-y-2">
                                    <label for="service" class="text-sky-700 block text-sm font-medium">Serviço *</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-cog text-gray-400"></i>
                                        </div>
                                        <select 
                                            id="service" 
                                            name="service" 
                                            required
                                            class="flex h-9 w-full rounded-md border border-input bg-transparent pl-10 px-3 py-1 text-sm shadow-xs transition-colors file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 border-sky-200 focus-visible:ring-sky-500 w-full cursor-pointer <?php echo (!empty($serviceErr)) ? 'border-red-500' : ''; ?>">
                                            <option value="" disabled <?php echo empty($service) ? 'selected' : ''; ?>>Selecione o serviço</option>
                                            <option value="Instalação" <?php echo ($service == 'Instalação') ? 'selected' : ''; ?>>Instalação</option>
                                            <option value="Manutenção" <?php echo ($service == 'Manutenção') ? 'selected' : ''; ?>>Manutenção</option>
                                            <option value="Limpeza" <?php echo ($service == 'Limpeza') ? 'selected' : ''; ?>>Limpeza</option>
                                            <option value="Reparo" <?php echo ($service == 'Reparo') ? 'selected' : ''; ?>>Reparo</option>
                                            <option value="Diagnóstico" <?php echo ($service == 'Diagnóstico') ? 'selected' : ''; ?>>Diagnóstico</option>
                                            <option value="Outro" <?php echo ($service == 'Outro') ? 'selected' : ''; ?>>Outro</option>
                                        </select>
                                    </div>
                                    <?php if (!empty($serviceErr)): ?>
                                        <p class="text-red-500 text-xs mt-1"><?php echo $serviceErr; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label for="observation" class="text-sky-700 block text-sm font-medium">Observações</label>
                                <div class="relative">
                                    <div class="absolute top-3 left-3">
                                        <i class="fas fa-comment text-gray-400"></i>
                                    </div>
                                    <textarea 
                                        id="observation" 
                                        name="observation" 
                                        placeholder="Informe mais detalhes sobre a sua solicitação de serviço..." 
                                        class="flex min-h-[150px] w-full rounded-md border border-input bg-transparent pl-10 px-3 py-2 text-sm shadow-xs placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:cursor-not-allowed disabled:opacity-50 border-sky-200 focus-visible:ring-sky-500"><?php echo $observation; ?></textarea>
                                </div>
                            </div>
                            <button type="submit" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 h-10 px-6 py-2 w-full md:w-auto bg-sky-600 hover:bg-sky-700 text-white">
                                <i class="fas fa-paper-plane mr-2"></i> Enviar Solicitação
                            </button>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        
        <?php renderFooter(); ?>
    </div>
</body>
</html>