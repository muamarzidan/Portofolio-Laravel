<nav class="navbar navbar-expand-lg">
    <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
              <ul class="navbar-nav">
                  <li class="nav-item2">
                      <a class="nav-link me-100 {{ ($title === 'Home') ? 'active' : '' }}"  aria-current="page" href="/">HOME</a>
                  </li>
                  <li class="nav-item1">
                      <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/about">ABOUT</a>
                  </li>
                  <li class="nav-item3">
                      <a class="nav-link {{ ($title === 'Contact') ? 'active' : '' }}" href=" {{ route('contact.create') }} ">CONTACT US</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>





















{{-- 
  <li class="nav-item">
    <a class="nav-link {{ ($title === 'Gallery') ? 'active' : '' }}" href="/gallery">Gallery</a>
</li> --}}


{{-- <div class="contaner">
    <div class="header">
        <ul>
            <li>
                <a aria-current="page" href="/">Home</a>
            </li>
            <li>
                <a href="/about">About  
                <span></span><span></span><span></span><span></span></a>
            </li>
            <li>
                <a href=" {{ route('contact.create') }} ">Contact Us
                <span></span><span></span><span></span><span></span></a>
            </li>
        </ul>
    </div>
</div> --}}




  {{-- <ul class="navbar-nav ms-auto">
    <li class="nav-item">
        <a class="nav-link" href="{{route ('login')}}">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route ('register')}}">Register</a>
    </li>
</ul> --}}

{{-- <div class="contener">
    <div class="header-btn"></div>
    <div class="overlay"></div>
    <div class="menu-contener">
        <ul class="menu-wrapper">
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">ContactUs</a></li>
        </ul>
        <div class="menu-underlay"></div>
    </div>

    <div class="contener-content">
        <div class="line-1">
            Animate <br/>CSS
            Men
        </div> 
    </div>
</div> --}}
        {{-- <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul> --}}

{{-- <div class="m-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Home</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="navbar">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                          <a class="nav-link active" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                      </ul>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="#" class="nav-item nav-link">Login</a>
                </div>
        </div>
    </nav>
</div> --}}



{{-- <nav>
    <div class="nav-wrapper">
        <a href="{{ route('home') }}" class="brand-logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
        </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}"  aria-current="page" href="/">Home</a></li>
            <li><a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/about">About</a></li>
            <a class="nav-link {{ ($title === 'Contact') ? 'active' : '' }}" href=" {{ route('contact.create') }} ">Contact Us</a>
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        </ul>
    </div>
</nav> --}}

{{-- <nav class="navbar">
        <div class=     >
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}"  aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/about">About</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Gallery') ? 'active' : '' }}" href="/gallery">Gallery</a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Contact') ? 'active' : '' }}" href=" {{ route('contact.create') }} ">Contact Us</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route ('login')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route ('register')}}">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav> --}} 
