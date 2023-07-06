<form action="{{route('book.send')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group my-3">
      <label for="exampleInputEmail1">titolo</label>
      <input required type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" class="@error('title') is-invalid @enderror">
      @error('title')
          <div class="alert text-danger"> {{ $message }}</div>
      @enderror
    </div>
    <div class="form-group my-3">
      <label for="exampleInputPassword1">autore</label>
      <input required type="text" name="author" class="form-control" id="exampleInputPassword1"class="@error('author') is-invalid @enderror">
      @error('author')
          <div class="alert text-danger"> {{ $message }}</div>
      @enderror
    </div>
    <div class="form-group my-3">
        <label for="exampleInputPassword1">descrizione</label>
        <input required type="text" name="description" class="form-control" id="exampleInputPassword1"class="@error('description') is-invalid @enderror">
        @error('description')
            <div class="alert text-danger"> {{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Dove puoi trovare questo articolo?</label>
      <select name="shops[]" class="form-select" multiple>
          @foreach ($shops as $shop)
              <option value="{{ $shop->id }}">{{ $shop->name }}</option>
          @endforeach
      </select>
      <small class="fst-italic">usare Ctr+click per selezionare più platform</small>
  </div>
    <div class="form-group my-3">
      <label for="exampleInputPassword2">img</label>
      <input type="file" name="img" class="form-control" id="exampleInputPassword2" class="@error('img') is-invalid @enderror">
      @error('img')
          <div class="alert text-danger"> {{ $message }}</div>
      @enderror
  </div>
    <button type="submit" class="btn btn-primary my-3">crea</button>
  </form>