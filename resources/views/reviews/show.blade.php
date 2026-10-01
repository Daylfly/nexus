<x-layout>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <div class="bg-[#0e1015] text-gray-100 min-h-screen py-6">
        <div class="max-w-[1440px] mx-auto px-4">

            <!-- Хлебные крошки -->
            <nav class="text-xs text-gray-400 flex items-center gap-1.5 mb-4">
                <a href="/" class="hover:text-white transition">🏠 Главная</a>
                <span class="text-gray-600">/</span>
                <a href="/articles" class="hover:text-white transition">Статьи и лонгриды</a>
                <span class="text-gray-600">/</span>
                <a href="/reviews" class="hover:text-white transition">Обзоры</a>
                <span class="text-gray-600">/</span>
                <span class="text-gray-300">Обзор Dragon Age: The Veilguard</span>
            </nav>

            <!-- Теги статьи -->
            <div class="flex flex-wrap items-center gap-2 text-[11px] font-semibold mb-5">
                <span class="bg-[#8b5cf6] text-gray-300 font-bold uppercase px-2.5 py-1 rounded-full tracking-wider">
                    БОЛЬШОЙ ОБЗОР
                </span>
                <span class="bg-[#1a1d26] text-[#4CD7F6] border border-[#2e3346] px-2.5 py-1 rounded-full">
                    PC / PS5 / Xbox Series X
                </span>
                <span class="bg-yellow-300/20 text-yellow-300 border border-[#2e3346] px-2.5 py-1 rounded-full flex items-center gap-1">
                    ⏱ 58 часов прохождения
                </span>
                <span class="bg-[#1a1d26] text-gray-400 border border-[#2e3346] px-2.5 py-1 rounded-full flex items-center gap-1">
                    📖 18 мин чтения
                </span>
            </div>

            <!-- Главный заголовок -->
            <h1 class="text-3xl md:text-5xl font-serif font-bold tracking-tight text-white mb-4 leading-[1.15]">
                Обзор Dragon Age: The Veilguard — Возвращение в Тедас сквозь призму яркого экшена и смелых компромиссов
            </h1>

            <p class="text-gray-400 text-sm md:text-base leading-relaxed mb-6 max-w-4xl">
                Спустя десять лет после Inquisition мы вернулись в мир древних богов и магии крови. Разбираемся, стоило ли так долго ждать перезапуск легендарной саги BioWare.
            </p>

            <!-- Метаданные автора и соцсети -->
            <section class="bg-[#13161c] border border-[#1f2430] rounded-xl px-4 py-3 mb-6 flex flex-wrap items-center justify-between gap-4 text-xs">
                <div class="flex items-center gap-3">
                    <img src="{{ Vite::asset('resources/images/alex.png') }}" alt="Алексей Соколов" class="w-9 h-9 rounded-full object-cover">
                    <div>
                        <div class="font-medium text-white">
                            Алексей Соколов <span class="text-purple-400 font-normal">• Главный редактор / Эксперт по RPG</span>
                        </div>
                        <div class="text-[11px] text-gray-500 flex items-center gap-2 mt-0.5">
                            <span>15 марта 2025</span>
                            <span>•</span>
                            <span>👁 4.8k</span>
                            <span>•</span>
                            <span>💬 264</span>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-2 text-gray-300">
                    <button class="bg-[#1c202b] hover:bg-[#252a39] px-3 py-1.5 rounded-lg border border-[#2a3040] flex items-center gap-1.5 transition">
                        <span>▷</span> Telegram
                    </button>
                    <button class="bg-[#1c202b] hover:bg-[#252a39] px-3 py-1.5 rounded-lg border border-[#2a3040] flex items-center gap-1.5 transition">
                        <span>&lt;</span> VK
                    </button>
                    <button class="bg-[#1c202b] hover:bg-[#252a39] px-3 py-1.5 rounded-lg border border-[#2a3040] flex items-center gap-1.5 transition">
                        <span>📋</span> Ссылка
                    </button>
                    <button class="bg-yellow-300/20 px-3 py-1.5 rounded-lg border border-[#2e3346] text-amber-300 flex items-center gap-1.5 transition">
                        <span>🔖</span> В закладки
                    </button>
                </div>
            </section>

            <!-- Главный баннер статьи -->
            <section class="relative rounded-2xl overflow-hidden mb-8 group border border-[#1f2430]">
                <img src="{{ Vite::asset('resources/images/image.png') }}" alt="Dragon Age: The Veilguard" class="w-full h-[420px] md:h-[500px] object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent pointer-events-none"></div>
                <div class="absolute bottom-5 left-5 right-5 sm:right-auto sm:max-w-xl z-10">
                    <div class="bg-[#12151c]/80 backdrop-blur-md border border-white/10 rounded-xl p-3.5 flex items-center gap-3.5 shadow-2xl">
                        <div class="bg-[#2d2218] border border-[#f97316]/30 rounded-lg px-3 py-2 flex flex-col items-center justify-center shrink-0 min-w-[54px]">
                            <span class="text-amber-500 font-bold text-xl leading-none">8.5</span>
                            <span class="text-[9px] text-amber-500/80 font-semibold tracking-wider uppercase mt-1">NEXUS</span>
                        </div>
                        <div class="text-xs">
                            <div class="font-bold text-white uppercase tracking-wider mb-1 flex items-center gap-1.5">
                                <span class="text-violet-400">БЫСТРЫЙ ВЕРДИКТ</span>
                                <span class="text-blue-500">•</span>
                                <span class="text-gray-400 font-normal capitalize">Рекомендовано</span>
                            </div>
                            <p class="text-gray-300 leading-snug">
                                Зрелищный экшен с великолепными спутниками, кинематографичным размахом, но упрощённым тактическим слоем.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                <!-- Боковая панель -->
                <!-- Боковая панель -->
                <aside class="lg:col-span-4 space-y-4 lg:sticky lg:top-6">

                    <!-- Прогресс чтения -->
                    <section class="bg-[#13161c] border border-[#1f2430] rounded-2xl p-4">
                        <div class="flex items-center justify-between text-xs font-semibold mb-2">
                            <span class="text-gray-300">Прогресс чтения</span>
                            <span class="text-purple-400 font-bold" id="read-progress-text">0%</span>
                        </div>
                        <div class="w-full bg-[#1a1d27] h-1.5 rounded-full overflow-hidden">
                            <div class="bg-purple-500 h-full rounded-full transition-all duration-150" style="width: 0%;" id="read-progress-bar"></div>
                        </div>
                    </section>

                    <!-- Содержание -->
                    <section class="bg-[#13161c] border border-[#1f2430] rounded-2xl p-5">
                        <h3 class="text-white font-serif font-bold text-lg mb-5 flex items-center gap-2.5">
                            <span class="text-cyan-400">☰</span>
                            <span>Содержание</span>
                        </h3>
                        <nav class="space-y-4 text-xs">
                            <a href="#section-1" class="flex items-start gap-3 text-gray-200 hover:text-white transition group leading-relaxed">
                                <span class="text-cyan-400 font-mono font-bold shrink-0">01</span>
                                <span>Вступление: Десять лет ожиданий</span>
                            </a>
                            <a href="#section-2" class="flex items-start gap-3 text-gray-300 hover:text-white transition group leading-relaxed">
                                <span class="text-gray-300 font-mono font-bold shrink-0">02</span>
                                <span>Боевая система: Больше слэшера, меньше тактики</span>
                            </a>
                            <a href="#section-3" class="flex items-start gap-3 text-gray-300 hover:text-white transition group leading-relaxed">
                                <span class="text-gray-300 font-mono font-bold shrink-0">03</span>
                                <span>Спутники и сюжет: Сила личных историй</span>
                            </a>
                            <a href="#section-4" class="flex items-start gap-3 text-gray-300 hover:text-white transition group leading-relaxed">
                                <span class="text-gray-300 font-mono font-bold shrink-0">04</span>
                                <span>Визуальный стиль и оптимизация на ПК</span>
                            </a>
                            <a href="#section-5" class="flex items-start gap-3 text-gray-300 hover:text-white transition group leading-relaxed">
                                <span class="text-gray-300 font-mono font-bold shrink-0">05</span>
                                <span>Итог и вердикт редакции</span>
                            </a>
                        </nav>
                    </section>

                    <!-- Досье проекта -->
                    <section class="bg-[#13161c] border border-[#1f2430] rounded-2xl p-5 space-y-4">
                        <h3 class="text-white font-serif font-bold text-lg tracking-wider flex items-center gap-2.5 uppercase mb-4">
                            <span class="text-purple-400">ⓘ</span>
                            <span>ДОСЬЕ ПРОЕКТА</span>
                        </h3>

                        <div class="space-y-2 text-xs">
                            <div class="flex justify-between items-center bg-[#181b24] p-2.5 rounded-xl">
                                <span class="text-gray-400 font-medium">Разработчик:</span>
                                <span class="text-white font-bold">BioWare</span>
                            </div>

                            <div class="flex justify-between items-center bg-[#181b24] p-2.5 rounded-xl">
                                <span class="text-gray-400 font-medium">Издатель:</span>
                                <span class="text-white font-bold">Electronic Arts</span>
                            </div>

                            <div class="flex justify-between items-center bg-[#181b24] p-2.5 rounded-xl">
                                <span class="text-gray-400 font-medium">Движок:</span>
                                <span class="text-cyan-400 font-bold hover:underline cursor-pointer">Frostbite Engine 4</span>
                            </div>

                            <div class="flex justify-between items-start bg-[#181b24] p-2.5 rounded-xl">
                                <span class="text-gray-400 font-medium">Локализация:</span>
                                <span class="text-white font-bold text-right leading-tight">Русские<br>субтитры</span>
                            </div>

                            <div class="flex justify-between items-start bg-[#181b24] p-2.5 rounded-xl">
                                <span class="text-gray-400 font-medium">Тестовая<br>система:</span>
                                <span class="text-white font-bold text-right leading-tight">i7-14700K / RTX<br>4080</span>
                            </div>
                        </div>
                    </section>

                </aside>
                <!-- Основной блок со статьей -->
                <main class="lg:col-span-8 space-y-8">

                    <!-- Раздел #01: Вступление -->
                    <section id="section-1" class="scroll-mt-6">
                        <h2 class="text-2xl md:text-3xl font-serif font-bold text-white mb-6 flex items-center gap-3">
                            <span class="text-purple-400 text-lg font-mono font-normal">#01</span>
                            <span>Вступление: Десять лет ожиданий</span>
                        </h2>
                        <div class="space-y-4 text-gray-300 text-sm md:text-base leading-relaxed">
                            <p class="first-letter:float-left first-letter:text-5xl first-letter:font-serif first-letter:font-bold first-letter:mr-3 first-letter:text-white first-letter:leading-none">
                                есять лет — колоссальный срок для видеоигровой индустрии. За это время сменилось поколение консолей, BioWare пережила череду мучительных производственных метаний и фальстартов, а фанаты почти потеряли надежду узнать, чем закончится дерзкий замысел Соласа. Премьера <span class="text-purple-300 font-medium">The Veilguard</span> воспринимается не просто как релиз очередной RPG, а как экзистенциальный тест: способна ли некогда флагманская канадская студия создавать современные увлекательные приключения.
                            </p>
                            <p>
                                И главный ответ, который формируется уже после первых десяти часов: да, игра работает, причём удивительно слаженно. Однако преданным ветеранам <a href="#" class="text-cyan-400 hover:underline">Dragon Age: Origins</a> придётся проделать над собой немалое ментальное усилие, ведь перед нами окончательный переход от неторопливой изометрической партийной классики к стремительному, плотно срежиссированному кинематографичному слэшеру.
                            </p>
                        </div>
                    </section>

                    <!-- Изображение с Минратоусом -->
                    <section class="bg-[#13161c] border border-[#1f2430] rounded-2xl p-3 overflow-hidden">
                        <div class="relative rounded-xl overflow-hidden group">
                            <img
                                src="{{ Vite::asset('resources/images/banner-review.png') }}"
                                alt="Minrathous Screen"
                                class="w-full h-[320px] md:h-[380px] object-cover "
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent pointer-events-none"></div>
                            <div class="absolute bottom-3 right-3 bg-[#0e1015]/90 backdrop-blur-md border border-cyan-500/30 text-cyan-400 text-[10px] font-mono px-2.5 py-1 rounded-md shadow-lg flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-pulse"></span>
                                <span>4K HDR / Ultra Settings</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between text-xs text-gray-400 mt-3 px-1">
                            <p class="text-gray-300">
                                Панорама Минратоуса впечатляет масштабом и неоновыми переливами древней магии Тевинтера.
                            </p>
                            <span class="text-gray-500 text-[11px] shrink-0 ml-4">BioWare / Electronic Arts</span>
                        </div>
                    </section>

                    <!-- Раздел #02: Боевая система -->
                    <section id="section-2" class="scroll-mt-6 space-y-4">
                        <h2 class="text-2xl md:text-3xl font-serif font-bold text-white flex items-center gap-3">
                            <span class="text-purple-400 text-lg font-mono font-normal">#02</span>
                            <span>Боевая система: Больше слэшера, меньше тактики</span>
                        </h2>

                        <div class="space-y-4 text-gray-300 text-sm md:text-base leading-relaxed">
                            <p>
                                Тактическая пауза в её классическом понимании канула в Лету. Меню способностей теперь лишь слегка замедляет время, давая секунду сориентироваться и отдать распоряжение двум (а не трём, как раньше) спутникам. Фокус полностью смещён на прямой контроль персонажа: точные увороты, парирование с идеальными окнами, цепочки легких и тяжелых комбо-ударов.
                            </p>
                            <p>
                                Импакт от ударов превосходен. Когда маг высвобождает каскад рунических молний или воин обрушивает двуручный топор, разрушая щиты бронированного огра, игра дарит чистый, осязаемый драйв. Комбинирование стихий и триггеров («детонаций») на манер Mass Effect держит в постоянном напряжении.
                            </p>
                        </div>

                        <section class="my-6 p-5 rounded-2xl bg-[#13161c] border border-[#1f2430] relative overflow-hidden">
                            <div class="absolute -left-1 top-0 bottom-0 w-1.5 bg-purple-500"></div>
                            <p class="text-sm md:text-base italic text-gray-200 font-serif leading-relaxed mb-3">
                                «Это самая динамичная и кинематографичная игра серии, хоть ветеранам Origins придётся привыкать к новому темпу и отсутствию прямого управления отрядом».
                            </p>
                            <div class="flex items-center gap-2 text-xs text-cyan-400">
                                <span class="w-4 h-[1px] bg-cyan-400"></span>
                                <span>Из редакционного дневника прохождения</span>
                            </div>
                        </section>
                    </section>

                    <!-- Раздел #03: Спутники и сюжет -->
                    <section id="section-3" class="scroll-mt-6 space-y-4">
                        <h2 class="text-2xl md:text-3xl font-serif font-bold text-white flex items-center gap-3">
                            <span class="text-purple-400 text-lg font-mono font-normal">#03</span>
                            <span>Спутники и сюжет: Сила личных историй</span>
                        </h2>

                        <div class="space-y-4 text-gray-300 text-sm md:text-base leading-relaxed">
                            <p>
                                Что в The Veilguard удалось без всяких скидок — это обитатели Маяка. База героев жива: сопартийцы не стоят истуканами в ожидании главного героя, а ходят друг к другу в гости, спорят на кухне, оставляют записки и участвуют в остроумных диалогах.
                            </p>
                            <p>
                                Личные квесты каждого из семи компаньонов по проработке не уступают центральной сюжетной ветке. Будь то детективное расследование с Нев в закоулках дождливого Дока или раскопки некрополя с обаятельным Эммрихом — сценаристы сумели вернуть фирменную эмоциональную привязку BioWare.
                            </p>
                        </div>

                        <section class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-2">
                            <div class="space-y-2">
                                <div class="relative rounded-xl overflow-hidden border border-[#1f2430] group">
                                    <img
                                        src="{{ Vite::asset('resources/images/bfirst.png') }}"
                                        alt="Диалоговые сцены"
                                        class="w-full h-48 md:h-56 object-cover"
                                    >
                                </div>
                                <p class="text-xs text-gray-400 px-1">
                                    Диалоговые сцены поставлены на уровне дорогих телесериалов
                                </p>
                            </div>

                            <div class="space-y-2">
                                <div class="relative rounded-xl overflow-hidden border border-[#1f2430] group">
                                    <img
                                        src="{{ Vite::asset('resources/images/bsec.png') }}"
                                        alt="Синергия спутников в бою"
                                        class="w-full h-48 md:h-56 object-cover"
                                    >
                                </div>
                                <p class="text-xs text-gray-400 px-1">
                                    Синергия спутников в бою: создание стихийных детонаций
                                </p>
                            </div>
                        </section>
                    </section>

                    <!-- Раздел #04: Визуальный стиль и оптимизация -->
                    <section id="section-4" class="scroll-mt-6 space-y-4">
                        <h2 class="text-2xl md:text-3xl font-serif font-bold text-white flex items-center gap-3">
                            <span class="text-purple-400 text-lg font-mono font-normal">#04</span>
                            <span>Визуальный стиль и оптимизация на ПК</span>
                        </h2>

                        <p class="text-gray-300 text-sm md:text-base leading-relaxed">
                            Техническое состояние — главный триумф релиза. Игра выходит без компиляционных статтеров и с безупречной поддержкой ультрашироких мониторов. На системе с RTX 4080 в нативном 4K при ультра-настройках с трассировкой лучей проект демонстрирует стабильные 75-85 кадров в секунду, а при включении DLSS Quality фреймрейт переваливает за сотню.
                        </p>

                        <section class="bg-[#13161c] border border-[#1f2430] rounded-2xl p-5 my-6 space-y-4">
                            <div class="flex items-center justify-between text-xs font-semibold">
                                <span class="text-white">Средний FPS в 4K (Ultra + Ray Tracing)</span>
                                <span class="text-cyan-400 font-mono text-[11px]">NEXUS Hardware Bench</span>
                            </div>

                            <div class="space-y-3.5 pt-1">
                                <div class="space-y-1.5">
                                    <div class="flex justify-between text-xs">
                                        <span class="text-gray-300 font-medium">RTX 4090 24GB</span>
                                        <span class="text-cyan-400 font-bold font-mono">104 FPS</span>
                                    </div>
                                    <div class="w-full bg-[#1c202b] h-2.5 rounded-full overflow-hidden">
                                        <div class="bg-cyan-400 h-full rounded-full" style="width: 80%;"></div>
                                    </div>
                                </div>

                                <div class="space-y-1.5">
                                    <div class="flex justify-between text-xs">
                                        <span class="text-gray-300 font-medium">RTX 4080 16GB (Тестовый стенд)</span>
                                        <span class="text-purple-400 font-bold font-mono">82 FPS</span>
                                    </div>
                                    <div class="w-full bg-[#1c202b] h-2.5 rounded-full overflow-hidden">
                                        <div class="bg-purple-400 h-full rounded-full" style="width: 68.8%;"></div>
                                    </div>
                                </div>

                                <div class="space-y-1.5">
                                    <div class="flex justify-between text-xs">
                                        <span class="text-gray-300 font-medium">RX 7900 XTX 24GB</span>
                                        <span class="text-amber-400 font-bold font-mono">71 FPS</span>
                                    </div>
                                    <div class="w-full bg-[#1c202b] h-2.5 rounded-full overflow-hidden">
                                        <div class="bg-amber-400 h-full rounded-full" style="width: 58.2%;"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </section>

                    <!-- Блок Плюсов и Минусов -->
                    <section class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
                        <div class="bg-[#13161c] border border-[#1f2430] rounded-2xl p-5 space-y-4">
                            <h3 class="text-cyan-400 font-serif font-bold text-lg flex items-center gap-2">
                                <span>👍</span> Понравилось
                            </h3>

                            <ul class="space-y-3 text-xs md:text-sm text-gray-300">
                                <li class="flex items-start gap-2.5">
                                    <span class="text-cyan-400 shrink-0 mt-0.5">✓</span>
                                    <span>Великолепный арт-дизайн локаций Минратоуса и Глубинных троп</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-cyan-400 shrink-0 mt-0.5">✓</span>
                                    <span>Глубоко прописанные личные квесты и взаимоотношения сопартийцев</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-cyan-400 shrink-0 mt-0.5">✓</span>
                                    <span>Отзывчивое, насыщенное спецэффектами слэшерное управление</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-cyan-400 shrink-0 mt-0.5">✓</span>
                                    <span>Образцовая оптимизация на ПК без статтеров с первого дня</span>
                                </li>
                            </ul>
                        </div>

                        <div class="bg-[#13161c] border border-[#1f2430] rounded-2xl p-5 space-y-4">
                            <h3 class="text-rose-400 font-serif font-bold text-lg flex items-center gap-2">
                                <span>👎</span> Не понравилось
                            </h3>

                            <ul class="space-y-3 text-xs md:text-sm text-gray-300">
                                <li class="flex items-start gap-2.5">
                                    <span class="text-rose-400 shrink-0 mt-0.5">✕</span>
                                    <span>Фактическое исчезновение изометрической тактической глубины</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-rose-400 shrink-0 mt-0.5">✕</span>
                                    <span>Упрощённая экипировка и минимальное влияние характеристик брони</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-rose-400 shrink-0 mt-0.5">✕</span>
                                    <span>Спорные диалоговые колёса с недостаточной свободой отыгрыша злодея</span>
                                </li>
                            </ul>
                        </div>
                    </section>

                    <!-- Секция комментариев / Обсуждение -->
                    <section class="mt-10 space-y-6">
                        <div class="flex items-center justify-between pb-2">
                            <h3 class="text-2xl font-serif font-bold text-white flex items-center gap-3">
                                <span>Обсуждение</span>
                                <span class="bg-[#7c3aed] text-white text-xs px-2.5 py-0.5 rounded-full font-sans font-medium">264</span>
                            </h3>
                            <div class="text-xs text-gray-400 flex items-center gap-1 cursor-pointer hover:text-white transition">
                                <span>Сортировка:</span>
                                <span class="text-gray-200 font-medium">По популярности ▾</span>
                            </div>
                        </div>

                        <div class="bg-[#1f222e] rounded-2xl p-5 space-y-4">
                            <div class="flex items-start gap-3">
                                <img src="{{ Vite::asset('resources/images/alex.png') }}" alt="Аватар" class="w-8 h-8 rounded-full object-cover shrink-0">
                                <textarea
                                    rows="3"
                                    placeholder="Поделитесь вашим мнением об игре или статье..."
                                    class="w-full bg-[#181a22] text-xs md:text-sm text-gray-200 placeholder-gray-500 rounded-xl p-4 focus:outline-none resize-none border border-transparent focus:border-[#2e3447]"
                                ></textarea>
                            </div>
                            <div class="flex items-center justify-between pt-1 text-xs text-gray-400">
                                <div class="flex items-center gap-4 text-gray-400">
                                    <button class="hover:text-white transition font-bold">B</button>
                                    <button class="hover:text-white transition italic">I</button>
                                    <button class="hover:text-white transition">👁</button>
                                    <button class="hover:text-white transition">🖼</button>
                                </div>
                                <button class="bg-[#8b5cf6] hover:bg-[#7c3aed] text-white font-medium px-6 py-2 rounded-xl transition">
                                    Отправить
                                </button>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="bg-[#1f222e] rounded-2xl p-5 space-y-3">
                                <div class="flex items-center justify-between text-xs">
                                    <div class="flex items-center gap-2">
                                        <img src="{{ Vite::asset('resources/images/alex.png') }}" alt="Алексей Соколов" class="w-7 h-7 rounded-full object-cover">
                                        <span class="font-bold text-white text-sm">Алексей Соколов</span>
                                        <span class="bg-[#7c3aed] text-white text-[10px] font-bold px-2 py-0.5 rounded-md uppercase">АВТОР</span>
                                        <span class="text-gray-400 ml-1">4 часа назад</span>
                                    </div>
                                    <span class="text-[#f59e0b] text-xs font-medium flex items-center gap-1">📌 Закреплено</span>
                                </div>
                                <p class="text-xs md:text-sm text-gray-300 leading-relaxed">
                                    Коллеги, небольшое уточнение по поводу выборов из прошлых частей: решения переносятся через встроенный конструктор историй в меню персонажа (сохранения Dragon Age Keep не используются напрямую). Внимательно настраивайте инквизитора при создании героя!
                                </p>
                                <div class="flex items-center gap-4 text-xs">
                                    <button class="text-[#38bdf8] hover:underline font-medium">Ответить</button>
                                    <div class="flex items-center gap-1.5 text-gray-400">
                                        <button class="hover:text-white transition">👍</button>
                                        <span class="text-gray-200 font-medium">96</span>
                                        <button class="hover:text-white transition ml-0.5">👎</button>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-[#1f222e] rounded-2xl p-5 space-y-3">
                                <div class="flex items-center justify-between text-xs">
                                    <div class="flex items-center gap-2">
                                        <div class="w-7 h-7 rounded-full bg-[#134e4a] text-[#2dd4bf] flex items-center justify-center font-bold text-xs">MK</div>
                                        <span class="font-bold text-white text-sm">Maxim_K</span>
                                        <span class="text-gray-400 ml-1">2 часа назад</span>
                                    </div>
                                    <button class="text-gray-400 hover:text-white">•••</button>
                                </div>
                                <p class="text-xs md:text-sm text-gray-300 leading-relaxed">
                                    Спасибо за взвешенный разбор! Очень боялся за оптимизацию после последних релизов на Frostbite, но новость про 60+ кадров без апскейлеров в 1440p радует. Буду брать на выходных.
                                </p>
                                <div class="flex items-center gap-4 text-xs">
                                    <button class="text-[#38bdf8] hover:underline font-medium">Ответить</button>
                                    <div class="flex items-center gap-1.5 text-gray-400">
                                        <button class="hover:text-white transition">👍</button>
                                        <span class="text-gray-200 font-medium">24</span>
                                        <button class="hover:text-white transition ml-0.5">👎</button>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-[#1f222e] rounded-2xl p-5 space-y-3">
                                <div class="flex items-center justify-between text-xs">
                                    <div class="flex items-center gap-2">
                                        <div class="w-7 h-7 rounded-full bg-[#4c1d95] text-[#c084fc] flex items-center justify-center font-bold text-xs">VR</div>
                                        <span class="font-bold text-white text-sm">Valera_Rogue</span>
                                        <span class="text-gray-400 ml-1">1 час назад</span>
                                    </div>
                                </div>
                                <p class="text-xs md:text-sm text-gray-300 leading-relaxed">
                                    Подтверждаю, на RX 6700 XT в Quad HD всё плавно без просадок. Оптимизация — моё почтение разработчикам.
                                </p>
                                <div class="flex items-center gap-4 text-xs">
                                    <button class="text-[#38bdf8] hover:underline font-medium">Ответить</button>
                                    <div class="flex items-center gap-1.5 text-gray-400">
                                        <button class="hover:text-white transition">👍</button>
                                        <span class="text-gray-200 font-medium">7</span>
                                        <button class="hover:text-white transition ml-0.5">👎</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>

                    <!-- Читайте также в разделе «Обзоры» -->
                    <section class="mt-12 mb-8 space-y-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-2xl font-serif font-bold text-white">Читайте также в разделе «Обзоры»</h3>
                            <a href="#" class="text-xs text-sky-400 hover:text-sky-300 font-medium flex items-center gap-1 transition">
                                <span>Все обзоры</span>
                                <span>→</span>
                            </a>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

                            <article class="bg-[#1f222e] rounded-2xl overflow-hidden border border-[#2a2e3d] flex flex-col justify-between group cursor-pointer hover:border-[#3b4257] transition">
                                <div>
                                    <div class="relative h-44 overflow-hidden">
                                        <img
                                            src="{{ Vite::asset('resources/images/cuber.png') }}"
                                            alt="Cyberpunk 2077: Phantom Liberty"
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                        >
                                        <span class="absolute top-3 right-3 bg-[#f59e0b] text-black font-extrabold text-xs px-2 py-1 rounded-lg shadow-md">
                        9.2
                    </span>
                                    </div>

                                    <div class="p-5 space-y-2">
                    <span class="text-[11px] font-bold tracking-wider text-sky-400 uppercase">
                        DLC / ДОПОЛНЕНИЕ
                    </span>
                                        <h4 class="text-sm font-bold text-white leading-snug line-clamp-2 group-hover:text-sky-400 transition">
                                            Cyberpunk 2077: Phantom Liberty — Шпионский триллер высшей...
                                        </h4>
                                    </div>
                                </div>

                                <div class="px-5 pb-5 pt-2 flex items-center justify-between text-xs text-gray-400">
                                    <span>24 фев 2025</span>
                                    <div class="flex items-center gap-1">
                                        <span class="text-gray-500">💬</span>
                                        <span>182</span>
                                    </div>
                                </div>
                            </article>

                            <article class="bg-[#1f222e] rounded-2xl overflow-hidden border border-[#2a2e3d] flex flex-col justify-between group cursor-pointer hover:border-[#3b4257] transition">
                                <div>
                                    <div class="relative h-44 overflow-hidden">
                                        <img
                                            src="{{ Vite::asset('resources/images/avowed.png') }}"
                                            alt="Avowed"
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                        >
                                        <span class="absolute top-3 right-3 bg-[#38bdf8] text-black font-extrabold text-xs px-2 py-1 rounded-lg shadow-md">
                        8.8
                    </span>
                                    </div>

                                    <div class="p-5 space-y-2">
                    <span class="text-[11px] font-bold tracking-wider text-purple-400 uppercase">
                        БОЛЬШОЙ ОБЗОР
                    </span>
                                        <h4 class="text-sm font-bold text-white leading-snug line-clamp-2 group-hover:text-purple-400 transition">
                                            Avowed — Обсидиановый колорит и магия Эоры в формате экшена
                                        </h4>
                                    </div>
                                </div>

                                <div class="px-5 pb-5 pt-2 flex items-center justify-between text-xs text-gray-400">
                                    <span>08 мар 2025</span>
                                    <div class="flex items-center gap-1">
                                        <span class="text-gray-500">💬</span>
                                        <span>94</span>
                                    </div>
                                </div>
                            </article>

                            <article class="bg-[#1f222e] rounded-2xl overflow-hidden border border-[#2a2e3d] flex flex-col justify-between group cursor-pointer hover:border-[#3b4257] transition">
                                <div>
                                    <div class="relative h-44 overflow-hidden">
                                        <img
                                            src="{{ Vite::asset('resources/images/star.png') }}"
                                            alt="Star Wars Outlaws"
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                        >
                                        <span class="absolute top-3 right-3 bg-[#374151] text-white font-extrabold text-xs px-2 py-1 rounded-lg shadow-md border border-gray-600">
                        7.6
                    </span>
                                    </div>

                                    <div class="p-5 space-y-2">
                    <span class="text-[11px] font-bold tracking-wider text-amber-500 uppercase">
                        РЕЦЕНЗИЯ
                    </span>
                                        <h4 class="text-sm font-bold text-white leading-snug line-clamp-2 group-hover:text-amber-500 transition">
                                            Star Wars Outlaws — Приключения контрабандистки в
                                        </h4>
                                    </div>
                                </div>

                                <div class="px-5 pb-5 pt-2 flex items-center justify-between text-xs text-gray-400">
                                    <span>12 янв 2025</span>
                                    <div class="flex items-center gap-1">
                                        <span class="text-gray-500">💬</span>
                                        <span>310</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
</x-layout>
