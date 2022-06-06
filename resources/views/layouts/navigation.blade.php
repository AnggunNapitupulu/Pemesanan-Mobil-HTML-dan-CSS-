  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="/"><h2>Bro <em>Mobil</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item{{ request()->is('/') ? ' active' : '' }}">
                  <a class="nav-link" href="/">Home
                    <span class="sr-only">(current)</span>
                  </a>
              </li>  
              @if(session()->has('LoggedUser'))
              <li class="nav-item{{ request()->is('daftarmobil') ? ' active' : '' }}">
                <a class="nav-link" href="/daftarmobil">Daftar Mobil</a>
              </li>
              <li class="nav-item{{ request()->is('contact') ? ' active' : '' }}">
                <a class="nav-link" href="/contact">Contact
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item{{ request()->is('products') ? ' active' : '' }}">
                  <a class="nav-link" href="/products">Manage - Car
                    <span class="sr-only">(current)</span>
                  </a>
              </li>
              <li class="nav-item{{ request()->is('login') ? ' active' : '' }}">
                <a class="nav-link" href="logout">Logout
                  <span class="sr-only">(current)</span>
                </a>
            </li>
            @else
            <li class="nav-item{{ request()->is('login') ? ' active' : '' }}">
                <a class="nav-link" href="/login">Login
                  <span class="sr-only">(current)</span>
                </a>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
  </header>
