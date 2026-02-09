<div class="flex overflow-x-auto pt-2 border-b border-gray-400 whitespace-nowrap no-scrollbar gap-4">
    @foreach ($tabs as $tab)
        @php
            $isActive = request()->routeIs($tab['route']);
        @endphp

        <a href="{{ route($tab['route']) }}" class="flex flex-col">
            <div class="{{ $isActive ? 'text-blue-400' : 'text-gray-500' }} font-medium pb-1.5 lg:pb-3">
                {{ $tab['label'] }}
            </div>

            @if ($isActive)
                <div class="w-full h-0.5 bg-blue-400 rounded"></div>
            @endif
        </a>
    @endforeach
</div>
