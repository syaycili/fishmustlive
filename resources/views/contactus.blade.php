@include('components.head')
<body>
@include('components.navbar')
<style>
    .col-md-6 {
        margin-bottom: 10px;
    }
    .col-md-12 {
        margin-bottom: 10px;
    }
    .container{
        padding: 0% 10%;
    }
    .form-group{
        margin-bottom: 15px;
    }
</style>



<div class="container mt-4">


    <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h2 class="h1-responsive font-weight-bold text-center my-2">Contact us</h2>
              </div>
             <div class="card-body mx-3">
                @if(Session::has('success'))
                   <div class="alert alert-success">
                     {{ Session::get('success') }}
                    </div>
                @endif

               <form method="post" action="{{ route('contact-us') }}">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label> Name </label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <label> Email </label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label> Phone Number </label>
                        <input type="text" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Phone Number" name="phone_number">
                        @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                   <div class="col-md-12">
                      <div class="form-group">
                        <label> Subject </label>
                        <input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" name="subject" required>
                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                   <div class="col-md-12">
                     <div class="form-group">
                        <label> Message </label>
                        <textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="Message" name="message" required></textarea>
                        @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="row">
                   <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Send</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
     </div>

</div>



@include('components.footer')
</body>
