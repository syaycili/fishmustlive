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
                <h2 class="h1-responsive font-weight-bold text-center my-2">{{ __('content.ct1') }}</h2>
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
                        <label> {{ __('content.ct2') }}* </label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('content.ct2') }}" name="name" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <label> {{ __('content.ct3') }}* </label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('content.ct3') }}" name="email" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label> {{ __('content.ct4') }} </label>
                        <input type="text" class="form-control @error('phone_number') is-invalid @enderror" placeholder="{{ __('content.ct4') }}" name="phone_number">
                        @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                   <div class="col-md-12">
                      <div class="form-group">
                        <label> {{ __('content.ct5') }}* </label>
                        <input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="{{ __('content.ct5') }}" name="subject" required>
                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                   <div class="col-md-12">
                     <div class="form-group">
                        <label> {{ __('content.ct6') }}* </label>
                        <textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="{{ __('content.ct6') }}" name="message" required></textarea>
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
                      <button type="submit" class="btn btn-primary btn-round">{{ __('content.ct7') }}</button>
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
