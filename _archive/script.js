/* -------------------------------------------------------------------------- */
/*                               GLOBAL STATE                                 */
/* -------------------------------------------------------------------------- */

// Embedded Translations for offline/local usage (Avoids CORS on file://)
const translations = {
    "de": {
        "tab_streetwear": "Streetwear",
        "tab_teamwear": "Teamwear",
        "hero_title_suffix": "BY DANIEL",
        "hero_subtitle": "individuelle Designs für euch",
        "hero_btn": "ZUM DROP ↗",
        "hero_btn_streetwear": "Zum Shop ↓",
        "hero_btn_teamwear": "Vereins-Deal Anfragen →",
        "badge_new": "NEUHEIT",
        "badge_fast": "FAST WEG",
        "badge_soldout": "AUSVERKAUFT",
        "cat_streetwear": "Streetwear",
        "view_all_etsy": "Auf Etsy ansehen",
        "manifesto_headline": "Wir glauben nicht an Standard.",
        "manifesto_sub": "Wir glauben an Identität.",
        "manifesto_text": "Jedes Shirt ist ein Statement für dein Team.<br>Designet in Bielefeld.<br>Gemacht für die Ewigkeit.",
        "manifesto_founder": "Daniel — Founder & Lead Designer",
        "teamwear_case_study": "Teamwear Case Study",
        "teamwear_hedgehog": "The Hedgehog.",
        "trust_homebase": "Homebase: Bielefeld",
        "trust_vector": "High-End Vector Art",
        "trust_boost": "Vereinskasse-Boost",
        "chat_role_tus": "Vorstand TuS",
        "chat_tus_1": "Moin Daniel, Trikots sind angekommen. Der Druck ist der Wahnsinn! 😍",
        "chat_dan_1": "Mega! Schickt mir mal ein Foto vom ersten Spiel!",
        "chat_read": "✔✔ Gelesen",
        "chat_photo_label": "Foto_1.jpg",
        "chat_tus_2": "Die Jungs wollen sie gar nicht mehr ausziehen.",
        "chat_user_dan": "Daniel (D-Shirts)",
        "chat_status": "Online",
        "qc_title": "Quality Control:",
        "qc_subtitle": "Sketch vs. Reality",
        "qc_overlay_label": "Sketch vs Reality",
        "qc_drag_hint": "Drag the handle to compare.",
        "process_1_title": "01. Concept",
        "process_1_desc": "Wir analysieren eure Vereins-DNA und entwerfen ein Unikat.",
        "process_2_title": "02. Digital Crafting",
        "process_2_desc": "High-End Vektorisierung für gestochen scharfe Drucke.",
        "process_3_title": "03. Delivery",
        "process_3_desc": "Premium-Druck direkt zu euch ins Clubhaus.",
        "b2b_headline": "Business &<br>Clubs.",
        "b2b_sub": "Transparente Preisgestaltung für Großabnehmer. Berechnen Sie Ihren potenziellen Erlös in Echtzeit.",
        "b2b_members": "Mitglieder",
        "b2b_sell_price": "Verkaufspreis",
        "b2b_base_price": "Basispreis",
        "b2b_margin_unit": "Marge pro Einheit",
        "b2b_profit_label": "Gewinn für eure Kasse",
        "b2b_cta": "Angebot anfragen →",
        "footer_base": "Bielefeld Base",
        "footer_tagline": "Established in the hood. Shipping Worldwide.",
        "footer_impressum": "Impressum",
        "footer_privacy": "Privacy",
        "footer_contact": "Contact",
        "footer_rights": "© 2026 D-SHIRTS. ALL RIGHTS RESERVED.",
        "nav_censored": "Censored",
        "nav_animals": "Tiere & Früchte",
        "nav_surf": "Surfcamp",
        "header_censored": "// CATEGORY: CENSORED",
        "header_animals": "// CATEGORY: ANIMALS & FRUITS",
        "header_surf": "// CATEGORY: SURFCAMP",
        "header_team_gallery": "// TEAM REFERENCES"
    },
    "en": {
        "tab_streetwear": "Streetwear",
        "tab_teamwear": "Teamwear",
        "hero_title_suffix": "BY DANIEL",
        "hero_subtitle": "Custom designs for you",
        "hero_btn": "GO TO DROP ↗",
        "hero_btn_streetwear": "To the Shop ↓",
        "hero_btn_teamwear": "Request Club Deal →",
        "badge_new": "NEW",
        "badge_fast": "ALMOST GONE",
        "badge_soldout": "SOLD OUT",
        "cat_streetwear": "Streetwear",
        "view_all_etsy": "View All on Etsy",
        "manifesto_headline": "We do not believe in standard.",
        "manifesto_sub": "We believe in identity.",
        "manifesto_text": "Every shirt is a statement for your team.<br>Designed in Bielefeld.<br>Made for eternity.",
        "manifesto_founder": "Daniel — Founder & Lead Designer",
        "teamwear_case_study": "Teamwear Case Study",
        "teamwear_hedgehog": "The Hedgehog.",
        "trust_homebase": "Homebase: Bielefeld",
        "trust_vector": "High-End Vector Art",
        "trust_boost": "Club Treasury Boost",
        "chat_role_tus": "Board TuS",
        "chat_tus_1": "Hey Daniel, jerseys arrived. The print is insane! 😍",
        "chat_dan_1": "Awesome! Send me a photo from the first game!",
        "chat_read": "✔✔ Read",
        "chat_photo_label": "Photo_1.jpg",
        "chat_tus_2": "The guys don't want to take them off anymore.",
        "chat_user_dan": "Daniel (D-Shirts)",
        "chat_status": "Online",
        "qc_title": "Quality Control:",
        "qc_subtitle": "Sketch vs. Reality",
        "qc_overlay_label": "Sketch vs Reality",
        "qc_drag_hint": "Drag the handle to compare.",
        "process_1_title": "01. Concept",
        "process_1_desc": "We analyze your club DNA and design a unique piece.",
        "process_2_title": "02. Digital Crafting",
        "process_2_desc": "High-end vectorization for razor-sharp prints.",
        "process_3_title": "03. Delivery",
        "process_3_desc": "Premium print directly to your clubhouse.",
        "b2b_headline": "Business &<br>Clubs.",
        "b2b_sub": "Transparent pricing for bulk buyers. Calculate your potential revenue in real time.",
        "b2b_members": "Members",
        "b2b_sell_price": "Selling Price",
        "b2b_base_price": "Base Price",
        "b2b_margin_unit": "Margin per Unit",
        "b2b_profit_label": "Profit for your treasury",
        "b2b_cta": "Request Quote →",
        "footer_base": "Bielefeld Base",
        "footer_tagline": "Established in the hood. Shipping Worldwide.",
        "footer_impressum": "Imprint",
        "footer_privacy": "Privacy",
        "footer_contact": "Contact",
        "footer_rights": "© 2026 D-SHIRTS. ALL RIGHTS RESERVED.",
        "nav_censored": "Censored",
        "nav_animals": "Animals & Fruits",
        "nav_surf": "Surfcamp",
        "header_censored": "// CATEGORY: CENSORED",
        "header_animals": "// CATEGORY: ANIMALS & FRUITS",
        "header_surf": "// CATEGORY: SURFCAMP",
        "header_team_gallery": "// TEAM REFERENCES"
    },
    "es": {
        "tab_streetwear": "Streetwear",
        "tab_teamwear": "Teamwear",
        "hero_title_suffix": "BY DANIEL",
        "hero_subtitle": "Diseños personalizados para ti",
        "hero_btn": "IR AL DROP ↗",
        "hero_btn_streetwear": "A la tienda ↓",
        "hero_btn_teamwear": "Solicitar oferta para clubes →",
        "badge_new": "NOVEDAD",
        "badge_fast": "CASI AGOTADO",
        "badge_soldout": "AGOTADO",
        "cat_streetwear": "Streetwear",
        "view_all_etsy": "Ver todo en Etsy",
        "manifesto_headline": "No creemos en el estándar.",
        "manifesto_sub": "Creemos en la identidad.",
        "manifesto_text": "Cada camiseta es una declaración para tu equipo.<br>Diseñado en Bielefeld.<br>Hecho para la eternidad.",
        "manifesto_founder": "Daniel — Fundador y Diseñador Principal",
        "teamwear_case_study": "Estudio de caso Teamwear",
        "teamwear_hedgehog": "El Erizo.",
        "trust_homebase": "Base: Bielefeld",
        "trust_vector": "Arte Vectorial de Alta Gama",
        "trust_boost": "Impulso a la tesorería",
        "chat_role_tus": "Junta Directiva TuS",
        "chat_tus_1": "Hola Daniel, llegaron las camisetas. ¡La impresión es una locura! 😍",
        "chat_dan_1": "¡Genial! ¡Envíame una foto del primer partido!",
        "chat_read": "✔✔ Leído",
        "chat_photo_label": "Foto_1.jpg",
        "chat_tus_2": "Los chicos ya no quieren quitárselas.",
        "chat_user_dan": "Daniel (D-Shirts)",
        "chat_status": "En línea",
        "qc_title": "Control de Calidad:",
        "qc_subtitle": "Boceto vs. Realidad",
        "qc_overlay_label": "Boceto vs Realidad",
        "qc_drag_hint": "Arrastra el controlador para comparar.",
        "process_1_title": "01. Concepto",
        "process_1_desc": "Analizamos el ADN de tu club y diseñamos una pieza única.",
        "process_2_title": "02. Creación Digital",
        "process_2_desc": "Vectorización de alta gama para impresiones nítidas.",
        "process_3_title": "03. Entrega",
        "process_3_desc": "Impresión premium directamente a tu club.",
        "b2b_headline": "Negocios y<br>Clubes.",
        "b2b_sub": "Precios transparentes para grandes compradores. Calcula tus ingresos potenciales en tiempo real.",
        "b2b_members": "Miembros",
        "b2b_sell_price": "Precio de venta",
        "b2b_base_price": "Precio base",
        "b2b_margin_unit": "Margen por unidad",
        "b2b_profit_label": "Ganancia para tu caja",
        "b2b_cta": "Solicitar oferta →",
        "footer_base": "Base Bielefeld",
        "footer_tagline": "Establecido en el barrio. Envíos a todo el mundo.",
        "footer_impressum": "Aviso Legal",
        "footer_privacy": "Privacidad",
        "footer_contact": "Contacto",
        "footer_rights": "© 2026 D-SHIRTS. ALL RIGHTS RESERVED.",
        "nav_censored": "Censurado",
        "nav_animals": "Animales y Frutas",
        "nav_surf": "Campamento de Surf",
        "header_censored": "// CATEGORÍA: CENSURADO",
        "header_animals": "// CATEGORÍA: ANIMALES Y FRUTAS",
        "header_surf": "// CATEGORÍA: SURFCAMP",
        "header_team_gallery": "// REFERENCIAS DE EQUIPO"
    }
};

