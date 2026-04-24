<a href="{{ $url }}"
    {{ $attributes->merge([
        'class' => 'inline-flex items-center gap-2 px-4 py-2 rounded-lg border border-amber-500 text-amber-500 text-sm font-semibold
                    bg-transparent hover:bg-amber-500/10 hover:shadow-[0_0_12px_rgba(245,158,11,0.25)]
                    transition-all duration-200 hover:-translate-y-px active:translate-y-0 focus:outline-none focus:ring-2 focus:ring-amber-500/40'
    ]) }}>
    
    {{-- Edit Icon (Pensil) --}}
    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7" />
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z" />
    </svg>

    {{-- Tulisan Edit --}}
    <span>Edit</span>
</a>