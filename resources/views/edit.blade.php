<x-app-layout>
    <div class="py-12" style="color: black">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="{{ route('product.update', $product->id) }} method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <select name="category" id="">
                            @foreach ($category as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select><br>

                        @foreach ($produk as $item)
                        <input type="text" placeholder="{{$item->name}}" name="name"><br>
                        <input type="text" placeholder="{{$item->price}}" name="price"><br>
                        <input type="text" placeholder="{{$item->stock}}" name="stock"><br>
                        <input type="text" placeholder="{{$item->desc}}" name="deskripsi"><br>
                        <input type="file" name="image"><br>
                        <button type="submit">Submit</button>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
