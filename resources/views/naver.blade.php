<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Student Mangement</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link navbar-brand" href="/">Home</a>
        <a class="nav-link navbar-brand" href="/create">Create</a>
        <div class="container-fluid">
          <form class="d-flex" action="/search" method="get">
              <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search">
              <span class="input-group-prepend">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </span>
        </div>
        </form>
      </div>
    </div>

  </div>
</nav>