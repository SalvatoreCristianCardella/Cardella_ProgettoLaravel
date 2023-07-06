<x-layout>
    <x-slot name="titlepage">
        Homepage
    </x-slot>
<h1 class="mt-5">prodotti</h1>
<div class="container">
    <div class="row">
        @foreach ($products as $product)
        <div class="col-12 col-md-3">
            <x-card 
                :product="$product"
            />
        </div>
    @endforeach
    </div>
</div>
</x-layout>