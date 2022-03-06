<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
<div class="container my-4">
    <div class="row align-items-stretch g-4 pt-4" style="padding-left: 12px; padding-right: 12px;">
      <div>
        <div id='map' class="harita" style='width:100%; height: 600px;'></div>
      </div>
    </div>
</div>

<script>
mapboxgl.accessToken = "{{env('MAP_BOX_API_KEY')}}";
const map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
center: [28.744027166536,41.00650088742137],
zoom: 9
});
</script>

@foreach ($posts as $post)
<script>
    const {{"marker_".$post->id}} = new mapboxgl.Marker({ color: 'purple', rotation: 0 })
    .setLngLat([{{$post->Location_Y}},{{$post->Location_X}}])
    .addTo(map);
</script>

@endforeach
