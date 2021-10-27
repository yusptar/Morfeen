<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Morfeen Thirteen</title>

	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaaT26xWeRGbAoPHxaeZQUxk_f7WQ1anw&callback=initMap"
  	type="text/javascript"></script>
  
    <!-- Menyisipkan library Google Maps -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-8.1425624,112.5211482),
            zoom:15,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

	// membuat Marker
  	var marker=new google.maps.Marker({
     	position: new google.maps.LatLng(-8.1425624,112.5211482),
     	map: peta
  	});

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  
</head>
<body>

    <!-- Elemen yang akan menjadi kontainer peta -->
    <div id="googleMap" style="width:100%;height:380px;"></div>
  
</body>
</html>