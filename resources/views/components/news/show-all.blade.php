@props(['news'])
@foreach ($news as $item)
<a href="{{ route('news.show', $item) }}" wire:navigate class="w-full">
    <div wire:key="{{ $item->id }}" class="flex rounded-md shadow bg-gray-50 mb-6 p-5">
        <div class="flex items-center justify-center w-[150px] h-[150px]">
            @if ($item->banner)
                <img class="h-full object-cover" src="{{ $item->banner }}" alt="banner">
            @else
                <div class="border-2 border-black w-full h-full flex items-center justify-center">
                    <p class="text-2xl">Banner</p>
                </div>
            @endif
        </div>

        <div class="p-2">
            <h1 class="font-bold text-blue-950 text-lg">{{ $item->title }}</h1>
            <p>{{ $item->legend }}</p>
            <p class="mt-3 text-xs">{{ $item->created_at->diffForHumans() }}</p>
        </div>
    </div>
</a>
@endforeach
