@if($paginator->hasPages())
<nav aria-label="..." id="pagination">
    <ul class="pagination">
        @if ($paginator->onFirstPage())
        <div class="prev">
            <li class="page-item disabled">
                <a class="page-link"  style="background-color: rgba(177, 162, 162, 0.26)" href="#" tabindex="-1">Previous</a>
              </li>
        </div>
        @else
        <div class="prev">
            <li class="page-item">
                <a class="page-link" wire:click="previousPage"  style="cursor:pointer;" tabindex="-1">Prev</a>
              </li>
        </div>
        @endif


        <div class="page-no">
        
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item shadow-lg" style="border-radius:10px;"><a class="page-link"  href="#">1</a></li>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
            
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <li class="page-item active d-none d-md-block"  aria-current="page"><span class="page-link" style="border-radius: 10px;">{{ $page }}</span></li>
                    @else
                        <li class="page-item d-none d-md-block"><button type="button" class="page-link" style="border-radius: 10px;" wire:click="gotoPage({{ $page }})">{{ $page }}</button></li>
                    @endif
                @endforeach
            @endif
        @endforeach  
    </div>


      @if($paginator->hasMorePages()) 
      <div class="next">
        <li class="page-item">
            <a class="page-link" style="cursor:pointer;" wire:click="nextPage" >Next</a>
          </li>
      </div>     
      
      @else
      <div class="next">
        <li class="page-item  disabled">
            <a class="page-link" style="background-color: rgba(177, 162, 162, 0.26);" href="#">Next</a>
          </li>
      </div>
      @endif
    </ul>
  </nav>
@endif

