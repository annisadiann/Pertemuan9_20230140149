{{--
    Delete Confirmation Modal
    ─────────────────────────
    Gunakan sekali di layout utama (app.blade.php) atau di halaman yang membutuhkannya.
    Modal ini menerima event Alpine.js "open-delete-modal" dari delete-button.blade.php.

    Event payload: { id, name, action }
--}}

<div
    x-data="{
        show: false,
        productName: '',
        formAction: '',

        init() {
            window.addEventListener('open-delete-modal', (e) => {
                this.productName = e.detail.name;
                this.formAction  = e.detail.action;
                this.show        = true;
            });
        }
    }"
    x-show="show"
    x-cloak
    class="fixed inset-0 z-50 flex items-center justify-center"
    @keydown.escape.window="show = false"
>
    {{-- Backdrop --}}
    <div
        class="absolute inset-0 bg-black/60 backdrop-blur-sm"
        @click="show = false"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    ></div>

    {{-- Modal Card --}}
    <div
        class="relative z-10 w-full max-w-sm mx-4 rounded-2xl border border-white/10
               bg-[#1a2035] shadow-2xl p-8 text-center"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        @click.stop
    >
        {{-- Icon --}}
        <div class="flex items-center justify-center w-14 h-14 mx-auto mb-4 rounded-full
                    bg-red-500/10 border border-red-500/40 text-red-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <polyline points="3 6 5 6 21 6" stroke-linecap="round" stroke-linejoin="round"/>
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M19 6l-1 14a2 2 0 01-2 2H8a2 2 0 01-2-2L5 6" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 11v6M14 11v6" />
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9 6V4a1 1 0 011-1h4a1 1 0 011 1v2" />
            </svg>
        </div>

        {{-- Title --}}
        <h3 class="text-white text-lg font-bold mb-2">Hapus Produk?</h3>

        {{-- Description --}}
        <p class="text-slate-400 text-sm leading-relaxed mb-6">
            Yakin ingin menghapus
            <span class="text-white font-semibold" x-text="'&quot;' + productName + '&quot;'"></span>?
            Tindakan ini tidak dapat dibatalkan.
        </p>

        {{-- Actions --}}
        <div class="flex gap-3">
            {{-- Cancel --}}
            <button
                type="button"
                @click="show = false"
                class="flex-1 px-4 py-2 rounded-lg border border-white/15 text-slate-400 text-sm font-semibold
                       bg-transparent hover:bg-white/5 transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-white/20"
            >
                Batal
            </button>

            {{-- Confirm Delete --}}
            <form :action="formAction" method="POST" class="flex-1">
                @csrf
                @method('DELETE')
                <button
                    type="submit"
                    class="w-full px-4 py-2 rounded-lg border border-red-500 text-red-400 text-sm font-semibold
                           bg-red-500/10 hover:bg-red-500/20 hover:text-red-300
                           transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-red-500/40"
                >
                    Ya, Hapus
                </button>
            </form>
        </div>
    </div>
</div>