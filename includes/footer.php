<?php
// Rodapé
function renderFooter() {
    echo '
    <footer class="w-full bg-gray-900 text-white select-none">
      <div class="container px-4 md:px-6 py-12 mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center md:text-left">

          <div>
            <div class="flex justify-center md:justify-start items-center mb-4">
              <i class="fas fa-wind text-sky-400 text-2xl"></i>
              <span class="ml-2 text-xl font-bold">Acioli Climatização</span>
            </div>
            <p class="text-gray-400 mb-4">Especialistas em climatização residencial e comercial, oferecendo soluções sob medida com qualidade e confiança.</p>
            <div class="flex justify-center md:justify-start space-x-4">
              <a href="https://www.instagram.com/acioliclimatizacao/" target="_blank" class="text-gray-400 hover:text-sky-400">
                <i class="fab fa-instagram h-5 w-5"></i>
                <span class="sr-only">Instagram</span>
              </a>
            </div>
          </div>

          <div>
            <h3 class="text-lg font-bold mb-4">Serviços</h3>
            <ul class="space-y-2">
              <li><a href="servicos.php#instalacao" class="text-gray-400 hover:text-sky-400">Instalação</a></li>
              <li><a href="servicos.php#manutencao" class="text-gray-400 hover:text-sky-400">Manutenção</a></li>
              <li><a href="servicos.php#limpeza" class="text-gray-400 hover:text-sky-400">Limpeza</a></li>
              <li><a href="servicos.php#reparo" class="text-gray-400 hover:text-sky-400">Reparo</a></li>
              <li><a href="servicos.php#diagnostico" class="text-gray-400 hover:text-sky-400">Diagnóstico</a></li>
            </ul>
          </div>

          <div>
            <h3 class="text-lg font-bold mb-4">Links Rápidos</h3>
            <ul class="space-y-2">
              <li><a href="index.php" class="text-gray-400 hover:text-sky-400">Início</a></li>
              <li><a href="servicos.php" class="text-gray-400 hover:text-sky-400">Serviços</a></li>
              <li><a href="sobre.php" class="text-gray-400 hover:text-sky-400">Sobre Nós</a></li>
              <li><a href="contato.php" class="text-gray-400 hover:text-sky-400">Contato</a></li>
            </ul>
          </div>

          <div>
            <h3 class="text-lg font-bold mb-4">Contato</h3>
            <ul class="space-y-4">
              <li class="flex justify-center md:justify-start items-start">
                <i class="fas fa-phone-alt mr-2 h-5 w-5 text-sky-400 flex-shrink-0 mt-1"></i>
                <span class="text-gray-400">(81) 99753-4160</span>
              </li>
              <li class="flex justify-center md:justify-start items-start">
                <i class="fas fa-envelope mr-2 h-5 w-5 text-sky-400 flex-shrink-0 mt-1"></i>
                <span class="text-gray-400">jarbasf.acioli@gmail.com</span>
              </li>
              <li class="flex justify-center md:justify-start items-start">
                <i class="fas fa-map-marker-alt mr-2 h-5 w-5 text-sky-400 flex-shrink-0 mt-1"></i>
                <span class="text-gray-400">Rua Tuparetama, 210 loja B</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
          <p>&copy; ' . date("Y") . ' Acioli Climatização. Todos os direitos reservados.</p>
        </div>
      </div>
    </footer>';
}
?>