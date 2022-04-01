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

@media only screen and (max-width: 992px) {
    .resimbolumu
    {
        display: none;
    }
}


.girisresim{
    height: 330px;
    width: 90%;
    border-radius: 20px;
    object-fit: cover;
    float: right;
}
.text-muted{
    color: #19515c !important;
}
</style>
<body>

@include('components.navbar')

<div class="main">







    <div class="container col-xxl-8 px-4 py-4">
        <div class="row flex-lg-row align-items-center g-5 py-3">

          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Fish Must Live!</h1>

            <p class="lead py-1">{{ __('content.hph1') }}<br>
                {{ __('content.hph2') }}<br>
                {{ __('content.hph3') }}</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="{{route('dashboard')}}" type="button" class="btn btn-primary btn-lg px-4 me-md-2">{{ __('content.hphb1') }}</a>
                <a href="https://forms.gle/LemmFDPRq2ncYkzz8" type="button" target="_blank" class="btn btn-outline-secondary btn-lg px-4">{{ __('content.hphb2') }}</a>
            </div>
          </div>
          <div class="resimbolumu col-10 col-sm-8 col-lg-6">
            <img src="{{ asset('pictures/pollution1.jpg') }}" class="d-block mx-lg-auto img-fluid girisresim shadow"loading="lazy">
          </div>
        </div>
      </div>











<style>
.timeline-steps {
    display: flex;
    justify-content: center;
    flex-wrap: wrap
}

.timeline-steps .timeline-step {
    align-items: center;
    display: flex;
    flex-direction: column;
    position: relative;
    margin: 1rem
}

@media (min-width:768px) {
    .timeline-steps .timeline-step:not(:last-child):after {
        content: "";
        display: block;
        border-top: .25rem dotted #19515c;
        width: 3.46rem;
        position: absolute;
        left: 7.5rem;
        top: .3125rem
    }
    .timeline-steps .timeline-step:not(:first-child):before {
        content: "";
        display: block;
        border-top: .25rem dotted #19515c;
        width: 3.8125rem;
        position: absolute;
        right: 7.5rem;
        top: .3125rem
    }
}

.timeline-steps .timeline-content {
    width: 10rem;
    text-align: center
}

.timeline-steps .timeline-content .inner-circle {
    border-radius: 1.5rem;
    height: 1rem;
    width: 1rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background-color: #19515c
}

.timeline-steps .timeline-content .inner-circle:before {
    content: "";
    background-color: #34a6bd;
    display: inline-block;
    height: 3rem;
    width: 3rem;
    min-width: 3rem;
    border-radius: 6.25rem;
    opacity: .5
}
</style>










      <div class="container py-5">


        <div class="row">
            <div class="col">
                <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                    <div class="timeline-step">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2003">
                            <div class="inner-circle"></div>
                            <p class="h6 mt-3 mb-1">{{ __('content.hptld1') }}</p>
                            <p class="h6 text-muted mb-0 mb-lg-0">{{ __('content.hptl1') }}</p>
                        </div>
                    </div>
                    <div class="timeline-step">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2004">
                            <div class="inner-circle"></div>
                            <p class="h6 mt-3 mb-1">{{ __('content.hptld2') }}</p>
                            <p class="h6 text-muted mb-0 mb-lg-0">{{ __('content.hptl2') }}</p>
                        </div>
                    </div>
                    <div class="timeline-step">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2005">
                            <div class="inner-circle"></div>
                            <p class="h6 mt-3 mb-1">{{ __('content.hptld3') }}</p>
                            <p class="h6 text-muted mb-0 mb-lg-0">{{ __('content.hptl3') }}</p>
                        </div>
                    </div>
                    <div class="timeline-step">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2010">
                            <div class="inner-circle"></div>
                            <p class="h6 mt-3 mb-1">{{ __('content.hptld4') }}</p>
                            <p class="h6 text-muted mb-0 mb-lg-0">{{ __('content.hptl4') }}</p>
                        </div>
                    </div>
                    <div class="timeline-step mb-0">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2020">
                            <div class="inner-circle"></div>
                            <p class="h6 mt-3 mb-1">2022 - <span>&#8734;</span></p>
                            <p class="h6 text-muted mb-0 mb-lg-0">{{ __('content.hptl5') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.map1',$posts)

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
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">{{ __('content.hpf1') }}</h2>
              </div>
            </div>
          </div>

          <div class="col">
            <div onclick="window.open('{{ route('dashboard') }}');" style="cursor: pointer; border: rgb(255, 255, 255) 3px solid; background-image: url('{{ asset('pictures/step2.jpg') }}');" class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">{{ __('content.hpf2') }}</h2>
              </div>
            </div>
          </div>

          <div class="col">
            <div onclick="window.open('{{ route('dashboard') }}');" style="cursor: pointer; border: rgb(255, 255, 255) 3px solid; background-image: url('{{ asset('pictures/step3.jpg') }}');" class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">{{ __('content.hpf3') }}</h2>
              </div>
            </div>
          </div>
        </div>
      </div>


      @include('marketing.sponsor')


</div>



@include('components.footer')

</body>
