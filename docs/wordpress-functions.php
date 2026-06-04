<?php
/**
 * Flamingo Medical & Wellness shared Elementor assets and layout.
 *
 * Paste each cleaned HTML file into an Elementor HTML widget. This file supplies
 * the shared libraries, styles, header, footer, icon setup and animations.
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('flamingo_enqueue_assets')) {
function flamingo_enqueue_assets() {
    wp_enqueue_style(
        'flamingo-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@500;600;700&display=swap',
        array(),
        null
    );

    wp_enqueue_script('tailwindcdn', 'https://cdn.tailwindcss.com', array(), null, false);
    wp_add_inline_script('tailwindcdn', "tailwind.config = {
    theme: {
        extend: {
            colors: {
                blue: '#2596be',
                navy: '#071426',
                soft: '#eaf8fb',
                ivory: '#FBFFFE'
            },
            fontFamily: {
                body: ['Inter', 'sans-serif'],
                display: ['Playfair Display', 'serif']
            },
            boxShadow: {
                premium: '0 24px 70px rgba(7,20,38,0.12)',
                blue: '0 24px 60px rgba(37,150,190,0.18)'
            }
        }
    }
};", 'after');

    wp_enqueue_script('lucide-icons', 'https://unpkg.com/lucide@latest', array(), null, true);
    wp_enqueue_script('lottie-player', 'https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js', array(), null, true);
    wp_enqueue_script('lordicon', 'https://cdn.lordicon.com/lordicon.js', array(), null, true);
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), '3.12.5', true);
    wp_enqueue_script('gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', array('gsap'), '3.12.5', true);
}
}
if (!has_action('wp_enqueue_scripts', 'flamingo_enqueue_assets')) {
  add_action('wp_enqueue_scripts', 'flamingo_enqueue_assets');
}

if (!function_exists('flamingo_inline_theme_styles')) {
function flamingo_inline_theme_styles() {
    $css = <<<'FLAMINGO_CSS'
/* about.html */
html { scroll-behavior: smooth; }
body { background:#FBFFFE; color:#071426; font-family:Inter,sans-serif; }

.sharp-card { border-radius:36px 36px 36px 10px; }
.sharp-card-alt { border-radius:10px 36px 36px 36px; }
.image-sharp { border-radius:46px 46px 46px 12px; }
.image-sharp-alt { border-radius:12px 46px 46px 46px; }
.wing-shape { border-radius:110px 16px 110px 16px; }

.btn-sharp {
  border-radius:999px 999px 999px 12px;
  transition:.35s ease;
}

.btn-sharp:hover {
  transform:translateY(-3px);
  box-shadow:0 18px 42px rgba(37,150,190,.28);
}

.reveal,
.reveal-card {
  opacity:0;
  transform:translateY(38px);
}

.image-hover { overflow:hidden; }
.image-hover img { transition:transform .8s ease, filter .8s ease; }
.image-hover:hover img { transform:scale(1.06); filter:contrast(1.05); }

/* aesthetics.html */
html { scroll-behavior: smooth; }
body { background:#FBFFFE; color:#071426; font-family:Inter,sans-serif; }

.sharp-card { border-radius:36px 36px 36px 10px; }
.sharp-card-alt { border-radius:10px 36px 36px 36px; }
.image-sharp { border-radius:46px 46px 46px 12px; }
.wing-shape { border-radius:110px 16px 110px 16px; }

.btn-sharp {
  border-radius:999px 999px 999px 12px;
  transition:.35s ease;
}

.btn-sharp:hover {
  transform:translateY(-3px);
  box-shadow:0 18px 42px rgba(37,150,190,.28);
}

.reveal,
.reveal-card {
  opacity:0;
  transform:translateY(38px);
}

.image-hover { overflow:hidden; }
.image-hover img { transition:transform .8s ease, filter .8s ease; }
.image-hover:hover img { transform:scale(1.06); filter:contrast(1.05); }

/* contact.html */
html{
scroll-behavior:smooth;
}

body{
background:#FBFFFE;
color:#071426;
font-family:Inter,sans-serif;
overflow-x:hidden;
}

.sharp-card{
border-radius:36px 36px 36px 10px;
}

.sharp-card-alt{
border-radius:10px 36px 36px 36px;
}

.image-sharp{
border-radius:46px 46px 46px 12px;
}

.image-sharp-alt{
border-radius:12px 46px 46px 46px;
}

.wing-shape{
border-radius:110px 16px 110px 16px;
}

.btn-sharp{
border-radius:999px 999px 999px 12px;
transition:.35s ease;
}

.btn-sharp:hover{
transform:translateY(-3px);
box-shadow:0 18px 42px rgba(37,150,190,.28);
}

.reveal,
.reveal-card{
opacity:0;
transform:translateY(38px);
}

.image-hover{
overflow:hidden;
}

.image-hover img{
transition:transform .8s ease, filter .8s ease;
}

.image-hover:hover img{
transform:scale(1.06);
filter:contrast(1.05);
}

.glow{
filter:blur(90px);
}

/* copy-index.html */
html { scroll-behavior: smooth; }

    .hero-slide {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: right center;
  opacity: 0;
  transform: scale(1.04);
  transition: opacity 1s ease, transform 5s ease;
}

.hero-slide.active {
  opacity: 1;
  transform: scale(1);
}

.hero-dot {
  width: 11px;
  height: 11px;
  border-radius: 999px;
  background: rgba(255,255,255,0.35);
  transition: 0.3s ease;
}

.hero-dot.active {
  width: 38px;
  background: #2596be;
}
    .sharp-card {
      border-radius: 36px 36px 36px 10px;
    }

    .sharp-card-alt {
      border-radius: 10px 36px 36px 36px;
    }

    .image-sharp {
      border-radius: 46px 46px 46px 12px;
    }

    .image-sharp-alt {
      border-radius: 12px 46px 46px 46px;
    }

    .btn-sharp {
      border-radius: 999px 999px 999px 12px;
      transition: 0.35s ease;
    }

    .btn-sharp:hover {
      transform: translateY(-3px);
      box-shadow: 0 18px 42px rgba(37,150,190,0.28);
    }

    .wing-shape {
      border-radius: 110px 16px 110px 16px;
    }

    .wing-dots span {
      position: absolute;
      width: 11px;
      height: 11px;
      background: #2596be;
      border-radius: 999px;
      opacity: 0.9;
      box-shadow: 0 0 0 8px rgba(37, 150, 190, 0.08);
    }

    .wing-dots span:nth-child(1) { left: 52px; top: 270px; }
    .wing-dots span:nth-child(2) { left: 78px; top: 218px; }
    .wing-dots span:nth-child(3) { left: 122px; top: 176px; }
    .wing-dots span:nth-child(4) { left: 182px; top: 150px; }
    .wing-dots span:nth-child(5) { left: 252px; top: 142px; }

    .wing-dots span:nth-child(6) { left: 72px; top: 342px; }
    .wing-dots span:nth-child(7) { left: 122px; top: 382px; }
    .wing-dots span:nth-child(8) { left: 188px; top: 405px; }
    .wing-dots span:nth-child(9) { left: 260px; top: 408px; }
    .wing-dots span:nth-child(10) { left: 332px; top: 388px; }

    .wing-dots {
      animation: wingDotsMove linear both;
      animation-timeline: view();
      animation-range: entry 0% cover 80%;
      transform-origin: center;
    }

    .scroll-portrait {
      animation: portraitReveal linear both;
      animation-timeline: view();
      animation-range: entry 0% cover 80%;
    }


    .hover\:shadow-blue:hover {
        --tw-shadow: -1 24px 60px rgba(37, 150, 190, 0.18);
        --tw-shadow-colored: 0 24px 60px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        --tw-shadow-color: #2596be2b !important;
        --tw-shadow: var(--tw-shadow-colored);
    }
    @keyframes wingDotsMove {
      from {
        transform: translateX(-55px) rotate(-14deg) scale(0.82);
        opacity: 0.15;
      }
      to {
        transform: translateX(0) rotate(0deg) scale(1);
        opacity: 1;
      }
    }

    @keyframes portraitReveal {
      from {
        transform: scale(0.72) translateY(45px) rotate(-8deg);
        opacity: 0.25;
      }
      to {
        transform: scale(1) translateY(0) rotate(0deg);
        opacity: 1;
      }
    }

    @supports not (animation-timeline: view()) {
      .wing-dots {
        animation: wingFloat 7s ease-in-out infinite alternate;
      }

      .scroll-portrait {
        opacity: 1;
        transform: none;
      }

      @keyframes wingFloat {
        from { transform: translateY(0) rotate(-4deg); }
        to { transform: translateY(-18px) rotate(4deg); }
      }
    }

    @media (max-width: 768px) {
      .wing-dots,
      .scroll-portrait {
        animation: none;
      }
    }

/* ear-care.html */
html { scroll-behavior: smooth; }

body {
  background: #FBFFFE;
  color: #071426;
  font-family: Inter, sans-serif;
}

.sharp-card {
  border-radius: 36px 36px 36px 10px;
}

.sharp-card-alt {
  border-radius: 10px 36px 36px 36px;
}

.image-sharp {
  border-radius: 46px 46px 46px 12px;
}

.image-sharp-alt {
  border-radius: 12px 46px 46px 46px;
}

.btn-sharp {
  border-radius: 999px 999px 999px 12px;
  transition: 0.35s ease;
}

.btn-sharp:hover {
  transform: translateY(-3px);
  box-shadow: 0 18px 42px rgba(37,150,190,0.28);
}

.wing-shape {
  border-radius: 110px 16px 110px 16px;
}

.reveal,
.reveal-card {
  opacity: 0;
  transform: translateY(38px);
}

.image-hover {
  overflow: hidden;
}

.image-hover img {
  transition: transform .8s ease, filter .8s ease;
}

.image-hover:hover img {
  transform: scale(1.06);
  filter: contrast(1.05);
}

/* eastbridge.html */
:root {
      --eb-black: #000000;
      --eb-white: #ffffff;
      --eb-blue: #72c8ff;
      --eb-dark-blue: #061629;
      --eb-muted: #f4f4f4;
      --eb-text: #050505;
    }

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      color: var(--eb-text);
      background: #fff;
    }

    .eb-container {
      max-width: 1180px;
      margin: 0 auto;
      padding-left: 32px;
      padding-right: 32px;
    }

    .hero-bg {
      background-image:
        linear-gradient(90deg, rgba(0,0,0,.78) 0%, rgba(0,0,0,.55) 42%, rgba(0,0,0,.12) 100%),
        url("https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=1800&q=85");
      background-size: cover;
      background-position: center right;
    }

    .eb-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border: 1.5px solid var(--eb-blue);
      color: var(--eb-blue);
      border-radius: 999px;
      padding: 13px 28px;
      font-size: 12px;
      font-weight: 900;
      text-transform: uppercase;
      letter-spacing: .03em;
      transition: .25s ease;
    }

    .eb-btn:hover {
      background: var(--eb-blue);
      color: #000;
    }

    .eb-btn-solid {
      background: var(--eb-blue);
      border-color: var(--eb-blue);
      color: #000;
    }

    .eb-btn-solid:hover {
      background: #fff;
      color: #000;
      border-color: #fff;
    }

    .section-label {
      font-size: 12px;
      font-weight: 900;
      text-transform: uppercase;
      letter-spacing: .04em;
      color: #6b7280;
    }

    .blue-icon {
      color: var(--eb-blue);
    }

    details summary::-webkit-details-marker {
      display: none;
    }

    .line-card {
      border: 1px solid #d8d8d8;
    }

    .dark-footer {
      background: #000;
      color: #fff;
    }

    @media(max-width: 768px) {
      .eb-container {
        padding-left: 20px;
        padding-right: 20px;
      }
    }

