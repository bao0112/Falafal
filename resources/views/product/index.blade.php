<?php

/** @var \Illuminate\Database\Eloquent\Collection $products */
?>

<x-app-layout>
    <?php if ($products->count() === 0) : ?>
        <div class="text-center text-gray-600 py-16 text-xl">
            There are no products published
        </div>
    <?php else : ?>
        <div class="grid gap-8 grig-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 p-5">
            @foreach($products as $product)
            <!-- Product Item -->
            <div x-data="productItem({{ json_encode([
                        'id' => $product->id,
                        'slug' => $product->slug,
                        'image' => $product->image,
                        'title' => $product->title,
                        'price' => $product->price,
                        'addToCartUrl' => route('cart.add', $product)
                    ]) }})" class="border border-1 border-gray-200 rounded-md hover:border-blue-600 transition-colors bg-white grid content-between h-[360px] w-[240px]">
                <a href="{{ route('product.view', $product->slug) }}" class="aspect-w-3 aspect-h-2 block overflow-hidden flex">
                    <img src="{{ $product->image }}" alt="{{ $product->title }}" class="object-contain rounded-lg hover:scale-105 hover:rotate-1 transition-transform w-[230px]" />
                </a>
                <div class="p-4">
                    <h3 class="text-lg overflow-hidden truncate w-[210px]">
                        <a href="{{ route('product.view', $product->slug) }}">
                            {{$product->title}}
                        </a>
                    </h3>
                    <h5 class="font-bold">${{$product->price}}</h5>
                </div>
                <div class="flex justify-between py-3 px-4">
                    <button class="btn-primary" @click="addToCart()">
                        Add to Cart
                    </button>
                </div>
            </div>
            <!--/ Product Item -->
            @endforeach
        </div>
        {{$products->links()}}
    <?php endif; ?>
</x-app-layout>