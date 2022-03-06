    <style>
#costum_scrollbar::-webkit-scrollbar-track
{
    display: none;
}
#costum_scrollbar::-webkit-scrollbar
{
    display: none;
}

#costum_scrollbar::-webkit-scrollbar-thumb
{
    display: none;
}
    </style>
    <div class="post">
        <div class="card post_card">
            <div class="row g-0">




              <div class="col-md-4">
                <div id='{{"map_".$id}}' class="harita" style='height:300px;'></div>
                <script>
                const {{"map_".$id}} = new mapboxgl.Map({
                interactive: false,
                container: '{{"map_".$id}}',
                style: 'mapbox://styles/mapbox/satellite-v9',
                center: [{{$y}},{{$x}}],
                zoom: 12,

                });

                // Add zoom and rotation controls to the map.

                const {{"marker_".$id}} = new mapboxgl.Marker({ color: 'red', rotation: 0 })
                .setLngLat([{{$y}},{{$x}}])
                .addTo( {{"map_".$id}} );
                </script>
              </div>



              <div class="col-md" style='max-height:300px;'>
                <div class="row ">
                    <div class="col">
                        <p><img src="{{ asset('/storage/'.$img_path) }}" style="width: 100%; height: 300px; object-fit: cover;"></p>
                    </div>
                </div>
              </div>



              <div class="col-md">
                <div id="costum_scrollbar" class="card-body overflow-auto" style='max-height:300px;'>
                  <h5 class="card-title">{{$title}}</h5>
                  <p class="card-text" style="position: relative;">
                  <p>{{$des}}</p>
                  <p><b>Address:</b> {{$addres}}</p>
                  <br>
                  <br>
                  <div style="position: absolute; right:10px;  float: right; bottom:40px;">
                        <a href="{{ route('postdetay', ['id' => $id]) }}" style="margin: 15px 20px 20px 15px;" class="btn btn-primary shadow ">Details</a>
                  </div>
                </div>
              </div>





              <div class="card-footer text-muted">
                {{$user}} - {{$date}}
              </div>
            </div>
          </div>
    </div>