/* iv-therapy.html */
html{
scroll-behavior:smooth;
}

body{
background:#FBFFFE;
color:#071426;
font-family:Inter,sans-serif;
overflow-x:hidden;
}

.sharp-card{
border-radius:36px 36px 36px 10px;
}

.sharp-card-alt{
border-radius:10px 36px 36px 36px;
}

.image-sharp{
border-radius:46px 46px 46px 12px;
}

.wing-shape{
border-radius:110px 16px 110px 16px;
}

.btn-sharp{
border-radius:999px 999px 999px 12px;
transition:.35s ease;
}

.btn-sharp:hover{
transform:translateY(-3px);
box-shadow:0 18px 42px rgba(37,150,190,.28);
}

.reveal,
.reveal-card{
opacity:0;
transform:translateY(38px);
}

.image-hover{
overflow:hidden;
}

.image-hover img{
transition:transform .8s ease, filter .8s ease;
}

.image-hover:hover img{
transform:scale(1.06);
filter:contrast(1.05);
}

.glow{
filter:blur(90px);
}

/* travel-health.html */
html { scroll-behavior: smooth; }
body { background:#FBFFFE; color:#071426; font-family:Inter,sans-serif; }

.sharp-card { border-radius:36px 36px 36px 10px; }
.sharp-card-alt { border-radius:10px 36px 36px 36px; }
.image-sharp { border-radius:46px 46px 46px 12px; }
.image-sharp-alt { border-radius:12px 46px 46px 46px; }
.wing-shape { border-radius:110px 16px 110px 16px; }

.btn-sharp {
  border-radius:999px 999px 999px 12px;
  transition:.35s ease;
}

.btn-sharp:hover {
  transform:translateY(-3px);
  box-shadow:0 18px 42px rgba(37,150,190,.28);
}

.reveal,
.reveal-card {
  opacity:0;
  transform:translateY(38px);
}

.image-hover { overflow:hidden; }

.image-hover img {
  transition:transform .8s ease, filter .8s ease;
}

.image-hover:hover img {
  transform:scale(1.06);
  filter:contrast(1.05);
}

/* WordPress / Elementor page reset */
html { scroll-behavior: smooth; }
body { background: #FBFFFE; color: #071426; font-family: Inter, sans-serif; overflow-x: hidden; }
.entry-title,
.page-title,
.elementor-page-title,
.elementor-widget-theme-post-title,
header.entry-header,
.site-header,
#masthead { display: none !important; }
.flamingo-site-header { display: block !important; }
.site-content,
.content-area,
.site-main,
.site,
.ast-container,
.elementor,
.elementor-section-wrap,
.elementor-location-single,
.elementor-widget-html { width: 100% !important; max-width: 100% !important; margin: 0 !important; padding: 0 !important; }
.elementor-section.elementor-section-boxed > .elementor-container,
.elementor-container,
.elementor-column-gap-default > .elementor-column > .elementor-element-populated { max-width: 100% !important; }
.flamingo-site-header { position: absolute; top: 2rem; left: 0; width: 100%; z-index: 50; }
.admin-bar .flamingo-site-header { top: calc(2rem + 32px); }
@media (max-width: 782px) { .admin-bar .flamingo-site-header { top: calc(2rem + 46px); } }

FLAMINGO_CSS;
    ;

    echo '<style id="flamingo-shared-styles">' . $css . '</style>';
}
}
if (!has_action('wp_head', 'flamingo_inline_theme_styles')) {
  add_action('wp_head', 'flamingo_inline_theme_styles', 20);
}

