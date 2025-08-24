<div class="flex justify-between items-center">
    <div class="text-sm text-side">
        Showing {{ $users_data->firstItem() }}–{{ $users_data->lastItem() }}
        of {{ $users_data->total() }} users
    </div>
    <div class="flex space-x-2">
        {{-- Previous --}}
        @if ($users_data->onFirstPage())
            <button class="px-3 py-1 bg-white/50 text-side rounded-md text-sm font-medium" disabled>
                Previous
            </button>
        @else
            <a href="{{ $users_data->previousPageUrl() }}"
               class="px-3 py-1 bg-white/50 text-side rounded-md text-sm font-medium hover:bg-white/70 transition-colors duration-200">
                Previous
            </a>
        @endif

        {{-- Page numbers --}}
        @foreach ($users_data->getUrlRange(1, $users_data->lastPage()) as $page => $url)
            <a href="{{ $url }}"
               class="px-3 py-1 rounded-md text-sm font-medium
               {{ $page == $users_data->currentPage() ? 'bg-side text-white' : 'bg-white/50 text-side hover:bg-white/70 transition-colors duration-200' }}">
                {{ $page }}
            </a>
        @endforeach

        {{-- Next --}}
        @if ($users_data->hasMorePages())
            <a href="{{ $users_data->nextPageUrl() }}"
               class="px-3 py-1 bg-white/50 text-side rounded-md text-sm font-medium hover:bg-white/70 transition-colors duration-200">
                Next
            </a>
        @else
            <button class="px-3 py-1 bg-white/50 text-side rounded-md text-sm font-medium" disabled>
                Next
            </button>
        @endif
    </div>
</div>
