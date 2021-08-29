<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto mr-5">
        <a class="nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="{{route('tasks.index')}}">Task</a>
        <a class="nav-link" href="{{route('pricing.index')}}">Pricing</a>
        <a class="nav-link" href="{{route('login')}}">Login</a>
        <a class="nav-link" href="{{route('register')}}">Register</a>
      </div>
    </div>
  </nav>
