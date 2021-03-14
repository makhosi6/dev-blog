<nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
      <a class="navbar-brand" href="/">Reference<i>dev</i>.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        
      <span class="oi oi-menu io-font"></span> Menu
    </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
              <li class="nav-item dropdown">
                  <a  href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" rel="noopener">Articles
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    @foreach ($categories as $category)
                    <li class="center-pager drp-dwn-item caps"><a href="/articles/{!!$category->category!!}">{!!$category->category!!}</a></li>
                    @endforeach
                  </ul>
                </li>

              <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
              <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
          </ul>
      </div>
  </div>
</nav>