if (!function_exists('flamingo_get_site_header')) {
function flamingo_get_site_header() {
    return <<<'FLAMINGO_HEADER'
<!-- TOP BAR -->
  <div class="">
    <div class="max-w-7xl mx-auto px-5 flex justify-between gap-4">
    </div>
  </div>

  <!-- HEADER -->
  <header class="flamingo-site-header">
    <div class="max-w-7xl mx-auto px-5">
      <div class="bg-white/95 backdrop-blur-xl shadow-premium sharp-card flex items-center justify-between">
        <div class="flex items-center gap-3">
          <div class="w-16 h-16 bg-blue wing-shape flex items-center justify-center text-white">
            <img src="http://flamingomedicalandwellness.com/wp-content/uploads/2025/11/WhatsApp-Image-2025-10-30-at-7.17.47-AM.jpeg" alt="">
          </div>
        </div>

        <nav class="hidden lg:flex items-center gap-8 text-[13px] font-semibold text-navy">
          <a class="hover:text-blue" href="#home">Home</a>
          <div class="group relative">
  <a class="hover:text-blue" href="#aesthetics">Aesthetics</a>
  <div class="absolute hidden group-hover:block bg-white shadow-lg p-4 min-w-[220px]">
    <a class="block hover:text-blue" href="#anti-wrinkle-treatments">Anti-Wrinkle Treatments</a>
    <a class="block hover:text-blue" href="#dermal-fillers">Dermal Fillers</a>
    <a class="block hover:text-blue" href="#hair-loss">Hair Loss</a>
    <a class="block hover:text-blue" href="#weight-management">Weight Management</a>
  </div>
</div>

<a class="hover:text-blue" href="#contact">Contact</a>

<div class="group relative">
  <a class="hover:text-blue" href="#ear-care">Ear Care</a>
  <div class="absolute hidden group-hover:block bg-white shadow-lg p-4 min-w-[220px]">
    <a class="block hover:text-blue" href="#ear-irrigation">Ear Irrigation</a>
    <a class="block hover:text-blue" href="#micro-suction">Micro-suction</a>
  </div>
</div>

<a class="hover:text-blue" href="#iv-therapy">IV Therapy</a>

<a class="hover:text-blue" href="#our-story">Our Story</a>

<div class="group relative">
  <a class="hover:text-blue" href="#skin">Skin</a>
  <div class="absolute hidden group-hover:block bg-white shadow-lg p-4 min-w-[220px]">
    <a class="block hover:text-blue" href="#acne-treatments">Acne Treatments</a>
    <a class="block hover:text-blue" href="#cryopen">CryoPen</a>
    <a class="block hover:text-blue" href="#minor-skin-lesions">Minor Skin Lesions</a>
  </div>
</div>

<a class="hover:text-blue" href="#travel-health">Travel Health</a>
          </nav>

        <a href="https://portal.aestheticnursesoftware.com/book-online/3819" class="btn-sharp bg-blue text-white px-6 py-3 mx-3 text-sm font-bold">
          Book Appointment
        </a>
      </div>
    </div>
  </header>
FLAMINGO_HEADER;
}
}

