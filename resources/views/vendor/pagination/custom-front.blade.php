@if ($paginator->hasPages())
    <div class="col-lg-12 col-md-12">
        <div class="pagination-area text-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                {{-- <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li> --}}
                <a href="" class="prev page-numbers disabled" aria-disabled="true"><i class="las la-angle-left"></i></a>
            @else
                {{-- <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li> --}}
                <a href="#{{ $paginator->previousPageUrl() }}" class="prev page-numbers"><i class="las la-angle-left"></i></a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="page-numbers current" aria-current="page">{{ $page }}</span>
                            {{-- <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li> --}}
                        @else
                            {{-- <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li> --}}
                            <a href="{{ $url }}" class="page-numbers">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                {{-- <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li> --}}
                <a href="{{ $paginator->nextPageUrl() }}" class="next page-numbers"><i class="las la-angle-right"></i></a>
            @else
                {{-- <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li> --}}
                <a href="" class="next page-numbers disabled" aria-disabled="true"><i class="las la-angle-right"></i></a>
            @endif
        </div>
    </div>
@endif
