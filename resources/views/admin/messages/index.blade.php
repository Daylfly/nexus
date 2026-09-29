<x-layouts.admin :title="'Сообщения'">
    <h1 class="mb-5 text-2xl font-bold">Сообщения из формы обратной связи</h1>
    <div class="space-y-3">
        @forelse($messages as $message)
            <article class="rounded-xl bg-white p-5 shadow-sm">
                <div class="flex flex-wrap items-center justify-between gap-3">
                    <div>
                        <p class="font-semibold">{{ $message->name }} <span class="text-sm font-normal text-slate-500">({{ $message->email }})</span></p>
                        <p class="text-xs text-slate-500">{{ $message->created_at?->format('d.m.Y H:i') }}</p>
                    </div>
                    <form method="post" action="{{ route('admin.messages.destroy', $message) }}">
                        @csrf
                        @method('delete')
                        <button class="rounded border border-red-300 px-3 py-1.5 text-sm text-red-700">Удалить</button>
                    </form>
                </div>
                <p class="mt-3 text-sm">{{ $message->message }}</p>
            </article>
        @empty
            <p class="rounded-xl bg-white p-5">Сообщений пока нет.</p>
        @endforelse
    </div>
    <div class="mt-4">{{ $messages->links() }}</div>
</x-layouts.admin>
