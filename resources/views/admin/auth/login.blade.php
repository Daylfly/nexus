<x-layouts.admin :title="'Вход в админку'">
    <div class="mx-auto max-w-md rounded-2xl bg-white p-6 shadow-sm">
        <h1 class="text-2xl font-bold">Вход</h1>
        <p class="mt-1 text-sm text-slate-500">Используйте учетные данные администратора.</p>
        <form method="post" action="{{ route('admin.login.store') }}" class="mt-6 space-y-4">
            @csrf
            <div>
                <label for="email" class="text-sm">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" class="mt-1 w-full rounded border px-3 py-2" required>
                @error('email') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
            </div>
            <div>
                <label for="password" class="text-sm">Пароль</label>
                <input id="password" name="password" type="password" class="mt-1 w-full rounded border px-3 py-2" required>
            </div>
            <label class="flex items-center gap-2 text-sm">
                <input type="checkbox" name="remember" value="1">
                Запомнить меня
            </label>
            <button class="w-full rounded bg-orange-500 px-4 py-2 text-white hover:bg-orange-600">Войти</button>
        </form>
    </div>
</x-layouts.admin>
