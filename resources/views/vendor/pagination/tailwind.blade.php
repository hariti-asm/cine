@if ($paginator->hasPages())
    <nav>
        <ul class="flex mt-9 space-x-1 justify-center"> <!-- Correction ici -->
            {{-- Previous Page Link --}}
            @if (!$paginator->onFirstPage())
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" class="px-3 py-1 border border-gray-300 bg-white text-black hover:bg-gray-300 rounded-lg">Précédent</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <li>
                            <a href="{{ $url }}" class="px-3 py-1 border hover:bg-gray-400 rounded-lg border-gray-300 {{ $page == $paginator->currentPage() ? 'bg-yellow-500 text-white' : 'bg-white text-black hover:bg-gray-200' }}">{{ $page }}</a>
                        </li>
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" class="px-3 py-1 border border-gray-300 bg-white text-black hover:bg-gray-400 rounded-lg">Suivant</a>
                </li>
            @endif
        </ul>
    </nav>
@endif
