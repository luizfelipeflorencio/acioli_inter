<?php
// Cabeçalho
function renderHeader() {
    echo '
    <header class="sticky top-0 z-50 w-full border-b bg-white h-16 select-none">
      <!-- Navegação centralizada (fora do container) -->
      <nav class="hidden md:flex absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 gap-6 items-center z-20">
        <a href="index.php" class="text-sm font-medium text-gray-600 transition-colors hover:text-sky-600">Início</a>
        <a href="servicos.php" class="text-sm font-medium text-gray-600 transition-colors hover:text-sky-600">Serviços</a>
        <a href="sobre.php" class="text-sm font-medium text-gray-600 transition-colors hover:text-sky-600">Sobre Nós</a>
        <a href="contato.php" class="text-sm font-medium text-gray-600 transition-colors hover:text-sky-600">Contato</a>
      </nav>

      <!-- Container com logo e menu mobile -->
      <div class="container relative flex items-center justify-between h-full px-4 md:px-6">
        <!-- Logo -->
        <div class="flex items-center z-10">
          <a href="index.php" class="flex items-center space-x-2">
            <img src="logo.jpg" alt="logo Acioli Climatização" class="w-10 h-10 object-contain rounded-xl" />
            <span class="text-xl font-bold text-sky-700">Acioli Climatização</span>
          </a>
        </div>

        <!-- Menu Mobile -->
        <div class="flex justify-end items-center z-10 md:hidden">
          <button id="mobile-menu-button" class="h-10 w-10 rounded-md border border-input bg-background hover:bg-accent hover:text-accent-foreground">
            <i class="fas fa-bars h-5 w-5"></i>
            <span class="sr-only">Abrir menu</span>
          </button>
        </div>
      </div>
      
      <!-- Mobile menu (hidden by default) -->
      <div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 w-full bg-white border-b shadow-lg">
        <div class="flex flex-col space-y-4 p-4">
          <a href="index.php" class="text-lg font-medium text-gray-600 transition-colors hover:text-sky-600">Início</a>
          <a href="servicos.php" class="text-lg font-medium text-gray-600 transition-colors hover:text-sky-600">Serviços</a>
          <a href="sobre.php" class="text-lg font-medium text-gray-600 transition-colors hover:text-sky-600">Sobre Nós</a>
          <a href="contato.php" class="text-lg font-medium text-gray-600 transition-colors hover:text-sky-600">Contato</a>
        </div>
      </div>
    </header>
    
    <script>
      // Mobile menu toggle
      document.getElementById("mobile-menu-button").addEventListener("click", function() {
        const menu = document.getElementById("mobile-menu");
        menu.classList.toggle("hidden");
      });
    </script>';
}
?>