<?php
// 1. Antigravity Settings einbinden
require_once 'antigravity.php';

// 2. Sprache/Land bestimmen
// Priorität 1: Direkte Sprachwahl per URL (?lang=english)
if (isset($_GET['lang'])) {
    $langKey = $_GET['lang']; // 'german', 'english', 'spanish'
    // Optional: Dummy Country Code falls nötig
    $countryCode = 'DE'; 
} else {
    // Priorität 2: Landbasierte Automatik (?country=US oder Default)
    $countryCode = isset($_GET['country']) ? strtoupper($_GET['country']) : 'DE';
    $settings = getAntigravitySettings($countryCode);
    $langKey  = $settings['language'];
}

// 3. Sprachdatei laden
// Sicherheits-Check: Nur erlaubte Sprachen zulassen (Directory Traversal verhindern)
$allowedLangs = ['german', 'english', 'spanish'];
if (!in_array($langKey, $allowedLangs)) {
    $langKey = 'english';
}

$langFile = __DIR__ . '/lang/' . $langKey . '.php';
if (file_exists($langFile)) {
    include $langFile;
} else {
    // Fallback falls Datei fehlt -> Englisch
    include __DIR__ . '/lang/english.php';
}
?>
<!DOCTYPE html>
<html lang="<?php echo substr($langKey, 0, 2); ?>">
<!-- Wir mappen kurz für HTML lang attribut -->
<?php
$htmlLang = 'en';
if ($langKey === 'german')
    $htmlLang = 'de';
