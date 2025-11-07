<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Oscar Ndodo — Desenvolvedor FullStack</title>
  <meta name="description" content="Transforme seu negócio com soluções digitais de alto nível. Desenvolvimento web e mobile profissional em Moçambique.">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="icon" href="https://github.com/oscarndodo.png">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');

    :root {
      --primary: #1e3a8a;
      --secondary: #2563eb;
      --accent: #f59e0b;
    }

    * {
      font-family: 'Inter', sans-serif;
      scroll-behavior: smooth;
    }

    .gradient-bg {
      background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
      position: relative;
      overflow: hidden;
    }

    .gradient-bg::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .gradient-text {
      background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .hover-lift {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-lift:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .fade-in {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .fade-in.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .stagger-item {
      opacity: 0;
      transform: translateY(20px);
    }

    .stagger-item.visible {
      opacity: 1;
      transform: translateY(0);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }

    .nav-link {
      position: relative;
    }

    .nav-link::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: -4px;
      left: 0;
      background-color: var(--secondary);
      transition: width 0.3s ease;
    }

    .nav-link:hover::after {
      width: 100%;
    }

    .mobile-menu {
      transform: translateX(-100%);
      transition: transform 0.3s ease;
    }

    .mobile-menu.open {
      transform: translateX(0);
    }

    .back-to-top {
      position: fixed;
      bottom: 2rem;
      right: 2rem;
      width: 3rem;
      height: 3rem;
      background: var(--secondary);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      z-index: 100;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }

    .back-to-top.visible {
      opacity: 1;
      visibility: visible;
    }

    .back-to-top:hover {
      background: var(--primary);
      transform: translateY(-3px);
    }

    .floating {
      animation: floating 3s ease-in-out infinite;
    }

    @keyframes floating {

      0%,
      100% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-10px);
      }
    }

    .skeleton {
      background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
      background-size: 200% 100%;
      animation: loading 1.5s infinite;
      border-radius: 0.5rem;
    }

    @keyframes loading {
      0% {
        background-position: 200% 0;
      }

      100% {
        background-position: -200% 0;
      }
    }

    .hero-pattern {
      background-image: radial-gradient(circle at 25% 25%, rgba(37, 99, 235, 0.2) 0%, transparent 55%),
        radial-gradient(circle at 75% 75%, rgba(139, 92, 246, 0.15) 0%, transparent 55%);
    }

    .tech-icon {
      width: 60px;
      height: 60px;
      object-fit: contain;
      filter: grayscale(0.3);
      transition: all 0.3s ease;
    }

    .tech-icon:hover {
      filter: grayscale(0);
      transform: scale(1.1);
    }

    .project-image {
      height: 200px;
      object-fit: cover;
      width: 100%;
    }

    @media (max-width: 768px) {
      .back-to-top {
        bottom: 1rem;
        right: 1rem;
      }
    }
  </style>
</head>

