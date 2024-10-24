@props(['showModalDelete', 'deleted'])
<div>
    <button wire:click="openModalDelete"
    class="bg-red-700 hover:bg-red-500 hover:text-red-900 transition duration-300 ease-in-out text-white font-bold text-xs px-3 py-1"
    >Excluir</button>

    @if ($showModalDelete)
        <div class="w-full flex justify-center fixed inset-0 bg-black bg-opacity-80">
            @if ($deleted)
                <div class="hidden">
            @else
                <div class="w-[250px] h-[100px] mt-10 shadow-lg flex items-center justify-between flex-col bg-gray-200 p-2">
            @endif

            <h1 class="font-bold">Deletar Comentário?</h1>

            <div class="w-[200px] flex justify-evenly p-2">
                <button wire:click="delete" class="bg-blue-700 text-white shadow-sm px-3 py-1 font-semibold">Sim</button>
                <button wire:click="closeModalDelete" class="bg-blue-700 text-white shadow-sm px-3 py-1 font-semibold">Não</button>
            </div>
        </div>
    </div>
    @endif
</div>
