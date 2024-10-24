@props(['news_id', 'messageActionBanner', 'statusActionBanner'])
<form wire:submit="saveNewsBanner({{ $news_id }})" class="w-full flex items-center justify-center flex-col mt-[40px]">
    @if ($messageActionBanner)
        <div
        {{ $attributes->class([
            'w-full border mt-1 text-sm p-2',
            'border-green-300 bg-green-200 text-green-600' => $statusActionBanner == true,
            'border-red-300 bg-red-200 text-red-600' => $statusActionBanner == false,
        ]) }} >
            {{ $messageActionBanner }}
        </div>
    @endif

    <h2 class="font-bold mt-2 mb-2">Carregar Banner</h2>
    <input wire:model="banner" class="mt-2 mb-2" type="file" name="banner" id="banner">
    <button class="w-[200px] bg-blue-700 hover:bg-blue-500 hover:text-blue-900 hover:font-semibold transition duration-300 ease-in-out text-white font-semibold py-2 px-3 mt-8 mb-2">Salvar Banner</button>
</form>
