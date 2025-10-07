<?php
session_start();
require_once 'includes/db.php';
require_once 'includes/header.php';
require_once 'includes/footer.php';

// Checagem de login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit();
}

// Logout
if (isset($_GET['logout'])) {
    // Desmarcar todas as variáveis de sessão
    $_SESSION = array();
    
    // Destroi a sessão
    session_destroy();
    
    // Redireciona o usuário para a página de login
    header("Location: login.php");
    exit();
}

// Buscar todas as Solicitações de contato
try {
    $stmt = $pdo->query("SELECT * FROM contact_submissions ORDER BY created_at DESC");
    $submissions = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    $error = "Erro ao buscar solicitações: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo - Acioli Climatização</title>
    <meta name="description" content="Painel administrativo da Acioli Climatização">
    
    <!-- TailwindCSS -->
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
        .whatsapp-btn {
            transition: all 0.2s ease;
        }
        .whatsapp-btn:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body class="min-h-screen bg-white font-sans antialiased">
    <div class="relative flex min-h-screen flex-col">
        <!-- Cabeçalho personalizado para o painel de administração -->
        <header class="sticky top-0 z-50 w-full border-b bg-white h-16 select-none">
            <div class="container relative flex items-center justify-between h-full px-4 md:px-6">
                <div class="flex items-center">
                    <div class="bg-sky-100 p-2 rounded-lg">
                        <i class="fas fa-user-shield text-sky-600"></i>
                    </div>
                    <span class="ml-3 text-xl font-bold text-sky-700">Painel Administrativo</span>
                </div>
                
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600 hidden md:inline">Bem-vindo, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</span>
                    <a href="?logout=1" class="flex items-center text-sm text-red-600 hover:text-red-800">
                        <i class="fas fa-sign-out-alt mr-1"></i>Sair
                    </a>
                </div>
            </div>
        </header>
        
        <main class="flex-1">
            <!-- Seção de Destaque -->
            <section class="w-full py-8 md:py-12 bg-gradient-to-b from-sky-50 to-white">
                <div class="container px-4 md:px-6 mx-auto">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div>
                            <h1 class="text-2xl font-bold tracking-tighter text-sky-700">
                                Solicitações de Contato
                            </h1>
                            <p class="mt-2 text-gray-500">
                                Visualize todas as solicitações enviadas pelos clientes
                            </p>
                        </div>
                        <div class="mt-4 md:mt-0">
                            <p class="text-sm text-gray-500">
                                Total de solicitações: <span class="font-bold"><?php echo isset($submissions) ? count($submissions) : 0; ?></span>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Tabela de Solicitações -->
            <section class="w-full py-8 md:py-12 bg-white">
                <div class="container px-4 md:px-6 mx-auto">
                    <?php if (isset($error)): ?>
                        <div class="bg-red-50 text-red-700 p-4 rounded-lg mb-6">
                            <i class="fas fa-exclamation-circle mr-2"></i><?php echo $error; ?>
                        </div>
                    <?php elseif (isset($submissions) && count($submissions) > 0): ?>
                        <div class="overflow-x-auto rounded-lg border border-gray-200">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Serviço</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Telefone</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Data</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Observação</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <?php foreach ($submissions as $submission): ?>
                                        <?php
                                        // Criar mensagem do WhatsApp
                                        $customerName = htmlspecialchars($submission['name']);
                                        $service = htmlspecialchars($submission['service']);
                                        $customerPhone = htmlspecialchars($submission['phone']);
                                        
                                        // Remover espaços, parênteses e hífen do número
                                        $cleanPhone = preg_replace('/[^0-9]/', '', $customerPhone);
                                        
                                        // Adicionar código do país se não estiver presente (supondo números brasileiros)
                                        if (strlen($cleanPhone) == 10 || strlen($cleanPhone) == 11) {
                                            // Assumindo números brasileiros, adicione o código do país 55
                                            $cleanPhone = '55' . $cleanPhone;
                                        }
                                        
                                        // Formatar a mensagem
                                        $message = "Olá {$customerName}, vi que você solicitou {$service}";
                                        $whatsappUrl = "https://wa.me/{$cleanPhone}?text=" . urlencode($message);
                                        ?>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo htmlspecialchars($submission['id']); ?></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?php echo htmlspecialchars($submission['name']); ?></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-sky-100 text-sky-800">
                                                    <?php echo htmlspecialchars($submission['service']); ?>
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo htmlspecialchars($submission['phone']); ?></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <?php echo date('d/m/Y H:i', strtotime($submission['created_at'])); ?>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500 max-w-xs">
                                                <?php echo !empty($submission['observation']) ? htmlspecialchars($submission['observation']) : '-'; ?>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <a href="<?php echo $whatsappUrl; ?>" target="_blank" class="whatsapp-btn text-green-600 hover:text-green-800" title="Enviar mensagem via WhatsApp">
                                                    <i class="fab fa-whatsapp text-2xl"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php else: ?>
                        <div class="text-center py-12">
                            <i class="fas fa-inbox text-gray-300 text-4xl mb-4"></i>
                            <h3 class="text-lg font-medium text-gray-900 mb-1">Nenhuma solicitação encontrada</h3>
                            <p class="text-gray-500">Ainda não há solicitações de contato.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        </main>
        
        <?php renderFooter(); ?>
    </div>
</body>
</html>