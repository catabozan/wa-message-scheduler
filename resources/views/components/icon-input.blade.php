@props(['disabled' => false])

<div class="flex relative">
    <span
        class="rounded-l-md inline-flex  items-center px-3 border-t bg-white dark:bg-gray-700 border-l border-b  border-gray-300 dark:border-gray-600 text-gray-500 shadow-sm text-sm">
        {{ $slot }}
    </span>
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-r-lg flex-1 appearance-none border border-gray-300 dark:border-gray-600 w-full py-2 px-4 bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-300 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent']) !!} />
</div>
