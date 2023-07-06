<form action="{{route('book.update', $book)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group my-3">
      <label for="exampleInputEmail1">titolo</label>
      <input required type="text" value="{{$book->title}}" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" class="@error('title') is-invalid @enderror">
      @error('title')
          <div class="alert text-danger"> {{ $message }}</div>
      @enderror
    </div>
    <div class="form-group my-3">
      <label for="exampleInputPassword1">autore</label>
      <input required type="text" name="author"value="{{$book->author}}" class="form-control" id="exampleInputPassword1"class="@error('author') is-invalid @enderror">
      @error('author')
          <div class="alert text-danger"> {{ $message }}</div>
      @enderror
    </div>
    <div class="form-group my-3">
        <label for="exampleInputPassword1">descrizione</label>
        <input required type="text" name="description" value="{{$book->description}}" class="form-control" id="exampleInputPassword1"class="@error('description') is-invalid @enderror">
        @error('description')
            <div class="alert text-danger"> {{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="img" class="form-label">Img</label>
        <div class="d-flex">
            <input type="file" name="img" class="form-control"  >
            <img src="{{ Storage::url($book->img) }}" class="img-fluid" style="width: 50px">
        </div>
    </div>
    <button type="submit" class="btn btn-primary my-3">salva</button>
  </form>