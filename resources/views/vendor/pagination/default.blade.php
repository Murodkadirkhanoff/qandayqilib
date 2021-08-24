@if ($paginator->hasPages())
    <nav class="mt-5 mb-5 d-lg-flex " aria-label="navigation">
        <ul class="pagination pagination-bordered ">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled"  aria-label="@lang('pagination.previous')">
                    <a class="page-link" href="#" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @else
                <li class="page-item"  aria-label="@lang('pagination.previous')">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif




            @if($paginator->currentPage() > 3)
                <li class="page-item" aria-current="page"><a class="page-link"
                                                                    href="{{ $paginator->url(1) }}">1</a></li>
            {{--    <li class="hidden-xs"><a href="{{ $paginator->url(1) }}">1</a></li>--}}
            @endif
            @if($paginator->currentPage() > 4)
                <li class="page-item disabled" aria-disabled="true"><a class="page-link" href="#">...</a></li>
            @endif
            @foreach(range(1, $paginator->lastPage()) as $i)
                @if($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
                    @if ($i == $paginator->currentPage())
                        <li class="page-item active" aria-current="page"><a class="page-link"
                                                                            href="#">{{ $i }}</a></li>
                    @else
                        <li class="page-item" aria-current="page"><a class="page-link"
                                                                            href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                    @endif
                @endif
            @endforeach
            @if($paginator->currentPage() < $paginator->lastPage() - 3)
                <li class="page-item disabled" aria-disabled="true"><a class="page-link" href="#">...</a></li>
            @endif
            @if($paginator->currentPage() < $paginator->lastPage() - 2)
                <li class="page-item" aria-current="page"><a class="page-link"
                                                             href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a></li>

            @endif









            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a href="{{ $paginator->nextPageUrl() }}" class="page-link" rel="next"
                        aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a href="#" class="page-link" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @endif
        </ul>

        <!-- Pagination jump -->
        <ul class="pagination pagination-bordered justify-content-center d-none d-lg-flex">
            <li class="page-item disabled">
                <span class="page-link">Total {{$paginator->lastPage()}} pages</span>
            </li>
            <li class="page-item disabled">
                <span class="page-link">|</span>
            </li>
            <li class="page-item disabled">
                <span class="page-link">Go to page:</span>
            </li>
            <li class="page-item">
                <input class="form-control h-100 icon-lg fs-6" id="to_page" type="text" placeholder="1">
            </li>
{{--            <li class="page-item active">--}}
{{--                <a class="page-link " href='{{route(Illuminate\Support\Facades\Route::getCurrentRoute()->action['as'])}}' onclick="this.href='{{route(Illuminate\Support\Facades\Route::getCurrentRoute()->action['as'])}}?page='+document.getElementById('to_page').value">Jump <i class="bi bi-arrow-90deg-right ms-2"></i></a>--}}

{{--            </li>--}}
        </ul>
    </nav>
@endif











{{--@if ($paginator->hasPages())--}}
{{--    <nav class="mt-5">--}}
{{--        <ul class="pagination d-inline-block d-md-flex justify-content-center">--}}
{{--            --}}{{-- Previous Page Link --}}
{{--            @if ($paginator->onFirstPage())--}}
{{--                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">--}}
{{--                    <a class="page-link" href="#" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>--}}
{{--                </li>--}}
{{--            @else--}}
{{--                <li class="page-item">--}}
{{--                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"--}}
{{--                       aria-label="@lang('pagination.previous')">&lsaquo;</a>--}}
{{--                </li>--}}
{{--            @endif--}}

{{--            --}}{{-- Pagination Elements --}}
{{--            @foreach ($elements as $element)--}}
{{--                --}}{{-- "Three Dots" Separator --}}
{{--                @if (is_string($element))--}}
{{--                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>--}}
{{--                @endif--}}

{{--                --}}{{-- Array Of Links --}}
{{--                @if (is_array($element))--}}
{{--                    @foreach ($element as $page => $url)--}}
{{--                        @if ($page == $paginator->currentPage())--}}
{{--                            <li class="page-item active" aria-current="page"><a class="page-link"--}}
{{--                                                                                href="#">{{ $page }}</a></li>--}}
{{--                        @else--}}
{{--                            <li class="page-item"><a class="page-link"--}}
{{--                                                     href="{{ $url }}">{{ $page }}</a></li>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                @endif--}}
{{--            @endforeach--}}

{{--            --}}{{-- Next Page Link --}}
{{--            @if ($paginator->hasMorePages())--}}
{{--                <li class="page-item">--}}
{{--                    <a href="{{ $paginator->nextPageUrl() }}" class="page-link" rel="next"--}}
{{--                       aria-label="@lang('pagination.next')">&rsaquo;</a>--}}
{{--                </li>--}}
{{--            @else--}}
{{--                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">--}}
{{--                    <a href="#" class="page-link" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>--}}
{{--                </li>--}}
{{--            @endif--}}
{{--        </ul>--}}
{{--    </nav>--}}
{{--@endif--}}
