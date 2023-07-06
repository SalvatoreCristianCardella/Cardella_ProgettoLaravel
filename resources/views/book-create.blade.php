<x-layout>
    <x-slot name="titlepage">
        Create book
    </x-slot>
<h1 class="mt-5">Create book</h1>
<div class="container"></div>
    <div class="row">
        <div class="col-12 col-md-6 m-5">
            <x-createbookform
            :shops="$shops"/>
        </div>
    </div>
</div>
</x-layout>