if (!function_exists('flamingo_render_site_header')) {
function flamingo_render_site_header() {
    echo flamingo_get_site_header();
}
}
if (!has_action('wp_body_open', 'flamingo_render_site_header')) {
  add_action('wp_body_open', 'flamingo_render_site_header');
}
if (!shortcode_exists('flamingo_header')) {
  add_shortcode('flamingo_header', 'flamingo_get_site_header');
}

if (!function_exists('flamingo_get_site_footer')) {
function flamingo_get_site_footer() {
    return <<<'FLAMINGO_FOOTER'
<!-- FOOTER -->
  <footer class="bg-navy text-white pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-5 grid md:grid-cols-4 gap-10">
      <div>
        <div class="flex items-center gap-3 mb-5">
          <div class="w-11 h-11 flex items-center justify-center">
            <img src="http://flamingomedicalandwellness.com/wp-content/uploads/2025/11/WhatsApp-Image-2025-10-30-at-7.17.47-AM.jpeg" alt="">
          </div>
        </div>
        <p class="text-white/60 text-sm leading-7">
          Private medical, wellness, travel health, and aesthetic care in a premium clinic setting.
        </p>
      </div>

      <div>
        <h4 class="font-bold mb-4">Services</h4>
        <ul class="space-y-3 text-white/60 text-sm">
          <li>Dermal Fillers & Anti-Wrinkle</li>
          <li>Travel Vaccination & Risk Assessment</li>
          <li>Weight Management Pathway</li>
          <li>Skin & Wellness</li>
        </ul>
      </div>

      <div>
        <h4 class="font-bold mb-4">Clinic</h4>
        <ul class="space-y-3 text-white/60 text-sm">
          <li>About</li>
          <li>Patient Reviews</li>
          <li>FAQ</li>
          <li>Contact</li>
        </ul>
      </div>

      <div>
        <h4 class="font-bold mb-4">Contact</h4>
        <ul class="space-y-3 text-white/60 text-sm">
          <li>Clayhill Medical Practice Southview Road Basildon Essex SS16 4HD</li>
          <li>01268 288633</li>
          <li>contact@flamingomedicalandwellness.com</li>
        </ul>
      </div>
    </div>

    <div class="max-w-7xl mx-auto px-5 mt-12 pt-6 border-t border-white/10 text-center text-white/45 text-sm">
      © 2026 Flamingo Medical & Wellness. All rights reserved.
    </div>
  </footer>
FLAMINGO_FOOTER;
}
}

