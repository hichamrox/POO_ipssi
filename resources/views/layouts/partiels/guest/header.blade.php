<header>
  <div>
      <div class="logo bounce" id="lg"></div>
      <div class="menu" id="mn">
          <nav><a href="/animal">Animaux</a></nav>
          <nav><a href="/product">Produits</a></nav>
          <nav><a href="/article">Blog</a></nav>
          <nav><a href="/dons">Dons</a></nav>
          <nav>
            @auth
            <div class="dropdown">
              <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{auth()->user()->name}}
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <form action="{{ url('/logout') }}" method="post">
                    @csrf
                    <button class="dropdown-item" type="submit">Sortir</button>
                  </form>
                  
              </div>
          </div>
            @endauth
            @guest
              <div class="dropdown">
                  <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Auth
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="/login">Connexion</a>
                      <a class="dropdown-item" href="/register">S'inscrire</a>
                  </div>
              </div>
            @endguest
            </nav>
          
      </div>
      <!--Hamburger menu-->
      <div class="nav-toggle">
          <div class="nav-toggle-bar"></div>
      </div>            
  </div>
  <div id="hm-menu">
      <nav><a href="/animal">Animaux</a></nav>
      <nav><a href="">Produits</a></nav>
      <nav><a href="/article">Blog</a></nav>
      <nav><a href="">Dons</a></nav>
      <nav><a href="/login">Connexion</a></nav>
  </div>
</header>