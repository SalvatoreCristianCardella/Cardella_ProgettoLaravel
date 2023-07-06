<form action="{{route('sendmail')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="exampleInputname" class="form-label">name</label>
      <input type="text" name="name"  class="form-control" id="exampleInputname" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputemail" class="form-label">email</label>
        <input type="email" name="email" class="form-control" id="exampleInputemail1" aria-describedby="emailHelp">
      </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">invia </button>
  </form>