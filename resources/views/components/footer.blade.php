<div class="container">
    <footer class="py-3 mt-5">
      <p class="text-center text-muted">&copy; 2022 fishmust.live </p>
      <p class="text-center text-muted"><i>{{ __('content.f') }}</i> | <a href="https://github.com/syaycili/">github</a> | <a href="https://www.linkedin.com/company/fishmustlive/">linkedin</a></p>

      <div class="dropdown text-center m-auto mx-auto">
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


    </footer>
</div>
