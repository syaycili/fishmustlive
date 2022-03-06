@include('components.head')
<body>
@include('components.navbar')
@php
$img_path = $post->img_path;
$img_path = substr($img_path, 7);
@endphp



<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />



<style>
#sosyalmedyaikonlari{
    font-size: 25px;
}
.card-img-top{
    width: 100%;
    height: 300px;
    object-fit: cover;
}

.card{

}
</style>
<div class="container mt-2">

    <div class="row align-items-start">
        <div class="col">
            <button style="width: 100px;" class="btn btn-primary" onclick="history.back()">Turn Back</button>
        </div>
    </div>

</div>

<div class="container mt-2">

    <div class="card mb-3">
        <img src="{{ asset('/storage/'.$img_path) }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$post->PostBaslik}}</h1>
          <p class="card-text">{{$post->PostAciklama}}</p>
          <p class="card-text"><b>Address:</b> {{$post->PostAdres}}</p>


            <div class="row mb-3 row-cols-1">

              <div class="col mb-3">

                <div id='{{"map_".$post->id}}' class="harita" style='height:400px;'></div>
                <script>
                mapboxgl.accessToken = "{{env('MAP_BOX_API_KEY')}}";
                const {{"map_".$post->id}} = new mapboxgl.Map({
                container: '{{"map_".$post->id}}',
                style: 'mapbox://styles/mapbox/satellite-v9',
                center: [{{$post->Location_Y}},{{$post->Location_X}}],
                zoom: 11
                });

                // Add zoom and rotation controls to the map.
                {{"map_".$post->id}}.addControl(new mapboxgl.FullscreenControl());
                {{"map_".$post->id}}.addControl(new mapboxgl.NavigationControl());

                const {{"marker_".$post->id}} = new mapboxgl.Marker({ color: 'purple', rotation: 0 })
                .setLngLat([{{$post->Location_Y}},{{$post->Location_X}}])
                .addTo( {{"map_".$post->id}} );
                </script>

              </div>

              <div class="col">
                <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success">Share</button>
                <a href="{{route('contactus')}}" class="btn btn-danger float-end">Report</a>
              </div>

            </div>





          <p class="card-text"><small class="text-muted">{{$post->created_at}}</small></p>
        </div>
      </div>

</div>






















<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">İlanı Paylaş</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">





<div class="mb-3" style="border: 1px solid black; text-align: left; border-radius: 99px; padding-left: 10px;">
    {{Request::url()}}
</div>


<div class="text-center">
        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://fishmust.live/posts/{{$post->id}}" type="button" class="btn btn-primary btn-lg btn-floating">
            <i id="sosyalmedyaikonlari" class="fab fa-facebook"></i>
          </a>

        <a target="_blank" href="https://twitter.com/intent/tweet?url=https://fishmust.live/posts/{{$post->id}}&text=MeetUptoTeamUp%20ile%20kurdu%C4%9Fum%20tak%C4%B1m%C4%B1ma%20kat%C4%B1l%C4%B1n!" type="button" class="btn btn-primary btn-lg btn-floating">
            <i id="sosyalmedyaikonlari" class="fab fa-twitter"></i>
          </a>

        <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=https://fishmust.live/posts/{{$post->id}}" type="button" class="btn btn-primary btn-lg btn-floating">
            <i id="sosyalmedyaikonlari" class="fab fa-linkedin"></i>
          </a>

          <a target="_blank" href="mailto:info@example.com?&subject=&cc=&bcc=&body=https://fishmust.live/posts/{{$post->id}}%0AMeetUptoTeamUp%20ile%20kurdu%C4%9Fum%20tak%C4%B1m%C4%B1ma%20kat%C4%B1l%C4%B1n!" type="button" class="btn btn-primary btn-lg btn-floating">
            <i id="sosyalmedyaikonlari" class="far fa-envelope"></i>
          </a>
        </div>







      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
          Kapat
        </button>

      </div>
    </div>
  </div>
</div>







<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@include('components.footer')
</body>
