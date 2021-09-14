<div  class="flex justify-center">
      <form class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg" wire:submit.prevent="register">
          <div class="p-4">
              <label for="name">Name</label>
              <input wire:model="name" id="name" name="name" type="text" class="rounded">
              @error('name') <p class="text-red-800 p-2"> {{$message}}</p> @enderror
          </div>
          <div class="p-4">
            <label for="email">Email</label>
            <input wire:model="email" id="email" name="email" type="text" class="rounded">
              @error('email') <p class="text-red-800 p-2"> {{$message}}</p> @enderror
        </div>
        <div class="p-4">
            <label for="password">Password</label>
            <input wire:model="password" id="password" name="password" type="password" class="rounded">
            @error('password') <p class="text-red-800 p-2"> {{$message}}</p> @enderror
        </div>
        <div class="p-4">
            <label for="password_confirmation">Password Confirm</label>
            <input wire:model="password_confirmation" id="password_confirmation" name="password_confirmation" type="password" class="rounded">
        </div>
        <div class="p-4 text-right">
            <input  type="submit" value="Guardar" class=" px-4 py-2 border bg-green-700 border rounded text-white">
        </div>
    </form>
</div>
