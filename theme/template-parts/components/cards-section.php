<!-- Certifique-se de incluir os links do Tailwind, Swiper CSS e Swiper JS no seu projeto -->

<!-- Swiper CSS -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<!-- Se o Tailwind CSS não estiver incluído, adicione-o também -->

<section class="grid grid-cols-1 md:grid-cols-2 gap-6 px-6 py-8 mx-auto">
  <!-- Coluna Esquerda: Cards Carousel -->
  <div>
    <div class="swiper cards-carousel relative">
      <div class="swiper-wrapper">
        <!-- Slide 1 - Apple -->
        <div class="swiper-slide">
          <div class="relative w-full h-[500px] md:h-[600px] bg-gradient-to-r from-purple-700 to-indigo-600 rounded-2xl overflow-hidden shadow-lg">
            <img
              src="https://images.unsplash.com/photo-1531297484001-80022131f5a1"
              alt="Apple Shopping Event"
              class="absolute inset-0 w-full h-full object-cover opacity-60 transition-transform duration-700 hover:scale-110"
            />
            <div class="relative z-10 flex flex-col items-center justify-center text-center h-full px-6">
              <h3 class="text-3xl md:text-4xl font-bold text-white">Apple Shopping Event</h3>
              <p class="text-white mt-4 text-xl max-w-xl">
                Shop great deals on MacBook, iPad, iPhone and more.
              </p>
              <button
                class="mt-8 bg-white text-indigo-600 py-3 px-8 rounded-full font-semibold hover:bg-opacity-90 transform hover:scale-105 transition-all"
              >
                Shop Now
              </button>
            </div>
          </div>
        </div>

        <!-- Slide 2 - Gaming -->
        <div class="swiper-slide">
          <div class="relative w-full h-[500px] md:h-[600px] bg-gradient-to-r from-red-600 to-pink-600 rounded-2xl overflow-hidden shadow-lg">
            <img
              src="https://images.unsplash.com/photo-1542751371-adc38448a05e"
              alt="Gaming Paradise"
              class="absolute inset-0 w-full h-full object-cover opacity-60 transition-transform duration-700 hover:scale-110"
            />
            <div class="relative z-10 flex flex-col items-center justify-center text-center h-full px-6">
              <h3 class="text-3xl md:text-4xl font-bold text-white">Gaming Paradise</h3>
              <p class="text-white mt-4 text-xl max-w-xl">
                Explore the latest gaming gear and accessories.
              </p>
              <button
                class="mt-8 bg-white text-red-600 py-3 px-8 rounded-full font-semibold hover:bg-opacity-90 transform hover:scale-105 transition-all"
              >
                Discover More
              </button>
            </div>
          </div>
        </div>

        <!-- Slide 3 - Smart Home -->
        <div class="swiper-slide">
          <div class="relative w-full h-[500px] md:h-[600px] bg-gradient-to-r from-green-600 to-teal-600 rounded-2xl overflow-hidden shadow-lg">
            <img
              src="https://images.unsplash.com/photo-1558002038-1055907df827"
              alt="Smart Home Solutions"
              class="absolute inset-0 w-full h-full object-cover opacity-60 transition-transform duration-700 hover:scale-110"
            />
            <div class="relative z-10 flex flex-col items-center justify-center text-center h-full px-6">
              <h3 class="text-3xl md:text-4xl font-bold text-white">Smart Home Solutions</h3>
              <p class="text-white mt-4 text-xl max-w-xl">
                Transform your home with smart technology.
              </p>
              <button
                class="mt-8 bg-white text-green-600 py-3 px-8 rounded-full font-semibold hover:bg-opacity-90 transform hover:scale-105 transition-all"
              >
                Learn More
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Controles de Navegação e Paginação do Swiper -->
      <!-- <div class="swiper-button-next text-white"></div>
      <div class="swiper-button-prev text-white"></div> -->
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- Coluna Direita: Demais Cards -->
  <div class="flex flex-col space-y-6">
    <!-- Card Aurora Headset -->
    <div class="relative w-full h-[250px] md:h-[250px] bg-pink-100 rounded-2xl overflow-hidden shadow-lg">
      <img
        src="https://picsum.photos/1000/600?random=2"
        alt="Aurora Headset"
        class="absolute inset-0 w-full h-full object-cover opacity-80"
      />
      <div class="relative z-10 p-6 text-white">
        <h3 class="text-lg font-bold">Aurora Headset</h3>
        <div class="mt-2 flex space-x-2 text-center">
          <div class="bg-white text-gray-900 p-2 rounded-lg w-16">
            <p class="text-lg font-semibold">332</p>
            <p class="text-xs">Days</p>
          </div>
          <div class="bg-white text-gray-900 p-2 rounded-lg w-16">
            <p class="text-lg font-semibold">01</p>
            <p class="text-xs">Hr</p>
          </div>
          <div class="bg-white text-gray-900 p-2 rounded-lg w-16">
            <p class="text-lg font-semibold">14</p>
            <p class="text-xs">Min</p>
          </div>
          <div class="bg-white text-gray-900 p-2 rounded-lg w-16">
            <p class="text-lg font-semibold">18</p>
            <p class="text-xs">Sc</p>
          </div>
        </div>
        <button
          class="mt-4 bg-blue-500 hover:bg-blue-600 text-white py-2 px-6 rounded-lg shadow-md transition"
        >
          Buy Now
        </button>
      </div>
    </div>

    <!-- Card DualSense 1 -->
    <div class="relative w-full h-[150px] md:h-[150px] bg-blue-500 rounded-2xl overflow-hidden shadow-lg">
      <img
        src="https://picsum.photos/1000/600?random=3"
        alt="New Dual Sense"
        class="absolute inset-0 w-full h-full object-cover opacity-60"
      />
      <div class="relative z-10 p-6 text-white">
        <h3 class="text-lg font-bold">New Dual Sense</h3>
        <p class="mt-1 text-sm">For PlayStation 5</p>
        <button
          class="mt-4 bg-white text-blue-500 py-2 px-6 rounded-lg shadow-md transition"
        >
          View Details
        </button>
      </div>
    </div>

    <!-- Card DualSense 2 -->
    <div class="relative w-full h-[150px] md:h-[150px] bg-blue-500 rounded-2xl overflow-hidden shadow-lg">
      <img
        src="https://picsum.photos/1000/600?random=3"
        alt="New Dual Sense"
        class="absolute inset-0 w-full h-full object-cover opacity-60"
      />
      <div class="relative z-10 p-6 text-white">
        <h3 class="text-lg font-bold">New Dual Sense</h3>
        <p class="mt-1 text-sm">For PlayStation 5</p>
        <button
          class="mt-4 bg-white text-blue-500 py-2 px-6 rounded-lg shadow-md transition"
        >
          View Details
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const cardsSwiper = new Swiper(".cards-carousel", {
      effect: "fade",
      fadeEffect: {
        crossFade: true,
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
    //   navigation: {
    //     nextEl: ".swiper-button-next",
    //     prevEl: ".swiper-button-prev",
    //   },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      keyboard: {
        enabled: true,
        onlyInViewport: false,
      },
    });
  });
</script>