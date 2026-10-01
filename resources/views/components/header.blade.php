@php
    $nav = [
        ['label' => 'Главная', 'href' => '/', 'active' => true],
        ['label' => 'Статьи', 'href' => '#'],
        ['label' => 'Обзоры', 'href' => '#'],
        ['label' => 'Новости', 'href' => '#'],
        ['label' => 'Железо', 'href' => '#'],
        ['label' => 'Турниры', 'href' => '#'],
    ];
@endphp

<header class="top-0 z-40 border-b border-nx-border/80 bg-nx-bg/90 backdrop-blur-md">
    <div class="max-w-[1400px] mx-auto px-6 py-3 flex items-center justify-between gap-4">

        <!-- Логотип + Главное меню -->
        <div class="flex items-center space-x-6">
            <!-- Логотип NEXUS -->
            <a href="#" class="flex items-center space-x-2 shrink-0">
                <div class="w-6 h-6 rounded bg-indigo-600/30 border border-indigo-500/50 flex items-center justify-center">
                    <span class="text-[10px] font-extrabold text-indigo-400">N</span>
                </div>
                <span class="text-xl font-blacktext-white">NEXUS</span>
            </a>

            <nav class="hidden lg:flex items-center space-x-1 bg-[#14161d] p-1.5 rounded-2xl border border-white/5">
                <a href="#" class="px-5 py-2 rounded-xl bg-gradient-to-r from-violet-600 to-indigo-500 text-white font-bold shadow-lg shadow-indigo-500/20 transition-all">
                    Главная
                </a>

                <a href="#" class="px-4 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-white/5 font-semibold transition-all">
                    Статьи и лонгриды
                </a>
                <a href="#" class="px-4 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-white/5 font-semibold transition-all">
                    Обзоры
                </a>
                <a href="#" class="px-4 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-white/5 font-semibold transition-all">
                    Гайды
                </a>
                <a href="#" class="px-4 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-white/5 font-semibold transition-all">
                    Железо
                </a>
                <a href="#" class="px-4 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-white/5 font-semibold transition-all">
                    Турниры
                </a>
            </nav>
        </div>

        <div class="flex items-center space-x-4">
            <div class="hidden xl:flex items-center bg-[#14161d] p-1 rounded-xl border border-white/5 text-xs font-bold tracking-wide">
                <button class="px-3 py-1.5 rounded-lg bg-cyan-500/20 text-cyan-400 border border-cyan-500/30">
                    PC
                </button>
                <button class="px-3 py-1.5 text-indigo-300 hover:text-white transition-colors">
                    PS5
                </button>
                <button class="px-3 py-1.5 text-amber-400 hover:text-white transition-colors">
                    XBOX
                </button>
                <button class="px-3 py-1.5 text-rose-300 hover:text-white transition-colors">
                    SWITCH
                </button>
            </div>

            <div class="relative w-48 sm:w-64 md:w-80">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input
                    type="text"
                    placeholder="Поиск игр, новостей, обзоров..."
                    class="w-full pl-9 pr-4 py-2 bg-[#14161d] border border-white/5 rounded-xl text-sm text-slate-200 placeholder-slate-500 focus:outline-none focus:border-indigo-500/50 transition-all"
                />
            </div>

            <div class="relative shrink-0">
                <button class="p-2.5 rounded-xl bg-[#14161d] border border-white/5 text-slate-300 hover:text-white transition-colors relative">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                    </svg>

                    <span class="absolute top-2 right-2 w-2 h-2 rounded-full bg-rose-400"></span>
                </button>

                <span class="absolute -bottom-1 border border-1  -right-2 bg-transparent border-amber-500 text-amber-500 font-extrabold text-[10px] px-1.5 py-0.5 rounded-full shadow-md">48
        </span>
            </div>

        </div>
    </div>
</header>
