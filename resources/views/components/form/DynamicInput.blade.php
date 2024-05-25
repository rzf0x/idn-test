@props(['type', 'model', 'required' => false])

<input type="{{ $type }}" wire:model.defer="{{ $model }}" @if ($required) required @endif
    class="mt-1 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
