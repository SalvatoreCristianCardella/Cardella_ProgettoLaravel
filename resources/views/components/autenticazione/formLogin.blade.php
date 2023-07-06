<form action="{{ route('login') }}" method="post">
    @csrf
    <div class="form-group my-3">
      <label for="email">email</label>
      <input required type="email" value="" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" class="@error('email') is-invalid @enderror">
      @error('email')
          <div class="alert text-danger"> {{ $message }}</div>
      @enderror
    </div>
    <div class="form-group my-3">
      <label for="password">password</label>
      <input required type="password" name="password" value="" class="form-control" id="password"class="@error('password') is-invalid @enderror">
      @error('password')
          <div class="alert text-danger"> {{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary my-3">Accedi</button>
  </form>