<div class="md:container mx-auto container">
    <div class="w-full">
        <h1 class="text-center text-gray-700 text-3xl font-medium"> Agregar producto</h1>
        <form wire:submit.prevent="save" class="w-full">
            <div class="p-6">
                <label class="block">Nombre del producto</label>
                <input type="text" wire:model="name" class="w-full rounded p-2">
                @error('name') <p class="text-red-800">{{$message}} </p> @enderror
            </div>

            <div class="p-6">
                <label class="block">Descripción</label>
                <textarea wire:model="description" class=" w-full rounded p-2"></textarea>
                @error('description') <p class="text-red-800">{{$message}} </p> @enderror
            </div>

            <div class="p-6">
                <label class="block">Price:</label>
                <input type="number" wire:model="price" class=" rounded p-2">
                @error('price') <p class="text-red-800">{{$message}} </p> @enderror
            </div>

            <div class="p-6">
                <label class="block">Thumbnail:</label>
                <input type="file" wire:model="thumbnail" class="w-full rounded p-2">
                @if($thumbnail)
                    <img src="{{$thumbnail->temporaryUrl() }}" class="max-w-xs max-h-screen p-2 rounded border-2 border-black" alt="">
                @endif
                @error('thumbnail') <p class="text-red-800">{{$message}} </p> @enderror
            </div>
            <div class="text-right">
                <button type="submit" class="py-2 px-6 rounded bg-green-700 hover:bg-green-600 text-white">Save</button>
            </div>
        </form>
    </div>

</div>
