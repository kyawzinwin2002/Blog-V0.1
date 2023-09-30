<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route("page.home")}}">Laravel App</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

            @user
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{route("page.dashboard")}}">Dashboard</a>
              </li>
            @enduser

            @notUser
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{route("auth.login")}}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route("auth.register")}}">Register</a>
              </li>
            @endnotUser

        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
