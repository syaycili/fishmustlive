@include('components.head')
<body>
@include('components.navbar')

<link href="https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js"></script>
<script>
mapboxgl.accessToken = "{{env('MAP_BOX_API_KEY')}}";
</script>


<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.css" type="text/css">



<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <form action="{{ url('newpost') }}" enctype="multipart/form-data" method="POST">
            {{ csrf_field() }}
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">{{ __('content.ps1') }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <style>
                .govde{
                    max-width: 800px;
                    margin: auto;
                }
                .baslik{
                    margin: 30px 0px;
                }
                .form-select:focus{
                    outline: none !important;
                    box-shadow: none;
                }
            </style>
            @include('components.postshare')
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit">{{ __('content.db1') }}</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">{{ __('content.db2') }}</button>
        </div>
        </form>
      </div>
    </div>
  </div>



    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <div class="main">

        <div class="mb-4 mt-1">
            <div class="row">
              <div class="col-8">
                <h1 class="mb-2">{{ __('content.db3') }}</h1>
                <p class="mb-3">{{ __('content.db4') }}</p>
              </div>
              <div class="col-4 addnew_button">
                <span class="btn-grad" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                {{ __('content.dbb1') }}
                </span>
              </div>
            </div>
          </div>

@foreach ($posts as $post)

@php
$img_path = $post->img_path;
$img_path = substr($img_path, 7);
@endphp


@include('components.post',[
    'id'        =>      $post->id,
    'user'      =>      $post->Kullanici,
    'date'      =>      $post->created_at,
    'title'     =>      $post->PostBaslik,
    'des'       =>      $post->PostAciklama,
    'addres'    =>      $post->PostAdres,
    'x'         =>      $post->Location_X,
    'y'         =>      $post->Location_Y,
    'img_path'  =>      $img_path,
])

@endforeach

<div class="d-flex justify-content-center">
    {{$posts->links("pagination::bootstrap-4")}}
</div>

    </div>
@include('components.footer')
</body>
