<x-app-layout>
    <x-top-navigation />

    <x-main-content-layout>
        <div class="product-detail pt-20 min-h-screen">
            <div class="product-detail-wrapper min-h-screen grid grid-cols-3 justify-center">
                {{-- detail-start --}}
                <div class="detail-start">
                    <div class="detail-image w-full h-[32rem] bg-slate-200">
                        <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="gambar produk" class="w-full h-full">
                    </div>
                </div>
                {{-- detail-center --}}
                <div class="detail-center">
                    <div class="detail-center-wrapper p-4 space-y-2">
                        <div class="detail-title">
                            <h1 class="text-3xl font-semibold">Ini nama produk seng di dol</h1>
                        </div>
                        <div class="detail-price-rating flex items-center gap-2">
                            <p class="text-2xl">Rp. 162.000</p>
                            <div class="rating flex items-center text-sm">
                                <div class="icon">
                                    <p>⭐</p>
                                </div>
                                <div class="count">
                                    <p>5</p>
                                </div>
                            </div>
                        </div>
                        <div class="detail-seller flex items-center gap-2">
                            <div class="avatar bg-slate-200 w-8 h-8 rounded-full flex justify-center items-center">
                                <img src="https://www.bing.com/th?id=OIP.1gNIu52ILWaqbP-hPcPerAHaE8&w=205&h=150&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2" class="rounded-full" alt="🐱‍👤">
                                {{-- if immage exist --}}
                            </div>

                            <div class="seller-name">
                                <p>Amabatron</p>
                            </div>
                        </div>
                        <div class="detail-description mt-8">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, assumenda ipsa. Impedit consequatur, nesciunt officia atque ex iure placeat nemo dolore quisquam beatae nostrum provident totam nihil optio dolores, culpa velit laboriosam libero, alias minima dicta. Fugiat, quisquam corrupti aut neque esse pariatur, minus sunt id distinctio illo alias inventore asperiores modi nihil ut! Doloremque ipsa recusandae, accusamus ea nulla enim fuga aliquam at, dolorem ipsum aliquid rem tenetur beatae ex placeat, cupiditate obcaecati iure veniam quis dicta harum ratione!</p>
                        </div>
                    </div>
                </div>
                {{-- detail-end --}}
                <div class="detail-end">
                    <div class="detail-end-wrapper flex justify-center p-4">
                        <div class="checkout-details bg-white shadow-md rounded-md w-80 h-auto p-4">
                            <div class="checkout-details-wrapper">
                                <form action="#" class="space-y-2">
                                    <x-checkout-input
                                        lable="Jumlah barang"
                                        type="Number"
                                        placeholder="Qty"
                                    />
                                    <x-select-input
                                        lable="Kirim ke"
                                    />
                                    <x-submit-button
                                        name="Checkout"
                                    />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-main-content-layout>
</x-app-layout>
