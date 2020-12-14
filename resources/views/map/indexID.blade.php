
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<title></title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.0/dist/leaflet.css" />
<link rel="stylesheet" href="src/leaflet-search.css" />
<link rel="stylesheet" href="examples/style.css" />
</head>

<body>


<h4>Simple Example: <em>tìm kiềm tọa độ thoe tiêu đề</em></h4>
<div id="map" style="width: 100%; height: 600px;"></div>



<script src="https://unpkg.com/leaflet@1.3.0/dist/leaflet.js"></script>
<script src="src/leaflet-search.js"></script>
<script>



  //sample data values for populate map

   var data = <?php echo json_encode($array); ?>;

  
  var map = new L.Map('map', {zoom: 13, center: new L.latLng([21.853254, 106.744121]) });  //set center from first location

  map.addLayer(new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png')); //base layer

  var markersLayer = new L.LayerGroup();  //layer contain searched elements
  
  map.addLayer(markersLayer);

  var controlSearch = new L.Control.Search({
    position:'topright',    
    layer: markersLayer,
    initial: false,
    zoom: 20,
    marker: false
  });

  map.addControl( controlSearch );

  ////////////populate map with markers from sample data

      for (var i = 0; i < data.length; i++) {

        var title =data[i][2],
        loc =[data[i][0],data[i][1]],

    // var title = data[i].title, //value searched
    //  loc = data[i].loc,    //position found
      marker = new L.Marker(new L.latLng(loc), {title: title} );//se property searched
      marker.bindPopup('title: '+ title );
      markersLayer.addLayer(marker);

        }





</script>

<div id="copy"><a href="http://labs.easyblog.it/">Labs</a> &bull; <a rel="author" href="http://labs.easyblog.it/stefano-cudini/">Stefano Cudini</a></div>

<script type="text/javascript" src="/labs-common.js"></script>

</body>
</html>