let currentLang = 'de'; // Default

/* -------------------------------------------------------------------------- */
/*                            LANGUAGE LOGIC                                  */
/* -------------------------------------------------------------------------- */

// 1. (Load Function removed, using const)

// 2. Detect Language
function detectAndInitLanguage() {
    // Priority 1: URL Parameter ?lang=xx
    const urlParams = new URLSearchParams(window.location.search);
    const langParam = urlParams.get('lang');

    // Priority 2: LocalStorage
    const storedLang = localStorage.getItem('userLang');

    // Priority 3: Browser Language
    const browserLang = navigator.language.slice(0, 2); // 'de-DE' -> 'de'

    if (langParam && ['de', 'en', 'es'].includes(langParam)) {
        currentLang = langParam;
    } else if (storedLang && ['de', 'en', 'es'].includes(storedLang)) {
        currentLang = storedLang;
    } else if (['de', 'en', 'es'].includes(browserLang)) {
        currentLang = browserLang;
    } else {
        currentLang = 'en'; // Fallback
    }

    setLanguage(currentLang, false); // false = don't overwrite URL immediately if not needed
}

// 3. Set Language (Public Function)
window.setLanguage = function (lang) {
    if (!translations[lang]) {
        console.warn(`Language ${lang} not found.`);
        return;
    }
    currentLang = lang;

    // Save to LocalStorage
    localStorage.setItem('userLang', lang);

    // Update URL (optional, keeps it clean or sharable)
    const url = new URL(window.location);
    url.searchParams.set('lang', lang);
    window.history.replaceState({}, '', url);

    // Update HTML Tag
    document.documentElement.lang = lang;

    // Update UI (active button)
    updateLanguageSwitcher(lang);

    // Apply Content
    applyTranslations();
};