if (!function_exists('flamingo_render_site_footer')) {
function flamingo_render_site_footer() {
    echo flamingo_get_site_footer();
}
}
if (!has_action('wp_footer', 'flamingo_render_site_footer')) {
  add_action('wp_footer', 'flamingo_render_site_footer', 5);
}
if (!shortcode_exists('flamingo_footer')) {
  add_shortcode('flamingo_footer', 'flamingo_get_site_footer');
}

if (!function_exists('flamingo_inline_theme_scripts')) {
function flamingo_inline_theme_scripts() {
    ?>
    <script id="flamingo-shared-scripts">
    document.addEventListener('DOMContentLoaded', function () {
      if (window.lucide && typeof window.lucide.createIcons === 'function') {
        window.lucide.createIcons();
      }

      if (window.gsap && window.ScrollTrigger) {
        gsap.registerPlugin(ScrollTrigger);

        gsap.utils.toArray('.reveal').forEach(function (el) {
          gsap.to(el, {
            y: 0,
            opacity: 1,
            duration: 0.85,
            ease: 'power3.out',
            scrollTrigger: {
              trigger: el,
              start: 'top 86%'
            }
          });
        });

        gsap.utils.toArray('.reveal-card').forEach(function (el, i) {
          gsap.to(el, {
            y: 0,
            opacity: 1,
            duration: 0.75,
            delay: (i % 4) * 0.06,
            ease: 'power3.out',
            scrollTrigger: {
              trigger: el,
              start: 'top 90%'
            }
          });
        });
      }

      var heroSlides = document.querySelectorAll('.hero-slide');
      var heroDots = document.querySelectorAll('.hero-dot');
      var currentHeroSlide = 0;

      function showHeroSlide(index) {
        if (!heroSlides.length || !heroDots.length || !heroSlides[index] || !heroDots[index]) {
          return;
        }

        heroSlides.forEach(function (slide) { slide.classList.remove('active'); });
        heroDots.forEach(function (dot) { dot.classList.remove('active'); });
        heroSlides[index].classList.add('active');
        heroDots[index].classList.add('active');
        currentHeroSlide = index;
      }

      heroDots.forEach(function (dot) {
        dot.addEventListener('click', function () {
          showHeroSlide(Number(dot.dataset.slide));
        });
      });

      if (heroSlides.length && heroDots.length) {
        showHeroSlide(0);
        setInterval(function () {
          showHeroSlide((currentHeroSlide + 1) % heroSlides.length);
        }, 4500);
      }
    });
    </script>
    <?php
}
}
if (!has_action('wp_footer', 'flamingo_inline_theme_scripts')) {
  add_action('wp_footer', 'flamingo_inline_theme_scripts', 20);
}
