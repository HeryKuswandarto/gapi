 @extends('master.main')


@section('konten')

	<div id="mapid"></div>
	<script>
        var locations=<?php echo json_encode($lokasi, JSON_NUMERIC_CHECK); ?>;
        // var gunungapis=<?php echo json_encode($daftar, JSON_NUMERIC_CHECK); ?>;


		var map = L.map('mapid').setView([-6.8, 107.8], 8);
		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 16,
		}).addTo(map);
		// var geojsonLayer = new L.GeoJSON.AJAX("geojson.json");
		// geojsonLayer.addTo(map);


    //    Tampilkan Marker Gunung
        // var array = [];
        // for (var i=0; i<locations.length; i++){
        //     marker = new l.marker([locations[i][1], locations[i][2]])
        //     .bindPopup(locations[i][0]);
        //     array.push(marker);
        // }
        // var layerGroup=L.featureGroup(array).addTo(mapid);
        //    mapid.fitBounds(layerGroup.getBounds(), {padding: [50,50]});

        //    Tampilkan Marker Gunung
         var array = [];
         for (var i=0; i<locations.length; i++){
            // L.marker([locations[i][2],locations[i][3]]).bindPopup(locations[i][1]).addTo(map);
            var text="<iframe src=\"gapi/floatpopup?id="+(locations[i][0]).toString().trim()+ "\" width=\"300\" height=\"300\"></iframe>";
            L.marker([locations[i][2],locations[i][3]]).bindPopup(text).addTo(map);
        }

        // L.marker([-6.8, 107.8]).bindPopup('<iframe src="https://ngantor.esdm.go.id" width="300" height="300"></iframe>').addTo(map);
        // L.marker([-6.8, 107.8]).bindPopup('<iframe src="gapi/floatpopup?id=1" width="300" height="300"></iframe>').addTo(map);
	</script>

@endsection
