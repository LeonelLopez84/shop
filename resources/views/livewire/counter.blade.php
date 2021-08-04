<div class="md:container mx-auto container">
    <div class="w-full max-w-xs">
        <p class="text-xl">Hola mundo</p>
        <p class="text-lg">{{$title}}</p>
        <p class="text-base">{{$name}}</p>
        <p><input type="text" wire:model.debonce.100ms="name" class="rounded border-2 bg-gray-100 px-2 py-1"></p>
    </div>
</div>