<body class="antialiased text-slate-800 bg-slate-50">
  <?php
  // === Contador de visitas ===
  $file = 'visitas.json';
  if (!file_exists($file)) file_put_contents($file, json_encode(['visitas' => 100]));
  $data = json_decode(file_get_contents($file), true);
  $data['visitas']++;
  file_put_contents($file, json_encode($data));
  $total_visitas = $data['visitas'];
  ?>

  <!-- Back to Top Button -->
  <div id="backToTop" class="back-to-top">
    <i class="fas fa-chevron-up"></i>
  </div>

  <!-- NAV -->
  <header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 flex items-center justify-between h-16">
      <a href="#" class="flex items-center gap-3">
        <div
          class="w-10 h-10 rounded-full bg-blue-700 flex items-center justify-center text-white font-bold transition-transform hover:scale-105">
          ON</div>
        <div>
          <div class="text-lg font-semibold">Oscar Ndodo</div>
          <div class="text-xs text-slate-500">Soluções Digitais</div>
        </div>
      </a>

      <!-- Desktop Navigation -->
      <nav class="hidden md:flex gap-6 text-sm text-slate-600">
        <a href="#beneficios" class="nav-link hover:text-blue-700">Benefícios</a>
        <a href="#tecnologias" class="nav-link hover:text-blue-700">Tecnologias</a>
        <a href="#projetos" class="nav-link hover:text-blue-700">Projetos</a>
        <a href="#estatisticas" class="nav-link hover:text-blue-700">Estatísticas</a>
        <a href="#contato" class="nav-link hover:text-blue-700">Contacto</a>
      </nav>

      <!-- Mobile Menu Button -->
      <button id="mobileMenuButton" type="button" class="md:hidden text-slate-600">
        <i class="fas fa-bars text-xl"></i>
      </button>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobileMenu" class="mobile-menu md:hidden absolute top-16 left-0 w-full bg-white shadow-lg py-4 px-6">
      <div class="flex flex-col gap-4">
        <a href="#beneficios" class="py-2 border-b border-slate-100 hover:text-blue-700">Benefícios</a>
        <a href="#tecnologias" class="py-2 border-b border-slate-100 hover:text-blue-700">Tecnologias</a>
        <a href="#projetos" class="py-2 border-b border-slate-100 hover:text-blue-700">Projetos</a>
        <a href="#estatisticas" class="py-2 border-b border-slate-100 hover:text-blue-700">Estatísticas</a>
        <a href="#contato" class="py-2 hover:text-blue-700">Contacto</a>
      </div>
    </div>
  </header>

  <!-- HERO SECTION COMPLETAMENTE REDESENHADO -->
  <section class="gradient-bg text-white relative overflow-hidden">
    <div class="hero-pattern absolute inset-0"></div>
    <div class="max-w-7xl mx-auto px-6 py-20 md:py-32 relative z-10">
      <div class="grid lg:grid-cols-2 gap-12 sm:gap-x-32 xl:gap-x-52 items-center">
        <div class="fade-in">

          <h1 class="text-4xl lg:text-6xl font-extrabold leading-tight mb-6 uppercase">
            Transforme <span class="gradient-text">Suas Ideias</span> em Realidade.
          </h1>

          <p class="text-lg text-blue-100/90 leading-relaxed my-8">
            Soluções digitais inovadoras que impulsionam negócios e resolvem problemas complexos.
            Combinando design elegante com tecnologia de ponta para entregar experiências excepcionais.
          </p>

          <div class="flex flex-col sm:flex-row gap-4 mb-10">
            <a href="#contato"
              class="bg-white text-blue-700 px-8 py-4 rounded-xl font-bold shadow-lg hover:bg-blue-50 transition-all duration-300 transform hover:-translate-y-1 flex items-center justify-center gap-2">
              <i class="fas fa-rocket"></i>
              Iniciar Projeto
            </a>
            <a href="#projetos"
              class="border border-white/30 px-8 py-4 rounded-xl text-white font-bold hover:bg-white/10 transition-all duration-300 transform hover:-translate-y-1 flex items-center justify-center gap-2">
              <i class="fas fa-eye"></i>
              Ver Portfólio
            </a>
          </div>

          <div class="flex flex-wrap gap-6 text-sm text-slate-300">
            <div class="flex items-center gap-2">
              <div class="w-3 h-3 bg-green-500 rounded-full"></div>
              <span><?= $total_visitas ?> Visualizações</span>
            </div>
            <!-- <div class="flex items-center gap-2">
              <i class="fas fa-clock text-yellow-400"></i>
              <span><?php echo date("Y") - 2021; ?> Anos de Experiência</span>
            </div> -->
            <div class="flex items-center gap-2">
              <i class="fas fa-map-marker-alt"></i>
              <span>Nampula, Moçambique</span>
            </div>
          </div>
        </div>

        <div class="fade-in relative">
          <div class="relative">
            <div class="absolute -top-6 -left-6 w-72 h-72 bg-blue-500/20 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-6 -right-6 w-72 h-72 bg-purple-500/20 rounded-full blur-3xl"></div>

            <div class="relative bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-8 h-full shadow-2xl gap-x-10 flex items-center justify-evenly">
              <div class="flex justify-center">
                <img src="https://github.com/oscarndodo.png" alt="Oscar Ndodo"
                  class="w-48 h-48 rounded-2xl shadow-2xl border-4 border-blue-500 floating">
              </div>

              <div class="">
                <h3 class="text-2xl font-bold mb-2">Óscar Ndodo</h3>
                <p class="text-blue-200 mb-4 text-center">Fullstack Developer <br /> Tech Consultant</p>

                <!-- <div class="flex justify-center gap-4 mb-6">
                  <div class="text-center">
                    <div class="text-xl font-bold text-white">50+</div>
                    <div class="text-xs text-blue-300">Projetos</div>
                  </div>
                  <div class="text-center">
                    <div class="text-xl font-bold text-white">30+</div>
                    <div class="text-xs text-blue-300">Clientes</div>
                  </div>
                  <div class="text-center">
                    <div class="text-xl font-bold text-white">6+</div>
                    <div class="text-xs text-blue-300">Anos</div>
                  </div>
                </div> -->

                <div class="flex justify-center gap-3">
                  <a href="https://facebook.com/devndodo" target="_blank"
                    class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition">
                    <i class="fab fa-facebook"></i>
                  </a>
                  <a href="https://wa.me/258845512288" target="_blank"
                    class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition">
                    <i class="fab fa-whatsapp"></i>
                  </a>
                  <a href="https://github.com/oscarndodo" target="_blank"
                    class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition">
                    <i class="fab fa-github"></i>
                  </a>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- BENEFÍCIOS -->
  <section id="beneficios" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 fade-in">
        <h2 class="text-3xl xl:text-5xl font-bold text-blue-700 uppercase">Por Que Escolher<br />Meus serviços?</h2>
        <p class="mt-2 text-slate-600">Entrega de valor real para seu negócio</p>
      </div>

      <div class="grid md:grid-cols-3 gap-8">
        <?php
        $beneficios = [
          ['🎯', 'Resultados Reais', 'Soluções que trazem lucro e ajudam o seu negócio a crescer'],
          ['⚡', 'Alta Velocidade', 'Sites e apps rápidos que transformam visitantes em clientes'],
          ['🛡️', 'Segurança Total', 'Os seus dados sempre protegidos, de acordo com as normas internacionais'],
          ['📱', 'Design Adaptável', 'Funciona bem em qualquer telefone, tablet ou computador'],
          ['🔧', 'Assistência Permanente', 'Acompanhamento e actualizações para tudo continuar a funcionar bem'],
          ['💎', 'Código Profissional', 'Trabalhamos com boas práticas para garantir qualidade e confiança']
        ];

        foreach ($beneficios as $i => $b) {
          $delay = $i * 0.1;
          echo "
          <div class='bg-white rounded-2xl p-6 border hover-lift stagger-item' style='transition-delay: {$delay}s'>
            <div class='text-4xl mb-4'>{$b[0]}</div>
            <h3 class='font-semibold text-lg mb-3 text-slate-900'>{$b[1]}</h3>
            <p class='text-slate-600 leading-relaxed'>{$b[2]}</p>
          </div>";
        }
        ?>
      </div>
    </div>
  </section>

  <!-- TECNOLOGIAS -->
  <section id="tecnologias" class="py-20 bg-slate-900 text-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 fade-in">
        <h2 class="text-4xl font-bold text-blue-300 uppercase">Tecnológias Modernas</h2>
        <p class="mt-2 text-slate-400">As melhores ferramentas para os melhores resultados</p>
      </div>

      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6">
        <?php
        $techs = [
          ['React', 'https://upload.wikimedia.org/wikipedia/commons/a/a7/React-icon.svg'],
          ['Laravel', 'https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg'],
          ['TailwindCSS', 'https://upload.wikimedia.org/wikipedia/commons/d/d5/Tailwind_CSS_Logo.svg'],
          ['React Native', 'https://upload.wikimedia.org/wikipedia/commons/a/a7/React-icon.svg'],
          ['Node.js', 'https://upload.wikimedia.org/wikipedia/commons/d/d9/Node.js_logo.svg'],
          ['MySQL', 'https://www.svgrepo.com/show/303251/mysql-logo.svg']
        ];

        foreach ($techs as $i => $t) {
          $delay = $i * 0.1;
          echo "
          <div class='bg-slate-800 rounded-2xl p-6 text-center hover-lift stagger-item' style='transition-delay: {$delay}s'>
            <img src='{$t[1]}' alt='{$t[0]}' class='tech-icon mx-auto mb-3'>
            <div class='font-bold text-lg'>{$t[0]}</div>
          </div>";
        }
        ?>
      </div>
    </div>
  </section>

  <!-- PROJETOS -->
  <section id="projetos" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 fade-in">
        <h2 class="text-4xl font-bold text-blue-700 uppercase">Projetos realizados</h2>
        <p class="mt-2 text-slate-600">Soluções reais de clientes reais em destaque</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php
        $projetos = [
          ['Explicador', 'Plataforma para realizar simulações baixar exames e livros.', 'https://explicador.site', 'explicador.png'],
          ['CS-MEPI', 'Website e Sistema completo de gestão clínica e pacientes.', 'https://cs-mepi.com', 'csmepi.png'],
          ['Wooneya', 'Plataforma da editora de livros e comunicação visual.', 'https://wooneya.co.mz', 'wooneya.png'],
          ['QuikaCV', 'Gerador profissional de CVs e cartas de pedido de emprego online.', 'https://quikacv.com', 'quickacv.png'],
          ['SIMMiruku', 'Sistema inteligente de gestão de projectos da organização Miruku Coop', 'https://simmiruku.co.mz', 'simmiruku.png'],
          ['Ceprone', 'Website e Blog da empesa aceleradora de negócios Ceprone', 'https://ceprone.com', 'ceprone.png'],
          ['SYCOBI', 'Sistema simples e rápido para compra de bilhetes sem sair de casa', 'https://sycobi.com', 'sycobi.png'],
          ['Imagem Agency', 'Website da agência de publicidade e marketing', 'https://imagemagency.com', 'imagemagency.png'],
          ['LaraHash', 'Ferramenta de desenvolvimento para Laravel', 'https://larahash.ceprone.com', 'larahash.png']
        ];

        foreach ($projetos as $i => $p) {
          $delay = $i * 0.1;
          echo "
          <div class='group bg-white rounded-2xl overflow-hidden shadow border hover-lift stagger-item' style='transition-delay: {$delay}s'>
            <div class='relative overflow-hidden'>
              <img src='{$p[3]}' alt='{$p[0]}' class='project-image group-hover:scale-105 transition-transform duration-300'>
              <div class='absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300'></div>
            </div>
            <div class='p-6'>
              <h3 class='font-semibold text-lg mb-2 text-slate-900'>{$p[0]}</h3>
              <p class='text-slate-600 mb-4'>{$p[1]}</p>
              <a href='{$p[2]}' target='_blank' 
                 class='inline-flex items-center text-blue-600 font-medium hover:text-blue-700'>
                Visitar Projeto <i class='fas fa-arrow-right ml-1'></i>
              </a>
            </div>
          </div>";
        }
        ?>
      </div>
    </div>
  </section>

  <!-- ESTATÍSTICAS -->
  <section id="estatisticas" class="py-20 gradient-bg text-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid md:grid-cols-4 gap-8 text-center">
        <?php
        $stats = [
          ['20+', 'Projetos Entregues'],
          ['13+', 'Clientes Satisfeitos'],
          ['4+', 'Anos de Experiência'],
          ['89%', 'Taxa de Satisfação']
        ];

        foreach ($stats as $i => $s) {
          $delay = $i * 0.1;
          echo "
          <div class='fade-in' style='transition-delay: {$delay}s'>
            <div class='text-4xl md:text-5xl font-bold mb-2 gradient-text'>{$s[0]}</div>
            <div class='text-lg text-slate-300'>{$s[1]}</div>
          </div>";
        }
        ?>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contato" class="bg-blue-50 py-20">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-10">
        <div class="fade-in">
          <h2 class="text-3xl font-bold text-blue-700">Entre em Contacto</h2>
          <p class="mt-4 text-slate-600">Tem um projeto em mente?<br> Gostaria de ter um Website ou Aplicativo?<br> Entre em contacto!</p>

          <div class="mt-8 space-y-4">
            <div class="flex items-start gap-4">
              <div
                class="w-10 h-10 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center">
                <i class="fas fa-envelope"></i>
              </div>
              <div>
                <h4 class="font-medium">Email Pessoal</h4>
                <p class="text-slate-600 text-sm">oscarndodo12@gmail.com</p>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <div
                class="w-10 h-10 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center">
                <i class="fas fa-envelope"></i>
              </div>
              <div>
                <h4 class="font-medium">Email Coorporativo</h4>
                <p class="text-slate-600 text-sm">supporte@oscarndodo.com</p>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <div
                class="w-10 h-10 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center">
                <i class="fas fa-phone"></i>
              </div>
              <div>
                <h4 class="font-medium">Telefone</h4>
                <p class="text-slate-600 text-sm">258 84 55 1 22 88</p>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <div
                class="w-10 h-10 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div>
                <h4 class="font-medium">Localização</h4>
                <p class="text-slate-600 text-sm">Nampula, Moçambique</p>
              </div>
            </div>
          </div>

          <div class="mt-8 flex gap-4">
            <a href="https://wa.me/258845512288" target="_blank"
              class="w-10 h-10 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center hover:bg-blue-200 transition">
              <i class="fab fa-whatsapp"></i>
            </a>
            <a href="https://facebook.com/devndodo" target="_blank"
              class="w-10 h-10 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center hover:bg-blue-200 transition">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="https://github.com/OscarNdodo" target="_blank"
              class="w-10 h-10 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center hover:bg-blue-200 transition">
              <i class="fab fa-github"></i>
            </a>
            <a href="https://linktr.ee/oscarndodo" target="_blank"
              class="w-10 h-10 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center hover:bg-blue-200 transition">
              <i class="fas fa-link"></i>
            </a>
          </div>
        </div>

        <div class="bg-white rounded-2xl border fade-in" style="transition-delay: 0.2s">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d240.72814930811094!2d39.22991839849063!3d-15.12258513296541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18c6370d6cfd2707%3A0xbdc636d8e0060384!2skhoy-khoy!5e0!3m2!1spt-PT!2smz!4v1762514518018!5m2!1spt-PT!2smz" class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-blue-900 text-blue-100 py-10">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid md:grid-cols-4 gap-8">
        <div>
          <div class="flex items-center gap-3 mb-4">
            <div
              class="w-10 h-10 rounded-full bg-blue-700 flex items-center justify-center text-white font-bold">
              ON</div>
            <div>
              <div class="text-lg font-semibold">Óscar Ndodo</div>
            </div>
          </div>
          <p class="text-sm text-blue-200/80">Desenvolvimento de Websites, Sistemas e Aplicativos para pessoas e empresas que desejam se destacar no mercado digital.</p>
        </div>

        <div>
          <h4 class="font-semibold mb-4">Links Rápidos</h4>
          <ul class="space-y-2 text-sm">
            <li><a href="#beneficios" class="hover:text-white transition">Benefícios</a></li>
            <li><a href="#tecnologias" class="hover:text-white transition">Tecnologias</a></li>
            <li><a href="#projetos" class="hover:text-white transition">Projetos</a></li>
            <li><a href="#contato" class="hover:text-white transition">Contacto</a></li>
          </ul>
        </div>

        <div>
          <h4 class="font-semibold mb-4">Serviços</h4>
          <ul class="space-y-2 text-sm">
            <li><a href="#" class="hover:text-white transition">Desenvolvimento de Website / Sites</a></li>
            <li><a href="#" class="hover:text-white transition">Aplicativos Android / IOS</a></li>
            <li><a href="#" class="hover:text-white transition">Email Profissional</a></li>
            <li><a href="#" class="hover:text-white transition">Consultoria</a></li>
            <li><a href="#" class="hover:text-white transition">Manutenção</a></li>
          </ul>
        </div>

        <div>
          <h4 class="font-semibold mb-4">Newsletter</h4>
          <p class="text-sm text-blue-200/80 mb-3">Subscreva para receber as nossas novidades.</p>
          <div class="flex">
            <input type="email" placeholder="Seu email" disabled
              class="flex-1 px-3 py-2 text-slate-800 rounded-l-lg outline-none">
            <button type="button" disabled class="bg-blue-700 px-4 py-2 rounded-r-lg hover:bg-blue-600 transition"><i
                class="fas fa-paper-plane"></i></button>
          </div>
        </div>
      </div>

      <div class="border-t border-blue-800 mt-8 pt-6 text-center text-sm text-blue-200/70">
        <p>©<span id="year"></span> Oscar Ndodo — Todos os direitos reservados.</p>
      </div>
    </div>
  </footer>

  <script>
    // Set current year in footer
    document.getElementById('year').textContent = new Date().getFullYear();

    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    mobileMenuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('open');
      const icon = mobileMenuButton.querySelector('i');
      if (mobileMenu.classList.contains('open')) {
        icon.classList.remove('fa-bars');
        icon.classList.add('fa-times');
      } else {
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
      }
    });

    // Close mobile menu when clicking on a link
    const mobileMenuLinks = mobileMenu.querySelectorAll('a');
    mobileMenuLinks.forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.remove('open');
        mobileMenuButton.querySelector('i').classList.remove('fa-times');
        mobileMenuButton.querySelector('i').classList.add('fa-bars');
      });
    });

    // Scroll animations
    const fadeElements = document.querySelectorAll('.fade-in');
    const staggerElements = document.querySelectorAll('.stagger-item');

    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, observerOptions);

    fadeElements.forEach(el => observer.observe(el));

    staggerElements.forEach((el, index) => {
      // Add delay based on index for staggered animation
      el.style.transitionDelay = `${index * 0.1}s`;
      observer.observe(el);
    });

    // Back to top button
    const backToTop = document.getElementById('backToTop');

    window.addEventListener('scroll', () => {
      if (window.pageYOffset > 300) {
        backToTop.classList.add('visible');
      } else {
        backToTop.classList.remove('visible');
      }
    });

    backToTop.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });

    // Add loading state to buttons for better UX
    const buttons = document.querySelectorAll('button, a[href="#"]');
    buttons.forEach(button => {
      button.addEventListener('click', (e) => {
        // Only for demonstration - in a real site, this would be conditional
        if (button.type === 'submit') {
          e.preventDefault();

          const originalText = button.innerHTML;
          button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processando...';
          button.disabled = true;

          setTimeout(() => {
            button.innerHTML = originalText;
            button.disabled = false;

            // Show success message (in a real app, this would be conditional)
            if (button.type === 'submit') {
              alert('Mensagem enviada com sucesso! Entraremos em contacto em breve.');
            }
          }, 1500);
        }
      });
    });
  </script>
</body>

</html>