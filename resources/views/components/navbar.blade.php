<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('welcome')}}">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Homes
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('themonsignors')}}">Our Homes</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{route('theestate')}}">The Monsignor's Estate</a></li>
              <li><a class="dropdown-item" href="{{route('themanor')}}">The Evergreen Manor</a></li>
              <li><a class="dropdown-item" href="{{route('thevilla')}}">The Garden Villa</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              About Us
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('whoweare')}}">Who we are</a></li>
              <li><a class="dropdown-item" href="{{route('sustainability')}}">Sustainability</a></li>
              {{-- <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('mola')}}">Mola di Bari</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact_us')}}">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('blog')}}">Blog</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Book with us
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="https://www.airbnb.com/h/themonsignors">AirBnb</a></li>
                <li><a class="dropdown-item" href="#">Call us directly</a></li>
                <li><a class="dropdown-item" href="#">Ask about availability</a></li>
              </ul>
            </li>
          </ul>
      </div>
    </div>
  </nav>