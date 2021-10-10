<a class="{{ $textColor ?? 'text-white' }} {{ $bgColor ?? 'bg-gray-600' }} hover:{{ $textColorHover ?? 'text-white' }} mr-0 hover:{{ $bgColorHover ?? 'bg-gray-600' }} whitespace-nowrap"
   href="{{ $rawRoute ?? '#' }}"
   @if ($ex ?? false)
    target="_blank"
   @endif
   title="{{ $title ?? '' }}"
   wire:click="{{ $wireClick ?? '' }}"
>
    {{ $slot ?? '' }}
</a>
