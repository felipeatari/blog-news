@props(['comments'])
<div class="p-2">
    <h1 class="font-bold text-lg mb-4">Comentários:</h1>
    @foreach ($comments as $comment)
        <div wire:key="{{ $comment->id }}" class="w-[400px] mb-8 border p-1">
            <div class="flex justify-between items-center py-2 px-2">
                <p class="font-bold text-sm">{{ $comment->author }}</p>

                <livewire:comment.delete :comment="$comment" />
            </div>
            <p class="text-xs py-2 px-2">{{ $comment->comment }}</p>
        </div>
    @endforeach
</div>
