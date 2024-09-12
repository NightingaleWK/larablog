<div class="flex flex-row items-center justify-center gap-5">
    <p class="text-xl text-gray-900 dark:text-white">count: {{ $count }}</p>
    <button type="button" wire:click='increment(1)'
        class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">+</button>

    <button type="button" wire:click='decrement(1)'
        class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">-</button>
</div>
