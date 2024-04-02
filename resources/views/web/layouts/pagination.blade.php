
    @include('web.layouts.head')
    <style>
        .pagination {
    display: flex;
    justify-content: space-between;
    list-style: none;
    padding: 0;
}

.pagination-prev,
.pagination-next {
    padding: 0.5rem 1rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    text-decoration: none;
    color: #333;
}

.pagination-disabled {
    color: #ccc;
    cursor: not-allowed;
}

    </style>

    @if ($paginator->hasPages())
    <nav class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="pagination-prev pagination-disabled">Previous</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="pagination-prev">Previous</a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="pagination-next">Next</a>
        @else
            <span class="pagination-next pagination-disabled">Next</span>
        @endif
    </nav>
@endif
