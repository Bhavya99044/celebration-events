





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Celebration Events </title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:wght@500;700&family=Montserrat:wght@300;400;500&display=swap');

    .font-script {
      font-family: 'Great Vibes', cursive;
    }
    .font-serif {
      font-family: 'Playfair Display', serif;
    }
    .font-sans {
      font-family: 'Montserrat', sans-serif;
    }

    body {
      background: url('https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80') no-repeat center center fixed;
      background-size: cover;
    }

    .main-container {
      background: linear-gradient(to bottom, rgba(255,255,255,0.9) 0%, rgba(255,248,240,0.9) 100%);
      backdrop-filter: blur(5px);
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }

    .header-bg {
      background: black;
    }

    /* Haldi Section Specific Styles */
    .haldi-section {
      background: linear-gradient(to bottom, rgba(255,248,240,0.9) 0%, rgba(255,227,168,0.8) 100%);
      position: relative;
    }



    .haldi-icon {
      background: linear-gradient(to bottom, #FFC324, #E89C00);
    }

    .haldi-btn {
      background: linear-gradient(to right, #FFC324, #E89C00);
      box-shadow: 0 4px 6px rgba(232, 156, 0, 0.3);
    }

    .carousel-container {
      position: relative;
      overflow: hidden;
      border-radius: 1rem;
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }
    @keyframes scroll {
  0% { transform: translateX(0); }
  100% { transform: translateX(-100%); }
}
.animate-scroll {
  display: inline-flex;
  width: max-content;

  animation: scroll 50s linear infinite;
}

/* Flower Rain */
.flower-rain::before,
.flower-rain::after {
  content: '';
  position: absolute;
  top: -10%;
  width: 100%;
  height: 200%;
  background-image: url('https://png.pngtree.com/png-clipart/20230420/original/pngtree-yellow-flower-petals-falling-isolated-png-image_9064462.png');
  background-repeat: repeat;
  background-size: 100px;
  opacity: 0.4;
  animation: rain 20s linear infinite;
}

@keyframes rain {
  0% { transform: translateY(-100%); }
  100% { transform: translateY(100%); }
}
    .carousel-slide {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .carousel-image {
      min-width: 100%;
      height: 300px;
      object-fit: cover;
    }

    .carousel-nav {
      position: absolute;
      bottom: 15px;
      left: 0;
      right: 0;
      display: flex;
      justify-content: center;
      gap: 8px;
    }

    .carousel-dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background-color: rgba(255,255,255,0.5);
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .carousel-dot.active {
      background-color: #E89C00;
      transform: scale(1.3);
    }

    .thumbnail-container {
      display: flex;
      gap: 10px;
      margin-top: 15px;
      overflow-x: auto;
      padding-bottom: 10px;
    }

    .thumbnail {
      width: 70px;
      height: 70px;
      border-radius: 10px;
      object-fit: cover;
      cursor: pointer;
      border: 3px solid transparent;
      transition: all 0.3s ease;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    .thumbnail.active {
      border-color: #FFC324;
      transform: scale(1.1);
    }

    .thumbnail:hover {
      transform: scale(1.1);
    }

    .love-btn {
      background: linear-gradient(to right, #B76E79, #800020);
      box-shadow: 0 4px 6px rgba(183, 110, 121, 0.3);
    }

    .start-btn {
      background: linear-gradient(to right, #F7E7CE, #D4AF37);
      box-shadow: 0 4px 6px rgba(212, 175, 55, 0.3);
    }

    .section-divider {
      border-top: 1px dashed #D4AF37;
      margin: 0 20px;
    }

    .footer-dot {
      width: 8px;
      height: 8px;
      background-color: #D4AF37;
      opacity: 0.5;
    }

    .footer-dot.active {
      opacity: 1;
      transform: scale(1.3);
    }

    /* Custom scrollbar */
    ::-webkit-scrollbar {
      height: 5px;
    }

    ::-webkit-scrollbar-track {
      background: #f1f1f1;
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
      background: #FFC324;
      border-radius: 10px;
    }

    /* Elegant border for main container */
    .main-container::before {
      content: '';
      position: absolute;
      top: 10px;
      left: 10px;
      right: 10px;
      bottom: 10px;
      border: 1px solid rgba(212, 175, 55, 0.3);
      border-radius: 1.8rem;
      pointer-events: none;
    }

    /* Haldi-themed decorative elements */
    .haldi-pattern {
      position: absolute;
      width: 100%;
      height: 100%;
      background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23FFC324' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
      opacity: 0.3;
      pointer-events: none;
    }
  </style>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:wght@500;700&family=Montserrat:wght@300;400;600&display=swap');

    .font-script {
      font-family: 'Great Vibes', cursive;
    }
    .font-serif {
      font-family: 'Playfair Display', serif;
    }
    .font-sans {
      font-family: 'Montserrat', sans-serif;
    }

    .hero-gradient {
      background: linear-gradient(135deg, rgba(0,0,0,0.5) 0%, rgba(225,115,58,0.3) 100%);
    }

    .card-gradient {
      background: linear-gradient(135deg, #ffe6f0, #ffd6e7, #fff0f6, #ffe0f5);
    background-size: 300% 300%;
    animation: shineShift 8s ease infinite;
    position: relative;
  }
  @keyframes shineShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }
  .heart {
    position: absolute;
    pointer-events: none;
    animation: float linear infinite;
  }

  @keyframes float {
    0% {
      transform: translateY(0) rotate(0deg);
      opacity: 1;
    }
    100% {
      transform: translateY(-100vh) rotate(360deg);
      opacity: 0;
    }
  }

    .glow {
      animation: glow 2s infinite alternate;
    }

    @keyframes glow {
      from {
        box-shadow: 0 0 5px rgba(225, 115, 58, 0.5);
      }
      to {
        box-shadow: 0 0 20px rgba(225, 115, 58, 0.8);
      }
    }

    .floating {
      animation: floating 3s ease-in-out infinite;
    }

    @keyframes floating {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
      100% { transform: translateY(0px); }
    }

    .carousel {
      position: relative;
      overflow: hidden;
      border-radius: 1rem;
    }

    .carousel-inner {
      display: flex;
      transition: transform 0.5s ease;
    }

    .carousel-item {
      min-width: 100%;
    }

    .carousel-img {
      width: 100%;
      height: 64vh;
      object-fit: cover;
    }

    .carousel-control {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(255,255,255,0.5);
      border: none;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      z-index: 10;
      transition: all 0.3s ease;
    }

    .carousel-control:hover {
      background: rgba(255,255,255,0.8);
    }

    .carousel-prev {
      left: 15px;
    }

    .carousel-next {
      right: 15px;
    }

    .carousel-indicators {
      position: absolute;
      bottom: 20px;
      left: 0;
      right: 0;
      display: flex;
      justify-content: center;
      gap: 8px;
    }

    .carousel-indicator {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: rgba(255,255,255,0.5);
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .carousel-indicator.active {
      background: white;
      transform: scale(1.2);
    }

    .confetti {
      position: absolute;
      width: 10px;
      height: 10px;
      background-color: #f00;
      opacity: 0;
    }

    .pulse {
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.05); }
      100% { transform: scale(1); }
    }

    .btn-gold {
      background: linear-gradient(to right, #E1733A, #D4AF37);
      box-shadow: 0 4px 15px rgba(225, 115, 58, 0.4);
    }

    .btn-outline-gold {
      box-shadow: 0 4px 15px rgba(225, 115, 58, 0.2);
    }

    body {
    font-family: 'Playfair Display', serif;
    background-color: #fef6f6;
    padding: 20px;
}

.sangeet-container {
    max-width: 100%;
    margin: 0 auto;
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, #0f2027 0%, #203a43 50%, #2c5364 100%);
    border-radius: 15px;
    padding: 30px 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    border: 2px solid rgba(255, 215, 0, 0.3);
}

.section-header {
    text-align: center;
    margin-bottom: 30px;
    position: relative;
}

.section-title {
    color: #ffd700;
    text-align: center;
    margin-bottom: 10px;
    font-size: 2.5rem;
    font-weight: 700;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.section-title .pulse {
    animation: pulse 2s infinite;
}

.section-subtitle {
    color: rgba(255, 255, 255, 0.9);
    text-align: center;
    margin-bottom: 5px;
    font-size: 1.2rem;
    font-style: italic;
}

/* Video Carousel Styles */
.video-carousel {
    position: relative;
    width: 100%;
    margin: 30px auto;
    overflow: hidden;
    z-index: 10;
}

.carousel-inner {
    display: flex;
    transition: transform 0.5s ease-in-out;
    width: 100%;
}

.video-item {
    min-width: 100%;
    padding: 0 15px;
    position: relative;
}

.video-item video {
    width: 100%;
    height: auto;
    max-height: 300px;
    border-radius: 12px;
    border: 3px solid rgba(255, 215, 0, 0.5);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    object-fit: cover;
}

.video-info {
    margin-top: 15px;
    color: white;
    text-align: center;
    background: rgba(0, 0, 0, 0.5);
    padding: 10px;
    border-radius: 8px;
}

.video-info h3 {
    font-size: 1.3rem;
    margin-bottom: 5px;
    color: #ffd700;
}

.video-info p {
    font-size: 1rem;
    opacity: 0.9;
}

.carousel-control {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255, 215, 0, 0.7);
    border: none;
    color: #2c5364;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    font-size: 1.3rem;
    cursor: pointer;
    z-index: 20;
    transition: all 0.3s ease;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.carousel-control:hover {
    background: rgba(255, 215, 0, 0.9);
    transform: translateY(-50%) scale(1.1);
}

.carousel-control.prev {
    left: 5px;
}

.carousel-control.next {
    right: 5px;
}

/* Animation Elements */
.music-notes {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    pointer-events: none;
    overflow: hidden;
    z-index: 1;
}

.music-note {
    position: absolute;
    color: rgba(255, 215, 0, 0.7);
    font-size: 20px;
    animation: falling linear infinite;
    z-index: 1;
}

.shining-stars {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    pointer-events: none;
    overflow: hidden;
    z-index: 1;
}

.star {
    position: absolute;
    background-color: white;
    border-radius: 50%;
    opacity: 0;
    animation: shine 4s infinite;
    z-index: 1;
}

.floating-hearts {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    pointer-events: none;
    overflow: hidden;
    z-index: 1;
}

.heart {
    position: absolute;
    color: rgba(255, 105, 180, 0.7);
    font-size: 18px;
    animation: floatUp 6s linear infinite;
    z-index: 1;
}

/* Animations */
@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.2); }
    100% { transform: scale(1); }
}

@keyframes shine {
    0% {
        opacity: 0;
        transform: scale(0.5);
    }
    50% {
        opacity: 0.8;
        transform: scale(1.2);
        box-shadow: 0 0 15px 3px rgba(255, 215, 0, 0.8);
    }
    100% {
        opacity: 0;
        transform: scale(0.5);
    }
}

@keyframes falling {
    to {
        transform: translateY(100vh) rotate(360deg);
    }
}

@keyframes floatUp {
    0% {
        transform: translateY(100vh) scale(0.5);
        opacity: 0;
    }
    20% {
        opacity: 0.8;
    }
    100% {
        transform: translateY(-20vh) scale(1.2);
        opacity: 0;
    }
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .section-title {
        font-size: 2rem;
    }

    .section-subtitle {
        font-size: 1rem;
    }

    .video-item video {
        max-height: 250px;
    }

    .carousel-control {
        width: 35px;
        height: 35px;
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .section-title {
        font-size: 1.8rem;
    }

    .video-item video {
        max-height: 200px;
    }

    .video-info h3 {
        font-size: 1.1rem;
    }
}

.haldi-new-color{
  background-color: rgba(255, 232, 184, 0.85);;
}
  </style>
  <style>
    /* Add this to your <style> section */
  .varmala-section {
    background: linear-gradient(135deg, rgba(251, 207, 232, 0.9) 0%, rgba(254, 249, 195, 0.9) 100%);
    position: relative;
  }

  .flower-petals {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1;
    overflow: hidden;
  }

  .flower {
    position: absolute;
    background-image: url('https://www.freepnglogos.com/uploads/flower-png/flower-png-romantic-flower-png-transparent-29.png');
    background-size: contain;
    background-repeat: no-repeat;
    opacity: 0.7;
    animation: falling linear infinite;
  }

  @keyframes falling {
    0% {
      transform: translateY(-10vh) rotate(0deg);
      opacity: 0;
    }
    10% {
      opacity: 0.8;
    }
    100% {
      transform: translateY(110vh) rotate(360deg);
      opacity: 0;
    }
  }

  .varmala-carousel {
    height: 600px;
    border: 4px solid rgba(255, 255, 255, 0.5);
  }

  .carousel-inner img {
    min-width: 100%;
    object-fit: cover;
  }
  </style>
<style>
  /* Add these styles to your CSS */
  .reception-grid-section {
    background: url('https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80') no-repeat center center;
    background-size: cover;
  }

  .image-sparkle {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 70%);
    pointer-events: none;
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .grid div:hover .image-sparkle {
    opacity: 1;
  }

  /* Fireworks Animation */
  .firework {
    position: absolute;
    width: 5px;
    height: 5px;
    border-radius: 50%;
    box-shadow: 0 0 10px 3px;
    animation: firework-explode 1s ease-out forwards;
    opacity: 0;
  }

  @keyframes firework-explode {
    0% {
      transform: translate(var(--x), var(--y)) scale(0);
      opacity: 1;
    }
    50% {
      opacity: 1;
    }
    100% {
      transform: translate(var(--x), var(--y)) scale(1);
      opacity: 0;
    }
  }

  /* Small sparkles on images */
  .image-sparkle::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background-image: radial-gradient(circle at var(--sparkle-x) var(--sparkle-y),
                     rgba(255,255,255,0.8) 0%, transparent 20%);
    animation: sparkle 2s infinite;
  }

  @keyframes sparkle {
    0%, 100% {
      opacity: 0;
    }
    50% {
      opacity: 1;
    }
  }
  </style>
</head>
<body class="bg-[#FFF6DE] font-sans flex justify-center items-center min-h-screen ">
  <div class="max-w-[400px] w-full bg-white rounded-[2rem] shadow-2xl overflow-hidden relative">

    <!-- Confetti Container -->
    <div id="confetti-container"></div>

    <!-- Hero Carousel -->
    <div class="carousel">
      <div class="carousel-inner" id="carousel-inner">
        <div class="carousel-item">
            <img src="{{asset('6102572121986287979.jpg')}}"
               class="carousel-img" alt="Wedding couple">
        </div>
        <div class="carousel-item">
            <img src="{{asset('image-1.jpg')}}"
            class="carousel-img" alt="Wedding venue">
        </div>
        <div class="carousel-item">
          <img src="{{asset('6100320322172601028.jpg')}}"
               class="carousel-img" alt="Wedding rings">
        </div>
        <div class="carousel-item">
            <img src="{{asset('6100320322172601027.jpg')}}"
                 class="carousel-img" alt="Wedding rings">
          </div>
          <div class="carousel-item">
            <img src="{{asset('ccc.png')}}"
                 class="carousel-img" alt="Wedding rings">
          </div>
          <div class="carousel-item">
            <img src="{{asset('Screenshot 2025-05-11 020442.png')}}"
                 class="carousel-img" alt="Wedding rings">
          </div>

      </div>
      <button class="carousel-control carousel-prev">❮</button>
      <button class="carousel-control carousel-next">❯</button>
      <div class="carousel-indicators" id="carousel-indicators"></div>
    </div>

    <!-- Celebration Card -->
    <div class="card-gradient -mt-20 relative z-10 mx-6 p-6 rounded-2xl shadow-lg text-center animate__animated animate__fadeInUp overflow-hidden">
      <!-- Hearts Animation Container -->
      <div id="hearts-container" class="absolute inset-0 overflow-hidden"></div>

      <div class="floating relative z-10">
        <h2 class="text-2xl font-script text-[#E1733A]">Celebration is</h2>
        <h1 class="text-4xl font-bold font-serif text-[#800020] mt-2">Celebration Events</h1>
        <p class="mt-3 text-gray-700 text-sm font-light">
         From haldi to sangeet your one stop destination for all the celebrations magic.
        </p>
      </div>

      <div class="flex justify-center space-x-1 my-4 relative z-10">
        <svg class="w-4 h-4 text-red-400 animate-pulse" style="animation-delay: 0s" fill="currentColor" viewBox="0 0 20 20">
          <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 18.343l-6.828-6.829a4 4 0 010-5.656z"/>
        </svg>
        <svg class="w-4 h-4 text-yellow-400 animate-pulse" style="animation-delay: 0.2s" fill="currentColor" viewBox="0 0 20 20">
          <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 18.343l-6.828-6.829a4 4 0 010-5.656z"/>
        </svg>
        <svg class="w-4 h-4 text-blue-400 animate-pulse" style="animation-delay: 0.4s" fill="currentColor" viewBox="0 0 20 20">
          <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 18.343l-6.828-6.829a4 4 0 010-5.656z"/>
        </svg>
        <svg class="w-4 h-4 text-purple-400 animate-pulse" style="animation-delay: 0.6s" fill="currentColor" viewBox="0 0 20 20">
          <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 18.343l-6.828-6.829a4 4 0 010-5.656z"/>
        </svg>
        <svg class="w-4 h-4 text-green-400 animate-pulse" style="animation-delay: 0.8s" fill="currentColor" viewBox="0 0 20 20">
          <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 18.343l-6.828-6.829a4 4 0 010-5.656z"/>
        </svg>
      </div>

      <div class="flex justify-center space-x-6 mt-6 relative z-10">
        <!-- Call Button -->
        <a href="tel:+916355431837" class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center shadow-md hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20 15.5c-1.2 0-2.5-.2-3.6-.6h-.3c-.3 0-.5.1-.7.3l-2.2 2.2c-2.8-1.5-5.2-3.8-6.6-6.6l2.2-2.2c.3-.3.4-.7.2-1-.3-1.1-.5-2.4-.5-3.6 0-.5-.5-1-1-1H4c-.5 0-1 .5-1 1 0 9.4 7.6 17 17 17 .5 0 1-.5 1-1v-3.5c0-.5-.5-1-1-1z"/>
          </svg>
        </a>

        <!-- WhatsApp Button -->
        <a href="https://wa.me/916355431837" class="w-12 h-12 bg-gradient-to-br from-pink-200 to-yellow-200 rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.5 14c-.3 0-.5-.2-.5-.5v-.5c0-.8-.7-1.5-1.5-1.5h-.5c-.3 0-.5-.2-.5-.5s.2-.5.5-.5h.5c1.4 0 2.5 1.1 2.5 2.5v.5c0 .3-.2.5-.5.5zm-3-4c-.3 0-.5-.2-.5-.5v-.5c0-1.4-1.1-2.5-2.5-2.5h-.5c-.3 0-.5-.2-.5-.5s.2-.5.5-.5h.5c1.9 0 3.5 1.6 3.5 3.5v.5c0 .3-.2.5-.5.5z"/>
            <path d="M12 2C6.5 2 2 6.5 2 12c0 1.7.5 3.4 1.4 4.8l-1.4 4.3 4.3-1.4c1.4.9 3 1.4 4.7 1.4 5.5 0 10-4.5 10-10S17.5 2 12 2zm5.9 13.4c-.3.8-1.6 1.6-2.4 1.8-.4.1-.9.2-2.4-.4-1.5-.7-4.9-2.4-6.7-6.7-.7-1.5-.5-2-.4-2.4.2-.8 1-2.1 1.8-2.4.3-.1.6-.1.9 0 .3.1.6.3.8.6.2.3.5.7.6.9.2.3.3.6.1 1-.2.4-.5 1-.7 1.3-.2.3-.4.5-.3.8.1.3.5 1.2 1.1 2 .7.9 1.3 1.4 2.1 1.8.3.2.6.1.8 0 .3-.1.6-.3.9-.6.2-.2.5-.5.9-.6.3-.1.7 0 1 .1.4.2 1 .5 1.3.7.3.2.5.4.8.3.3-.1.6-.4.9-.6.3-.2.5-.5.6-.8.1-.3.1-.6 0-.9z"/>
          </svg>
        </a>

        <!-- Instagram Button -->
        <a href="https://www.instagram.com/celebrations_ahmedabad?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="w-12 h-12 bg-gradient-to-br from-purple-300 to-pink-300 rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-pink-700" fill="currentColor" viewBox="0 0 24 24">
            <path d="M7.75 2h8.5C19.55 2 22 4.45 22 7.75v8.5C22 19.55 19.55 22 16.25 22h-8.5C4.45 22 2 19.55 2 16.25v-8.5C2 4.45 4.45 2 7.75 2zm0 2C5.68 4 4 5.68 4 7.75v8.5C4 18.32 5.68 20 7.75 20h8.5C18.32 20 20 18.32 20 16.25v-8.5C20 5.68 18.32 4 16.25 4h-8.5zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 2a3 3 0 1 0 .001 5.999A3 3 0 0 0 12 9zm4.5-2a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>
        </a>
      </div>
    </div>


      <h2 class="text-2xl font-script text-center text-[#E1733A] mb-6"></h2>

      <div class="relative overflow-hidden haldi-new-color p-6  rounded-xl shadow-lg">
        <!-- Flower Rain -->
        <div class="absolute inset-0 pointer-events-none z-0">
          <div class="flower-rain"></div>
        </div>



        <!-- Title Section -->
        <div class="flex items-center mb-6 relative z-10">

          <h2 class="text-2xl md:text-3xl font-serif font-bold ">
            <span class="italic bg-clip-text text-transparent bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 animate-shine">
              Haldi
            </span>
          </h2>
        </div>

        <p class="text-sm font-semibold text-yellow-700 mb-4  relative z-10">
            Welcome to the Haldi ceremony.
        </p>

        <!-- Auto-Scrolling Carousel -->
        <div class="relative overflow-hidden rounded-xl h-72 md:h-64">
          <div id="autoCarousel" class="whitespace-nowrap animate-scroll">
            <img src={{asset('haldi6.jpg')}}
              class="inline-block w-full h-72 md:h-96 object-cover rounded-xl transition-all duration-1000" alt="Haldi 1">
              <img src={{asset('haldi2.jpg')}}
              class="inline-block w-full h-72 md:h-96 object-cover rounded-xl transition-all duration-1000" alt="Haldi 2">
              <img src={{asset('haldi3.jpg')}}
              class="inline-block w-full h-72 md:h-96 object-cover rounded-xl transition-all duration-1000" alt="Haldi 3">
              <img src={{asset('haldi4.jpg')}}
              class="inline-block w-full h-72 md:h-96 object-cover rounded-xl transition-all duration-1000" alt="Haldi 3">
              <img src={{asset('haldi5.jpg')}}
              class="inline-block w-full h-72 md:h-96 object-cover rounded-xl transition-all duration-1000" alt="Haldi 3">
              <img src={{asset('6123203847796147826.jpg')}}
              class="inline-block w-full h-72 md:h-96 object-cover rounded-xl transition-all duration-1000" alt="Haldi 3">
              <img src={{asset('6123203847796147825.jpg')}}
              class="inline-block w-full h-72 md:h-96 object-cover rounded-xl transition-all duration-1000" alt="Haldi 3">
              <img src={{asset('6123203847796147824.jpg')}}
              class="inline-block w-full h-72 md:h-96 object-cover rounded-xl transition-all duration-1000" alt="Haldi 3">
              <img src={{asset('6123203847796147823.jpg')}}
              class="inline-block w-full h-72 md:h-96 object-cover rounded-xl transition-all duration-1000" alt="Haldi 3">
              <img src={{asset('6123203847796147866.jpg')}}
              class="inline-block w-full h-72 md:h-96 object-cover rounded-xl transition-all duration-1000" alt="Haldi 3">
              <img src={{asset('haldi3.jpg')}}
              class="inline-block w-full h-72 md:h-96 object-cover rounded-xl transition-all duration-1000" alt="Haldi 3">
          </div>
        </div>

        <!-- View More Button -->

      </div>
      <div class="sangeet-container mt-8">
        <div class="section-header">
            <h2 class="section-title">Wedding Sangeet <i class="fas fa-music pulse"></i></h2>
            <p class="section-subtitle">Celebrating with Music & Dance</p>
        </div>

        <div class="video-carousel">
            <div class="carousel-inner">
                <!-- Video items will be added here dynamically -->
            </div>
            <button class="carousel-control prev">❮</button>
            <button class="carousel-control next">❯</button>
        </div>

        <div class="music-notes"></div>
        <div class="shining-stars"></div>
        <div class="floating-hearts"></div>
    </div>
      <div class="flex justify-center mt-6 fixed top-[600px] z-[999] right-5">
        <button id="playMusicBtn" class="p-2 bg-rose-500 text-white font-semibold rounded-full transition duration-300 hover:bg-rose-600">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M9 18V5l12-2v13"></path>
            <circle cx="6" cy="18" r="3"></circle>
            <circle cx="18" cy="16" r="3"></circle>
          </svg>
        </button>
      </div>
    <section class="varmala-section relative overflow-hidden py-12 px-4 md:px-8">
  <!-- Background & Overlay -->
  <div class="absolute inset-0 bg-gradient-to-br from-rose-100 to-amber-100 opacity-90 z-0"></div>

  <!-- Floating Flower Petals Animation -->
  <div class="flower-petals">
    <!-- Will be added via JavaScript -->
  </div>
  <audio id="haldiAudio" src="{{ asset('ishq-hai-mismatched-season-3-netflix-original-karaoke-with-lyrics_A57w8yZF.mp3') }}"></audio>

  <!-- Content -->
  <div class="max-w-4xl mx-auto relative z-10 text-center">
    <!-- Title -->
    <h2 class="text-4xl md:text-5xl font-serif font-bold text-rose-800 mb-2 animate__animated animate__fadeInDown">
      Varmala
    </h2>
    <p class="text-lg text-rose-700 mb-8 animate__animated animate__fadeIn animate__delay-1s">
        Begin Your Love Story with the Perfect Varmala
      </p>
    <!-- Image Carousel -->
    <div class="varmala-carousel relative rounded-xl overflow-hidden shadow-2xl animate__animated animate__zoomIn animate__delay-2s">
      <div class="carousel-inner flex transition-transform duration-500 ease-in-out">
        <!-- Images will be added dynamically -->
      </div>

    </div>

    <!-- Description -->

  </div>
</section>
<!-- Add this after your Varmala section -->
<section class="reception-grid-section relative overflow-hidden py-12 px-4">
  <!-- Background with subtle gradient -->
  <div class="absolute inset-0 bg-gradient-to-br from-purple-900/90 to-rose-900/90 z-0"></div>

  <!-- Fireworks Container -->
  <div id="fireworks-container" class="absolute inset-0 overflow-hidden z-1 pointer-events-none"></div>

  <!-- Content Container -->
  <div class="max-w-6xl mx-auto relative z-10">
    <!-- Section Header -->
    <div class="text-center mb-12">
      <h2 class="text-4xl md:text-5xl font-serif font-bold text-white mb-2 animate__animated animate__fadeInDown">
        Reception Memories
      </h2>
      <p class="text-xl text-rose-200 animate__animated animate__fadeIn animate__delay-1s">
        A night to remember forever
      </p>
    </div>

    <!-- Image Grid -->
    <div class="grid grid-cols-42 md:grid-cols-2 gap-4 md:gap-6 animate__animated animate__zoomIn animate__delay-2s">
      <!-- Image 1 -->
      <div class="relative overflow-hidden rounded-xl shadow-2xl hover:scale-105 transition-transform duration-300">
        <img
          src="{{asset('6122998818942338181.jpg')}}"
          alt="Reception decor"
          class="w-full h-64 md:h-80 object-cover"
        >
        <div class="image-sparkle"></div>
      </div>

      <!-- Image 2 -->
      <div class="relative overflow-hidden rounded-xl shadow-2xl hover:scale-105 transition-transform duration-300">
        <img
        src="{{asset('6122998818942338176.jpg')}}"
        alt="Couple entrance"
          class="w-full h-64 md:h-80 object-cover"
        >
        <div class="image-sparkle"></div>
      </div>

      <!-- Image 3 -->
      <div class="relative overflow-hidden rounded-xl shadow-2xl hover:scale-105 transition-transform duration-300">
        <img
        src="{{asset('6122998818942338177.jpg')}}"
          alt="First dance"
          class="w-full h-64 md:h-80 object-cover"
        >
        <div class="image-sparkle"></div>
      </div>

      <!-- Image 4 -->
      <div class="relative overflow-hidden rounded-xl shadow-2xl hover:scale-105 transition-transform duration-300">
        <img
        src="{{asset('6122998818942338180.jpg')}}"
          alt="Celebration"
          class="w-full h-64 md:h-80 object-cover"
        >
        <div class="image-sparkle"></div>
      </div>
      <div class="relative overflow-hidden rounded-xl shadow-2xl hover:scale-105 transition-transform duration-300">
        <img
        src="{{asset('6100320322172601027.jpg')}}"
          alt="Celebration"
          class="w-full h-64 md:h-80 object-cover"
        >
        <div class="image-sparkle"></div>
      </div>
      <div class="relative overflow-hidden rounded-xl shadow-2xl hover:scale-105 transition-transform duration-300">
        <img
        src="{{asset('6122998818942338179.jpg')}}"
          alt="Celebration"
          class="w-full h-64 md:h-80 object-cover"
        >
        <div class="image-sparkle"></div>
      </div>
      <div class="relative overflow-hidden rounded-xl shadow-2xl hover:scale-105 transition-transform duration-300">
        <img
        src="{{asset('6122998818942338175.jpg')}}"
          alt="Celebration"
          class="w-full h-64 md:h-80 object-cover"
        >
        <div class="image-sparkle"></div>
      </div>
      <div class="relative overflow-hidden rounded-xl shadow-2xl hover:scale-105 transition-transform duration-300">
        <img
        src="{{asset('6122998818942338178.jpg')}}"
          alt="Celebration"
          class="w-full h-64 md:h-80 object-cover"
        >
        <div class="image-sparkle"></div>
      </div>
    </div>
  </div>
</section>
  </div>
  <script>
    // Add this JavaScript
    document.addEventListener('DOMContentLoaded', function() {
      // ====== FIREWORKS ANIMATION ======
      const container = document.getElementById('fireworks-container');
      const colors = ['#FFD700', '#FF6B6B', '#4ECDC4', '#45B7D1', '#B76E79'];

      function createFirework() {
        const firework = document.createElement('div');
        firework.className = 'firework';

        // Random position (focus around the grid area)
        const x = Math.random() * 80 + 10; // 10-90%
        const y = Math.random() * 50 + 30; // 30-80% (below header)

        firework.style.setProperty('--x', `${x}vw`);
        firework.style.setProperty('--y', `${y}vh`);
        firework.style.boxShadow = `0 0 10px 3px ${colors[Math.floor(Math.random() * colors.length)]}`;

        container.appendChild(firework);

        // Remove after animation
        setTimeout(() => firework.remove(), 1000);
      }

      // Launch fireworks periodically
      setInterval(() => {
        for (let i = 0; i < 3; i++) {
          setTimeout(createFirework, i * 300);
        }
      }, 2000);

      // ====== IMAGE SPARKLE EFFECT ======
      const images = document.querySelectorAll('.grid div');

      images.forEach(img => {
        img.addEventListener('mousemove', (e) => {
          const rect = img.getBoundingClientRect();
          const x = ((e.clientX - rect.left) / rect.width) * 100;
          const y = ((e.clientY - rect.top) / rect.height) * 100;

          const sparkle = img.querySelector('.image-sparkle');
          sparkle.style.setProperty('--sparkle-x', `${x}%`);
          sparkle.style.setProperty('--sparkle-y', `${y}%`);
        });
      });
    });
    </script>
  <script>
    // Add this inside <script> at the end
  document.addEventListener('DOMContentLoaded', function() {
    // ====== Flower Petal Animation ======
    const flowerContainer = document.querySelector('.flower-petals');
    const flowerImages = [
      'https://www.freepnglogos.com/uploads/flower-png/flower-png-romantic-flower-png-transparent-29.png',
      'https://www.freeiconspng.com/uploads/flower-png-33.png',
      'https://www.freepnglogos.com/uploads/rose-flower-png/rose-flower-png-images-download-14.png'
    ];

    function createFlower() {
      const flower = document.createElement('div');
      flower.className = 'flower';

      // Random properties
      const size = Math.random() * 40 + 20;
      const left = Math.random() * 100;
      const duration = Math.random() * 10 + 5;
      const delay = Math.random() * 5;
      const flowerType = flowerImages[Math.floor(Math.random() * flowerImages.length)];

      flower.style.width = `${size}px`;
      flower.style.height = `${size}px`;
      flower.style.left = `${left}%`;
      flower.style.animationDuration = `${duration}s`;
      flower.style.animationDelay = `${delay}s`;
      flower.style.backgroundImage = `url('${flowerType}')`;

      flowerContainer.appendChild(flower);

      // Remove flower after animation completes
      setTimeout(() => flower.remove(), duration * 1000);
    }

    // Create initial flowers
    for (let i = 0; i < 15; i++) {
      setTimeout(createFlower, i * 500);
    }

    // Continue creating flowers
    setInterval(createFlower, 500);

    // ====== Varmala Carousel ======
    const carouselInner = document.querySelector('.varmala-carousel .carousel-inner');
    const prevBtn = document.querySelector('.carousel-prev');
    const nextBtn = document.querySelector('.carousel-next');

    // Sample images (replace with your own)
    const images = [
      "{{asset('6122998818942338170.jpg')}}",
      "{{asset('6122998818942338166.jpg')}}",
      "{{asset('6100320322172601028 (1).jpg')}}",
      "{{asset('6122998818942338166.jpg')}}",
      "{{asset('6122998818942338167.jpg')}}",
      "{{asset('6122998818942338168.jpg')}}",

    ];

    // Add images to carousel
    images.forEach(img => {
      const imgEl = document.createElement('img');
      imgEl.src = img;
      imgEl.alt = 'Varmala Ceremony';
      carouselInner.appendChild(imgEl);
    });

    let currentIndex = 0;
    const totalImages = images.length;

    function updateCarousel() {
      carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    nextBtn.addEventListener('click', () => {
      currentIndex = (currentIndex + 1) % totalImages;
      updateCarousel();
    });

    prevBtn.addEventListener('click', () => {
      currentIndex = (currentIndex - 1 + totalImages) % totalImages;
      updateCarousel();
    });

    // Auto-slide (optional)
    setInterval(() => {
      currentIndex = (currentIndex + 1) % totalImages;
      updateCarousel();
    }, 5000);
  });
  </script>

  <script>
    document.getElementById('playMusicBtn').addEventListener('click', function () {
    const audio = document.getElementById('haldiAudio');
    if (audio.paused) {
      audio.play();
    } else {
      audio.pause();
    }
  });
    document.addEventListener('DOMContentLoaded', function() {
        // Replace these with your actual wedding videos
        const videos = [
            {
                id: "sangeet1",
                title: "Bride's Dance Performance",
                description: "",
                file: "{{asset('@hemilmody_Bride_@shahshikhaaaaGroom_@hemilmody_Wedding_Social_Media.mp4')}}",
                thumbnail: "{{asset('Screenshot 2025-05-10 231132.png')}}"
            },
            {
                id: "sangeet2",
                title: "Sangeet Night",
                file: "{{asset('video6122998818486097279.mp4')}}",
                description: "",
                thumbnail: "{{asset('Screenshot 2025-05-11 001134.png')}}"
            },
            {
                id: "sangeet3",
                title: "Dj Night",
                description: "",
                file: "{{ asset('video6122998818486097287.mp4') }}",
                thumbnail: "Screenshot 2025-05-11 001546.png"
            },
            {
                id: "sangeet3",
                title: "Bride & Groom",
                description: "",
                file: "{{ asset('video6122998818486097338.mp4') }}",
                thumbnail: "Screenshot 2025-05-11 003338.png"
            },
            {
                id: "sangeet3",
                title: "Cousins perfomance",
                description: "",
                file: "{{ asset('video6122998818486097331.mp4') }}",
                thumbnail: "Screenshot 2025-05-11 010433.png"
            }

        ];

        const carouselInner = document.querySelector('.sangeet-container .carousel-inner');
        let currentIndex = 0;

        // Populate carousel with videos
        videos.forEach(video => {
            const videoItem = document.createElement('div');
            videoItem.className = 'video-item';
            videoItem.innerHTML = `
                <video controls poster="${video.thumbnail}">
                    <source src="${video.file}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="video-info">
                    <h3>${video.title}</h3>
                    <p>${video.description}</p>
                </div>
            `;
            carouselInner.appendChild(videoItem);
        });

        // Carousel navigation
        const prevBtn = document.querySelector('.sangeet-container .prev');
        const nextBtn = document.querySelector('.sangeet-container .next');

        function updateCarousel() {
            carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % videos.length;
            updateCarousel();
        });

        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + videos.length) % videos.length;
            updateCarousel();
        });

        // Auto-advance carousel (pauses when video is playing)
        let carouselInterval = setInterval(() => {
            // const activeVideo = carouselInner.children[currentIndex].querySelector('video');
            // if (!activeVideo || activeVideo.paused) {
            //     currentIndex = (currentIndex + 1) % videos.length;
            //     updateCarousel();
            // }
        });

        // Pause auto-advance when any video is playing
        document.querySelectorAll('.sangeet-container video').forEach(video => {
            video.volume = 0;
            video.addEventListener('play', () => {
                audio.pause();
                clearInterval(carouselInterval);
            });
            video.addEventListener('pause', () => {
                carouselInterval = setInterval(() => {
                    const activeVideo = carouselInner.children[currentIndex].querySelector('video');
                    if (!activeVideo || activeVideo.paused) {
                        currentIndex = (currentIndex + 1) % videos.length;
                        updateCarousel();
                    }
                }, 5000);
            });
        });

        // Create music note rain
        function createMusicNotes() {
            const musicNotes = ['♪', '♫', '♩', '♬', '♭', '♮'];
            const container = document.querySelector('.music-notes');

            setInterval(() => {
                const note = document.createElement('div');
                note.className = 'music-note';
                note.textContent = musicNotes[Math.floor(Math.random() * musicNotes.length)];
                note.style.left = Math.random() * 100 + 'vw';
                note.style.animationDuration = 3 + Math.random() * 4 + 's';
                note.style.fontSize = 15 + Math.random() * 20 + 'px';
                note.style.opacity = 0.5 + Math.random() * 0.5;
                container.appendChild(note);

                setTimeout(() => note.remove(), 7000);
            }, 300);
        }

        // Create shining stars
        function createStars() {
            const container = document.querySelector('.shining-stars');

            for (let i = 0; i < 10; i++) {
                const star = document.createElement('div');
                star.className = 'star';
                star.style.width = 2 + Math.random() * 3 + 'px';
                star.style.height = star.style.width;
                star.style.left = Math.random() * 100 + 'vw';
                star.style.top = Math.random() * 100 + 'vh';
                star.style.animationDelay = Math.random() * 5 + 's';
                container.appendChild(star);
            }
        }

        // Create floating hearts
        function createHearts() {
            const container = document.querySelector('.floating-hearts');

            setInterval(() => {
                const heart = document.createElement('div');
                heart.className = 'heart';
                heart.innerHTML = '❤';
                heart.style.left = Math.random() * 100 + 'vw';
                heart.style.animationDuration = 4 + Math.random() * 5 + 's';
                heart.style.fontSize = 10 + Math.random() * 15 + 'px';
                container.appendChild(heart);

                setTimeout(() => heart.remove(), 9000);
            }, 500);
        }

        // Initialize animations
        createMusicNotes();
        createStars();
        createHearts();
    });
    </script>
    <!-- Animation Script -->
    <script>
      const startBtn = document.getElementById('startBtn');
      startBtn.addEventListener('click', () => {
        startBtn.innerHTML = `
          <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-burgundy inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
          </svg>
          Loading...
        `;
        setTimeout(() => {
          startBtn.innerHTML = 'EXPLORE EVENTS';
        }, 2000);
      });

      // Initialize carousels
      function initCarousel(carouselId, navId, thumbnailsId) {
        const carousel = document.getElementById(carouselId);
        const nav = document.getElementById(navId);
        const thumbnails = document.getElementById(thumbnailsId);
        const images = carousel.querySelectorAll('.carousel-image');
        const thumbnailImages = thumbnails.querySelectorAll('.thumbnail');

        let currentIndex = 0;
        let interval;

        // Create navigation dots
        images.forEach((_, index) => {
          const dot = document.createElement('div');
          dot.className = 'carousel-dot' + (index === 0 ? ' active' : '');
          dot.dataset.index = index;
          dot.addEventListener('click', () => goToSlide(index));
          nav.appendChild(dot);
        });

        // Thumbnail click event
        thumbnailImages.forEach(thumbnail => {
          thumbnail.addEventListener('click', () => {
            const index = parseInt(thumbnail.dataset.index);
            goToSlide(index);
            resetInterval();
          });
        });

        function goToSlide(index) {
          currentIndex = index;
          carousel.style.transform = `translateX(-${currentIndex * 100}%)`;

          // Update active dot
          nav.querySelectorAll('.carousel-dot').forEach((dot, i) => {
            dot.classList.toggle('active', i === currentIndex);
          });

          // Update active thumbnail
          thumbnailImages.forEach((thumb, i) => {
            thumb.classList.toggle('active', i === currentIndex);
          });
        }

        function nextSlide() {
          currentIndex = (currentIndex + 1) % images.length;
          goToSlide(currentIndex);
        }

        function resetInterval() {
          clearInterval(interval);
          interval = setInterval(nextSlide, 5000);
        }

        // Auto-rotate
        interval = setInterval(nextSlide, 5000);

        // Pause on hover
        carousel.addEventListener('mouseenter', () => clearInterval(interval));
        carousel.addEventListener('mouseleave', resetInterval);
      }

      // Initialize both carousels
      document.addEventListener('DOMContentLoaded', () => {
        initCarousel('haldiCarousel', 'haldiNav', 'haldiThumbnails');
        initCarousel('weddingCarousel', 'weddingNav', 'weddingThumbnails');

        // Set active footer dot
        const footerDots = document.querySelectorAll('.footer-dot');
        footerDots[1].classList.add('active');
      });
    </script>
 <script>
  // Main Carousel functionality
  document.addEventListener('DOMContentLoaded', function() {
    const carouselInner = document.getElementById('carousel-inner');
    const carouselItems = document.querySelectorAll('.carousel-item');
    const indicatorsContainer = document.getElementById('carousel-indicators');
    const prevBtn = document.querySelector('.carousel-prev');
    const nextBtn = document.querySelector('.carousel-next');

    let currentIndex = 0;
    const totalItems = carouselItems.length;

    // Create indicators
    carouselItems.forEach((_, index) => {
      const indicator = document.createElement('div');
      indicator.className = 'carousel-indicator' + (index === 0 ? ' active' : '');
      indicator.dataset.index = index;
      indicator.addEventListener('click', () => {
        goToSlide(index);
      });
      indicatorsContainer.appendChild(indicator);
    });

    // Update carousel position
    function updateCarousel() {
      carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;

      // Update active indicator
      document.querySelectorAll('.carousel-indicator').forEach((indicator, index) => {
        indicator.classList.toggle('active', index === currentIndex);
      });
    }

    function goToSlide(index) {
      currentIndex = index;
      updateCarousel();
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % totalItems;
      updateCarousel();
    }

    function prevSlide() {
      currentIndex = (currentIndex - 1 + totalItems) % totalItems;
      updateCarousel();
    }

    // Button events
    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);

    // Auto-rotate
    let interval = setInterval(nextSlide, 5000);

    // Pause on hover
    const carousel = document.querySelector('.carousel');
    carousel.addEventListener('mouseenter', () => {
      clearInterval(interval);
    });

    carousel.addEventListener('mouseleave', () => {
      interval = setInterval(nextSlide, 5000);
    });
  });

  // Haldi Carousel functionality
  function initHaldiCarousel() {
    const carousel = document.getElementById('haldiCarousel');
    const nav = document.getElementById('haldiNav');
    const thumbnails = document.getElementById('haldiThumbnails');
    const images = carousel.querySelectorAll('.carousel-image');
    const thumbnailImages = thumbnails.querySelectorAll('.thumbnail');

    let currentIndex = 0;
    let interval;

    // Create navigation dots
    images.forEach((_, index) => {
      const dot = document.createElement('div');
      dot.className = 'carousel-dot' + (index === 0 ? ' active' : '');
      dot.dataset.index = index;
      dot.addEventListener('click', () => goToSlide(index));
      nav.appendChild(dot);
    });

    // Thumbnail click event
    thumbnailImages.forEach(thumbnail => {
      thumbnail.addEventListener('click', () => {
        const index = parseInt(thumbnail.dataset.index);
        goToSlide(index);
        resetInterval();
      });
    });

    function goToSlide(index) {
      currentIndex = index;
      carousel.style.transform = `translateX(-${currentIndex * 100}%)`;

      // Update active dot
      nav.querySelectorAll('.carousel-dot').forEach((dot, i) => {
        dot.classList.toggle('active', i === currentIndex);
      });

      // Update active thumbnail
      thumbnailImages.forEach((thumb, i) => {
        thumb.classList.toggle('active', i === currentIndex);
      });
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % images.length;
      goToSlide(currentIndex);
    }

    function resetInterval() {
      clearInterval(interval);
      interval = setInterval(nextSlide, 5000);
    }

    // Auto-rotate
    interval = setInterval(nextSlide, 5000);

    // Pause on hover
    carousel.addEventListener('mouseenter', () => clearInterval(interval));
    carousel.addEventListener('mouseleave', resetInterval);
  }

  // Initialize carousels when DOM is loaded
  document.addEventListener('DOMContentLoaded', function() {
    initHaldiCarousel();

    // Set active footer dot
    const footerDots = document.querySelectorAll('.footer-dot');
    if (footerDots.length > 1) {
      footerDots[1].classList.add('active');
    }
  });

  // Confetti animation for buttons
  document.addEventListener('DOMContentLoaded', function() {
    const applyBtn = document.querySelector('.btn-gold');
    const signupBtn = document.querySelector('.btn-outline-gold');

    function createConfetti(x, y) {
      const colors = ['#E1733A', '#D4AF37', '#FF6B6B', '#4ECDC4', '#45B7D1'];
      const confetti = document.createElement('div');
      confetti.className = 'confetti';
      confetti.style.left = `${x}px`;
      confetti.style.top = `${y}px`;
      confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
      document.getElementById('confetti-container').appendChild(confetti);

      // Animation
      const angle = Math.random() * Math.PI * 2;
      const velocity = 3 + Math.random() * 3;
      const rotation = Math.random() * 360;
      const size = 5 + Math.random() * 10;

      confetti.style.width = `${size}px`;
      confetti.style.height = `${size}px`;
      confetti.style.opacity = '1';

      let posX = x;
      let posY = y;
      let opacity = 1;
      let scale = 1;

      const animate = () => {
        posX += Math.cos(angle) * velocity;
        posY += Math.sin(angle) * velocity + 0.5; // gravity
        opacity -= 0.02;
        scale -= 0.01;

        confetti.style.left = `${posX}px`;
        confetti.style.top = `${posY}px`;
        confetti.style.opacity = opacity;
        confetti.style.transform = `rotate(${rotation}deg) scale(${scale})`;

        if (opacity > 0) {
          requestAnimationFrame(animate);
        } else {
          confetti.remove();
        }
      };

      requestAnimationFrame(animate);
    }

    if (applyBtn) {
      applyBtn.addEventListener('click', (e) => {
        for (let i = 0; i < 50; i++) {
          setTimeout(() => {
            createConfetti(e.clientX, e.clientY);
          }, i * 20);
        }
      });
    }

    if (signupBtn) {
      signupBtn.addEventListener('click', (e) => {
        for (let i = 0; i < 30; i++) {
          setTimeout(() => {
            createConfetti(e.clientX, e.clientY);
          }, i * 20);
        }
      });
    }
  });
