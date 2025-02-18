<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- Template Part: Novidades -->
<div class="bg-gradient-to-b from-[#F5F5F5] to-white py-20">
  <div class="container mx-auto px-4 py-12">
    <!-- Cabeçalho com título e navegação -->
    <div class="flex items-center justify-between mb-12">
      <h2 class="text-3xl text-center mx-auto font-bold text-[#2B2B2B] relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-20 after:h-1 after:bg-[#7ED957]">
        Novidades
      </h2>
      <!-- Botões de navegação customizados -->
      <!-- <div class="flex gap-4">
        <button class="swiper-button-prev-custom bg-white p-3 rounded-full shadow-md hover:bg-[#7ED957] hover:text-white transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
        <button class="swiper-button-next-custom bg-white p-3 rounded-full shadow-md hover:bg-[#7ED957] hover:text-white transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </button>
      </div> -->
    </div>

    <!-- Swiper Container -->
    <div class="swiper products-carousel overflow-visible">
      <div class="swiper-wrapper">
        <!-- Card Produto -->
        <div class="swiper-slide">
          <div class="bg-white rounded-2xl shadow-lg p-6 transition-all duration-300 transform group hover:scale-105 hover:shadow-xl relative">
            <!-- Badge de desconto -->
            <span class="absolute -z-0 top-4 left-4 bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full">
              -22%
            </span>
            
            <!-- Imagem do produto -->
            <div class="-z-10 relative overflow-hidden rounded-xl mb-6">
              <img src="https://picsum.photos/300/300" alt="Produto" class="w-full h-[200px] object-cover transition-transform duration-500 group-hover:scale-110">
              <!-- Overlay com botões rápidos -->
              <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center gap-4 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                <button class="bg-white p-2 rounded-full hover:bg-[#7ED957] hover:text-white transition">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                  </svg>
                </button>
                <button class="bg-white p-2 rounded-full hover:bg-[#7ED957] hover:text-white transition">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                  </svg>
                </button>
              </div>
            </div>

            <!-- Informações do produto -->
            <div class="space-y-3">
              <h3 class="text-lg font-semibold text-[#2B2B2B] line-clamp-2">Cama de Cachorro 100% Sustentável Dupla Face Eco</h3>
              
              <!-- Preços -->
              <div class="space-y-1">
                <p class="text-gray-400 line-through">R$ 269,90</p>
                <p class="text-[#FF7E1B] font-bold text-2xl">R$ 209,90</p>
                <p class="text-gray-600 text-sm">R$ 199,41 à vista com desconto</p>
                <p class="text-[#2B2B2B] text-sm">ou <span class="text-[#7ED957] font-bold">3x de R$ 69,97</span> sem juros</p>
              </div>

              <!-- Contador e botão de compra -->
              <div class="flex items-center justify-between gap-4 pt-4">
                <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
                  <button class="quantity-btn minus px-3 py-2 bg-gray-50 hover:bg-gray-100 transition">-</button>
                  <input type="number" class="quantity w-16 px-3 py-2 text-center border-x border-gray-300 focus:outline-none" value="1" min="1" max="99">
                  <button class="quantity-btn plus px-3 py-2 bg-gray-50 hover:bg-gray-100 transition">+</button>
                </div>
                <button class="flex-1 bg-[#417B5A] text-white px-6 py-3 rounded-full hover:bg-[#7ED957] transition-colors">
                  Comprar
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- Repita o bloco acima para cada produto -->
        <!-- Card Produto -->
        <div class="swiper-slide">
          <div class="bg-white rounded-2xl shadow-lg p-6 transition-all duration-300 transform group hover:scale-105 hover:shadow-xl relative">
            <!-- Badge de desconto -->
            <span class="absolute -z-0 top-4 left-4 bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full">
              -22%
            </span>
            
            <!-- Imagem do produto -->
            <div class="-z-10 relative overflow-hidden rounded-xl mb-6">
              <img src="https://picsum.photos/300/300" alt="Produto" class="w-full h-[200px] object-cover transition-transform duration-500 group-hover:scale-110">
              <!-- Overlay com botões rápidos -->
              <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center gap-4 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                <button class="bg-white p-2 rounded-full hover:bg-[#7ED957] hover:text-white transition">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                  </svg>
                </button>
                <button class="bg-white p-2 rounded-full hover:bg-[#7ED957] hover:text-white transition">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                  </svg>
                </button>
              </div>
            </div>

            <!-- Informações do produto -->
            <div class="space-y-3">
              <h3 class="text-lg font-semibold text-[#2B2B2B] line-clamp-2">Cama de Cachorro 100% Sustentável Dupla Face Eco</h3>
              
              <!-- Preços -->
              <div class="space-y-1">
                <p class="text-gray-400 line-through">R$ 269,90</p>
                <p class="text-[#FF7E1B] font-bold text-2xl">R$ 209,90</p>
                <p class="text-gray-600 text-sm">R$ 199,41 à vista com desconto</p>
                <p class="text-[#2B2B2B] text-sm">ou <span class="text-[#7ED957] font-bold">3x de R$ 69,97</span> sem juros</p>
              </div>

              <!-- Contador e botão de compra -->
              <div class="flex items-center justify-between gap-4 pt-4">
                <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
                  <button class="quantity-btn minus px-3 py-2 bg-gray-50 hover:bg-gray-100 transition">-</button>
                  <input type="number" class="quantity w-16 px-3 py-2 text-center border-x border-gray-300 focus:outline-none" value="1" min="1" max="99">
                  <button class="quantity-btn plus px-3 py-2 bg-gray-50 hover:bg-gray-100 transition">+</button>
                </div>
                <button class="flex-1 bg-[#417B5A] text-white px-6 py-3 rounded-full hover:bg-[#7ED957] transition-colors">
                  Comprar
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- Repita o bloco acima para cada produto -->
        <!-- Card Produto -->
        <div class="swiper-slide">
          <div class="bg-white rounded-2xl shadow-lg p-6 transition-all duration-300 transform group hover:scale-105 hover:shadow-xl relative">
            <!-- Badge de desconto -->
            <span class="absolute -z-0 top-4 left-4 bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full">
              -22%
            </span>
            
            <!-- Imagem do produto -->
            <div class="-z-10 relative overflow-hidden rounded-xl mb-6">
              <img src="https://picsum.photos/300/300" alt="Produto" class="w-full h-[200px] object-cover transition-transform duration-500 group-hover:scale-110">
              <!-- Overlay com botões rápidos -->
              <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center gap-4 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                <button class="bg-white p-2 rounded-full hover:bg-[#7ED957] hover:text-white transition">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                  </svg>
                </button>
                <button class="bg-white p-2 rounded-full hover:bg-[#7ED957] hover:text-white transition">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                  </svg>
                </button>
              </div>
            </div>

            <!-- Informações do produto -->
            <div class="space-y-3">
              <h3 class="text-lg font-semibold text-[#2B2B2B] line-clamp-2">Cama de Cachorro 100% Sustentável Dupla Face Eco</h3>
              
              <!-- Preços -->
              <div class="space-y-1">
                <p class="text-gray-400 line-through">R$ 269,90</p>
                <p class="text-[#FF7E1B] font-bold text-2xl">R$ 209,90</p>
                <p class="text-gray-600 text-sm">R$ 199,41 à vista com desconto</p>
                <p class="text-[#2B2B2B] text-sm">ou <span class="text-[#7ED957] font-bold">3x de R$ 69,97</span> sem juros</p>
              </div>

              <!-- Contador e botão de compra -->
              <div class="flex items-center justify-between gap-4 pt-4">
                <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
                  <button class="quantity-btn minus px-3 py-2 bg-gray-50 hover:bg-gray-100 transition">-</button>
                  <input type="number" class="quantity w-16 px-3 py-2 text-center border-x border-gray-300 focus:outline-none" value="1" min="1" max="99">
                  <button class="quantity-btn plus px-3 py-2 bg-gray-50 hover:bg-gray-100 transition">+</button>
                </div>
                <button class="flex-1 bg-[#417B5A] text-white px-6 py-3 rounded-full hover:bg-[#7ED957] transition-colors">
                  Comprar
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- Repita o bloco acima para cada produto -->
        <!-- Card Produto -->
        <div class="swiper-slide">
          <div class="bg-white rounded-2xl shadow-lg p-6 transition-all duration-300 transform group hover:scale-105 hover:shadow-xl relative">
            <!-- Badge de desconto -->
            <span class="absolute -z-0 top-4 left-4 bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full">
              -22%
            </span>
            
            <!-- Imagem do produto -->
            <div class="-z-10 relative overflow-hidden rounded-xl mb-6">
              <img src="https://picsum.photos/300/300" alt="Produto" class="w-full h-[200px] object-cover transition-transform duration-500 group-hover:scale-110">
              <!-- Overlay com botões rápidos -->
              <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center gap-4 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                <button class="bg-white p-2 rounded-full hover:bg-[#7ED957] hover:text-white transition">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                  </svg>
                </button>
                <button class="bg-white p-2 rounded-full hover:bg-[#7ED957] hover:text-white transition">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                  </svg>
                </button>
              </div>
            </div>

            <!-- Informações do produto -->
            <div class="space-y-3">
              <h3 class="text-lg font-semibold text-[#2B2B2B] line-clamp-2">Cama de Cachorro 100% Sustentável Dupla Face Eco</h3>
              
              <!-- Preços -->
              <div class="space-y-1">
                <p class="text-gray-400 line-through">R$ 269,90</p>
                <p class="text-[#FF7E1B] font-bold text-2xl">R$ 209,90</p>
                <p class="text-gray-600 text-sm">R$ 199,41 à vista com desconto</p>
                <p class="text-[#2B2B2B] text-sm">ou <span class="text-[#7ED957] font-bold">3x de R$ 69,97</span> sem juros</p>
              </div>

              <!-- Contador e botão de compra -->
              <div class="flex items-center justify-between gap-4 pt-4">
                <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
                  <button class="quantity-btn minus px-3 py-2 bg-gray-50 hover:bg-gray-100 transition">-</button>
                  <input type="number" class="quantity w-16 px-3 py-2 text-center border-x border-gray-300 focus:outline-none" value="1" min="1" max="99">
                  <button class="quantity-btn plus px-3 py-2 bg-gray-50 hover:bg-gray-100 transition">+</button>
                </div>
                <button class="flex-1 bg-[#417B5A] text-white px-6 py-3 rounded-full hover:bg-[#7ED957] transition-colors">
                  Comprar
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- Repita o bloco acima para cada produto -->
        <!-- Card Produto -->
        <div class="swiper-slide">
          <div class="bg-white rounded-2xl shadow-lg p-6 transition-all duration-300 transform group hover:scale-105 hover:shadow-xl relative">
            <!-- Badge de desconto -->
            <span class="absolute -z-0 top-4 left-4 bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full">
              -22%
            </span>
            
            <!-- Imagem do produto -->
            <div class="-z-10 relative overflow-hidden rounded-xl mb-6">
              <img src="https://picsum.photos/300/300" alt="Produto" class="w-full h-[200px] object-cover transition-transform duration-500 group-hover:scale-110">
              <!-- Overlay com botões rápidos -->
              <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center gap-4 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                <button class="bg-white p-2 rounded-full hover:bg-[#7ED957] hover:text-white transition">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                  </svg>
                </button>
                <button class="bg-white p-2 rounded-full hover:bg-[#7ED957] hover:text-white transition">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                  </svg>
                </button>
              </div>
            </div>

            <!-- Informações do produto -->
            <div class="space-y-3">
              <h3 class="text-lg font-semibold text-[#2B2B2B] line-clamp-2">Cama de Cachorro 100% Sustentável Dupla Face Eco</h3>
              
              <!-- Preços -->
              <div class="space-y-1">
                <p class="text-gray-400 line-through">R$ 269,90</p>
                <p class="text-[#FF7E1B] font-bold text-2xl">R$ 209,90</p>
                <p class="text-gray-600 text-sm">R$ 199,41 à vista com desconto</p>
                <p class="text-[#2B2B2B] text-sm">ou <span class="text-[#7ED957] font-bold">3x de R$ 69,97</span> sem juros</p>
              </div>

              <!-- Contador e botão de compra -->
              <div class="flex items-center justify-between gap-4 pt-4">
                <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
                  <button class="quantity-btn minus px-3 py-2 bg-gray-50 hover:bg-gray-100 transition">-</button>
                  <input type="number" class="quantity w-16 px-3 py-2 text-center border-x border-gray-300 focus:outline-none" value="1" min="1" max="99">
                  <button class="quantity-btn plus px-3 py-2 bg-gray-50 hover:bg-gray-100 transition">+</button>
                </div>
                <button class="flex-1 bg-[#417B5A] text-white px-6 py-3 rounded-full hover:bg-[#7ED957] transition-colors">
                  Comprar
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- Repita o bloco acima para cada produto -->
        <!-- Card Produto -->
        <div class="swiper-slide">
          <div class="bg-white rounded-2xl shadow-lg p-6 transition-all duration-300 transform group hover:scale-105 hover:shadow-xl relative">
            <!-- Badge de desconto -->
            <span class="absolute -z-0 top-4 left-4 bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full">
              -22%
            </span>
            
            <!-- Imagem do produto -->
            <div class="-z-10 relative overflow-hidden rounded-xl mb-6">
              <img src="https://picsum.photos/300/300" alt="Produto" class="w-full h-[200px] object-cover transition-transform duration-500 group-hover:scale-110">
              <!-- Overlay com botões rápidos -->
              <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center gap-4 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                <button class="bg-white p-2 rounded-full hover:bg-[#7ED957] hover:text-white transition">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                  </svg>
                </button>
                <button class="bg-white p-2 rounded-full hover:bg-[#7ED957] hover:text-white transition">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                  </svg>
                </button>
              </div>
            </div>

            <!-- Informações do produto -->
            <div class="space-y-3">
              <h3 class="text-lg font-semibold text-[#2B2B2B] line-clamp-2">Cama de Cachorro 100% Sustentável Dupla Face Eco</h3>
              
              <!-- Preços -->
              <div class="space-y-1">
                <p class="text-gray-400 line-through">R$ 269,90</p>
                <p class="text-[#FF7E1B] font-bold text-2xl">R$ 209,90</p>
                <p class="text-gray-600 text-sm">R$ 199,41 à vista com desconto</p>
                <p class="text-[#2B2B2B] text-sm">ou <span class="text-[#7ED957] font-bold">3x de R$ 69,97</span> sem juros</p>
              </div>

              <!-- Contador e botão de compra -->
              <div class="flex items-center justify-between gap-4 pt-4">
                <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
                  <button class="quantity-btn minus px-3 py-2 bg-gray-50 hover:bg-gray-100 transition">-</button>
                  <input type="number" class="quantity w-16 px-3 py-2 text-center border-x border-gray-300 focus:outline-none" value="1" min="1" max="99">
                  <button class="quantity-btn plus px-3 py-2 bg-gray-50 hover:bg-gray-100 transition">+</button>
                </div>
                <button class="flex-1 bg-[#417B5A] text-white px-6 py-3 rounded-full hover:bg-[#7ED957] transition-colors">
                  Comprar
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- Repita o bloco acima para cada produto -->
        <!-- Card Produto -->
        <div class="swiper-slide">
          <div class="bg-white rounded-2xl shadow-lg p-6 transition-all duration-300 transform group hover:scale-105 hover:shadow-xl relative">
            <!-- Badge de desconto -->
            <span class="absolute -z-0 top-4 left-4 bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full">
              -22%
            </span>
            
            <!-- Imagem do produto -->
            <div class="-z-10 relative overflow-hidden rounded-xl mb-6">
              <img src="https://picsum.photos/300/300" alt="Produto" class="w-full h-[200px] object-cover transition-transform duration-500 group-hover:scale-110">
              <!-- Overlay com botões rápidos -->
              <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center gap-4 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                <button class="bg-white p-2 rounded-full hover:bg-[#7ED957] hover:text-white transition">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                  </svg>
                </button>
                <button class="bg-white p-2 rounded-full hover:bg-[#7ED957] hover:text-white transition">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                  </svg>
                </button>
              </div>
            </div>

            <!-- Informações do produto -->
            <div class="space-y-3">
              <h3 class="text-lg font-semibold text-[#2B2B2B] line-clamp-2">Cama de Cachorro 100% Sustentável Dupla Face Eco</h3>
              
              <!-- Preços -->
              <div class="space-y-1">
                <p class="text-gray-400 line-through">R$ 269,90</p>
                <p class="text-[#FF7E1B] font-bold text-2xl">R$ 209,90</p>
                <p class="text-gray-600 text-sm">R$ 199,41 à vista com desconto</p>
                <p class="text-[#2B2B2B] text-sm">ou <span class="text-[#7ED957] font-bold">3x de R$ 69,97</span> sem juros</p>
              </div>

              <!-- Contador e botão de compra -->
              <div class="flex items-center justify-between gap-4 pt-4">
                <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
                  <button class="quantity-btn minus px-3 py-2 bg-gray-50 hover:bg-gray-100 transition">-</button>
                  <input type="number" class="quantity w-16 px-3 py-2 text-center border-x border-gray-300 focus:outline-none" value="1" min="1" max="99">
                  <button class="quantity-btn plus px-3 py-2 bg-gray-50 hover:bg-gray-100 transition">+</button>
                </div>
                <button class="flex-1 bg-[#417B5A] text-white px-6 py-3 rounded-full hover:bg-[#7ED957] transition-colors">
                  Comprar
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- Repita o bloco acima para cada produto -->
        <!-- Card Produto -->
        <div class="swiper-slide">
          <div class="bg-white rounded-2xl shadow-lg p-6 transition-all duration-300 transform group hover:scale-105 hover:shadow-xl relative">
            <!-- Badge de desconto -->
            <span class="absolute -z-0 top-4 left-4 bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full">
              -22%
            </span>
            
            <!-- Imagem do produto -->
            <div class="-z-10 relative overflow-hidden rounded-xl mb-6">
              <img src="https://picsum.photos/300/300" alt="Produto" class="w-full h-[200px] object-cover transition-transform duration-500 group-hover:scale-110">
              <!-- Overlay com botões rápidos -->
              <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center gap-4 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                <button class="bg-white p-2 rounded-full hover:bg-[#7ED957] hover:text-white transition">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                  </svg>
                </button>
                <button class="bg-white p-2 rounded-full hover:bg-[#7ED957] hover:text-white transition">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                  </svg>
                </button>
              </div>
            </div>

            <!-- Informações do produto -->
            <div class="space-y-3">
              <h3 class="text-lg font-semibold text-[#2B2B2B] line-clamp-2">Cama de Cachorro 100% Sustentável Dupla Face Eco</h3>
              
              <!-- Preços -->
              <div class="space-y-1">
                <p class="text-gray-400 line-through">R$ 269,90</p>
                <p class="text-[#FF7E1B] font-bold text-2xl">R$ 209,90</p>
                <p class="text-gray-600 text-sm">R$ 199,41 à vista com desconto</p>
                <p class="text-[#2B2B2B] text-sm">ou <span class="text-[#7ED957] font-bold">3x de R$ 69,97</span> sem juros</p>
              </div>

              <!-- Contador e botão de compra -->
              <div class="flex items-center justify-between gap-4 pt-4">
                <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
                  <button class="quantity-btn minus px-3 py-2 bg-gray-50 hover:bg-gray-100 transition">-</button>
                  <input type="number" class="quantity w-16 px-3 py-2 text-center border-x border-gray-300 focus:outline-none" value="1" min="1" max="99">
                  <button class="quantity-btn plus px-3 py-2 bg-gray-50 hover:bg-gray-100 transition">+</button>
                </div>
                <button class="flex-1 bg-[#417B5A] text-white px-6 py-3 rounded-full hover:bg-[#7ED957] transition-colors">
                  Comprar
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- Repita o bloco acima para cada produto -->
        <!-- Card Produto -->
        <div class="swiper-slide">
          <div class="bg-white rounded-2xl shadow-lg p-6 transition-all duration-300 transform group hover:scale-105 hover:shadow-xl relative">
            <!-- Badge de desconto -->
            <span class="absolute -z-0 top-4 left-4 bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full">
              -22%
            </span>
            
            <!-- Imagem do produto -->
            <div class="-z-10 relative overflow-hidden rounded-xl mb-6">
              <img src="https://picsum.photos/300/300" alt="Produto" class="w-full h-[200px] object-cover transition-transform duration-500 group-hover:scale-110">
              <!-- Overlay com botões rápidos -->
              <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center gap-4 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                <button class="bg-white p-2 rounded-full hover:bg-[#7ED957] hover:text-white transition">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                  </svg>
                </button>
                <button class="bg-white p-2 rounded-full hover:bg-[#7ED957] hover:text-white transition">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                  </svg>
                </button>
              </div>
            </div>

            <!-- Informações do produto -->
            <div class="space-y-3">
              <h3 class="text-lg font-semibold text-[#2B2B2B] line-clamp-2">Cama de Cachorro 100% Sustentável Dupla Face Eco</h3>
              
              <!-- Preços -->
              <div class="space-y-1">
                <p class="text-gray-400 line-through">R$ 269,90</p>
                <p class="text-[#FF7E1B] font-bold text-2xl">R$ 209,90</p>
                <p class="text-gray-600 text-sm">R$ 199,41 à vista com desconto</p>
                <p class="text-[#2B2B2B] text-sm">ou <span class="text-[#7ED957] font-bold">3x de R$ 69,97</span> sem juros</p>
              </div>

              <!-- Contador e botão de compra -->
              <div class="flex items-center justify-between gap-4 pt-4">
                <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
                  <button class="quantity-btn minus px-3 py-2 bg-gray-50 hover:bg-gray-100 transition">-</button>
                  <input type="number" class="quantity w-16 px-3 py-2 text-center border-x border-gray-300 focus:outline-none" value="1" min="1" max="99">
                  <button class="quantity-btn plus px-3 py-2 bg-gray-50 hover:bg-gray-100 transition">+</button>
                </div>
                <button class="flex-1 bg-[#417B5A] text-white px-6 py-3 rounded-full hover:bg-[#7ED957] transition-colors">
                  Comprar
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- Repita o bloco acima para cada produto -->
        <!-- Card Produto -->
        <div class="swiper-slide">
          <div class="bg-white rounded-2xl shadow-lg p-6 transition-all duration-300 transform group hover:scale-105 hover:shadow-xl relative">
            <!-- Badge de desconto -->
            <span class="absolute -z-0 top-4 left-4 bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full">
              -22%
            </span>
            
            <!-- Imagem do produto -->
            <div class="-z-10 relative overflow-hidden rounded-xl mb-6">
              <img src="https://picsum.photos/300/300" alt="Produto" class="w-full h-[200px] object-cover transition-transform duration-500 group-hover:scale-110">
              <!-- Overlay com botões rápidos -->
              <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center gap-4 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                <button class="bg-white p-2 rounded-full hover:bg-[#7ED957] hover:text-white transition">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                  </svg>
                </button>
                <button class="bg-white p-2 rounded-full hover:bg-[#7ED957] hover:text-white transition">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                  </svg>
                </button>
              </div>
            </div>

            <!-- Informações do produto -->
            <div class="space-y-3">
              <h3 class="text-lg font-semibold text-[#2B2B2B] line-clamp-2">Cama de Cachorro 100% Sustentável Dupla Face Eco</h3>
              
              <!-- Preços -->
              <div class="space-y-1">
                <p class="text-gray-400 line-through">R$ 269,90</p>
                <p class="text-[#FF7E1B] font-bold text-2xl">R$ 209,90</p>
                <p class="text-gray-600 text-sm">R$ 199,41 à vista com desconto</p>
                <p class="text-[#2B2B2B] text-sm">ou <span class="text-[#7ED957] font-bold">3x de R$ 69,97</span> sem juros</p>
              </div>

              <!-- Contador e botão de compra -->
              <div class="flex items-center justify-between gap-4 pt-4">
                <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
                  <button class="quantity-btn minus px-3 py-2 bg-gray-50 hover:bg-gray-100 transition">-</button>
                  <input type="number" class="quantity w-16 px-3 py-2 text-center border-x border-gray-300 focus:outline-none" value="1" min="1" max="99">
                  <button class="quantity-btn plus px-3 py-2 bg-gray-50 hover:bg-gray-100 transition">+</button>
                </div>
                <button class="flex-1 bg-[#417B5A] text-white px-6 py-3 rounded-full hover:bg-[#7ED957] transition-colors">
                  Comprar
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- Repita o bloco acima para cada produto -->
      </div>
    </div>
  </div>
</div>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  // Inicialização do Swiper
  const swiper = new Swiper('.products-carousel', {
    slidesPerView: 1,
    spaceBetween: 24,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    // navigation: {
    //   nextEl: '.swiper-button-next-custom',
    //   prevEl: '.swiper-button-prev-custom',
    // },
    breakpoints: {
      640: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
      1280: {
        slidesPerView: 4,
      },
    },
  });

  // Controladores de quantidade
  document.querySelectorAll('.quantity-btn').forEach((btn) => {
    btn.addEventListener('click', (e) => {
      const input = e.target.parentNode.querySelector('.quantity');
      const currentValue = parseInt(input.value);

      if (e.target.classList.contains('minus')) {
        if (currentValue > 1) input.value = currentValue - 1;
      } else {
        if (currentValue < 99) input.value = currentValue + 1;
      }
    });
  });
</script>