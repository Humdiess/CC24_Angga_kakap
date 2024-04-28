<x-app-layout>
    <div class="py-12" style="color: black">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="{{ route('product.store') }} method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- @foreach ($category as $item)
                        <select name="category" id="">
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        </select><br>
                        @endforeach --}}

                        <input type="text" placeholder="Masukkan Nama Produk" name="name"><br>
                        <input type="text" placeholder="Masukkan Harga Produk" name="price"><br>
                        <input type="text" placeholder="Masukkan Stock Produk" name="stock"><br>
                        <input type="text" placeholder="Masukkan Deskripsi Produk" name="deskripsi"><br>
                        <input type="file" name="image"><br>
                        <button type="submit">Submit</button>
                    </form>

                    <table>
                        <tr>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Rating</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Menu</th>
                        </tr>
                        @foreach ($produk as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->category_id}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->stock}}</td>
                            <td>{{$item->rating}}</td>
                            <td>{{$item->desc}}</td>
                            <td>
                                <img src="{{asset('storage/' . $item->image)}}" alt="">
                            </td>
                            <td>
                                <a href="{{ route('product.edit', $id)}}">Edit</a>

                                <form action="{{ route('product.destroy')}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button>Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
