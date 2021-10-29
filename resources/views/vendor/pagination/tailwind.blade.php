@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
        <div class="flex justify-between flex-1 sm:hidden">
            @if ($paginator->onFirstPage())
                <span class="">
                    
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="">
                  
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="">
                   
                </a>
            @else
                <span class="">
                   
                </span>
            @endif
        </div>

        
    </nav>
@endif
