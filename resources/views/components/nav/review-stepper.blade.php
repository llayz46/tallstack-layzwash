@props(['steps'])

<ul {{ $attributes->class(['relative flex flex-row gap-x-2 min-w-96']) }}>
    @foreach($steps as $step)
        <li @class(['flex items-center gap-x-2 group', 'shrink basis-0 flex-1' => !$loop->last])>
            <button wire:click="{{ $step->show() }}" class="min-w-7 min-h-7 inline-flex justify-center items-center text-xs align-middle">
                <span @class([
                    'size-7 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full',
                    'bg-gray-300 text-gray-800' => $step->isCurrent()
                ])>
                    {{ $loop->iteration }}
                </span>
                <span class="ms-2 block text-sm font-medium text-gray-800">
                    {{ $step->label }}
                </span>
            </button>
            @if(!$loop->last)
                <div class="w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-neutral-700"></div>
            @endif
        </li>
    @endforeach
</ul>
