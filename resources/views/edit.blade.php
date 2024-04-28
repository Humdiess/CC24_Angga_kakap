<x-app-layout>
    <div class="py-12" style="color: black">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="{{ route('product.update') }} method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- @foreach ($category as $item)
                        <select name="category" id="">
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        </select><br>
                        @endforeach --}}

                        @foreach ($product as $item)
                        <input type="text" placeholder="Masukkan Nama Produk" name="name"><br>
                        <input type="text" placeholder="Masukkan Harga Produk" name="price"><br>
                        <input type="text" placeholder="Masukkan Stock Produk" name="stock"><br>
                        <input type="text" placeholder="Masukkan Deskripsi Produk" name="deskripsi"><br>
                        <input type="file" name="image"><br>
                        <button type="submit">Submit</button>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
