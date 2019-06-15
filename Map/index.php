
<!DOCTYPE html>
<html>
  <head>
  <title>Smart Parking</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/googlemap.js"></script>
  
    
  <style type="text/css">
  /* Ukuran Maps yang ditampilkan */
    .container {
      height: 555px;
      width: 100%;
    }
    #map {
      width: 100%;
      height: 100%;
    }
    #data, #allData {
      display: none;
    }
  </style>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Smart Parking</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div>
                <nav class="navbar navbar-light bg-light">
          <a class="navbar-brand">SMART PARKING - ADMINISTRATOR</a>
          <div>
        <form method="post" action="login.php" class="pull-right position">
                  <div class="input-append">
                      <button class="btn btn-success search-button" type="submit"><i class="fa fa-search"></i>LOGIN</button>
                  </div>
    </form>
  </div>
                </nav>
            </div>
    <div id="map"></div>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script>

    var url_keluar = "http://localhost/Map/setTersedia.php?nama_parkiran=";
    var url_masuk = "http://localhost/Map/setTidakTersedia.php?nama_parkiran="

    function initMap() {
      $('document').ready(function() {

    $('#map').height($(window).height() - $('#map').position().top - 20);

    var mapElem = document.getElementById('map');

    var center = {lat: -6.363, lng: 106.824}

    var map = new google.maps.Map(mapElem, {
        center: center,
        zoom: 17
    });

    var infoWindow = new google.maps.InfoWindow();
    var cameras;
    var markers = [];

    $.getJSON('http://localhost/Map/dataJSON.php')
        .done(function(data) {
            cameras = data;
            cameras.forEach(function(cameras) {
                var marker = new google.maps.Marker({
                    position: {
                        lat: parseFloat(cameras.latitude),
                        lng: parseFloat(cameras.longitude)
                    }
                });
                var status;
                if(cameras.available==0){
                  status = 'Tidak Tersedia';
                }
                else{
                  status= 'Tersedia';
                }

                let url_keluar2 = url_keluar + cameras.nama_parkiran;
                let url_masuk2 = url_masuk + cameras.nama_parkiran;
                
                /*  Window informasi dari parkiran */
                google.maps.event.addListener(marker, 'click', function() {
                  console.log(url_masuk2);
                  infoWindow.open(map, marker);
                  infoWindow.setContent(cameras.nama_parkiran + '<br>' + status);
                });

                markers.push(marker);

            });
            // here, inside the .done function
            var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
        })
        .fail(function(err) {
            console.log(err);
            alert('Sorry, unfortunately something went wrong!');
        });

    $(window).resize(function() {
        $('#map').height($(window).height() - $('#map').position().top - 20);
    });

    });
    }

    /* Fungsi untuk mengubah ketersediaan parkir pada database */
    function setTersedia(url) {
      window.location = url;
    }

    function setTidakTersedia(url) {
      window.location = url;
    }

    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFagTsfeYd8Qoj_fXc_qg7gjn78UaD9JY&callback=initMap">
    </script>
  </body>
</html>
