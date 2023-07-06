<x-layout>
    <x-slot name="titlepage">
        modifica book
    </x-slot>
<h1 class="mt-5">modifica book</h1>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 m-5">
            <x-editbookform
            :book="$book"
            />
        </div>
    </div>
</div>
</x-layout>