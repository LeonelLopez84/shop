<div class="flex justify-center">
    <div>
    <p class="block text-right">
        <a href="./create" class="rounded bg-green-700 hover:bg-green-600 text-white py-2 px-4 m-6">
            Create <i class="fa fa-plus"></i>
        </a>
    </p>
    <table class="table-fixed border-collapse border  border-black">
        <thead class="bg-black text-white">
        <tr>
            <th class="w-1/8">#</th>
            <th class="w-3/4">Name</th>
            <th class="w-1/8">Price</th>
            <th class="w-1/5">Image</th>
            <th class="w-1/5">Edit</th>
            <th class="w-1/5">View</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <td class="border p-2">{{$product->id}}</td>
            <td class="border p-2">{{$product->name}}</td>
            <td class="border p-2">{{$product->price}}</td>
            <td class="border p-2 flex justify-center">
                <img src="{{asset('photos/'.$product->thumbnail)}}" width="25%" class="rounded" alt="{{$product->name}}">
            </td>
            <td class="border p-2 text-center">
                <a href="{{route('admin.product.edit',['id'=>$product->id])}}" class="rounded bg-blue-500 hover:bg-blue-400 text-white py-2 px-4">
                    <i class="fas fa-edit"></i>
                </a>
            </td>
            <td class="border p-2 text-center">
                <a href="{{route('product.show',['slug'=>$product->slug])}}" target="_blank" class="rounded bg-gray-500 hover:bg-gray-400  text-white py-2 px-4">
                    <i class="fas fa-eye"></i>
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <p class="block p-6">
    {{$products->links()}}
    </p>
    </div>
</div>
