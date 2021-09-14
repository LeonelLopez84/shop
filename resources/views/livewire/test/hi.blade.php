<div>
    <p><input wire:model="contact" type="text">Hello {{$contact}} {{now()}}
        <button  wire:click="emitfoo" class=" px-4 py-2 border bg-green-700 border">Refresh</button></p>
</div>
