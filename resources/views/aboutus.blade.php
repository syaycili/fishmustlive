@include('components.head')
<body>
@include('components.navbar')

<div class="container">

    <style>
        .img-fluid{
            border-radius: 99px;
        }
    </style>
    <section class="fdb-block team-8 mt-4">
        <div class="container">
          <div class="row text-center justify-content-center">
            <div class="col-8">
              <h1>This is Us</h1><br>
            </div>
          </div>

          <div class="row-100"></div>

          <div class="row justify-content-center text-left">
            <div class="col-sm-6">
              <div class="row align-items-center">
                <div class="col-4">
                  <img alt="image" class="img-fluid" src="{{ asset('pictures/team/arel.jpg') }}">
                </div>

                <div class="col-8">
                  <h3><strong>Arel Baha Encin</strong></h3>

                  <p>Türk Eğitim Vakfı İnanç Türkeş Özel Lisesi 11. Sınıf Öğrencisi</p>
                </div>
              </div>
            </div>

        <br>

            <div class="col-sm-6">
              <div class="row align-items-center">
                <div class="col-4">
                  <img alt="image" class="img-fluid" src="{{ asset('pictures/team/sarp.jpg') }}">
                </div>

                <div class="col-8">
                  <h3><strong>Sarp Yaycılı</strong></h3>

                  <p>Türk Eğitim Vakfı İnanç Türkeş Özel Lisesi 11. Sınıf Öğrencisi</p>
                </div>
              </div>
            </div>
          </div>

        <br>

          <div class="row-70"></div>

          <div class="row justify-content-center text-left">
            <div class="col-sm-6">
              <div class="row align-items-center">
                <div class="col-4">
                  <img alt="image" class="img-fluid" src="{{ asset('pictures/team/süleyman.jpg') }}">
                </div>

                <div class="col-8">
                  <h3><strong>Süleyman Nur Tütüncü</strong></h3>

                  <p>Türk Eğitim Vakfı İnanç Türkeş Özel Lisesi 11. Sınıf Öğrencisi</p>
                </div>
              </div>
            </div>

            <div class="col-sm-6">

          </div>
        </div>
        </div>
      </section>

</div>

@include('components.footer')
</body>
