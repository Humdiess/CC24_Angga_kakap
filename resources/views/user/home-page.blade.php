<x-app-layout>
    <x-top-navigation />

    <div class="hero pt-16">
        <div class="hero-wrapper py-4 px-16 container mx-auto">

        </div>
    </div>

    <x-main-content-layout>
        <div class="product-list">
            <x-section-title title="Product" />
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
</x-app-layout>
