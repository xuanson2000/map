






<!DOCTYPE html>
<html>
   <head>
      <title>Leaflet Multi Polygons</title>
      <link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css"/>
      <script src = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
   </head>
   
   <body>
      <div id = "map" style = "width: 900px; height: 580px"></div>
  

      <script>
         // Creating map options
         var mapOptions = {
            center: [21.851790, 106.746938],
            zoom: 15
         }
         // Creating a map object
         var map = new L.map('map', mapOptions);
         
         // Creating a Layer object
         var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
         
         // Adding layer to the map
         map.addLayer(layer);
         
         // Creating latlng object
         var latlang1 = <?php echo json_encode($array0); ?>;

         // var latlang1 = [
         //    [[17.385044, 78.486671], [16.506174, 80.648015], [17.686816, 83.218482]],
         //    [[13.082680, 80.270718], [12.971599, 77.594563],[15.828126, 78.037279]]
         // ];


         for (var i = 0; i < latlang1.length; i++) {
         

          var multiPolygonOptions = {color:'red', weight:2};
          var title=latlang1[i][i+1];
      
         // Creating multi polygons
         var latlang=[latlang1[i][i]];

         var multipolygon = L.multiPolygon(latlang , multiPolygonOptions);
         multipolygon.setStyle({color:'red',opacity:.5});

          multipolygon.bindPopup("Thông tin: " + title);
         
         // Adding multi polygon to map
         multipolygon.addTo(map);

       }



         // Creating multi polygon options
       
      </script>
   </body>
   
</html>





