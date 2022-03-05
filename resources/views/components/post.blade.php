    <div class="post">
        <div class="card post_card">
            <div class="row g-0">
              <div class="col-md-4">
                <div id='{{"map_".$id}}' class="harita" style='height:300px;'></div>
                <script>
                const {{"map_".$id}} = new mapboxgl.Map({
                container: '{{"map_".$id}}',
                style: 'mapbox://styles/mapbox/satellite-v9',
                center: [{{$y}},{{$x}}],
                zoom: 11
                });

                // Add zoom and rotation controls to the map.
                {{"map_".$id}}.addControl(new mapboxgl.FullscreenControl());
                {{"map_".$id}}.addControl(new mapboxgl.NavigationControl());

                const {{"marker_".$id}} = new mapboxgl.Marker({ color: 'purple', rotation: 0 })
                .setLngLat([{{$y}},{{$x}}])
                .addTo( {{"map_".$id}} );
                </script>

              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$title}}</h5>
                  <p class="card-text">
                  <p>{{$des}}</p>
                  <p><img src="{{ asset('/storage/'.$img_path) }}" style="height: 150px;"></a></p>
                </div>
              </div>
              <div class="card-footer text-muted">
                {{$user}} - {{$date}}
              </div>
            </div>
          </div>
    </div>