</script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            gold: '#D4AF37',
            rosegold: '#B76E79',
            champagne: '#F7E7CE',
            burgundy: '#800020',
            navy: '#000080',
            haldi: '#FFC324',  // Vibrant turmeric yellow
            haldiLight: '#FFE8B8', // Light turmeric
            haldiDark: '#E89C00' // Dark turmeric
          }
        }
      }
    }
    document.addEventListener('DOMContentLoaded', function() {
    const colors = ['#FF6B6B', '#FF8E8E', '#FFAAAA', '#FFC3C3', '#FFD8D8'];
    const container = document.getElementById('hearts-container');

    function createHeart() {
      const heart = document.createElement('div');
      heart.className = 'heart';

      // Random properties
      const size = Math.random() * 20 + 10;
      const left = Math.random() * 100;
      const duration = Math.random() * 5 + 5;
      const delay = Math.random() * 5;
      const color = colors[Math.floor(Math.random() * colors.length)];

      heart.innerHTML = `
        <svg width="${size}" height="${size}" viewBox="0 0 24 24" fill="${color}">
          <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
        </svg>
      `;

      heart.style.left = `${left}%`;
      heart.style.bottom = `-${size}px`;
      heart.style.animationDuration = `${duration}s`;
      heart.style.animationDelay = `${delay}s`;

      container.appendChild(heart);

      // Remove heart after animation completes
      setTimeout(() => {
        heart.remove();
      }, duration * 1000);
    }

    // Create initial hearts
    for (let i = 0; i < 15; i++) {
      setTimeout(createHeart, i * 300);
    }

    // Continue creating hearts
    setInterval(createHeart, 300);
  });
  </script>
</body>
</html>
