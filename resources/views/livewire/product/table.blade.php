<p class="block flex justify-end">
    <a href="./create" class="rounded bg-green-700 hover:bg-green-600 text-white py-2 px-4 m-6">
        Create <i class="fa fa-plus"></i>
    </a>
</p>
<table class="w-full table-fixed border-collapse border  border-black">
    <thead class="bg-black text-white">
    <tr>
        <th class="md:w-1/5">#</th>
        <th class=" md:w-3/4">Name</th>
        <th class=" md:w-3/4">Price</th>
        <th class=" md:w-1/5">Image</th>
        <th class="md:w-1/5">Edit</th>
        <th class="md:w-1/5">View</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
    <tr>
        <td class="border">{{$product->id}}</td>
        <td class="border">{{$product->name}}</td>
        <td class="border">{{$product->price}}</td>
        <td class="border flex justify-center">
            <img src="{{asset('photos/'.$product->thumbnail)}}" class="rounded" alt="{{$product->name}}">
        </td>
        <td class="border text-center">
            <a href="{{route('admin.product.edit',['id'=>$product->id])}}" class="rounded bg-blue-500 hover:bg-blue-400 text-white py-2 px-4">
                <i class="fas fa-edit"></i>
            </a>
        </td>
        <td class="border text-center">
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
