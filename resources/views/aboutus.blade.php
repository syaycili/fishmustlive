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
</style>






<div class="bg-light">
    <div class="container py-5">
      <div class="row h-100 align-items-center py-5">
        <div class="col-lg-6">
          <h1 class="display-4">About us</h1>
          <p class="lead text-muted mb-0">fishmust.live is a project which developed by high school students in Gebze, Turkey.</p><br>
          <p class="lead text-muted">Web DEV by<a href="https://github.com/syaycili" class="text-muted">
          <u>Sarp Yaycılı</u></a>
          </p>
        </div>
        <div class="col-lg-6 d-none d-lg-block"><img src="https://bootstrapious.com/i/snippets/sn-about/illus.png" alt="" class="img-fluid"></div>
      </div>
    </div>
  </div>

  <div class="py-5">
    <div class="container py-5">
      <div class="row align-items-center mb-5">
        <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
          <h2 class="font-weight-light">Our Vision</h2>
          <p class="font-italic mb-4">
              To create a more secure habitat for underwater creatures, we must apply genetically altered traits. Plastic digestive organisms, such as Ideonella sakaiensis, are an excellent representative of this form of resolution.
          </p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
        </div>
        <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="https://bootstrapious.com/i/snippets/sn-about/img-1.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-5 px-5 mx-auto"><img src="https://bootstrapious.com/i/snippets/sn-about/img-2.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
        <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
          <h2 class="font-weight-light">Our Mission</h2>
          <p class="font-italic mb-4">
          Providing a more habitable environment for underwater creatures affected negatively by plastic pollution with the help of Ideonella sakaiensis.
          </p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-light py-5">
    <div class="container py-5">
      <div class="row mb-4">
        <div class="col-lg-5">
          <h2 class="display-4 font-weight-light">Our team</h2>
          <p class="font-italic text-muted">High school students from Türk Eğitim Vakfı İnanç Türkeş Özel Anadolu Lisesi - Gebze, Kocaeli</p>
        </div>
      </div>

      <div class="row text-center">
        <!-- Team item-->
        <div class="col-xl-4 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{ asset('pictures/team/arel.jpg') }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Arel Baha Encin</h5><span class="small text-uppercase text-muted">Class-11 Student</span>
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
            <h5 class="mb-0">Sarp Yaycılı</h5><span class="small text-uppercase text-muted">Class-11 Student</span>
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
            <h5 class="mb-0">Süleyman Nur Tütüncü</h5><span class="small text-uppercase text-muted">Class-11 Student</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <!-- End-->


      </div>
    </div>
  </div>



  <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vTFo_CWwv1be0AAHSx4ppgbvnJkfxMkoq7qfKpPpH6RP6p0aivFFp7nbvkGpa4ftB6JzNINeUz_j_I0/embed?start=false&loop=true&delayms=3000" frameborder="0" width="100%" height="569" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>


@include('components.footer')
</body>

