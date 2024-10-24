<div class="flex items-center justify-center pt-[60px]">
    <div class="w-[800px] flex items-center justify-center flex-col rounded-md shadow bg-gray-50 p-3 mt-5">
        <form wire:submit.prevent="saveNews" class="w-full {{ $display }} items-center justify-center flex-col">
            @if ($messageSave)
                <div class="text-green-600 mt-1 text-sm">
                    {{ $messageSave }}
                </div>
            @endif

            <h2 class="font-bold mt-2 mb-2">Nova Noticia</h2>

            <input wire:model="title" class="w-full mt-2 mb-2 p-1 bg-gray-50 border" type="text" name="title" id="title" placeholder="Titulo">
            @error('title')
                <div class="text-red-600 mt-1 text-sm">
                    {{ $message }}
                </div>
            @enderror

            <input wire:model="legend" class="w-full mt-2 mb-2 p-1 bg-gray-50 border" type="text" name="legend" id="legend" placeholder="Subtitulo">
            @error('legend')
                <div class="text-red-600 mt-1 text-sm">
                    {{ $message }}
                </div>
            @enderror

            <textarea wire:model="content" class="w-full mt-2 mb-2 p-1 bg-gray-50 border" name="content" id="content" cols="30" rows="10" placeholder="Conteúdo"></textarea>
            @error('content')
                <div class="text-red-600 mt-1 text-sm">
                    {{ $message }}
                </div>
            @enderror

            <button class="w-[200px] bg-blue-700 hover:bg-blue-500 hover:text-blue-900 hover:font-semibold transition duration-300 ease-in-out text-white font-semibold py-2 px-3 mt-8 mb-2">Salvar Noticia</button>
        </form>

        @if ($news_id)
            <x-news.banner :news_id="$news_id" :messageActionBanner="$messageCreateBanner" :statusActionBanner="$statusCreateBanner" />
        @endif
    </div>
</div>
