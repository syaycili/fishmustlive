<style>
#map {
height: 300px;
width: 100%;
}
.img_preview{
    height: 300px;
    width: 100%;
    object-fit: cover;
    background-color: #74EBD5;
    background-image: linear-gradient(45deg, #74EBD5 0%, #9FACE6 100%);
    border-radius: 15px;
    cursor: pointer;
}
</style>
<script>
    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }
    function clearImage() {
        document.getElementById('formFile').value = null;
        frame.src = "";
    }
</script>

<div class="container">
    <div class="govde">
        <h3 class="baslik">Locate New Plastic Polution</h3>
            <div class="form-outline mb-4">
                <label class="form-label" for="PostBaslik">Title</label>
                <input type="text" id="PostBaslik" class="form-control" name="PostBaslik" required/>
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="PostAciklama">Description</label>
                <textarea id="PostAciklama" class="form-control" name="PostAciklama" required></textarea>
            </div>

                <input type="text" id="Location_X" class="form-control" name="Location_X" required hidden/>
                <input type="text" id="Location_Y" class="form-control" name="Location_Y" required hidden/>
                <textarea id="PostAdres" class="form-control" name="PostAdres" required hidden></textarea>

            <div class="form-outline mb-5">
                <div class="mb-4">
                    <label for="Image" class="form-label">Image Upload</label>
                    <input class="form-control" type="file" name="image" id="formFile" placeholder="Choose image" onchange="preview()" required>
                </div>
                <img id="frame" onclick="document.getElementById('formFile').click();" src="{{ asset('pictures/placeholder.svg') }}" class="img_preview" />
            </div>


            <label for="map" class="form-label">Select Location</label>
            <div class="form-outline mb-4">
                <div id="map"></div>
            </div>
    </div>
</div>

<script>
mapboxgl.accessToken = "{{env('MAP_BOX_API_KEY')}}";
const map = new mapboxgl.Map({
container: 'map', // Container ID
style: 'mapbox://styles/mapbox/streets-v11', // Map style to use
center: [28.979530, 41.015137], // Starting position [lng, lat]
zoom: 5 // Starting zoom level
});


const geocoder = new MapboxGeocoder({
// Initialize the geocoder
accessToken: mapboxgl.accessToken, // Set the access token
mapboxgl: mapboxgl, // Set the mapbox-gl instance
marker: false, // Do not use the default marker style
placeholder: 'Location...', // Placeholder text for the search bar
zoom: 11,
});

// Add the geocoder to the map
map.addControl(geocoder);

// After the map style has loaded on the page,
// add a source layer and default styling for a single point
map.on('load', () => {
map.addSource('single-point', {
'type': 'geojson',
'data': {
'type': 'FeatureCollection',
'features': []
}
});

map.addLayer({
'id': 'point',
'source': 'single-point',
'type': 'circle',
'paint': {
'circle-radius': 10,
'circle-color': '#448ee4'
}
});

// Listen for the `result` event from the Geocoder // `result` event is triggered when a user makes a selection
//  Add a marker at the result's coordinates
geocoder.on('result', (event) => {
map.getSource('single-point').setData(event.result.geometry);
document.getElementById("Location_Y").value = event.result.geometry.coordinates[0];
document.getElementById("Location_X").value = event.result.geometry.coordinates[1];
document.getElementById("PostAdres").value = event.result.place_name;
});
});
</script>
