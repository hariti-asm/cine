@if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="flex list-reset border border-grey-light rounded">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled page-item"><span class="page-link px-3 py-2 text-gray-500 bg-white">Précédent</span></li>
            @else
                <li class="page-item"><a href="{{ $paginator->previousPageUrl() }}" class="page-link px-3 py-2 bg-yellow-500 text-white hover:bg-yellow-600" rel="prev">Précédent</a></li>
            @endif

            {{-- Pagination Elements Here --}}

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item"><a href="{{ $paginator->nextPageUrl() }}" class="page-link px-3 py-2 bg-yellow-500 text-white hover:bg-yellow-600" rel="next">Suivant</a></li>
            @else
                <li class="disabled page-item"><span class="page-link px-3 py-2 text-gray-500 bg-white">Suivant</span></li>
            @endif
        </ul>
    </nav>
@endif
