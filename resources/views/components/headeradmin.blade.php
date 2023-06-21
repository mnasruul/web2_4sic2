<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container">
     
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Berita
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Kategori</a></li>
              <li><a class="dropdown-item" href="#">Tag</a></li>
              <li><a class="dropdown-item" href="#">Data Berita</a></li>
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto"> 
            <li  class="nav-item">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">Logout</a>
                 </form>
            </li>
        </ul>
      </div>
    </div>
  </nav>