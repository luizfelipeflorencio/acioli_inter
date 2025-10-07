<?php
session_start();
require_once 'includes/db.php';

// Initialize variables
$username = $password = "";
$usernameErr = $passwordErr = "";
$loginError = "";

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username
    if (empty($_POST["username"])) {
        $usernameErr = "Usuário é obrigatório";
    } else {
        $username = test_input($_POST["username"]);
    }
    
    // Validate password
    if (empty($_POST["password"])) {
        $passwordErr = "Senha é obrigatória";
    } else {
        $password = test_input($_POST["password"]);
    }
    
    // If no errors, check credentials
    if (empty($usernameErr) && empty($passwordErr)) {
        // For simplicity, we're using hardcoded credentials
        // In a real application, you would check against a database
        if ($username === "admin" && $password === "admin123") {
            // Set session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            
            // Redirect to admin panel
            header("Location: admin.php");
            exit();
        } else {
            $loginError = "Usuário ou senha inválidos";
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
    <title>Login - Acioli Climatização</title>
    <meta name="description" content="Área administrativa da Acioli Climatização">
    
    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Fonte dos icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-sky-50 to-white flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-xl shadow-lg p-8">
            <div class="text-center mb-8">
                <div class="mx-auto flex justify-center">
                    <div class="bg-sky-100 p-3 rounded-full">
                        <i class="fas fa-lock text-sky-600 text-2xl"></i>
                    </div>
                </div>
                <h1 class="text-2xl font-bold text-sky-700 mt-4">Área Administrativa</h1>
                <p class="text-gray-500 mt-2">Entre com suas credenciais para acessar</p>
            </div>
            
            <?php if (!empty($loginError)): ?>
            <div class="bg-red-50 text-red-700 p-3 rounded-lg mb-6 text-center">
                <i class="fas fa-exclamation-circle mr-2"></i><?php echo $loginError; ?>
            </div>
            <?php endif; ?>
            
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="space-y-6">
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Usuário</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-user text-gray-400"></i>
                        </div>
                        <input 
                            type="text" 
                            id="username" 
                            name="username" 
                            placeholder="Digite seu usuário" 
                            value="<?php echo $username; ?>"
                            required
                            class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500 <?php echo (!empty($usernameErr)) ? 'border-red-500' : ''; ?>">
                    </div>
                    <?php if (!empty($usernameErr)): ?>
                        <p class="text-red-500 text-xs mt-1"><?php echo $usernameErr; ?></p>
                    <?php endif; ?>
                </div>
                
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Senha</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            placeholder="Digite sua senha" 
                            required
                            class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500 <?php echo (!empty($passwordErr)) ? 'border-red-500' : ''; ?>">
                    </div>
                    <?php if (!empty($passwordErr)): ?>
                        <p class="text-red-500 text-xs mt-1"><?php echo $passwordErr; ?></p>
                    <?php endif; ?>
                </div>
                
                <div>
                    <button type="submit" class="w-full bg-sky-600 text-white py-2 px-4 rounded-lg hover:bg-sky-700 focus:ring-2 focus:ring-sky-500 focus:ring-offset-2 transition duration-300">
                        <i class="fas fa-sign-in-alt mr-2"></i>Entrar
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>