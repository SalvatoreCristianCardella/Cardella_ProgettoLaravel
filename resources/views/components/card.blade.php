<div class="card" style="width: 15rem;">
    <img src="{{ Storage::url($product->img) }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{!! $product->title !!}</h5>
      <p class="card-text">{!! $product->author !!}</p>
      <p class="card-text">{!! Str::limit($product->description, 20) !!}</p>
    <div class="d-flex justify-content-evenly">
      <a href="{{ route('book.show', $product) }}" class="btn btn-sm btn-primary">dettagli</a>
      <a href="{{ route('book.edit', $product) }}" class="btn btn-sm btn-primary">modifica</a>
      <form action="{{ route('book.delete', $product) }}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-sm btn-danger">Elimina</button>
      </form>
    </div>
    </div>
  </div>