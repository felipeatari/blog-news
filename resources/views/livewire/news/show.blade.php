<div class="w-full flex items-center justify-center flex-col pt-[60px]">
    <div class="w-[900px] flex justify-end mt-5">
        <a
        class="bg-yellow-400 hover:bg-yellow-500 hover:text-yellow-900 transition duration-300 ease-in-out text-white font-semibold px-3 py-1 mr-5"
        href="/editar/{{ $news->id }}"
        wire:navigate
        >Editar</a>

        <livewire:news.delete :news="$news" />
    </div>
    <div class="w-[900px] mt-10 p-10">
        <h1 class="text-2xl font-bold mb-5">{{ $news->title }}</h1>

        <div class="flex items-center justify-center w-[900px] h-[400px] mt-10 mb-10">
            @if ($news->banner)
                <img class="h-full object-cover" src="{{ asset($news->banner) }}" alt="banner">
            @else
                <div class="border-2 border-black w-full h-full flex items-center justify-center">
                    <p class="text-3xl">Banner</p>
                </div>
            @endif
        </div>

        <div class="mb-8">{!! $news->content !!}</div>

        <x-comment.index :comments="$news->comments" />
    </div>
</div>
