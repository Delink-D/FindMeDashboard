<?php
    // include header
    include 'header-nav.php';
?>

    <div id="map">
    </div>
    <script>
      function initMap() {
          // reference database
          const dbRef = firebase.database().ref().child("alerts").child("wEJOYY0WUtgiuLYN6gSU6Sm58Tv2");

          // sync data
          dbRef.on('value', snap => {


            var alert1 = {lat: parseFloat(snap.val().latitude), lng: parseFloat(snap.val().longitude)};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 16,
              center: alert1
            });
            var marker = new google.maps.Marker({
              position: alert1,
              map: map

          });

        });

      }
    </script>

<?php
    // include footer
    include 'footer.php';
?>
