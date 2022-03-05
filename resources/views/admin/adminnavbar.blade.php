<style>
    @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');
    body{
        margin-top: {{$bodymargin}}px;
      }
    .navsolbuton{
      margin-right: 10px;
    }
    </style>


        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="padding-right: 20px; padding-left: 20px;">
          <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('homepage') }}" style="margin-right: 25px; font-family: 'Fredoka One', cursive;"><img src="{{ asset('pictures/logo.svg') }}" style="height: 40px; padding: 1px 3px;"> Fish Must Live</a>
            <button
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarText"
              aria-controls="navbarText"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a @if($suankisayfa == 1) href="#" class="nav-link active" aria-current="page" @else href="{{ route('paneladmin') }}"  class="nav-link"  @endif  style="margin-right: 15px;">Admin Paneli</a>
                  </li>
                <li class="nav-item">
                  <a @if($suankisayfa == 3) href="#"  class="nav-link active" aria-current="page"  @else href="{{ route('üye_paneli') }}" class="nav-link" @endif  style="margin-right: 15px;">Üyeleri Yönet</a>
                </li>
              </ul>






              <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Admin {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ route('homepage') }}">Home</a></li>
                    <li><a class="dropdown-item" href="{{ route('dashboard') }}">Regular Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a>
                        </form>
                    </li>
                </ul>
              </div>







            </div>
          </div>
        </nav>



        <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