// 4. Update Header Buttons
function updateLanguageSwitcher(lang) {
    const langs = ['de', 'en', 'es'];
    langs.forEach(l => {
        const btn = document.getElementById(`lang-${l}`);
        if (btn) {
            if (l === lang) {
                btn.classList.add('text-cyan-400', 'opacity-100');
                btn.classList.remove('opacity-50');
            } else {
                btn.classList.remove('text-cyan-400', 'opacity-100');
                btn.classList.add('opacity-50');
            }
        }
    });
}

// 5. Apply Translations to DOM
function applyTranslations() {
    const elements = document.querySelectorAll('[data-i18n]');
    elements.forEach(el => {
        const key = el.getAttribute('data-i18n');
        if (translations[currentLang] && translations[currentLang][key]) {
            // Check if it's an input/placeholder or text
            if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
                el.placeholder = translations[currentLang][key];
            } else {
                el.innerHTML = translations[currentLang][key];
            }
        }
    });
}

/* -------------------------------------------------------------------------- */
/*                           EXISTING FEATURES                                */
/* -------------------------------------------------------------------------- */

// --- TAB SWITCHING LOGIC ---
window.switchTab = function (mode) {
    const contentStreetwear = document.getElementById('content-streetwear');
    const contentTeamwear = document.getElementById('content-teamwear');
    const tabStreetwear = document.getElementById('tab-streetwear');
    const tabTeamwear = document.getElementById('tab-teamwear');
    const heroBtn = document.getElementById('hero-btn');

    if (mode === 'streetwear') {
        // Show Streetwear
        contentStreetwear.style.display = 'block';
        contentTeamwear.style.display = 'none';

        // Update Tabs
        tabStreetwear.classList.add('opacity-100', 'border-white');
        tabStreetwear.classList.remove('opacity-50', 'border-transparent');
        tabTeamwear.classList.add('opacity-50', 'border-transparent');
        tabTeamwear.classList.remove('opacity-100', 'border-white');

        // Update Hero Button Key
        heroBtn.setAttribute('data-i18n', 'hero_btn_streetwear');
        // Apply immediately
        updateKey(heroBtn, 'hero_btn_streetwear');
        heroBtn.href = '#portfolio';

    } else if (mode === 'teamwear') {
        // Show Teamwear
        contentStreetwear.style.display = 'none';
        contentTeamwear.style.display = 'block';

        // Update Tabs
        tabTeamwear.classList.add('opacity-100', 'border-white');
        tabTeamwear.classList.remove('opacity-50', 'border-transparent');
        tabStreetwear.classList.add('opacity-50', 'border-transparent');
        tabStreetwear.classList.remove('opacity-100', 'border-white');

        // Update Hero Button Key
        heroBtn.setAttribute('data-i18n', 'hero_btn_teamwear');
        // Apply immediately
        updateKey(heroBtn, 'hero_btn_teamwear');
        heroBtn.href = '#b2b';
    }
};

