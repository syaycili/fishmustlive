<style>
.navbar-toggler,
.navbar-toggler:focus,
.navbar-toggler:active,
.navbar-toggler-icon:focus {
    outline: none;
    box-shadow: none;
    border: none;
}
.navbar{
    background-color: rgba(245, 245, 245, 0.76);
    box-shadow: 0 6px 20px 0 rgba(0,0,0,.2);
}
.costumbtn{
  background-color: #3e7aac; /* Green */
  border: none;
  color: white;
  padding: 4px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 2px;
  transition-duration: 0.2s;
  cursor: pointer;
  border: 2px solid #3e7aac;
  border-radius: 20px;
}.costumbtn:hover{
  background-color: #17598f; /* Green */
  border: 2px solid #17598f;
  color: #ffffff;
}


.button1 {
  background-color: transparent;
  color: #3e7aac;
}.button1:hover {
  border: 2px solid #3e7aac;
  background-color: #3e7aac;
  color: white;
}
.nav-link:hover{
color: #3e7aac !important;
}

</style>

<nav class="navbar sticky-top navbar-expand-lg navbar-light py-2 px-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('homepage') }}">
        <img src="{{ asset('pictures/logo.svg') }}" style="width:auto;height:30px;padding-bottom:2px;">
        <b>FishMust</b>.live</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active pr-3" aria-current="page" href="{{ route('homepage') }}">{{ __('content.navl1') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active pr-3" aria-current="page" href="{{ route('aboutus') }}">{{ __('content.navl2') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active pr-3" aria-current="page" href="{{ route('contactus') }}">{{ __('content.navl3') }}</a>
          </li>
        </ul>
        <div class="d-flex dropdown text-center mb-1" >
            <button class="btn btn-primary btn-sm dropdown-toggle mt-1 me-4" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            @if (Config::get('languages')[App::getLocale()] == "Türkçe")
                <span>&#127481;&#127479;</span>
            @elseif (Config::get('languages')[App::getLocale()] == "English")
                <span>&#127482;&#127480;</span>
            @endif
                {{ Config::get('languages')[App::getLocale()] }}

            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                <li><a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a></li>
                @endif
                @endforeach
            </ul>
          </div>
        <div class="d-flex">
            @auth
              <div class="btn-group">
                <button type="button" class="costumbtn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ route('homepage') }}">{{ __('content.nava1') }}</a></li>
                    <li><a class="dropdown-item" href="{{ route('dashboard') }}">{{ __('content.nava2') }}</a></li>
                    <li><a class="dropdown-item" href="{{ route('profile.show') }}">{{ __('content.nava3') }}</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('content.nava4') }}</a>
                        </form>
                    </li>
                </ul>
              </div>
            @else
            <a href="{{ route('login') }}" type="button" class="btn costumbtn button1 me-2">{{ __('content.navb1') }}</a>
            <a href="{{ route('register') }}" type="button" class="btn costumbtn">{{ __('content.navb2') }}</a>
            @endauth
        </div>
      </div>
    </div>
  </nav>
