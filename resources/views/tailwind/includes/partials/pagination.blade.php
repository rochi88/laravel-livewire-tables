<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation">
            <span>
                @if ($paginator->onFirstPage())
                    <span>Previous</span>
                @else
                    <button wire:click="previousPage('{{ $paginator->getPageName() }}')" wire:loading.attr="disabled" rel="prev">Previous</button>
                @endif
            </span>
 
            <span>
                @if ($paginator->onLastPage())
                    <span>Next</span>
                @else
                    <button wire:click="nextPage('{{ $paginator->getPageName() }}')" wire:loading.attr="disabled" rel="next">Next</button>
                @endif
            </span>
        </nav>
    @endif
</div>
