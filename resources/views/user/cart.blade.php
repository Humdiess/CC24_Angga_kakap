<x-app-layout>
    <x-top-navigation />

    <x-main-content-layout>
        <div class="cart pt-12">
            <div class="cart-wrapper p-8">
                <x-section-title
                    title="Cart"
                />
                <div class="cart-list bg-white shadow-lg rounded-md w-96 h-screen overflow-y-auto mt-4">
                    <div class="cart-list-wrapper overflow-y-auto p-4">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="product-image w-32 h-16 bg-slate-200">
                                            <h1>j</h1>
                                        </div>
                                    </td>
                                    <td>
                                        <p>Samsung galaxy M20</p>
                                    </td>
                                    <td>
                                        <p>Rp. 1.400.000</p>
                                    </td>
                                    <td>
                                        <a href="/product-details" class="text-red-600 underline">Checkout</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="product-image w-32 h-16 bg-slate-200">
                                            <h1>j</h1>
                                        </div>
                                    </td>
                                    <td>
                                        <p>Samsung galaxy M20</p>
                                    </td>
                                    <td>
                                        <p>Rp. 1.400.000</p>
                                    </td>
                                    <td>
                                        <a href="/product-details" class="text-red-600 underline">Checkout</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="product-image w-32 h-16 bg-slate-200">
                                            <h1>j</h1>
                                        </div>
                                    </td>
                                    <td>
                                        <p>Samsung galaxy M20</p>
                                    </td>
                                    <td>
                                        <p>Rp. 1.400.000</p>
                                    </td>
                                    <td>
                                        <a href="/product-details" class="text-red-600 underline">Checkout</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-main-content-layout>
</x-app-layout>
