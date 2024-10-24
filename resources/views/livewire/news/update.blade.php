@props(['news'])
<div class="flex items-center justify-center pt-[60px]">
    <div class="p-2">
        <a href="/noticia/{{ $news->id }}" wire:navigate class="bg-blue-700 hover:bg-blue-500 hover:text-blue-900 transition duration-300 ease-in-out text-white font-semibold px-3 py-1">Voltar</a>
        <div class="w-[800px] flex items-center justify-center flex-col rounded-md shadow bg-gray-50 p-3 mt-5">
            <form wire:submit.prevent="saveNews" class="w-full flex items-center justify-center flex-col">
                <h2 class="font-bold mt-2 mb-2">Atualizar Noticia</h2>

                @if ($messageUpdateNews)
                    <div
                    {{ $attributes->class([
                        'w-full border mt-1 text-sm p-2',
                        'border-green-300 bg-green-200 text-green-600' => $statusUpdateNews == true,
                        'border-red-300 bg-red-200 text-red-600' => $statusUpdateNews == false,
                    ]) }} >

                        {{ $messageUpdateNews }}
                    </div>
                @endif

                <input wire:model="title" class="w-full mt-2 mb-2 p-1 bg-gray-50 border" type="text" name="title" id="title" placeholder="Titulo">
                @error('title')
                    <div class="w-full border border-red-300 bg-red-200 text-red-600 mt-1 p-2">
                        {{ $message }}
                    </div>
                @enderror

                <input wire:model="legend" class="w-full mt-2 mb-2 p-1 bg-gray-50 border" type="text" name="legend" id="legend" placeholder="Subtitulo">
                @error('legend')
                    <div class="border border-red-300 bg-red-200 text-red-600 mt-1 p-2">
                        {{ $message }}
                    </div>
                @enderror

                <textarea wire:model="content" class="w-full mt-2 mb-2 p-1 bg-gray-50 border" name="content" id="content" cols="30" rows="10" placeholder="Conteúdo"></textarea>
                @error('content')
                    <div class="border border-red-300 bg-red-200 text-red-600 mt-1 p-2">
                        {{ $message }}
                    </div>
                @enderror

                <button class="w-[200px] bg-blue-700 hover:bg-blue-500 hover:text-blue-900 hover:font-semibold transition duration-300 ease-in-out text-white font-semibold py-2 px-3 mt-8 mb-2">Salvar Noticia</button>
            </form>

            <x-news.banner
                :news_id="$news->id"
                :messageActionBanner="$messageUpdateBanner"
                :statusActionBanner="$statusUpdateBanner"
            />
        </div>
    </div>
</div>
