<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">IMDB</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link @if(Route::is('movies')) active @endif" aria-current="page" href="{{ route('movies') }}">Movies</a>
          <a class="nav-link @if(Route::is('add-movie')) active @endif" aria-current="page" href="{{ route('create-movie') }}">Add New Movie</a>
        </div>
      </div>
    </div>
</nav>