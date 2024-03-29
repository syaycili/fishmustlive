@include('components.head')
<body>
@include('components.navbar')
<script src="https://use.fontawesome.com/6a7f30ba31.js"></script>
<style>
.social-link {
    text-decoration: none;
  width: 30px;
  height: 30px;
  border: 1px solid #ddd;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #666;
  border-radius: 50%;
  transition: all 0.3s;
  font-size: 0.9rem;
}

.social-link:hover,
.social-link:focus {
  background: #ddd;
  text-decoration: none;
  color: #555;
}
.fdb-icon{
    width: 40px;
    padding-bottom: 5px;
    -moz-transform: scaleX(-1);
-o-transform: scaleX(-1);
-webkit-transform: scaleX(-1);
transform: scaleX(-1);
filter: FlipH;
-ms-filter: "FlipH";
}
</style>




<section class="fdb-block my-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 text-left">
          <h1>{{ __('content.ab1') }}</h1>
          <p class="lead">{{ __('content.ab2') }}</p>
        </div>
      </div>

      <div class="row text-left pt-4">
        <div class="col-12 col-sm-6 col-md-5">

            <h3><img alt="image" class="fdb-icon" src="{{ asset('pictures/icons/balik.svg') }}"> <strong>{{ __('content.ab3') }}</strong></h3>
          <p>{{ __('content.ab4') }}</p>
        </div>

        <div class="col-12 col-sm-6 col-md-5 ml-sm-auto pt-5 pt-sm-0">

          <h3><img alt="image" class="fdb-icon" src="{{ asset('pictures/icons/yelkenli.svg') }}"> <strong>{{ __('content.ab5') }}</strong></h3>
          <p>{{ __('content.ab6') }}</p>
        </div>
      </div>
    </div>
  </section>





  <div class="bg-light pb-5">
    <div class="container py-5">
      <div class="row mb-4">
        <div class="col-lg-10">
          <h2 class="display-4 font-weight-light">{{ __('content.ab7') }}</h2>
          <p class="font-italic text-muted"></p>
        </div>
      </div>

      <div class="row text-center">
        <!-- Team item-->
        <div class="col-xl-4 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{ asset('pictures/team/arel.jpg') }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Arel Baha Encin</h5><span class="small text-uppercase text-muted">{{ __('content.ab8') }}</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="https://www.linkedin.com/in/arelbahaencin/" class="social-link"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <!-- End-->

        <!-- Team item-->
        <div class="col-xl-4 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{ asset('pictures/team/sarp.jpg') }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Sarp Yaycılı</h5><span class="small text-uppercase text-muted">{{ __('content.ab8') }}</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="https://www.linkedin.com/in/sarpyaycili/" class="social-link"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <!-- End-->

        <!-- Team item-->
        <div class="col-xl-4 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{ asset('pictures/team/süleyman.jpg') }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Süleyman Nur Tütüncü</h5><span class="small text-uppercase text-muted">{{ __('content.ab8') }}</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>






      </div>



      <div class="container px-4 py-5" id="featured-3">
        <h2 class="pb-2 border-bottom">{{ __('content.ab12') }}</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
          <div class="feature col">
            <div class="feature-icon bg-primary bg-gradient">
              <span><b>1</b></span>
            </div>
            <p>
            {{ __('content.ab13s') }} <b>{{ __('content.ab13b') }}</b> {{ __('content.ab13') }} </p>
          </div>
          <div class="feature col">
            <div class="feature-icon bg-primary bg-gradient">
                <span><b>2</b></span>
            </div>
            <p>{{ __('content.ab14s') }} <b>{{ __('content.ab14b') }}</b> {{ __('content.ab14') }}</p>
          </div>
          <div class="feature col">
            <div class="feature-icon bg-primary bg-gradient">
                <span><b>3</b></span>
            </div>
            <p>{{ __('content.ab15s') }} <b>{{ __('content.ab15b') }}</b> {{ __('content.ab15') }}</p>
          </div>
        </div>
      </div>

    <div class="embed-responsive embed-responsive-16by9 text-center" >
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UbBoBqK8Zl4" allowfullscreen></iframe>
    </div>




<br>



</div>





  </div>



<style>
.b-example-divider {
  height: 3rem;
  background-color: rgba(0, 0, 0, .1);
  border: solid rgba(0, 0, 0, .15);
  border-width: 1px 0;
  box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
}
.feature{
max-width: 350px;
height: 350px;
overflow-x: hidden;
margin: auto;
border: 2px black solid;
padding: 20px;
margin-bottom: 20px;
border-radius: 20px;
box-shadow: 5px 5px;
}
.feature:hover{
box-shadow: 8px 10px;
}

.bi {
  vertical-align: -.125em;
  fill: currentColor;
}

.feature-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 4rem;
  height: 4rem;
  margin-bottom: 1rem;
  font-size: 2rem;
  color: #fff;
  border-radius: .75rem;
}

.icon-link {
  display: inline-flex;
  align-items: center;
}
.icon-link > .bi {
  margin-top: .125rem;
  margin-left: .125rem;
  transition: transform .25s ease-in-out;
  fill: currentColor;
}
.icon-link:hover > .bi {
  transform: translate(.25rem);
}

.icon-square {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 3rem;
  height: 3rem;
  font-size: 1.5rem;
  border-radius: .75rem;
}

.rounded-4 { border-radius: .5rem; }
.rounded-5 { border-radius: 1rem; }

.text-shadow-1 { text-shadow: 0 .125rem .25rem rgba(0, 0, 0, .25); }
.text-shadow-2 { text-shadow: 0 .25rem .5rem rgba(0, 0, 0, .25); }
.text-shadow-3 { text-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .25); }

.card-cover {
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}

</style>
@include('components.footer')
</body>

