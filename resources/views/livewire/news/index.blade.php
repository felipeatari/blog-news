<div class="w-full pt-[40px] flex items-center justify-center">
    <div class="w-[900px] p-10">
        <input type="search" wire:model.live.debounce.250ms="search" name="search" id="search" placeholder="Buscar uma notícia" class="w-full mb-10 border-2 rounded-md px-2 py-2">

        @if ($news->count())
            <x-news.show-all :news="$news" />
        @else
            <p>Nenhuma notícia encontrada</p>
        @endif
    </div>
</div>
