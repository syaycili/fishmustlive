<div class="container">
    <div class="govde">
        <h3 class="baslik">Locate New Plastic Polution</h3>
        <form action="{{ url('newpost') }}" enctype="multipart/form-data" method="POST">
            {{ csrf_field() }}

            <div class="form-outline mb-4">
                <input type="text" id="PostBaslik" class="form-control" name="PostBaslik" required/>
                <label class="form-label" for="PostBaslik">Title</label>
            </div>

            <div class="form-outline mb-4">
                <textarea id="PostAciklama" class="form-control" name="PostAciklama" required></textarea>
                <label class="form-label" for="PostAciklama">Description</label>
            </div>

            <div class="form-outline mb-4">
                <input type="text" id="Location_X" class="form-control" name="Location_X" required/>
                <label class="form-label" for="Location_X">Coordinate X</label>
            </div>

            <div class="form-outline mb-4">
                <input type="text" id="Location_Y" class="form-control" name="Location_Y" required/>
                <label class="form-label" for="Location_Y">Coordinate Y</label>
            </div>

                <textarea hidden id="PostAdres" class="form-control" name="PostAdres" required>Null</textarea>

            <div class="form-outline mb-4">
                <input class="form-control" type="file" name="image" placeholder="Choose image" id="image" required>
            </div>

            <button  class="btn btn-primary btn-grad"type="submit">Share</button>
          </form>
    </div>
</div>

