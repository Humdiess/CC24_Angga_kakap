<x-app-layout>
    <x-top-navigation />

    <div class="hero pt-20">
        <div class="hero-wrapper py-4 px-16 container mx-auto">
            <div class="banner">
                <div class="banner-wrapper flex w-full justify-center text-center item-center h-224 flex-col gap-6">
                    <h1 class="text-3xl font-semibold"><span class="text-red-600">Merah</span><span class="text-white p-2 rounded-md bg-red-600 ml-2">Putih</span></h1>
                    <div class="hero-desc">
                        <p>Toko online masa depan bangsa, temukan barang dari brand favoritmu dengan harga terjangkau! <br> Hanya di Merah Putih!</p>
                    </div>
                </div>
            </div>
            <div class="category w-full flex justify-center py-4">
                <div class="category-list flex gap-4 overflow-y-none">
                    <x-category-card
                        categorylink="ya"
                        category="Handphone"
                    />
                    <x-category-card
                        categorylink="ya"
                        category="Laptop"
                    />
                    <x-category-card
                        categorylink="ya"
                        category="Sepatu"
                    />
                    <x-category-card
                        categorylink="ya"
                        category="Aksesoris"
                    />
                    <x-category-card
                        categorylink="ya"
                        category="Baju"
                    />
                    <x-category-card
                        categorylink="ya"
                        category="Celana"
                    />
                </div>
            </div>
        </div>
    </div>

    <x-main-content-layout>
        <div class="product-list">
            <x-section-title title="Produk Merah Putih" />
            <div class="product-list-wrapper grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 mt-4 container mx-auto">
                <x-product-card />
                <x-product-card />
                <x-product-card />
                <x-product-card />
                <x-product-card />
                <x-product-card />
                <x-product-card />
                <x-product-card />
                <x-product-card />
                <x-product-card />
                <x-product-card />
                <x-product-card />
            </div>
        </div>
    </x-main-content-layout>

    <div class="footer bg-red-600 bottom-0 w-full h-32 mt-8">
        <div class="footer-wrapper">

        </div>
    </div>
</x-app-layout>
