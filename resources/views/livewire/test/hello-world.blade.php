<div class="p-6">
    @foreach($contacts as $contact)
        @livewire('test.hi',['contact'=>$contact])
    @endforeach
        <hr>
        {{now()}}
        <button wire:click="$emit('refreshChildren')" class="py-2 px-4 border bg-green-700">Refresh children</button>
</div>

