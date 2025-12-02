{{-- Breadcrumbs Navigation --}}
<nav aria-label="Breadcrumb" class="bg-gray-50 border-b border-gray-200 py-3 px-4 md:px-8">
    <div class="max-w-7xl mx-auto">
        <ol class="flex items-center space-x-2 text-sm" itemscope itemtype="https://schema.org/BreadcrumbList">
            @foreach($items as $index => $item)
            <li class="flex items-center" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                @if($item['url'])
                    <a href="{{ $item['url'] }}"
                        class="text-gray-600 hover:text-blue-600 transition-colors duration-200 font-medium"
                        itemprop="item">
                        <span itemprop="name">{{ $item['name'] }}</span>
                    </a>
                    <meta itemprop="position" content="{{ $index + 1 }}">
                    @if(!$loop->last)
                        <svg class="w-4 h-4 mx-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    @endif
                @else
                    <span class="text-gray-900 font-semibold" itemprop="name">{{ $item['name'] }}</span>
                    <meta itemprop="position" content="{{ $index + 1 }}">
                @endif
            </li>
            @endforeach
        </ol>
    </div>
</nav>