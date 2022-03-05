@include('components.head')
<style>
body{
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    background-color: #74EBD5;
    background-image: linear-gradient(45deg, #74EBD5 0%, #9FACE6 100%);
}
.footer-container{
    margin-top: auto;
}
.harita{
    border-radius: 50px;
    box-shadow: 0 20px 40px 0 rgba(0,0,0,.2);
}

</style>
<body>

@include('components.navbar')

<div class="main">



    <div class="px-4 mt-5 text-center">
      <h1 class="display-4 fw-bold">Fish Must Live!</h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-3 p-3">
        The World's Waters, Humankind, Organisms and More...! The Whole Chain <br>
        Let everything to be connected. Do not let "Plastic Pollution" break the chain! <br>
        Come and Share a New Post, Be a Plastic Detector, Prevent Plastic Pollution in Marine Areas!
        </p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
          <a href="{{route('dashboard')}}" type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Locate New</a>
          <a href="{{route('dashboard')}}" type="button" class="btn btn-outline-secondary btn-lg px-4">Dashboard</a>
        </div>
      </div>
      <div class="overflow-hidden" style="max-height: 30vh;">
      </div>
    </div>


    @include('components.map1')


    <style>
.b-example-divider {
  height: 3rem;
  background-color: rgba(0, 0, 0, .1);
  border: solid rgba(0, 0, 0, .15);
  border-width: 1px 0;
  box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
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

    <div class="container px-4 pt-5" id="custom-cards">
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 pt-5 pb-2">
          <div class="col">
            <div onclick="window.open('{{ route('dashboard') }}');" style="cursor: pointer; border: rgb(255, 255, 255) 3px solid; background-image: url('{{ asset('pictures/step1.jpg') }}');" class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Create an account!</h2>
              </div>
            </div>
          </div>

          <div class="col">
            <div onclick="window.open('{{ route('dashboard') }}');" style="cursor: pointer; border: rgb(255, 255, 255) 3px solid; background-image: url('{{ asset('pictures/step2.jpg') }}');" class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">See the plastic pollution that the community shared.</h2>
              </div>
            </div>
          </div>

          <div class="col">
            <div onclick="window.open('{{ route('dashboard') }}');" style="cursor: pointer; border: rgb(255, 255, 255) 3px solid; background-image: url('{{ asset('pictures/step3.jpg') }}');" class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Share the plastic pollution around you!</h2>
              </div>
            </div>
          </div>
        </div>
      </div>


      @include('marketing.sponsor')


</div>

@include('components.footer')
</body>
