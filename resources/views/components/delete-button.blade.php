<form action="{{ $url }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
    @csrf
    @method('DELETE')
    
    <button type="submit"
        {{ $attributes->merge([
            'class' => 'inline-flex items-center gap-2 px-4 py-2 rounded-lg border border-red-500 text-red-500 text-sm font-semibold
                        bg-transparent hover:bg-red-500/10 hover:shadow-[0_0_12px_rgba(239,68,68,0.25)]
                        transition-all duration-200 hover:-translate-y-px active:translate-y-0 focus:outline-none focus:ring-2 focus:ring-red-500/40'
        ]) }}>
        
        {{-- Trash Icon --}}
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
        </svg>

        <span>Delete</span>
    </button>
</form>