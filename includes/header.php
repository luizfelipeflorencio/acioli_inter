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
            <img src="images/logo.jpg" alt="logo Acioli Climatização" class="w-10 h-10 object-contain rounded-xl" />
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
    
    <!-- Cookie Consent Banner for LGPD Compliance -->
    <div id="cookieConsent" class="fixed bottom-0 left-0 right-0 z-[100] bg-gray-800 text-white p-4 shadow-lg hidden">
      <div class="container mx-auto">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4">
          <div class="flex-1">
            <p class="text-sm">
              Este site utiliza cookies para melhorar a sua experiência de navegação. Ao continuar navegando, você concorda com o uso de cookies de acordo com a nossa <a href="privacidade.php" class="text-sky-300 hover:text-sky-200 underline">Política de Privacidade</a>.
            </p>
          </div>
          <div class="flex gap-2">
            <button id="acceptCookies" class="px-4 py-2 bg-sky-600 hover:bg-sky-700 text-white rounded-md text-sm font-medium transition-colors">
              Aceitar
            </button>
            <button id="rejectCookies" class="px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-md text-sm font-medium transition-colors">
              Rejeitar
            </button>
          </div>
        </div>
      </div>
    </div>
    
    <script>
      // Mobile menu toggle
      document.getElementById("mobile-menu-button").addEventListener("click", function() {
        const menu = document.getElementById("mobile-menu");
        menu.classList.toggle("hidden");
      });
      
      // Cookie Consent functionality
      document.addEventListener("DOMContentLoaded", function() {
        const cookieConsent = document.getElementById("cookieConsent");
        const acceptButton = document.getElementById("acceptCookies");
        const rejectButton = document.getElementById("rejectCookies");
        
        // Check if user has already made a choice
        const consentGiven = localStorage.getItem("cookieConsent");
        
        if (!consentGiven) {
          // Show the cookie consent banner
          cookieConsent.classList.remove("hidden");
        }
        
        // Accept cookies
        acceptButton.addEventListener("click", function() {
          localStorage.setItem("cookieConsent", "accepted");
          cookieConsent.classList.add("hidden");
        });
        
        // Reject cookies
        rejectButton.addEventListener("click", function() {
          localStorage.setItem("cookieConsent", "rejected");
          cookieConsent.classList.add("hidden");
        });
      });
    </script>';
}
?>