// Helper to update single element
function updateKey(el, key) {
    if (translations[currentLang] && translations[currentLang][key]) {
        el.innerHTML = translations[currentLang][key];
    }
}


/* -------------------------------------------------------------------------- */
/*                               INITIALIZATION                               */
/* -------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Init Language (Directly, no fetch)
    detectAndInitLanguage();

    // 2. Swiper Init (Existing)
    if (typeof Swiper !== 'undefined') {
        // ... (Original Swiper init if needed, though replaced by Masonry in HTML?)
        // Keeping it safe just in case pieces remain or reused.
    }

    // 3. Custom Cursor (Existing)
    const cursorDot = document.querySelector('.cursor-dot');
    const cursorOutline = document.querySelector('.cursor-outline');
    if (cursorDot && cursorOutline) {
        window.addEventListener('mousemove', (e) => {
            const posX = e.clientX;
            const posY = e.clientY;
            cursorDot.style.left = `${posX}px`;
            cursorDot.style.top = `${posY}px`;
            cursorOutline.animate({
                left: `${posX}px`,
                top: `${posY}px`
            }, { duration: 500, fill: "forwards" });
        });
        // Interactive Hover Effect
        const interactiveElements = document.querySelectorAll('a, button, .masonry-item, input[type="range"]');
        interactiveElements.forEach(el => {
            el.addEventListener('mouseenter', () => {
                cursorDot.classList.add('cursor-hover');
                cursorOutline.classList.add('cursor-hover');
            });
            el.addEventListener('mouseleave', () => {
                cursorDot.classList.remove('cursor-hover');
                cursorOutline.classList.remove('cursor-hover');
            });
        });
    }



    // 5. X-Ray Slider Logic (Existing)
    const sliderContainer = document.getElementById('x-ray-slider');
    const sketchImg = document.getElementById('sketch-img');
    const sliderHandle = document.getElementById('slider-handle');

    if (sliderContainer && sketchImg && sliderHandle) {
        let isDragging = false;

        const updateSlider = (x) => {
            const rect = sliderContainer.getBoundingClientRect();
            let percentage = ((x - rect.left) / rect.width) * 100;
            percentage = Math.max(0, Math.min(100, percentage));

            sketchImg.style.clipPath = `inset(0 ${100 - percentage}% 0 0)`;
            sliderHandle.style.left = `${percentage}%`;
        };

        sliderContainer.addEventListener('mousedown', () => isDragging = true);
        window.addEventListener('mouseup', () => isDragging = false);
        window.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            updateSlider(e.clientX);
        });
        // Touch support
        sliderContainer.addEventListener('touchstart', () => isDragging = true);
        window.addEventListener('touchend', () => isDragging = false);
        window.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            updateSlider(e.touches[0].clientX);
        });
    }

    // 6. B2B Calculator (Existing)
    const memberSlider = document.getElementById('member-slider');
    const priceSlider = document.getElementById('price-slider');
    if (memberSlider && priceSlider) {
        const updateCalculator = () => {
            const members = parseInt(memberSlider.value);
            const sellPrice = parseInt(priceSlider.value);
            const basePrice = 25; // Base cost

            const profitPerUnit = sellPrice - basePrice;
            const totalProfit = members * profitPerUnit;

            document.getElementById('member-count').textContent = members;
            document.getElementById('price-display').textContent = sellPrice + ' €';

            document.getElementById('table-member-price').textContent = sellPrice.toFixed(2) + ' €';
            document.getElementById('table-profit-unit').textContent = profitPerUnit.toFixed(2) + ' €';

            // Animate number (simple)
            document.getElementById('total-profit').textContent = totalProfit.toFixed(2).replace('.', ',');
        };
        memberSlider.addEventListener('input', updateCalculator);
        priceSlider.addEventListener('input', updateCalculator);
    }

    // 7. Lightbox (Existing)
    window.openLightbox = function (src) {
        const lightbox = document.getElementById('lightbox');
        const img = document.getElementById('lightbox-img');
        if (lightbox && img) {
            img.src = src;
            lightbox.classList.add('active');
        }
    };
    window.closeLightbox = function (e) {
        if (e.target.id === 'lightbox' || e.target.classList.contains('lightbox-close')) {
            const lightbox = document.getElementById('lightbox');
            if (lightbox) lightbox.classList.remove('active');
        }
    };

    // 8. Fade In Observer (Existing)
    const fadeObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    }, { threshold: 0.1 });
    document.querySelectorAll('.fade-in-section').forEach(el => fadeObserver.observe(el));

});
