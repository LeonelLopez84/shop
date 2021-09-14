<div class="flex justify-center">
    <div>
        <table class="m-4 table-fixed border-collapse border border-gray-300">
            <thead class="">
            <tr>
                <th colspan="3" class="p-2">
                    <div class="flex">
                        <div class="flex-grow">
                            <input
                                wire:model="search"
                                wire:keydown="search"
                                class="rounded border-gray-300 w-full"
                                type="text">
                        </div>
                        <div class="flex-grow-0">
                            <select wire:model="perPage" class="ml-2 px-6 py-2 rounded border-gray-300 border" name="" id="">
                                <option value="5">5 per Page</option>
                                <option value="25">25 per Page</option>
                                <option value="50">50 per Page</option>
                                <option value="100">100 per Page</option>
                            </select>
                        </div>
                        @if($search!='' || $perPage !=5)
                        <div class="flex-grow">
                            <button wire:click="clear" class="rounded ml-2 border border-gray-300 px-4 py-2 bg-white">X</button>
                        </div>
                        @endif
                    </div>
                </th>
            </tr>
            @if(!$users->count())
                <tr>
                    <td colspan="3">
                        <p class="p-2">No se encontraron resultados para <b>{{$search}}</b></p>
                    </td>
                </tr>
            @else
                <tr>
                    <th class="w-1/5 cursor-pointer" wire:click="sortBy('id')">id
                       @if($sortBy=='id') @if($sortDirection=='desc') <i class="fas fa-sort-down"></i>@else<i class="fas fa-sort-up"></i> @endif @else <i class="text-gray-500 fas fa-sort"></i> @endif
                    </th>
                    <th class="w-3/4 cursor-pointer" wire:click="sortBy('name')">name
                        @if($sortBy=='name') @if($sortDirection=='desc') <i class="fas fa-sort-down"></i>@else<i class="fas fa-sort-up"></i> @endif @else <i class="text-gray-500 fas fa-sort"></i> @endif
                    </th>
                    <th class="1/8 cursor-pointer" wire:click="sortBy('email')">email
                        @if($sortBy=='email') @if($sortDirection=='desc') <i class="fas fa-sort-down"></i>@else<i class="fas fa-sort-up"></i> @endif  @else <i class="text-gray-500 fas fa-sort"></i> @endif
                    </th>
                </tr>
            @endif
            </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td class="border p-2">{{$user->id}}</td>
            <td class="border p-2">{{$user->name}}</td>
            <td class="border p-2">{{$user->email}}</td>
        </tr>
        @endforeach

        </tbody>
        </table>
        <p class="block">
            {{$users->links()}}
        </p>
    </div>
</div>
