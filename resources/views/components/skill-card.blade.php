@props(['url', 'image', 'title', 'description', 'type', 'skills', 'eng_name'])
<div class="max-w-sm flex flex-col justify-start gap-4">
    <a href="{{ $url }}" class="max-w-sm bg-sub border border-theme rounded-lg white-shadow overflow-hidden white-click-shadow">
        <div class="aspect-w-16 aspect-h-9">
            <img src="{{ asset('storage/data/'.$image) }}" alt="{{ $title }}">
        </div>
        <div class="p-4 text-sm">
            <h5 class="tsukimi-rounded text-2xl font-bold mb-2">{{ $title }}</h5>
            @foreach(explode(',', $description) as $d)
                <p>{{ $d }}</p>
            @endforeach
            @switch($type)
                @case('site')
                    <div class="text-right mt-2">Go to site →</div>
                    @break
                @case('demo')
                    <div class="text-right mt-2">Go to demo →</div>
                    @break
            @endswitch
        </div>
    </a>
    <div class="px-4 bg-primary border border-sub py-2 rounded-lg">
        <button type="button" class="text-sm flex items-center gap-2 skill-down tsukimi-rounded" data-target="{{ __('skill-list-'.$eng_name) }}">
            Used Skills
            <img src="{{ asset('storage/data/caret-down-square-fill.svg') }}" alt="↓">
        </button>
        <ul id="{{ __('skill-list-'.$eng_name) }}" class="list-disc list-inside pl-2 text-sm skill-list overflow-hidden transition-all duration-500">
            @foreach(explode(',', $skills) as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul>
    </div>
</div>
