<div class="w-full lg:max-w-6xl lg:mx-auto lg:mt-2 lg:rounded-sm shadow-lg">
    @if ($show)
        <div
            class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium
    @if ($type === 'info') bg-blue-100 text-blue-800 @endif
    @if ($type === 'success') bg-green-100 text-green-800 @endif
    @if ($type === 'warning') bg-yellow-100 text-yellow-800 @endif
    @if ($type === 'error') bg-red-100 text-red-800 @endif
    transition-all duration-300">

            <span>{!! $message !!}</span>

            <button wire:click="dismiss" class="ml-4 font-bold hover:text-gray-600">✕</button>
        </div>
    @endif

</div>
