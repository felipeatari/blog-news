<div class="flex items-center justify-center pt-[60px]">
    <div class="w-[800px] flex items-center justify-center flex-col rounded-md shadow bg-gray-50 p-3 mt-5">
        <form wire:submit.prevent="saveNews" class="w-full flex items-center justify-center flex-col">
            <h2 class="font-bold mt-2 mb-2">Nova Noticia</h2>

            @if ($messageCreateNews)
                <div
                @if ($messageCreateNews)
                class="w-full border mt-1 text-sm p-2 border-green-300 bg-green-200 text-green-600"
                @else
                class="w-full border mt-1 text-sm p-2 border-red-300 bg-red-200 text-red-600"
                @endif
                >
                    {{ $messageCreateNews }}
                </div>
            @endif

            <input wire:model="title" class="w-full mt-2 mb-2 p-2 bg-gray-50 border" type="text" name="title" id="title" placeholder="Titulo">
            @error('title')
                <span class="w-full text-red-600 mb-2">Campo titulo obrigatório</span>
            @enderror

            <input wire:model="legend" class="w-full mt-2 mb-2 p-2 bg-gray-50 border" type="text" name="legend" id="legend" placeholder="Subtitulo">
            @error('legend')
                <span class="w-full text-red-600 mb-2">Campo subtitulo obrigatório</span>
            @enderror

            <textarea wire:model="content" class="w-full mt-2 mb-2 p-2 bg-gray-50 border" name="content" id="content" cols="30" rows="10" placeholder="Conteúdo"></textarea>
            @error('content')
                <span class="w-full text-red-600 mb-2">Campo conteúdo obrigatório</span>
            @enderror

            <button class="w-[200px] bg-blue-700 hover:bg-blue-500 hover:text-blue-900 hover:font-semibold transition duration-300 ease-in-out text-white font-semibold py-2 px-3 mt-8 mb-2">Salvar Noticia</button>
        </form>

        @if ($news_id)
            <x-news.banner
                :news_id="$news_id"
                :messageActionBanner="$messageCreateBanner"
                :statusActionBanner="$statusCreateBanner"
            />
        @endif
    </div>
</div>
