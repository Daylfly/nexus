<x-layout title="NEXUS — Главная">
    <div class="mx-auto max-w-[1240px] space-y-5 px-4 py-5">
        {{-- Hero --}}
        <section class="max-w-[1400px] mx-auto p-4 md:p-6">
            <div class="relative w-full rounded-2xl md:rounded-3xl overflow-hidden bg-[#0d0e12] border border-white/5 min-h-[540px] flex flex-col justify-between p-6 md:p-10 lg:p-12 shadow-2xl">

                <div class="absolute inset-0 z-0">
                    <img
                        src="{{ Vite::asset('resources/images/herobanner.png') }}"
                        alt="Background Hero"
                        class="w-full h-full object-cover object-right opacity-60"
                    />
                    <div class="absolute inset-0 bg-gradient-to-r from-[#0d0e12] via-[#0d0e12]/80 to-transparent"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0d0e12] via-transparent to-transparent"></div>
                </div>

                <div class="relative z-10 flex flex-wrap items-center gap-2 md:gap-3 text-xs md:text-sm font-medium">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-indigo-200/90 text-indigo-950 font-extrabold uppercase tracking-wide">
                        <span class="w-1.5 h-1.5 rounded-full bg-indigo-700"></span>
                        В фокусе
                    </span>

                    <span class="px-3 py-1 rounded-full bg-white/10 backdrop-blur-md text-cyan-300 font-semibold border border-white/10">
                        PC • PS5 • Xbox Series X|S
                    </span>

                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/10 backdrop-blur-md text-slate-300 border border-white/10">
                        <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" stroke-width="2"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2"/>
                        </svg>
                        12 мин чтения
                    </span>

                    <span class="px-3 py-1 rounded-full bg-amber-500/20 text-amber-300 border border-amber-500/30 font-semibold">
                        Авторский лонгрид
                    </span>
                </div>

                <div class="relative z-10 my-8 max-w-3xl">
                    <h1 class="text-3xl md:text-5xl lg:text-6xl font-serif text-white font-normal leading-[1.15] tracking-tight mb-4">
                        Главный эксклюзив года: Почему следующий проект авторов Ведьмака изменит жанр <span class="font-sans font-bold">RPG</span> навсегда
                    </h1>
                    <p class="text-slate-300 text-sm md:text-base lg:text-lg leading-relaxed font-sans max-w-2xl font-light">
                        Первые подробности о революционной боевой системе, бесшовной симуляции открытого мира на движке нового поколения и бескомпромиссной свободе выбора в сюжетных разветвлениях.
                    </p>
                </div>

                <div class="relative z-10 flex flex-wrap items-center justify-between gap-4 pt-4 border-t border-white/10">

                    <div class="flex items-center gap-3">
                        <img
                            src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=100&auto=format&fit=crop"
                            alt="Алексей Соколов"
                            class="w-10 h-10 rounded-full object-cover border border-indigo-500/30"
                        />

                        <div class="text-xs md:text-sm">
                            <div class="flex items-center gap-2">
                                <span class="text-white font-semibold">Алексей Соколов</span>
                                <span class="text-xs font-normal rounded-full bg-violet-300/20 p-1 text-violet-300">Главный редактор</span>
                            </div>

                            <div class="flex items-center gap-2 text-slate-400 text-xs mt-0.5">
                                <span>28 минут назад</span>
                                <span>•</span>

                                <span class="flex items-center gap-1 hover:text-slate-200 cursor-pointer">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                    </svg>
                                    142
                                </span>
                                <span>•</span>

                                <span class="flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                    2.4k
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-2">
                        <a href="#" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-violet-200 hover:bg-violet-300 text-indigo-950 font-bold text-sm transition-all shadow-lg shadow-indigo-500/10">
                            Читать лонгрид
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>

                        <button class="p-2.5 rounded-xl bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white border border-white/5 transition-all" title="Сохранить">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/>
                            </svg>
                        </button>

                        <button class="p-2.5 rounded-xl bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white border border-white/5 transition-all" title="Поделиться">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 11-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                            </svg>
                        </button>
                    </div>

                </div>

            </div>
        </section>

        {{-- 3 Cards Section --}}
        <section class="grid gap-4 md:grid-cols-3">
            <!-- Карточка 1 -->
            <article class="group relative flex flex-col overflow-hidden rounded-2xl border border-nx-border bg-nx-card transition hover:border-nx-border/80">
                <a href="#" class="flex flex-col h-full">
                    <div class="relative aspect-[16/9] w-full overflow-hidden">
                        <img
                            src="{{ Vite::asset('resources/images/gpu.png') }}"
                            alt="RTX 5080"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.04]"
                        />
                        <div class="absolute left-3 top-3 right-3 flex items-center justify-between gap-2">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-[#38bdf8]">
                                Железо · Тест-драйв
                            </span>
                            <span class="flex h-7 w-9 items-center justify-center rounded-md bg-[#38bdf8] text-xs font-bold text-black">
                                8.8
                            </span>
                        </div>
                    </div>

                    <div class="flex flex-1 flex-col justify-between p-4">
                        <div class="space-y-2">
                            <h3 class="text-[15px] font-semibold leading-snug text-white transition group-hover:text-sky-400">
                                Тест NVIDIA GeForce RTX 5080 в 4K: Революция трассировки или маркетинговый трюк?
                            </h3>
                            <p class="line-clamp-2 text-[12px] leading-relaxed text-gray-400">
                                Замерили фреймрейт в 14 хитах, протестировали DLSS 4 с генерацией кадров на ультрах и...
                            </p>
                        </div>

                        <div class="mt-4 flex items-center justify-between text-[11px] text-gray-500">
                            <span>Максим Ильин</span>
                            <div class="flex items-center gap-1">
                                <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="10" stroke-width="2"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2"/>
                                </svg>
                                <span>14 мин</span>
                            </div>
                        </div>
                    </div>
                </a>
            </article>

            <!-- Карточка 2 -->
            <article class="group relative flex flex-col overflow-hidden rounded-2xl border border-nx-border bg-nx-card transition hover:border-nx-border/80">
                <a href="#" class="flex flex-col h-full">
                    <div class="relative aspect-[16/9] w-full overflow-hidden">
                        <img
                            src="{{ Vite::asset('resources/images/guide.png') }}"
                            alt="Elden Ring Guide"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.04]"
                        />
                        <div class="absolute left-3 top-3 right-3 flex items-center justify-between gap-2">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-[#fbbf24]">
                                Гайды & Лор
                            </span>
                        </div>
                    </div>

                    <div class="flex flex-1 flex-col justify-between p-4">
                        <div class="space-y-2">
                            <h3 class="text-[15px] font-semibold leading-snug text-white transition group-hover:text-amber-400">
                                Разбор лора: Скрытый финал в дополнении для Elden Ring, который пропустили 90% игроков
                            </h3>
                            <p class="line-clamp-2 text-[12px] leading-relaxed text-gray-400">
                                Деконструкция тайной цепочки квестов, зашифрованных описаний артефактов и истинной...
                            </p>
                        </div>

                        <div class="mt-4 flex items-center justify-between text-[11px] text-gray-500">
                            <span>Елена Власова</span>
                            <div class="flex items-center gap-1">
                                <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="10" stroke-width="2"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2"/>
                                </svg>
                                <span>8 мин</span>
                            </div>
                        </div>
                    </div>
                </a>
            </article>

            <!-- Карточка 3 -->
            <article class="group relative flex flex-col overflow-hidden rounded-2xl border border-nx-border bg-nx-card transition hover:border-nx-border/80">
                <a href="#" class="flex flex-col h-full">
                    <div class="relative aspect-[16/9] w-full overflow-hidden">
                        <img
                            src="{{ Vite::asset('resources/images/industrie.png') }}"
                            alt="Game Industry Crisis"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.04]"
                        />
                        <div class="absolute left-3 top-3 right-3 flex items-center justify-between gap-2">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-[#f87171]">
                                Аналитика · Индустрия
                            </span>
                        </div>
                    </div>

                    <div class="flex flex-1 flex-col justify-between p-4">
                        <div class="space-y-2">
                            <h3 class="text-[15px] font-semibold leading-snug text-white transition group-hover:text-red-400">
                                Индустрия в кризисе: Как бюджеты свыше $250 млн уничтожают классические AAA-игры
                            </h3>
                            <p class="line-clamp-2 text-[12px] leading-relaxed text-gray-400">
                                Анонимные инсайды от ветеранов крупных студий: почему раздутый цикл разработки душит смелые...
                            </p>
                        </div>

                        <div class="mt-4 flex items-center justify-between text-[11px] text-gray-500">
                            <span>Дмитрий Волков</span>
                            <div class="flex items-center gap-1">
                                <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="10" stroke-width="2"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2"/>
                                </svg>
                                <span>15 мин</span>
                            </div>
                        </div>
                    </div>
                </a>
            </article>
        </section>
        <div class="grid items-start gap-5 lg:grid-cols-[minmax(0,1fr)_320px] xl:grid-cols-[minmax(0,1fr)_360px]">
            <div>
                <div class="mb-4 flex items-center justify-between gap-2 border-b border-white/5 pb-3">
                    <div class="flex flex-wrap items-center gap-1.5 text-xs font-medium">
                        <a href="#" class="rounded-lg bg-indigo-600 px-3.5 py-1.5 font-semibold text-white">Все материалы</a>
                        <a href="#" class="rounded-lg bg-white/5 px-3.5 py-1.5 text-slate-300 hover:bg-white/10 hover:text-white">Обзоры редакции</a>
                        <a href="#" class="rounded-lg bg-white/5 px-3.5 py-1.5 text-slate-300 hover:bg-white/10 hover:text-white">Аналитика</a>
                        <a href="#" class="rounded-lg bg-white/5 px-3.5 py-1.5 text-slate-300 hover:bg-white/10 hover:text-white">Гайды и билды</a>
                        <a href="#" class="rounded-lg bg-white/5 px-3.5 py-1.5 text-slate-300 hover:bg-white/10 hover:text-white">Интервью</a>
                        <a href="#" class="rounded-lg bg-white/5 px-3.5 py-1.5 text-slate-300 hover:bg-white/10 hover:text-white">Мнения</a>
                    </div>
                    <button class="rounded-lg bg-white/5 p-2 text-slate-400 hover:bg-white/10 hover:text-white" title="Фильтры">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                        </svg>
                    </button>
                </div>

                <!-- Список карточек статей -->
                <div class="space-y-4">

                    <!-- Карточка 1: Обзор Dragon Age -->
                    <div class="flex flex-col gap-4 rounded-2xl border border-white/5 bg-[#121318] p-4 sm:flex-row">
                        <!-- Превью с бейджем -->
                        <div class="relative h-48 w-full shrink-0 overflow-hidden rounded-xl sm:h-auto sm:w-64">
                            <img                         src="{{ Vite::asset('resources/images/first.png') }}"
                                                         alt="Dragon Age" class="h-full w-full object-cover">
                            <!-- Бейдж оценки -->
                            <span class="absolute left-3 top-3 rounded-md bg-cyan-500 px-2.5 py-1 text-xs font-black text-slate-950 shadow-lg">
                8.5 отлично
            </span>
                        </div>

                        <!-- Контент -->
                        <div class="flex flex-1 flex-col justify-between">
                            <div>
                                <!-- Теги и тип -->
                                <div class="flex items-center gap-2 text-[11px] font-bold">
                                    <span class="rounded bg-white/5 px-1.5 py-0.5 text-cyan-400">PC</span>
                                    <span class="rounded bg-white/5 px-1.5 py-0.5 text-purple-300">PS5</span>
                                    <span class="text-slate-500">•</span>
                                    <span class="text-slate-400">Рецензия</span>
                                </div>

                                <!-- Заголовок -->
                                <h3 class="mt-2 text-base font-bold text-white hover:text-sky-400 transition cursor-pointer leading-snug">
                                    Обзор Dragon Age: The Veilguard — Красочное фэнтези, застрявшее между эпохами
                                </h3>

                                <!-- Описание -->
                                <p class="mt-2 text-xs leading-relaxed text-slate-400 line-clamp-2">
                                    Великолепный визуальный стиль, драйвовая динамическая боевка и яркие локации сталкиваются с безопасными диалогами и...
                                </p>

                                <!-- Плюсы и минусы -->
                                <div class="mt-3 flex flex-wrap gap-2 text-[11px]">
                    <span class="rounded-md bg-cyan-950/40 border border-cyan-800/30 px-2 py-0.5 text-cyan-400 font-medium">
                        ⊕ Бодрая боевка
                    </span>
                                    <span class="rounded-md bg-cyan-950/40 border border-cyan-800/30 px-2 py-0.5 text-cyan-400 font-medium">
                        ⊕ Оптимизация на ПК
                    </span>
                                    <span class="rounded-md bg-rose-950/40 border border-rose-800/30 px-2 py-0.5 text-rose-400 font-medium">
                        ⊖ Пресные сайдквесты
                    </span>
                                </div>
                            </div>

                            <!-- Метаинформация -->
                            <div class="mt-4 flex items-center justify-between border-t border-white/[0.03] pt-3 text-xs text-slate-500">
                                <div>
                                    <span class="font-medium text-slate-300">Артем Зайцев</span>
                                    <span>• Вчера, 18:40</span>
                                </div>
                                <div class="flex items-center gap-3">
                    <span class="flex items-center gap-1 hover:text-slate-300 cursor-pointer">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                        96
                    </span>
                                    <button class="hover:text-slate-300">
                                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Карточка 2: Эволюция immersive sim -->
                    <div class="flex flex-col gap-4 rounded-2xl border border-white/5 bg-[#121318] p-4 sm:flex-row">
                        <!-- Превью с бейджем -->
                        <div class="relative h-48 w-full shrink-0 overflow-hidden rounded-xl sm:h-auto sm:w-64">
                            <img                         src="{{ Vite::asset('resources/images/sec.png') }}"
                                                         alt="Immersive sim" class="h-full w-full object-cover">
                            <span class="absolute left-3 top-3 rounded-md bg-purple-600 px-2 py-0.5 text-[10px] font-bold uppercase tracking-wider text-white shadow-lg">
                История жанра
            </span>
                        </div>

                        <!-- Контент -->
                        <div class="flex flex-1 flex-col justify-between">
                            <div>
                                <!-- Теги -->
                                <div class="flex items-center gap-2 text-[11px] font-bold text-slate-400">
                                    <span class="rounded bg-white/5 px-2 py-0.5 text-slate-300">Лонгрид</span>
                                    <span>•</span>
                                    <span>22 мин чтения</span>
                                </div>

                                <!-- Заголовок -->
                                <h3 class="mt-2 text-base font-bold text-white hover:text-sky-400 transition cursor-pointer leading-snug">
                                    Эволюция immersive sim: От оригинальной Deus Ex до современных стелс-песочниц
                                </h3>

                                <!-- Описание -->
                                <p class="mt-2 text-xs leading-relaxed text-slate-400 line-clamp-3">
                                    Как принципы Уоррена Спектора и Looking Glass Studios сформировали философию абсолютной свободы действий и почему этот культовый жанр...
                                </p>
                            </div>

                            <!-- Метаинформация -->
                            <div class="mt-4 flex items-center justify-between border-t border-white/[0.03] pt-3 text-xs text-slate-500">
                                <div>
                                    <span class="font-medium text-slate-300">Константин Ремизов</span>
                                    <span>• 3 дня назад</span>
                                </div>
                                <div class="flex items-center gap-3">
                    <span class="flex items-center gap-1 hover:text-slate-300 cursor-pointer">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                        58
                    </span>
                                    <button class="hover:text-slate-300">
                                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Карточка 3: OLED-мониторы -->
                    <div class="flex flex-col gap-4 rounded-2xl border border-white/5 bg-[#121318] p-4 sm:flex-row">
                        <!-- Превью с бейджем -->
                        <div class="relative h-48 w-full shrink-0 overflow-hidden rounded-xl sm:h-auto sm:w-64">
                            <img                         src="{{ Vite::asset('resources/images/thir.png') }}"
                                                         alt="OLED Monitors" class="h-full w-full object-cover">
                            <span class="absolute left-3 top-3 rounded-md bg-teal-600 px-2 py-0.5 text-[10px] font-bold uppercase tracking-wider text-white shadow-lg">
                Гид покупателя
            </span>
                        </div>

                        <!-- Контент -->
                        <div class="flex flex-1 flex-col justify-between">
                            <div>
                                <!-- Теги -->
                                <div class="flex items-center gap-2 text-[11px] font-bold text-slate-400">
                                    <span class="rounded bg-white/5 px-2 py-0.5 text-cyan-400">Железо & Девайсы</span>
                                    <span>•</span>
                                    <span>10 мин</span>
                                </div>

                                <!-- Заголовок -->
                                <h3 class="mt-2 text-base font-bold text-white hover:text-sky-400 transition cursor-pointer leading-snug">
                                    Лучшие OLED-мониторы для соревновательных шутеров в 2025 году: Полный гид покупателя
                                </h3>

                                <!-- Описание -->
                                <p class="mt-2 text-xs leading-relaxed text-slate-400 line-clamp-2">
                                    Сравнение частоты 360 Гц против 480 Гц, защита от выгорания матриц третьего поколения, задержка отклика пикселей 0.03 мс и...
                                </p>
                            </div>

                            <!-- Метаинформация -->
                            <div class="mt-4 flex items-center justify-between border-t border-white/[0.03] pt-3 text-xs text-slate-500">
                                <div>
                                    <span class="font-medium text-slate-300">Лаборатория NEXUS</span>
                                    <span>• 4 дня назад</span>
                                </div>
                                <div class="flex items-center gap-3">
                    <span class="flex items-center gap-1 hover:text-slate-300 cursor-pointer">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                        43
                    </span>
                                    <button class="hover:text-slate-300">
                                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Карточка 4: Инди-жемчужины -->
                    <div class="flex flex-col gap-4 rounded-2xl border border-white/5 bg-[#121318] p-4 sm:flex-row">
                        <!-- Превью с бейджем -->
                        <div class="relative h-48 w-full shrink-0 overflow-hidden rounded-xl sm:h-auto sm:w-64">
                            <img                         src="{{ Vite::asset('resources/images/four.png') }}"
                             alt="Indie games" class="h-full w-full object-cover">
                            <span class="absolute left-3 top-3 rounded-md bg-amber-500 px-2 py-0.5 text-[10px] font-bold uppercase tracking-wider text-slate-950 shadow-lg">
                Инди-радар
            </span>
                        </div>

                        <!-- Контент -->
                        <div class="flex flex-1 flex-col justify-between">
                            <div>
                                <!-- Теги -->
                                <div class="flex items-center gap-2 text-[11px] font-bold text-slate-400">
                                    <span class="rounded bg-white/5 px-2 py-0.5 text-amber-500">Подборка</span>
                                    <span>•</span>
                                    <span>Steam</span>
                                </div>

                                <!-- Заголовок -->
                                <h3 class="mt-2 text-base font-bold text-white hover:text-sky-400 transition cursor-pointer leading-snug">
                                    Топ-7 скрытых инди-жемчужин Steam этой весны, стоящих каждого рубля
                                </h3>

                                <!-- Описание -->
                                <p class="mt-2 text-xs leading-relaxed text-slate-400 line-clamp-2">
                                    Уникальные авторские механики, медитативные головоломки и атмосферные рогалики от независимых команд, которые заслуживают...
                                </p>
                            </div>

                            <!-- Метаинформация -->
                            <div class="mt-4 flex items-center justify-between border-t border-white/[0.03] pt-3 text-xs text-slate-500">
                                <div>
                                    <span class="font-medium text-slate-300">Мария Снежина</span>
                                    <span>• 5 дней назад</span>
                                </div>
                                <div class="flex items-center gap-3">
                    <span class="flex items-center gap-1 hover:text-slate-300 cursor-pointer">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                        31
                    </span>
                                    <button class="hover:text-slate-300">
                                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Кнопка подгрузки -->
                <div class="mt-6 flex justify-center">
                    <button class="inline-flex items-center gap-2 rounded-xl border border-white/10 bg-[#121318] px-6 py-3 text-xs font-semibold text-slate-300 hover:bg-white/5 hover:text-white transition">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                        Показать ещё 12 статей
                    </button>
                </div>
            </div>

            <!-- Правый сайдбар -->
            <aside class="space-y-5">
                <!-- Блок: Релизы месяца -->
                <div class="rounded-2xl border border-white/5 bg-[#121318] p-5">
                    <!-- Шапка блока -->
                    <div class="mb-4 flex items-center justify-between">
                        <div class="flex items-center gap-2.5 font-bold text-white text-base">
                            <svg class="h-5 w-5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-lg">Релизы месяца</span>
                        </div>
                        <span class="text-[11px] font-bold uppercase tracking-wider text-sky-400">ФЕВРАЛЬ - МАРТ</span>
                    </div>

                    <!-- Список игр -->
                    <div class="space-y-3">
                        <!-- Игра 1: Monster Hunter Wilds -->
                        <div class="flex items-center justify-between rounded-xl bg-[#181920] p-3 border border-white/[0.03]">
                            <div class="flex items-center gap-3">
                                <div class="flex flex-col items-center justify-center rounded-lg bg-white/5 px-2.5 py-1.5 text-center font-bold min-w-[48px]">
                                    <span class="text-[10px] uppercase font-semibold text-purple-400 leading-none">ФЕВ</span>
                                    <span class="text-base leading-tight text-white mt-0.5">28</span>
                                </div>
                                <div>
                                    <div class="font-bold text-white text-sm hover:text-sky-400 transition cursor-pointer">Monster Hunter Wilds</div>
                                    <div class="text-[11px] text-slate-400">Capcom • Экшен-RPG</div>
                                    <div class="flex gap-1.5 mt-1.5">
                                        <span class="rounded bg-white/5 px-1.5 py-0.5 text-[10px] font-bold text-cyan-400">PC</span>
                                        <span class="rounded bg-white/5 px-1.5 py-0.5 text-[10px] font-bold text-purple-300">PS5</span>
                                        <span class="rounded bg-white/5 px-1.5 py-0.5 text-[10px] font-bold text-amber-500">XSX</span>
                                    </div>
                                </div>
                            </div>
                            <span class="rounded-md bg-sky-950/80 border border-sky-800/40 px-2.5 py-1 text-xs font-bold text-sky-400 shrink-0">
                12 дн.
            </span>
                        </div>

                        <!-- Игра 2: Avowed -->
                        <div class="flex items-center justify-between rounded-xl bg-[#181920] p-3 border border-white/[0.03]">
                            <div class="flex items-center gap-3">
                                <div class="flex flex-col items-center justify-center rounded-lg bg-white/5 px-2.5 py-1.5 text-center font-bold min-w-[48px]">
                                    <span class="text-[10px] uppercase font-semibold text-sky-400 leading-none">ФЕВ</span>
                                    <span class="text-base leading-tight text-white mt-0.5">18</span>
                                </div>
                                <div>
                                    <div class="font-bold text-white text-sm hover:text-sky-400 transition cursor-pointer">Avowed</div>
                                    <div class="text-[11px] text-slate-400">Obsidian Entertainment</div>
                                    <div class="flex gap-1.5 mt-1.5">
                                        <span class="rounded bg-white/5 px-1.5 py-0.5 text-[10px] font-bold text-cyan-400">PC</span>
                                        <span class="rounded bg-white/5 px-1.5 py-0.5 text-[10px] font-bold text-amber-500">Game Pass</span>
                                    </div>
                                </div>
                            </div>
                            <span class="rounded-md bg-amber-950/40 border border-amber-800/30 px-2.5 py-1 text-xs font-bold text-amber-500 shrink-0">
                2 дня
            </span>
                        </div>

                        <!-- Игра 3: GTA VI -->
                        <div class="flex items-center justify-between rounded-xl bg-[#181920] p-3 border border-white/[0.03]">
                            <div class="flex items-center gap-3">
                                <div class="flex flex-col items-center justify-center rounded-lg bg-white/5 px-2.5 py-1.5 text-center font-bold min-w-[48px]">
                                    <span class="text-[9px] uppercase font-semibold text-amber-500 leading-none">ОСЕНЬ</span>
                                    <span class="text-base leading-tight text-white mt-0.5">25</span>
                                </div>
                                <div>
                                    <div class="font-bold text-white text-sm hover:text-sky-400 transition cursor-pointer">Grand Theft Auto VI</div>
                                    <div class="text-[11px] text-slate-400">Rockstar Games • Open World</div>
                                    <div class="flex gap-1.5 mt-1.5">
                                        <span class="rounded bg-white/5 px-1.5 py-0.5 text-[10px] font-bold text-purple-300">PS5</span>
                                        <span class="rounded bg-white/5 px-1.5 py-0.5 text-[10px] font-bold text-amber-500">XSX</span>
                                    </div>
                                </div>
                            </div>
                            <span class="rounded-md bg-purple-950/40 border border-purple-800/30 px-2.5 py-1 text-xs font-bold text-purple-300 shrink-0">
                Ожидаем
            </span>
                        </div>
                    </div>

                    <a href="#" class="mt-4 block rounded-xl bg-[#181920] py-3 text-center text-xs font-semibold text-slate-300 hover:bg-white/10 hover:text-white transition border border-white/[0.03]">
                        Открыть полный трекер релизов 2025
                    </a>
                </div>
                <!-- Блок 2: Топ обсуждений -->
                <!-- Блок: Топ обсуждений -->
                <div class="rounded-2xl border border-white/5 bg-[#121318] p-5">
                    <!-- Шапка блока -->
                    <div class="mb-5 flex items-center justify-between">
                        <div class="flex items-center gap-2 font-bold text-white text-base">
                            <!-- Иконка огонька (Flame) -->
                            <svg class="h-5 w-5 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9.879z"/>
                            </svg>
                            <span class="text-lg font-bold">Топ обсуждений</span>
                        </div>
                        <span class="text-xs text-slate-500 font-medium">За 24 часа</span>
                    </div>

                    <div class="space-y-4">
                        <!-- Новость 1 -->
                        <div class="flex items-start gap-4">
                            <span class="text-base font-black text-slate-600 shrink-0 mt-0.5">1</span>
                            <div class="space-y-1">
                                <a href="#" class="text-sm font-semibold text-slate-100 hover:text-sky-400 leading-snug transition block">
                                    Слух: Sony готовит новую портативную PlayStation с поддержкой
                                </a>
                                <div class="flex items-center gap-1.5 text-xs font-semibold text-rose-400/90">
                                    <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                    </svg>
                                    <span>318 комментариев</span>
                                </div>
                            </div>
                        </div>

                        <!-- Новость 2 -->
                        <div class="flex items-start gap-4">
                            <span class="text-base font-black text-slate-600 shrink-0 mt-0.5">2</span>
                            <div class="space-y-1">
                                <a href="#" class="text-sm font-semibold text-slate-100 hover:text-sky-400 leading-snug transition block">
                                    Ценовая политика на новые видеокарты в СНГ: Реальные цены в...
                                </a>
                                <div class="flex items-center gap-1.5 text-xs font-semibold text-rose-400/90">
                                    <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                    </svg>
                                    <span>244 комментария</span>
                                </div>
                            </div>
                        </div>

                        <!-- Новость 3 -->
                        <div class="flex items-start gap-4">
                            <span class="text-base font-black text-slate-600 shrink-0 mt-0.5">3</span>
                            <div class="space-y-1">
                                <a href="#" class="text-sm font-semibold text-slate-100 hover:text-sky-400 leading-snug transition block">
                                    Почему фанаты продолжают любить S.T.A.L.K.E.R. 2, несмотря на баги...
                                </a>
                                <div class="flex items-center gap-1.5 text-xs font-semibold text-rose-400/90">
                                    <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                    </svg>
                                    <span>192 комментария</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl border border-white/5 bg-[#121318] p-4">
                    <div class="mb-4 flex items-center justify-between">
                        <div class="flex items-center gap-2 font-bold text-white text-sm">
                            <svg class="h-4 w-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
                            <span>Выбор редакции</span>
                        </div>
                        <span class="text-[10px] font-bold text-slate-500 uppercase tracking-wider">HALL OF FAME</span>
                    </div>

                    <div class="space-y-3 text-xs">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <span class="font-bold text-sky-400">01</span>
                                <div>
                                    <div class="font-bold text-white">Clair Obscur: Expedition 33</div>
                                    <div class="text-[10px] text-slate-400">Самая ожидаемая RPG</div>
                                </div>
                            </div>
                            <span class="rounded bg-amber-500/20 px-2 py-1 font-bold text-amber-400">9.8</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <span class="font-bold text-sky-400">02</span>
                                <div>
                                    <div class="font-bold text-white">Metaphor: ReFantazio</div>
                                    <div class="text-[10px] text-slate-400">Шедевр Atlus</div>
                                </div>
                            </div>
                            <span class="rounded bg-amber-500/20 px-2 py-1 font-bold text-amber-400">9.5</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <span class="font-bold text-sky-400">03</span>
                                <div>
                                    <div class="font-bold text-white">Silent Hill 2 Remake</div>
                                    <div class="text-[10px] text-slate-400">Лучший хоррор года</div>
                                </div>
                            </div>
                            <span class="rounded bg-sky-500/20 px-2 py-1 font-bold text-sky-400">9.2</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <span class="font-bold text-sky-400">04</span>
                                <div>
                                    <div class="font-bold text-white">Astro Bot</div>
                                    <div class="text-[10px] text-slate-400">Триумф платформеров</div>
                                </div>
                            </div>
                            <span class="rounded bg-sky-500/20 px-2 py-1 font-bold text-sky-400">9.1</span>
                        </div>
                    </div>
                </div>

                <div class="rounded-2xl border border-white/5 bg-[#121318] p-5">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-[#1e1f29] text-purple-300">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>

                    <h4 class="text-lg font-bold text-white">Еженедельный дайджест NEXUS</h4>
                    <p class="mt-2 text-xs leading-relaxed text-slate-400">
                        Только избранные расследования, инсайды и ключевые игровые релизы без спама. Прямо на вашу почту каждую пятницу.
                    </p>

                    <form class="mt-4 space-y-2.5">
                        <input
                            type="email"
                            placeholder="Ваш рабочий email..."
                            class="w-full rounded-xl border border-white/5 bg-[#0b0c10] px-4 py-3 text-xs text-white placeholder-slate-500 focus:border-purple-500/50 focus:outline-none transition"
                        />
                        <button
                            type="submit"
                            class="w-full rounded-xl bg-[#c4b5fd] py-3 text-xs font-bold text-[#2e1065] hover:bg-[#b8a5fc] transition"
                        >
                            Подписаться бесплатно
                        </button>
                    </form>
                    <div class="mt-3 text-center text-[11px] font-medium text-slate-500">
                        Более 42 000 геймеров уже с нами
                    </div>
                </div>
            </aside>
        </div>
    </div>
</x-layout>
