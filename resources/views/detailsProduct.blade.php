<x-layout>
    <x-slot name="detailspage">
        Homepage
    </x-slot>
<h1 class="mt-5">Dettagli</h1>
<img src="{{ Storage::url($product['img']) }}" alt="">
<h2>il titolo è {{$product['title']}}</h2>
<p>l'autore è {{$product->author}}</p>
<p>la descrizione è: {{$product->description}}</p>
<p>creato da {{$product->user->name}}</p>
{{-- funziona in entrambi i modi (stranamente) --}}
</x-layout>