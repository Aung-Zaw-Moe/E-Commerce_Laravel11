  <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img class="me-4" src="{{ asset('images/logo.png') }}" alt="E-Commerce_Logo" width="200" height="100">
          <span>
            <i class="fa fa-gift m-2" width="80" height="80">  "  AZM E-Commerce  "</i> Onlyfor <i>Creative Coder Myanmar</i>
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>

            {{-- <li class="nav-item">
              <a class="nav-link" href="testimonial.html">
                About Us
              </a>
            </li> --}}
             <li class="nav-item">
              <a class="nav-link" href="{{ route('documents.home') }}">Documentation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/contacts') }}">Contact-Us</a>
            </li>

          </ul>
            <div class="user_option">
                @if(Route::has('login'))
                    @auth
                        <a href="{{ url('myorders') }}">
                            My Orders
                        </a>
                        <a href="{{ url('mycart') }}">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            [{{ $count }}]
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="m-2">
                            @csrf
                            <input type="submit" value="logout" class="btn btn-dark">
                        </form>
                    @else
                        <a href="{{url('/login') }}">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>Login</span>
                        </a>
                        <a href="{{url('/register') }}">
                            <i class="fa fa-vcard" aria-hidden="true"></i>
                            <span>Register</span>
                        </a>
                    @endauth
                @endif
            </div>

        </div>
      </nav>
    </header>