if ($langKey === 'spanish')
    $htmlLang = 'es';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANIEL | D-SHIRTS</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Anton, Permanent Marker, Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Archivo+Black&family=Mr+Dafoe&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="tracking-tight antialiased selection:bg-white selection:text-black">
    <!-- STICKY GLASS HEADER -->
    <header id="sticky-header" class="sticky-glass-header py-4 px-6 md:px-12">
        <div class="flex items-center gap-6">
            <!-- Language Switcher -->
            <div class="flex gap-2 text-xs font-bold tracking-widest">
                <button onclick="window.location.href='?lang=german'"
                    class="hover:text-cyan-400 transition-colors <?php echo ($langKey === 'german') ? 'text-cyan-400 opacity-100' : 'opacity-50'; ?>">DE</button>
                <span class="opacity-30">/</span>
                <button onclick="window.location.href='?lang=english'"
                    class="hover:text-cyan-400 transition-colors <?php echo ($langKey === 'english') ? 'text-cyan-400 opacity-100' : 'opacity-50'; ?>">EN</button>
                <span class="opacity-30">/</span>
                <button onclick="window.location.href='?lang=spanish'"
                    class="hover:text-cyan-400 transition-colors <?php echo ($langKey === 'spanish') ? 'text-cyan-400 opacity-100' : 'opacity-50'; ?>">ES</button>
            </div>
            <a href="#" class="header-logo">D-SHIRTS</a>
        </div>
        <!-- TAB NAVIGATION -->
        <div class="header-tabs flex gap-8 font-body font-bold text-xl md:text-2xl tracking-widest uppercase">
            <button id="tab-streetwear" onclick="switchTab('streetwear')"
                class="tab-btn ACTIVE border-b-2 border-white pb-1 opacity-100 transition-all">
                <?php echo $_LANG['tab_streetwear']; ?>
            </button>
            <button id="tab-teamwear" onclick="switchTab('teamwear')"
                class="tab-btn border-b-2 border-transparent pb-1 opacity-50 transition-all hover:opacity-80">
                <?php echo $_LANG['tab_teamwear']; ?>
            </button>
        </div>
    </header>

    <!-- HERO -->
    <section id="hero" class="min-h-screen flex flex-col justify-center items-center text-center px-4 fade-in-section">
        <h1 class="text-8xl md:text-[10rem] text-white font-headline mb-8 leading-[1.15] tracking-tighter text-glow py-4 text-center block"
            aria-label="D-SHIRTS">
            D-SHIRTS<br>
            <span
                class="text-5xl md:text-7xl text-[#00FFFF] font-handwriting block mt-[-10px] rotate-handwritten opacity-100 uppercase">
                <?php echo $_LANG['hero_title_suffix']; ?>
            </span>
        </h1>
        <p class="text-lg md:text-xl text-gray-400 mb-12 font-light tracking-wide font-body">
            <?php echo $_LANG['hero_subtitle']; ?>
        </p>
        <div class="mb-12">
            <a href="#portfolio" id="hero-btn" class="btn-minimal">
                <?php echo $_LANG['hero_btn']; ?>
            </a>
        </div>
    </section>

    <!-- CONTENT WRAPPER -->
    <main class="max-w-screen-xl mx-auto px-6 md:px-12 pb-32">

        <!-- STREETWEAR CONTENT (Container A) -->
        <div id="content-streetwear">

            <!-- MASONRY GALLERY (Replaces Slider) -->
            <section class="max-w-screen-2xl mx-auto px-4 mb-32 fade-in-section" id="portfolio">
                <div class="masonry-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Item 01 -->
                    <a href="#"
                        class="masonry-item relative group block aspect-[3/4] overflow-hidden rounded-sm transition-all duration-500 ease-out">
                        <span class="badge badge-new">
                            <?php echo $_LANG['badge_new']; ?>
                        </span>
                        <img src="images/image-1.png" alt="Team Alpha"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
                            <span class="text-xs text-cyan-400 font-bold tracking-widest uppercase mb-2">01 /
                                <?php echo $_LANG['cat_streetwear']; ?>
                            </span>
                            <h3 class="text-3xl font-black text-white uppercase italic">Team Alpha</h3>
                        </div>
                    </a>

                    <!-- Item 02 -->
                    <a href="#"
                        class="masonry-item relative group block aspect-[3/4] overflow-hidden rounded-sm transition-all duration-500 ease-out lg:translate-y-12">
                        <img src="images/image-2.png" alt="Urban League"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
                            <span class="text-xs text-cyan-400 font-bold tracking-widest uppercase mb-2">02 /
                                <?php echo $_LANG['cat_streetwear']; ?>
                            </span>
                            <h3 class="text-3xl font-black text-white uppercase italic">Urban League</h3>
                        </div>
                    </a>

                    <!-- Item 03 -->
                    <a href="#"
                        class="masonry-item relative group block aspect-[3/4] overflow-hidden rounded-sm transition-all duration-500 ease-out">
                        <span class="badge badge-low">
                            <?php echo $_LANG['badge_fast']; ?>
                        </span>
                        <img src="images/image-3.png" alt="Mono Crest"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
                            <span class="text-xs text-cyan-400 font-bold tracking-widest uppercase mb-2">03 /
                                <?php echo $_LANG['cat_streetwear']; ?>
                            </span>
                            <h3 class="text-3xl font-black text-white uppercase italic">Mono Crest</h3>
                        </div>
                    </a>

                    <!-- Item 04 -->
                    <a href="#"
                        class="masonry-item relative group block aspect-[3/4] overflow-hidden rounded-sm transition-all duration-500 ease-out lg:translate-y-12">
                        <img src="images/image-4.png" alt="Cyber Athletics"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
                            <span class="text-xs text-cyan-400 font-bold tracking-widest uppercase mb-2">04 /
                                <?php echo $_LANG['cat_streetwear']; ?>
                            </span>
                            <h3 class="text-3xl font-black text-white uppercase italic">Cyber Athletics</h3>
                        </div>
                    </a>

                    <!-- Item 05 -->


                    <!-- Item 06 (Cta) -->
                    <a href="#"
                        class="masonry-item relative group block aspect-[3/4] overflow-hidden rounded-sm transition-all duration-500 ease-out border border-white/20 hover:border-white/50 bg-[#111] flex items-center justify-center lg:translate-y-12">
                        <div class="text-center">
                            <span class="block text-4xl mb-2">➔</span>
                            <span class="uppercase font-bold tracking-widest text-sm">
                                <?php echo $_LANG['view_all_etsy']; ?>
                            </span>
                        </div>
                    </a>

                </div>
            </section>

            <!-- THE MANIFESTO (Editorial Look) -->
            <section id="manifesto"
                class="py-32 md:py-48 mb-24 -mx-6 md:-mx-12 px-6 md:px-12 bg-white text-black fade-in-section">
                <div class="max-w-screen-xl mx-auto">
                    <div class="max-w-3xl">
                        <p class="text-5xl md:text-7xl font-black leading-[0.95] mb-12 tracking-tighter">
                            <?php echo $_LANG['manifesto_headline']; ?> <br>
                            <span class="text-gray-400">
                                <?php echo $_LANG['manifesto_sub']; ?>
                            </span> <br>
                            <?php echo $_LANG['manifesto_text']; ?>
                        </p>
                        <div class="flex items-center gap-4">
                            <div class="h-px w-12 bg-black"></div>
                            <span class="text-xs uppercase tracking-widest font-bold text-gray-500">
                                <?php echo $_LANG['manifesto_founder']; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </section>

        </div> <!-- End of content-streetwear -->

        <!-- TEAMWEAR CONTENT (Container B) -->
        <div id="content-teamwear" style="display: none;">

            <!-- TEAMWEAR HERO -->
            <div class="mb-24 fade-in-section relative h-[50vh] w-full overflow-hidden rounded-sm group">
                <img src="images/image-5.png" alt="Teamwear Example - Igel"
                    class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-1000 ease-out transform scale-100 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-60">
                </div>
                <div class="absolute bottom-8 left-6 md:bottom-12 md:left-12">
                    <span class="text-xs text-green-400 font-bold tracking-widest uppercase mb-2 block">
                        <?php echo $_LANG['teamwear_case_study']; ?>
                    </span>
                    <h2 class="text-4xl md:text-6xl font-black text-white tracking-tighter uppercase">
                        <?php echo $_LANG['teamwear_hedgehog']; ?>
                    </h2>
                </div>
            </div>

            <!-- TRUST SECTION -->
            <div id="trust-bar" class="border-t border-b border-gray-900 py-8 mb-24 fade-in-section">
                <div
                    class="max-w-screen-xl mx-auto px-6 flex flex-wrap justify-center md:justify-around gap-8 text-gray-500 text-sm uppercase tracking-widest font-medium">
                    <div class="flex items-center">
                        <svg class="trust-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <?php echo $_LANG['trust_homebase']; ?>
                    </div>
                    <div class="flex items-center">
                        <svg class="trust-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                        <?php echo $_LANG['trust_vector']; ?>
                    </div>
                    <div class="flex items-center">
                        <svg class="trust-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                        <?php echo $_LANG['trust_boost']; ?>
                    </div>
                </div>
            </div>

            <!-- WHATSAPP WALL OF TRUST -->
            <section class="py-12 mb-32 fade-in-section">
                <div
                    class="max-w-md mx-auto bg-[#1a1a1a] rounded-3xl p-6 border border-gray-800 shadow-2xl relative overflow-hidden">
                    <div class="flex items-center gap-4 border-b border-gray-800 pb-4 mb-6">
                        <div
                            class="w-10 h-10 rounded-full bg-gradient-to-br from-green-400 to-emerald-600 flex items-center justify-center text-white font-bold">
                            D</div>
                        <div>
                            <span class="block text-white font-bold text-sm">
                                <?php echo $_LANG['chat_user_dan']; ?>
                            </span>
                            <span class="block text-xs text-green-400">
                                <?php echo $_LANG['chat_status']; ?>
                            </span>
                        </div>
                    </div>

                    <div class="space-y-6 text-sm font-medium">
                        <div class="chat-bubble left opacity-0 transform translate-y-4">
                            <span class="text-[10px] text-gray-500 mb-1 block uppercase tracking-wide">
                                <?php echo $_LANG['chat_role_tus']; ?>
                            </span>
                            <div
                                class="bg-[#2a2a2a] text-gray-200 p-3 rounded-2xl rounded-tl-none inline-block max-w-[85%] shadow-lg">
                                <?php echo $_LANG['chat_tus_1']; ?>
                            </div>
                        </div>
                        <div class="chat-bubble right opacity-0 transform translate-y-4 flex flex-col items-end">
                            <div
                                class="bg-[#005c4b] text-white p-3 rounded-2xl rounded-tr-none inline-block max-w-[85%] shadow-lg">
                                <?php echo $_LANG['chat_dan_1']; ?>
                            </div>
                            <span class="text-[10px] text-gray-500 mt-1 block">
                                <?php echo $_LANG['chat_read']; ?>
                            </span>
                        </div>
                        <div class="chat-bubble left opacity-0 transform translate-y-4">
                            <span class="text-[10px] text-gray-500 mb-1 block uppercase tracking-wide">
                                <?php echo $_LANG['chat_role_tus']; ?>
                            </span>
                            <div
                                class="bg-[#2a2a2a] text-gray-200 p-2 rounded-2xl rounded-tl-none inline-block max-w-[85%] shadow-lg">
                                <div
                                    class="w-48 h-32 bg-gray-700 rounded-lg mb-2 overflow-hidden relative group cursor-pointer">
                                    <img src="images/image-2.png" alt="Team Foto"
                                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500">
                                    <div
                                        class="absolute inset-0 flex items-center justify-center bg-black/20 group-hover:bg-transparent transition">
                                        <span class="text-xs text-white/80">Foto_1.jpg</span>
                                    </div>
                                </div>
                                <?php echo $_LANG['chat_tus_2']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- X-RAY SLIDER (QUALITY CONTROL) -->
            <section class="py-12 mb-32 fade-in-section">
                <div class="max-w-4xl mx-auto px-6">
                    <h3 class="text-3xl font-black text-white mb-8 text-center uppercase tracking-tighter">
                        <?php echo $_LANG['qc_title']; ?> <span class="text-gray-500">
                            <?php echo $_LANG['qc_subtitle']; ?>
                        </span>
                    </h3>

                    <div
                        class="x-ray-container-wrapper relative w-full h-[600px] md:h-[700px] bg-[#1a1a1a] rounded-lg overflow-hidden shadow-2xl border border-gray-800 select-none group flex justify-center items-center">
                        <div class="x-ray-container relative w-full h-full" id="x-ray-slider">
                            <!-- Bottom Layer (Reality) -->
                            <img src="images/image-1.png" alt="Final Design"
                                class="x-ray-img reality-img absolute inset-0 w-full h-full object-contain">

                            <!-- Top Layer (Sketch) -->
                            <img src="images/image-6.png" alt="Sketch Draft"
                                class="x-ray-img sketch-img absolute inset-0 w-full h-full object-contain z-10"
                                id="sketch-img" style="clip-path: inset(0 50% 0 0);">

                            <!-- Overlay Label -->
                            <div
                                class="absolute bottom-4 left-4 bg-cyan-900/80 backdrop-blur px-3 py-1 rounded text-xs font-bold text-cyan-100 uppercase tracking-widest border border-cyan-500/30 z-20 pointer-events-none">
                                <?php echo $_LANG['qc_overlay_label']; ?>
                            </div>

                            <!-- Handle -->
                            <div class="slider-handle absolute top-0 bottom-0 z-30 cursor-ew-resize flex items-center justify-center -ml-[1px]"
                                id="slider-handle" style="left: 50%;">
                                <!-- Vertical Line -->
                                <div class="w-0.5 h-full bg-cyan-400 shadow-[0_0_15px_rgba(34,211,238,0.8)]"></div>
                                <!-- Circle -->
                                <div
                                    class="absolute w-10 h-10 bg-white rounded-full shadow-[0_0_20px_rgba(34,211,238,0.5)] flex items-center justify-center transform hover:scale-110 transition-transform">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2.5" stroke="currentColor" class="w-5 h-5 text-cyan-400">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="text-center text-gray-500 text-sm mt-4 font-light">
                        <?php echo $_LANG['qc_drag_hint']; ?>
                    </p>
                </div>
            </section>


            <!-- PROCESS -->
            <section id="process" class="py-24 mb-24">
                <div
                    class="grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-neutral-900 border-t border-b border-neutral-900">
                    <!-- Step 01 -->
                    <div class="py-12 md:px-12 fade-in-section">
                        <div class="mb-6 text-neutral-500">
                            <!-- Icon -->
                            <svg class="w-8 h-8 stroke-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">
                            <?php echo $_LANG['process_1_title']; ?>
                        </h3>
                        <p class="text-gray-500 font-light leading-relaxed">
                            <?php echo $_LANG['process_1_desc']; ?>
                        </p>
                    </div>
                    <!-- Step 02 -->
                    <div class="py-12 md:px-12 fade-in-section delay-200">
                        <div class="mb-6 text-neutral-500">
                            <!-- Icon -->
                            <svg class="w-8 h-8 stroke-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">
                            <?php echo $_LANG['process_2_title']; ?>
                        </h3>
                        <p class="text-gray-500 font-light leading-relaxed">
                            <?php echo $_LANG['process_2_desc']; ?>
                        </p>
                    </div>
                    <!-- Step 03 -->
                    <div class="py-12 md:px-12 fade-in-section delay-300">
                        <div class="mb-6 text-neutral-500">
                            <!-- Icon -->
                            <svg class="w-8 h-8 stroke-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">
                            <?php echo $_LANG['process_3_title']; ?>
                        </h3>
                        <p class="text-gray-500 font-light leading-relaxed">
                            <?php echo $_LANG['process_3_desc']; ?>
                        </p>
                    </div>
                </div>
            </section>

            <!-- B2B CALCULATOR -->
            <section id="b2b" class="fade-in-section">
                <div class="border-t border-gray-900 pt-24">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-24">
                        <div>
                            <h2 class="text-5xl font-bold mb-6">
                                <?php echo $_LANG['b2b_headline']; ?>
                            </h2>
                            <p class="text-gray-500 max-w-sm font-light leading-relaxed mb-12">
                                <?php echo $_LANG['b2b_sub']; ?>
                            </p>
                            <div class="space-y-12">
                                <div>
                                    <div
                                        class="flex justify-between text-sm uppercase tracking-wider text-gray-400 mb-4">
                                        <label>
                                            <?php echo $_LANG['b2b_members']; ?>
                                        </label><span id="member-count" class="text-white">50</span>
                                    </div>
                                    <input type="range" id="member-slider" min="10" max="200" value="50" step="10">
                                </div>
                                <div>
                                    <div
                                        class="flex justify-between text-sm uppercase tracking-wider text-gray-400 mb-4">
                                        <label>
                                            <?php echo $_LANG['b2b_sell_price']; ?>
                                        </label><span id="price-display" class="text-white">35
                                            €</span>
                                    </div>
                                    <input type="range" id="price-slider" min="20" max="50" value="35" step="1">
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex flex-col justify-between h-full bg-neutral-900/20 p-8 md:p-12 rounded-sm border border-neutral-900">
                            <div class="w-full text-sm">
                                <div class="flex justify-between py-3 border-b border-gray-800 text-gray-500">
                                    <span>
                                        <?php echo $_LANG['b2b_base_price']; ?>
                                    </span><span id="table-base-price">25.00 €</span>
                                </div>
                                <div class="flex justify-between py-3 border-b border-gray-800 text-gray-500">
                                    <span>
                                        <?php echo $_LANG['b2b_sell_price']; ?>
                                    </span><span id="table-member-price">35.00 €</span>
                                </div>
                                <div class="flex justify-between py-3 border-b border-gray-800 text-white font-medium">
                                    <span>
                                        <?php echo $_LANG['b2b_margin_unit']; ?>
                                    </span><span id="table-profit-unit">10.00 €</span>
                                </div>
                            </div>
                            <div class="mt-12">
                                <span class="block text-xs uppercase tracking-widest text-gray-500 mb-2">
                                    <?php echo $_LANG['b2b_profit_label']; ?>
                                </span>
                                <div class="text-6xl font-light tracking-tighter"><span id="total-profit">500,00</span>
                                    <span class="text-2xl text-gray-600">€</span>
                                </div>
                            </div>
                            <div class="mt-8">
                                <a href="mailto:daniel@d-shirts.de"
                                    class="inline-block text-sm border-b border-white pb-1 hover:opacity-70 transition">
                                    <?php echo $_LANG['b2b_cta']; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div> <!-- End of content-teamwear -->
    </main>

    <!-- BIELEFELD LOCATOR FOOTER -->
    <footer class="relative bg-[#050505] pt-24 pb-12 overflow-hidden text-center">
        <!-- Abstract Map Pattern -->
        <div class="absolute inset-0 opacity-20 pointer-events-none"
            style="background-image: url('data:image/svg+xml,%3Csvg width=\'100\' height=\'100\' viewBox=\'0 0 100 100\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M0 0h100v100H0z\' fill=\'none\'/%3E%3Cpath d=\'M10 0v100M30 0v100M50 0v100M70 0v100M90 0v100M0 10h100M0 30h100M0 50h100M0 70h100M0 90h100\' stroke=\'%23333\' stroke-width=\'1\'/%3E%3C/svg%3E'); background-size: 50px 50px;">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-transparent to-[#050505]"></div>

        <div class="relative z-10">
            <!-- Pulse Marker -->
            <div
                class="w-4 h-4 bg-cyan-400 rounded-full mx-auto mb-6 relative map-marker shadow-[0_0_20px_rgba(34,211,238,0.8)]">
                <div class="absolute inset-0 rounded-full bg-cyan-400 animate-ping opacity-75"></div>
            </div>

            <h4 class="text-white font-headline text-2xl uppercase tracking-widest mb-2">
                <?php echo $_LANG['footer_base']; ?>
            </h4>
            <p class="text-gray-500 text-sm font-light tracking-wide mb-8">
                <?php echo $_LANG['footer_tagline']; ?>
            </p>

            <div class="flex justify-center gap-6 text-xs text-gray-600 uppercase tracking-widest font-bold">
                <a href="#" class="hover:text-white transition">
                    <?php echo $_LANG['footer_impressum']; ?>
                </a>
                <a href="#" class="hover:text-white transition">
                    <?php echo $_LANG['footer_privacy']; ?>
                </a>
                <a href="#" class="hover:text-white transition">
                    <?php echo $_LANG['footer_contact']; ?>
                </a>
            </div>

            <p class="mt-8 text-[10px] text-gray-800 font-mono">
                <?php echo $_LANG['footer_rights']; ?>
            </p>
        </div>
    </footer>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="lightbox" onclick="closeLightbox(event)">
        <span class="lightbox-close">&times;</span>
        <img id="lightbox-img" class="lightbox-img" src="" alt="Fullscreen Design">
    </div>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/?text=Moin%20Daniel,%20lass%20uns%20über%20Shirts%20sprechen!" target="_blank" id="wa-button"
        class="wa-float" title="Chat on WhatsApp">
        <svg fill="currentColor" width="32" height="32" viewBox="0 0 24 24">
            <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
        </svg>
    </a>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>

    <!-- Custom Cursor Containers -->
    <div class="cursor-dot"></div>
    <div class="cursor-outline"></div>
</body>

</html>